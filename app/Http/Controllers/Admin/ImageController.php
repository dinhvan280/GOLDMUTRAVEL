<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HinhAnh;
use App\Models\Xe;
use Illuminate\Http\Request;
use Mockery\Exception;
use File;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $xe = Xe::find($id);
        return view('backend.car_image.create', compact('xe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $xe = Xe::find($request->ma_xe);

        foreach ($request->file('images') as $imagefile) {
            $image = new HinhAnh();
            $path = $imagefile->store('/images/uploads/cars', ['disk' =>   'my_files']);
            $image->anh = $path;
            $image->xe_id = $xe->id;
            $image->save();
        }
        return redirect()->route('list_image.car', ['id' => $xe->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $image = HinhAnh::find($id);
        return view('backend.car_image.edit', compact('image'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            \DB::beginTransaction();

            $hinh = HinhAnh::find($id);
            $path = "images/uploads/cars";
            $image = $request->image;

            if ($image && $hinh->anh != "") {
                File::delete($hinh->image);
                $extension = $image->extension();
                $file_name = "Xe_" . time() . '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
                $hinh->anh = $file_path;
            }

            $hinh->xe_id = $request->ma_xe;
            $hinh->save();

            \DB::commit();
            return redirect()->route('list_image.car', ['id' => $request->ma_xe]);
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = HinhAnh::find($id);

        if (empty($image)) {
            return redirect()->back();
        }
        $image->delete();
        return redirect()->back();
    }

    public function listImage($id)
    {
        $xe = Xe::find($id);
        $images = HinhAnh::where('xe_id', $id)->get();
        return view('backend.car_image.list_image', compact('images', 'xe'));
    }

}
