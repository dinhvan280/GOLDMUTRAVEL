<?php

namespace App\Http\Controllers;

use App\Models\ChuyenNgay;
use App\Models\GheXe;
use App\Models\HinhAnh;
use App\Models\VeChuyen;
use App\Models\XeAnh;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use App\Models\Tuyen;
use App\Models\Chuyen;
use App\Models\Xe;
use App\Models\LoaiXe;
use App\Models\DiemDo;
use App\Models\TuyenDiemDo;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->id;
        $image = HinhAnh::where('xe_id', $id)->first();
        $images = HinhAnh::where('xe_id', $id)->get();
        return view('frontend.ticket.ticket_detail', compact('images', 'image'));
    }

    public function showTicket(Request $request)
    {
        $id = $request->id;
        $tickets = VeChuyen::join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->select('ve_chuyen.*', 'ghe_xe.ky_hieu', 'loai_xe.gia_ve')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->where('ve_chuyen.ma_cn', $id)
            ->get();
        $chuyen = ['ma_cn' => $id];
        $type = VeChuyen::join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->select('loai_xe.*')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->where('ve_chuyen.ma_cn', $id)
            ->first();
        return view('frontend.ticket.ticket_choose', compact('tickets', 'type', 'chuyen'));
    }

    public function buyTicket(Request $request)
    {
//        Cache::flush();
        $id = $request->id;
        $type = $request->type;
        $kh = $request->ky_hieu;
        $key = getTicketName($id);
        $tickets = Cache::get($key) ?? [];
        if($type == 1 && !@$tickets[$kh]){
            $tickets[$kh] = $kh;
        } else {
            unset($tickets[$kh]);
        }
        Cache::put($key, $tickets, now()->addHours(24));
//dd($tickets, $key, Cache::get($key));
        $number = count($tickets);

        $html = view('frontend.ticket.number_ticket', compact('tickets', 'number'))->render();

        return response()->json(['number' => $number, 'html' => $html, 'key' => $key, 'cache' => Cache::get($key)], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $ve_chuyen = VeChuyen::find($request->id);
        $ve_chuyen->ma_dh = null;
        $ve_chuyen->trang_thai = null;
        $ve_chuyen->save();
        $veDat = VeChuyen::join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->select('ve_chuyen.*', 'chuyen_ngay.ngay', 'xe.ten_xe', 'ghe_xe.ky_hieu', 'tai_khoan.name', 'loai_xe.gia_ve')
            ->join('tai_khoan', 'tai_khoan.id', '=', 'don_hang.ma_tk')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->where('ve_chuyen.trang_thai', 2)
            ->where('tai_khoan.id', $request->user_id)->get();
        return view('frontend.customers.list_ticketed', compact('veDat'));
    }

    public function findChuyen(Request $request)
    {
        $ma_tuyen = $request->ma_tuyen;
        $ma_xe = $request->ma_xe;

        $trips = Tuyen::select('chuyen.*',
            'tuyen.*',
            'tmp.*',
            'tuyen_diemdo.*',
            'diem_do.*',
            'xe.ten_xe', 'loai_xe.ten_lx', 'loai_xe.gia_ve')
            ->join('chuyen', 'tuyen.id', '=', 'chuyen.ma_tuyen')
            ->join(DB::raw('
            (
                SELECT
                    ve_chuyen.ma_cn,
                    chuyen_ngay.ma_chuyen,
                    chuyen_ngay.ngay,
                    chuyen_ngay.ma_xe,
                    count(ve_chuyen.id) AS ve_chuyen_cnt
                FROM
                    `chuyen_ngay`
                INNER JOIN `ve_chuyen` ON `ve_chuyen`.`ma_cn` = `chuyen_ngay`.`id`
                WHERE
                    ve_chuyen.trang_thai IS NULL
                AND chuyen_ngay.ngay = "' . now()->format('Y-m-d') . '"
                GROUP BY
                    ve_chuyen.ma_cn
            ) AS tmp'), 'chuyen.id', 'tmp.ma_chuyen')
            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
            ->join('diem_do', 'diem_do.id', '=', 'tuyen_diemdo.ma_dd')
            ->join('xe', 'xe.id', '=', 'tmp.ma_xe')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->where('tuyen.id', '=', $ma_tuyen)
//            ->where('xe.id', $ma_xe)
            ->where('tmp.ngay', now()->format('Y-m-d'))
            ->groupBy('tuyen.id', 'chuyen.id')
            ->get();

        $tuyen = DB::table('chuyen')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->where('chuyen_ngay.ma_xe', $ma_xe)
            ->first();

        $image = HinhAnh::where('xe_id', $ma_xe)->first();
        $images = HinhAnh::where('xe_id', $ma_xe)->get();


        $chuyenNgay = ChuyenNgay::where('ma_chuyen', $tuyen->ma_chuyen)->first();


        $numbers = VeChuyen::join('ghe_xe', 've_chuyen.ma_gx', '=', 'ghe_xe.id')->whereNotNull('ve_chuyen.trang_thai')->get();

        $ghe_xe = DB::table('ve_chuyen')
            ->join('chuyen_ngay', 've_chuyen.ma_cn', '=', 'chuyen_ngay.id')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->where('chuyen.id', $tuyen->id)
            ->get();

        $time = $request->day;

        return view('frontend.ticket.index', compact('trips', 'tuyen', 'time', 'images', 'image', 'numbers'));
    }

    public function chooseLocation(Request $request)
    {
        $id = $request->id;
        $chieu = $request->chieu;
        $diemdon = TuyenDiemDo::join('diem_do', 'diem_do.id', '=', 'tuyen_diemdo.ma_dd')
            ->where('tuyen_diemdo.ma_tuyen', $id)->where('tuyen_diemdo.chieu_xe', $chieu)->where('loai_dd', '=', 'don')->orderBy('tuyen_diemdo.thoi_gian')->get();
        $diemtra = TuyenDiemDo::join('diem_do', 'diem_do.id', '=', 'tuyen_diemdo.ma_dd')
            ->where('tuyen_diemdo.ma_tuyen', $id)->where('tuyen_diemdo.chieu_xe', $chieu)->where('loai_dd', '=', 'tra')->orderBy('tuyen_diemdo.thoi_gian')->get();
        return view('frontend.ticket.choose_location', compact('diemdon', 'diemtra'));

    }

    public function search(Request $request)
    {
        try {
            $diemDi = $request->diem_di;
            $diemDen = $request->diem_den;
            $time = $request->day;

            if (empty($time)) {
                $time = now()->format('Y-m-d');
            }

            // Check if both diemDi and diemDen are empty
            if (empty($diemDi) && empty($diemDen)) {
                return redirect()->back()->with('error', 'Please provide both departure and destination.');
            } else {
                $result = DB::table('diem_do')
                    ->join('tuyen_diemdo', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
                    ->where('diem_do.ten_dd', 'like', '%' . $diemDi . '%')
                    ->distinct()
                    ->first();

                $trips = Tuyen::select('chuyen.*',
                    'tuyen.*',
                    'tmp.*',
                    'tuyen_diemdo.*',
                    'diem_do.*',
                    'xe.ten_xe', 'loai_xe.ten_lx', 'loai_xe.gia_ve')
                    ->join('chuyen', 'tuyen.id', '=', 'chuyen.ma_tuyen')
                    ->join(DB::raw('
            (
                SELECT
                    ve_chuyen.ma_cn,
                    chuyen_ngay.ma_chuyen,
                    chuyen_ngay.ngay,
                    chuyen_ngay.ma_xe,
                    count(ve_chuyen.id) AS ve_chuyen_cnt
                FROM
                    `chuyen_ngay`
                INNER JOIN `ve_chuyen` ON `ve_chuyen`.`ma_cn` = `chuyen_ngay`.`id`
                WHERE
                    ve_chuyen.trang_thai IS NULL
                AND chuyen_ngay.ngay = "' . Carbon::createFromFormat('d/m/Y', $request->day)->format('Y-m-d') . '"
                GROUP BY
                    ve_chuyen.ma_cn
            ) AS tmp'), 'chuyen.id', 'tmp.ma_chuyen')
                    ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
                    ->join('diem_do', 'diem_do.id', '=', 'tuyen_diemdo.ma_dd')
                    ->join('xe', 'xe.id', '=', 'tmp.ma_xe')
                    ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
                    ->where('tuyen.id', '=', $result->ma_tuyen)
                    ->where('tmp.ngay', Carbon::createFromFormat('d/m/Y', $request->day)->format('Y-m-d'))
                    ->groupBy('tuyen.id', 'chuyen.id')
                    ->get();

                $tuyen = DB::table('tuyen')
                    ->join('chuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
                    ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                    ->where('tuyen.id', $result->ma_tuyen)
                    ->first();

                $image = HinhAnh::where('xe_id', $tuyen->ma_xe)->first();
                $images = HinhAnh::where('xe_id', $tuyen->ma_xe)->get();
            }

            return view('frontend.ticket.show', compact('trips', 'tuyen', 'time', 'image', 'images'));
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function filterTime(Request $request)
    {
        $id = $request->id;
        $type = $request->type;
        $time = $request->day;
        $trips = DB::table('chuyen')
            ->select('chuyen.*', 'tuyen.ten_tuyen', 'xe.ten_xe', 'loai_xe.ten_lx', 'loai_xe.gia_ve', 'tuyen.diem_dau', 'tuyen.diem_cuoi')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('xe', 'chuyen_ngay.ma_xe', '=', 'xe.id')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->where('chuyen.ma_tuyen', $id)
            ->where('chuyen_ngay.ngay', Carbon::createFromFormat('d/m/Y', $request->day)->format('Y-m-d'))
            ->orderBy('chuyen.gio', "$type")
            ->get();
        $tuyen = DB::table('tuyen')
            ->join('chuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->where('tuyen.id', $id)
            ->first();

        return view('frontend.ticket.show', compact('trips', 'tuyen', 'time'));
    }

    public function filterPrice(Request $request)
    {dd(Carbon::createFromFormat('d/m/Y', $request->day)->format('Y-m-d'));
        $id = $request->id;
        $type = $request->type;
        $time = $request->day;
        $trips = DB::table('chuyen')
            ->select('chuyen.*', 'tuyen.ten_tuyen', 'xe.ten_xe', 'loai_xe.ten_lx', 'loai_xe.gia_ve', 'tuyen.diem_dau', 'tuyen.diem_cuoi')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('xe', 'chuyen_ngay.ma_xe', '=', 'xe.id')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->where('chuyen.ma_tuyen', $id)
            ->where('chuyen_ngay.ngay', Carbon::createFromFormat('d/m/Y', $request->day)->format('Y-m-d'))
            ->orderBy('loai_xe.gia_ve', "$type")
            ->get();
        dd($trips);
        $tuyen = DB::table('tuyen')
            ->join('chuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->where('tuyen.id', $id)
            ->first();

        return view('frontend.ticket.show', compact('trips', 'tuyen', 'time'));
    }
}
