<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TripsRequest;
use App\Models\LoaiXe;
use App\Models\Tuyen;
use App\Models\Xe;
use App\Models\Chuyen;
use File;
use Illuminate\Support\Facades\DB;
use Image;
use Mockery\Exception;

class TripsController extends Controller
{
    public function index()
    {
        return view('backend.trips.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listLoaiXe = LoaiXe::get();
        return view('backend.trips.create', compact('listLoaiXe'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripsRequest $request)
    {
        try {
            \DB::beginTransaction();

            $data = [
                'ten_chuyen' => $request->ten_chuyen,
                'ma_tuyen' => $request->ten_tuyen,
                'ma_lx' => $request->ten_lx,
                'gio' => $request->gio,
                'thu_tu' => $request->thu_tu,
                'chieu' => $request->chieu
            ];
            Chuyen::create($data);

            \DB::commit();
            return redirect()->route('trips.index');
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
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
        $chuyen = Chuyen::where('id', '=', $id)->first();
        $tuyen = Tuyen::where('id', '=', $chuyen->ma_tuyen)->first();
        $loaixe = LoaiXe::where('id', '=', $chuyen->ma_lx)->first();
        $listLoaiXe = LoaiXe::get();

        return view('backend.trips.edit', compact('chuyen', 'tuyen', 'loaixe', 'listLoaiXe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TripsRequest $request, $id)
    {
        try {
            \DB::beginTransaction();

            $chuyen = Chuyen::find($id);

            $chuyen->ten_chuyen = $request->ten_chuyen;
            $chuyen->ma_tuyen = $request->ten_tuyen;
            $chuyen->ma_lx = $request->ten_lx;
            $chuyen->gio = $request->gio;
            $chuyen->thu_tu = $request->thu_tu;
            $chuyen->chieu = $request->chieu;
            $chuyen->save();

            \DB::commit();
            return redirect()->route('trips.index');
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
        $chuyen = Chuyen::find($id);

        if (empty($chuyen)) {
            return redirect()->back();
        }
        $chuyen->delete();
        return redirect()->back();
    }

    public function list_all($id)
    {
        $listChuyen = DB::table('chuyen')
            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
            ->where('chuyen.ma_tuyen', '=', $id)
            ->get();

        $tuyen = Tuyen::where('id', $id)->first();

        if ($listChuyen) {
            return view('backend.trips.trips_road', compact('listChuyen', 'tuyen'));
        } else {
            return redirect()->route('dashboard');
        }
    }

}
