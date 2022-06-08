<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DiemDo;
use App\Models\Tuyen;
use App\Models\TuyenDiemDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;

class RoadsStopPointController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_tuyen_diemdo = DB::table('tuyen_diemdo')
            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
            ->join('tuyen', 'tuyen_diemdo.ma_tuyen', '=', 'tuyen.id')
            ->get();
        return view('backend.roads_stop_point.index', compact('list_tuyen_diemdo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $diemDo = DiemDo::get();
        return view('backend.roads_stop_point.create', compact('diemDo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            \DB::beginTransaction();
            $data = [
                'ma_tuyen' => $request->ten_tuyen,
                'ma_dd' => $request->ten_dd,
                'chieu_xe' => $request->chieu_xe,
                'loai_dd' => $request->loai_dd,
                'thoi_gian' => $request->thoi_gian
            ];
            TuyenDiemDo::create($data);
            \DB::commit();

            return redirect()->route('roads_stop_point.list', ['id' => $request->ten_tuyen, 'chieu' => $request->chieu_xe]);
        } catch (Exception $e) {
            \Log::error($e->getMessage());

            return redirect()->back();
        }
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


    }

    public function editTuyenDiemDo($ma_tuyen, $ma_dd, $chieu)
    {
        $tuyen = Tuyen::find($ma_tuyen);
        $diemDo = DiemDo::find($ma_dd);
        $listDiemDo = DiemDo::get();
        $tuyenDiemDo = DB::table('tuyen_diemdo')
            ->where('ma_tuyen', $ma_tuyen)
            ->where('ma_dd', $ma_dd)
            ->where('chieu_xe', $chieu)
            ->first();
        return view('backend.roads_stop_point.edit', compact('tuyenDiemDo', 'tuyen', 'diemDo', 'listDiemDo'));

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
            $tuyenDiemDo = TuyenDiemDo::find($id);
            if(!isset($tuyenDiemDo)){
                throw new Exception("Not found!");
            }

            $tuyenDiemDo->ma_tuyen = $request->ten_tuyen;
            $tuyenDiemDo->ma_dd = $request->ten_dd;
            $tuyenDiemDo->chieu_xe = $request->chieu_xe;
            $tuyenDiemDo->loai_dd = $request->loai_dd;
            $tuyenDiemDo->thoi_gian = $request->thoi_gian;
            $tuyenDiemDo->save();

            \DB::commit();
            return redirect()->route('roads_stop_point.list', ['id' => $request->ten_tuyen, 'chieu' => $request->chieu_xe]);
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
    public function destroy(Request $request, $id)
    {
    }

    public function delete($ma_tuyen, $ma_dd)
    {
        $tuyendiemdo = DB::table('tuyen_diemdo')
            ->where('ma_tuyen', '=', $ma_tuyen)
            ->where('ma_dd', '=', $ma_dd)
            ->delete();

        return redirect()->back();
    }

    public function list_all($id, $chieu)
    {
        $list_tuyen_diemdo = DB::table('tuyen_diemdo')
            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
            ->join('tuyen', 'tuyen_diemdo.ma_tuyen', '=', 'tuyen.id')
            ->where('tuyen.id', $id)
            ->where('chieu_xe', $chieu)
            ->orderBy('tuyen_diemdo.id')
            ->get();
        return view('backend.roads_stop_point.index', compact('list_tuyen_diemdo'));
    }
}
