<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TripsExport;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\VeChuyen;
use App\Models\Xe;
use App\Models\ChuyenNgay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Exception;
use Maatwebsite\Excel\Facades\Excel;

class TripsDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listChuyenNgay = DB::table('chuyen_ngay')
            ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'xe.ten_xe', 'loai_xe.ten_lx', 'loai_xe.so_ghe')
            ->leftJoin('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->leftJoin('xe', 'chuyen_ngay.ma_xe', '=', 'xe.id')
            ->leftJoin('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->get();

        return view('backend.trips_day.index', compact('listChuyenNgay'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listXe = DB::table('xe')
            ->select('xe.*', 'loai_xe.ten_lx')
            ->join('loai_xe', 'xe.ma_lx', '=', 'loai_xe.id')->get();
        $drivers = User::where('type', 'laixe')->get();
        return view('backend.trips_day.create', compact('listXe', 'drivers'));
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
                'ma_chuyen' => $request->ten_chuyen,
                'ma_xe' => $request->ten_xe,
                'ma_tx' => $request->ten_tx,
                'ngay' => $request->setTodaysDate,
            ];

            ChuyenNgay::create($data);

            \DB::commit();
            return redirect()->route('trips_day.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
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
        $chuyenNgay = DB::table('chuyen_ngay')
            ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'xe.ten_xe')
            ->leftJoin('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->leftJoin('xe', 'chuyen_ngay.ma_xe', '=', 'xe.id')
            ->where('chuyen_ngay.id', '=', $id)
            ->first();
        $listXe = Xe::all();
        $drivers = User::where('type', 'laixe')->get();
        $driver = ChuyenNgay::join('users', 'chuyen_ngay.ma_tx', '=', 'users.id')
            ->where('type', 'laixe')->where('chuyen_ngay.id', $id)->first();
        return view('backend.trips_day.edit', compact('chuyenNgay', 'listXe', 'driver', 'drivers'));

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

            $chuyenNgay = ChuyenNgay::find($id);

            $chuyenNgay->ma_chuyen = $request->ten_chuyen;
            $chuyenNgay->ma_xe = $request->ten_xe;
            $chuyenNgay->ngay = $request->setTodaysDate;
            $chuyenNgay->save();

            \DB::commit();
            return redirect()->route('trips_day.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();

            return redirect()->route('dashboard');
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
        $chuyenNgay = ChuyenNgay::find($id);
        $veChuyen = DB::table('ve_chuyen')
            ->where('ma_cn', $id)
            ->delete();
        if (empty($chuyenNgay)) {
            return redirect()->back();
        }
        $chuyenNgay->delete();

        return redirect()->back();
    }

    public function searchDay()
    {
        return view('backend.trips.trips_report');
    }

    public function export(Request $request)
    {
        $start = $request->start_day;
        $end = $request->end_day;

        $file = Excel::download(new TripsExport($start, $end), 'trips_report.xlsx');
        return $file;
    }

}
