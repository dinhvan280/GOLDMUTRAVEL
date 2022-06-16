<?php

namespace App\Http\Controllers;

use App\Mail\ConFirm;
use App\Models\DonHang;
use App\Models\GheXe;
use App\Models\TaiKhoan;
use App\Models\VeChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;

class CheckoutController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function destroyTicket(Request $request)
    {
        $ve = VeChuyen::find($request->id);

        if (empty($ve)) {
            return redirect()->back();
        }
        $data = [
            'trang_thai' => null,
            'ma_dh' => null,
        ];
        VeChuyen::where('id', $request->id)->update($data);
        $veDat = VeChuyen::join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->select('ve_chuyen.*', 'chuyen.ten_chuyen', 'loai_xe.gia_ve', 'chuyen_ngay.ngay', 'ghe_xe.ky_hieu')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->where('ve_chuyen.ma_dh', $ve->ma_dh)
            ->get();
        return view('frontend.checkouts.list_ticket', compact('veDat'));
    }

    public function confirm()
    {
        return view('frontend.checkouts.confirm');
    }

    public function success(Request $request)
    {
        try {
            \DB::beginTransaction();

            $email = $request->email;
            $customer = TaiKhoan::where('email', $request->email)->first();
            $data = [
                'thoi_gian' => date("Y-m-d H:i"),
                'trang_thai' => 0,
                'ma_tk' => $customer->id,
                'ghi_chu' => $request->notes
            ];

            DonHang::create($data);

            $donHang = DonHang::where('thoi_gian', date("Y-m-d H:i"))->where('ma_tk', $customer->id)->first();

            \DB::commit();
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
        }
        $keyPerson = getPersonTicket();
        $personTickets = Cache::get($keyPerson) ?? [];
        Cache::put($keyPerson, $personTickets, now()->addHours(24));
        $veDat = [];
        $veChuyen = VeChuyen::where('trang_thai', 1)->first();
        foreach ($personTickets as $k => $maCn) {
            $key = getTicketName($maCn);
            $chuyenDetail = Cache::get($key . '_detail') ?? [];

            $veDat[] = $chuyenDetail;
            $veChuyen = VeChuyen::where('trang_thai', 1)->where('ma_cn', $maCn)->first();
            $list_ghe = Cache::get($key);

            if ($list_ghe) {
                foreach ($list_ghe as $a => $b) {
                    $ghe = GheXe::where('ky_hieu', $b)->first();
                    $data = [
                        "ma_dh" => $donHang->id,
                    ];
                    VeChuyen::where('ma_cn', '=', $maCn)->where('ma_gx', '=', $ghe->id)->update($data);
//            $ve = VeChuyen::where('ma_cn', $id)->get();
                }
            }
        }
        Cache::flush();

        $veDat = VeChuyen::join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->select('ve_chuyen.*', 'chuyen.ten_chuyen', 'loai_xe.gia_ve', 'chuyen_ngay.ngay', 'ghe_xe.ky_hieu')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->where('ve_chuyen.ma_dh', $donHang->id)
            ->get();

        $infoTicket = VeChuyen::join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->select('ve_chuyen.*', 'chuyen.ten_chuyen', 'loai_xe.gia_ve', 'chuyen_ngay.ngay', 'ghe_xe.ky_hieu')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->where('ve_chuyen.ma_dh', $donHang->id)
            ->first();

        Mail::to('kimlongtravel102@gmail.com')->send(new ConFirm($infoTicket));


        return view('frontend.checkouts.success', compact( 'veDat'));
    }
}
