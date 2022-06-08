<?php

namespace App\Http\Controllers\Admin;

use App\Exports\TicketsExport;
use App\Exports\TripsExport;
use App\Mail\SendMail;
use App\Models\Chuyen;
use App\Models\ChuyenNgay;
use App\Models\DonHang;
use App\Models\Tuyen;
use App\Models\GheXe;
use App\Models\User;
use App\Models\VeChuyen;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Image;
use Maatwebsite\Excel\Facades\Excel;

class TicketsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('backend.tickets.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.tickets.create', compact('gheXe'));
    }

    public function createTicket($ma_cn)
    {

        $gheXe = DB::table('ghe_xe')
            ->select('ghe_xe.id', 'ghe_xe.thu_tu')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->join('chuyen', 'chuyen.ma_lx', '=','loai_xe.id')
            ->join('chuyen_ngay', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->groupBy('ghe_xe.id', 'ghe_xe.thu_tu')
            ->where('chuyen_ngay.id', $ma_cn)
            ->get();
        $chuyenNgay = DB::table('chuyen_ngay')
            ->select('chuyen_ngay.id', 'loai_xe.so_ghe')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->groupBy('chuyen_ngay.id')
            ->where('chuyen_ngay.id', $ma_cn)
            ->get();

        return view('backend.tickets.create', compact('gheXe', 'chuyenNgay'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

    }

    public function storeTickets($ma_cn)
    {

        $gheXe = DB::table('ghe_xe')
            ->select('ghe_xe.id', 'ghe_xe.thu_tu')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->join('chuyen', 'chuyen.ma_lx', '=','loai_xe.id')
            ->join('chuyen_ngay', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->groupBy('ghe_xe.id', 'ghe_xe.thu_tu')
            ->where('chuyen_ngay.id', $ma_cn)
            ->get();

        $data = [];
        foreach ($gheXe as $key => $value)
        {
            $data[] = [
                'ma_cn' => $ma_cn,
                'ma_gx' => $value->id,
            ];
        }
        VeChuyen::insert($data);

        return redirect()->route('tickets.list', ['ma_cn' => $ma_cn]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */

    public function edit($id, $ma_cn, $ma_gx)
    {
//        $ve = DB::table('ve_chuyen')->where('id', $id)->first();
//        $diemdon = DB::table('ve_chuyen')
//            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
//            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
//            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
//            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
//            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
//            ->where('ve_chuyen.id', '=', $ve->id)
//            ->where('ve_chuyen.ma_gx', $ve->ma_gx)
//            ->where('tuyen_diemdo.chieu_xe', '=', 'di')
//            ->where('tuyen_diemdo.loai_dd', '=', 'don')
//            ->groupBy('diem_do.id')
//            ->get();
//
//        $diemtra = DB::table('ve_chuyen')
//            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_chuyen')
//            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
//            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
//            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
//            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
//            ->where('ve_chuyen.id', '=', $ve->id)
//            ->where('tuyen_diemdo.chieu_xe', '=', 'di')
//            ->where('tuyen_diemdo.loai_dd', '=', 'tra')
//            ->get();
//        $don = DB::table('don_hang')
//            ->join('ve_chuyen', 'don_hang.id', '=', 've_chuyen.ma_dh')
//            ->where('ve_chuyen', '=', $ve->id);
//
//        return view('backend.tickets.edit', compact('ve', 'diemdon', 'don', 'diemtra'));
    }

    public function editVeChuyen($ma_ve, $ma_cn, $ma_gx)
    {
        $ve = DB::table('ve_chuyen')
            ->where('ve_chuyen.ma_cn', '=', $ma_cn)
            ->where('ve_chuyen.ma_gx', '=', $ma_gx)
            ->first();

//        $diemdon = DB::table('ve_chuyen')
//            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
//            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
//            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
//            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
//            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
//            ->where('ve_chuyen.id', '=', $ma_ve)
//            ->where('tuyen_diemdo.chieu_xe', '=', 'di')
//            ->where('tuyen_diemdo.loai_dd', '=', 'don')
//            ->groupBy('diem_do.id')
//            ->get();
//
//        $diemtra = DB::table('ve_chuyen')
//            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
//            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
//            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
//            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
//            ->join('diem_do', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
//            ->where('ve_chuyen.id', '=', $ma_ve)
//            ->where('tuyen_diemdo.chieu_xe', '=', 'di')
//            ->where('tuyen_diemdo.loai_dd', '=', 'tra')
//            ->groupBy('diem_do.id')
//            ->get();
        $don = DB::table('don_hang')
            ->join('ve_chuyen', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->where('ve_chuyen.id', '=', $ma_ve)
            ->get();

        return view('backend.tickets.edit', compact('ve','don'));
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

    }


    public function updateVeChuyen(Request $request, $ma_cn, $ma_gx)
    {
        try {
            \DB::beginTransaction();
            $veChuyen = VeChuyen::where('ve_chuyen.ma_cn', '=', $ma_cn)
                ->where('ve_chuyen.ma_gx', '=', $ma_gx)->first();
            $veChuyen->trang_thai = $request->trang_thai;
            $veChuyen->save();
            \DB::commit();
            $ve = VeChuyen::where('ma_cn', $ma_cn)
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->where('ma_gx', $ma_gx)->first();

            $dataMail = VeChuyen::join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->select('ve_chuyen.*', 'chuyen.ten_chuyen', 'chuyen.gio', 'loai_xe.gia_ve', 'chuyen_ngay.ngay', 'ghe_xe.ky_hieu', 'xe.ten_xe')
                ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
                ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
                ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->where('ve_chuyen.ma_dh', $ve->ma_dh)
                ->first();
            $customer = DonHang::join('tai_khoan', 'tai_khoan.id', '=', 'don_hang.ma_tk')
                ->where('don_hang.id', $ve->ma_dh)
                ->first();

            if($request->trang_thai == 2)
            {
                Mail::to($customer)->send(new SendMail($dataMail, $customer));
            }

            return redirect()->route('tickets.list', ['ma_cn' => $veChuyen->ma_cn]);

        } catch (Exception $e) {

            \Log::error($e->getMessage());

            \DB::rollback();
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


    }

    public function list_all($ma_cn)
    {
        $getChuyen = DB::table('chuyen_ngay')
//            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->select('chuyen_ngay.id', 'chuyen.ten_chuyen', 'chuyen.gio', 'loai_xe.so_ghe')
            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->join('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
            ->where('chuyen_ngay.id', '=', $ma_cn)
            ->first();
        $listVe = DB::table('ve_chuyen')
            ->select('ve_chuyen.*', 'ghe_xe.thu_tu', 'chuyen.gio', 'ghe_xe.ky_hieu')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->where('chuyen_ngay.id', $ma_cn)
            ->get();
        $veChuyen = DB::table('ve_chuyen')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->where('trang_thai', '=', '0')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
            ->where('chuyen_ngay.id', $ma_cn)
            ->get();
        return view('backend.tickets.index', compact('listVe', 'veChuyen', 'getChuyen'));
    }

    public function searchTicket()
    {
        return view('backend.tickets.tickets_report');
    }

    public function export(Request $request)
    {
        $start = $request->start_day;
        $end = $request->end_day;

        $file = Excel::download(new TicketsExport($start, $end), 'tickets_report.xlsx');
        return $file;
    }

}

