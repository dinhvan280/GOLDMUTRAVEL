<?php

namespace App\Http\Controllers\Admin;

use App\Models\LoaiXe;
use App\Models\TaiKhoan;
use App\Models\Xe;
use App\Models\Tuyen;
use App\Models\XeAnh;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Support\Facades\DB;
use Image;
use Mockery\Exception;

class CarsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $listXe = DB::table('loai_xe')->join('xe', 'loai_xe.id', '=', 'xe.ma_lx')->get();
        return view('backend.cars.index', compact('listXe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $listLoaiXe = LoaiXe::get();
        return view('backend.cars.create',  compact('listLoaiXe'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();

            $path = "images/uploads/cars";
            $image = $request->image;
            $file_path = "";
            if ($request->image) {
                $extension = $image->extension();
                $file_name = "Kim_Long_Travel_cars_" . time() .  '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
            }

            $data = [
                'ten_xe' => $request->ten_xe,
                'bien_so' => $request->bien_so,
                'anh' => $file_path,
                'gioi_thieu' => $request->gioi_thieu,
                'ma_lx' => $request->ma_lx,
            ];

            Xe::create($data);
            \DB::commit();

            return redirect()->route('cars.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());

            return redirect()->back();
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)

    {

        //

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id)

    {

        $xe = Xe::find($id);
        $loaiXe = LoaiXe::where('id', '=', $xe->ma_lx)->first();
        $listLoaiXe = LoaiXe::get();
        return view('backend.cars.edit', compact('xe', 'listLoaiXe', 'loaiXe'));

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)

    {
        $path = "images/uploads/cars";
        $image = $request->image;
        try {
            \DB::beginTransaction();

            $xe = Xe::find($id);

            if ($image) {
                $extension = $image->extension();
                $file_name = "Kim_Long_Travel_Cars_" . time() . '.' . $extension;
                $file_path = $path . '/' . $file_name;
                $image->move($path . '/', $file_name);
                $xe->anh = $file_path;
            }

            $xe->ten_xe = $request->ten_xe;
            $xe->bien_so = $request->bien_so;
            $xe->gioi_thieu = $request->gioi_thieu;
            $xe->ma_lx = $request->ma_lx;
            $xe->save();

            \DB::commit();
            return redirect()->route('cars.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();

            return redirect()->route('dashboard');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $xe = Xe::find($id);
        if (empty($xe)) {
            return redirect()->back();
        }
        $xe->delete();
        return redirect()->back();
    }


}

