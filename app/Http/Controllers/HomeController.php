<?php

namespace App\Http\Controllers;

use App\Models\HinhAnh;
use App\Models\Tuyen;
use App\Models\TuyenDiemDo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HomeController extends Controller
{
    protected $redirectTo = '/user/dat-ve-thanh-cong';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest:customer')->except('logout');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        session()->put('tickets', ['c1' => 1]);
//        session()->forget('tickets');
//        session()->put('tickets', ['c1' => 1, 'c2' => 2]);
//        dd(session('tickets'));
        $dt = Carbon::now('Asia/Ho_Chi_Minh');

        $listChuyen = DB::table('chuyen')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
            ->join('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->where('chuyen_ngay.ngay', $dt->toDateString())
            ->get();

        return view('frontend.home.index', compact('listChuyen'));
    }

    public function filter(Request $request)
    {
        $string = $request->keywords;
        $data = DB::table('diem_do')
            ->select('diem_do.*', 'tuyen_diemdo.ma_tuyen')
            ->join('tuyen_diemdo', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
            ->where('diem_do.ten_dd', 'like', '%' . $string .'%')
            ->groupBy('diem_do.id')
            ->distinct('diem_do.ten_dd')
            ->get();
        return view('frontend.home.filter', compact('data'));
    }

    public function search(Request $request)
    {
        $diemDi = $request->departure;
        $diemDen = $request->destination;
        $time = $request->datetime;
        $result = DB::table('diem_do')
            ->join('tuyen_diemdo', 'tuyen_diemdo.ma_dd', '=', 'diem_do.id')
            ->where('diem_do.ten_dd', $diemDi)
            ->where('diem_do.ten_dd', $diemDi)
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
                AND chuyen_ngay.ngay = "' . Carbon::createFromFormat('d/m/Y', $request->datetime)->format('Y-m-d') . '"
                GROUP BY
                    ve_chuyen.ma_cn
            ) AS tmp'), 'chuyen.id', 'tmp.ma_chuyen')
            ->join('tuyen_diemdo', 'tuyen.id', '=', 'tuyen_diemdo.ma_tuyen')
            ->join('diem_do', 'diem_do.id', '=', 'tuyen_diemdo.ma_dd')
            ->join('xe', 'xe.id', '=', 'tmp.ma_xe')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->where('tuyen.id', '=', $result->ma_tuyen)
//            ->where('xe.id', $ma_xe)
            ->where('tmp.ngay', Carbon::createFromFormat('d/m/Y', $request->datetime)->format('Y-m-d'))
            ->groupBy('tuyen.id', 'chuyen.id')
            ->get();


        $tuyen = DB::table('tuyen')
            ->join('chuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->join('chuyen_ngay', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->where('tuyen.id', $result->ma_tuyen)
            ->first();
        $image = HinhAnh::where('xe_id', $tuyen->ma_xe)->first();

        return view('frontend.ticket.index', compact('trips', 'tuyen', 'time', 'image'));
    }

    public function question()
    {
        return view('frontend.home.question');
    }

    public function term()
    {
        return view('frontend.home.term');
    }

    public function membership()
    {
        return view('frontend.home.membership');
    }

    public function complain()
    {
        return view('frontend.home.complain');
    }

    public function privacy()
    {
        return view('frontend.home.privacy');
    }
}
