<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tuyen;
use App\Http\Requests\RoadsRequest;
//use Illuminate\Support\Facades\File;
use Mockery\Exception;
use File;
use Image;

class RoadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listTuyen = Tuyen::get();

        return view('backend.roads.index', compact('listTuyen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.roads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoadsRequest $request)
    {
        try {
            \DB::beginTransaction();
            $data = [
                'ten_tuyen' => $request->ten_tuyen,
                'diem_dau' => $request->diem_dau,
                'diem_cuoi' => $request->diem_cuoi,
                'diem_dn' => $request->diem_dn,
            ];

            Tuyen::create($data);
            \DB::commit();

            return redirect()->route('roads.index');
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
        $tuyen = Tuyen::find($id);
        return view('backend.roads.edit', compact('tuyen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoadsRequest $request, $id)
    {
        try {
            \DB::beginTransaction();
            $tuyen = Tuyen::find($id);
            if(!isset($tuyen)){
                throw new Exception("Not found!");
            }
            $tuyen->ten_tuyen = $request->ten_tuyen;
            $tuyen->diem_dau = $request->diem_dau;
            $tuyen->diem_cuoi = $request->diem_cuoi;
            $tuyen->diem_dn = $request->diem_dn;
            $tuyen->save();

            \DB::commit();
            return redirect()->route('roads.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
            return redirect()->back();
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
        $tuyen = Tuyen::find($id);

        if (empty($tuyen)) {
            return redirect()->back();
        }
        $tuyen->delete();
        return redirect()->back();
    }
}
