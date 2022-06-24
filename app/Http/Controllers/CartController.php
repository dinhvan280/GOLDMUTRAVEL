<?php

namespace App\Http\Controllers;

use App\Mail\ConFirm;
use App\Models\ChuyenNgay;
use App\Models\GheXe;
use App\Models\VeChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use \Illuminate\Support\Facades\Cache;
use phpDocumentor\Reflection\Type;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyPerson = getPersonTicket();
        $personTickets = Cache::get($keyPerson) ?? [];

        $veDat = [];

        $veChuyen = VeChuyen::where('trang_thai', 1)->first();
        foreach($personTickets as $k => $maCn){
            $key = getTicketName($maCn);
            $chuyenDetail = Cache::get($key . '_detail') ?? [];
            $veDat[] = $chuyenDetail;
            $veChuyen = VeChuyen::where('trang_thai', 1)->where('ma_cn', $maCn)->first();
        }

        return view('frontend.cart.index', compact('veDat', 'veChuyen'));
    }

    public function saveChuyen($personTickets, $request, $id)
    {
        foreach($personTickets as $k => $maCn) {
            $key = getTicketName($maCn);
            $list_ghe = Cache::get($key);

                try {
                    \DB::beginTransaction();

                        foreach($list_ghe as $a => $b){
                            $ghe = GheXe::where('ky_hieu', $b)->first();
                            $data = [
                                "ma_cn" => $id,
                                "ma_gx" => $ghe->id,
                                "diem_don" => $request->point_start,
                                "gio_don" => $request->time_start,
                                "diem_tra" => $request->point_end,
                                "gio_tra" => $request->time_end,
                                "trang_thai" => $request->status,
                            ];
                            VeChuyen::where('ma_cn', '=', $id)->where('ma_gx', '=', $ghe->id)->update($data);
                        }

                    \DB::commit();
                } catch (Exception $e) {
                    \Log::error($e->getMessage());
                    \DB::rollback();
                }

        }
    }

    public function addToCart(Request $request)
    {
        $id = $request->id;

        //Phan biet don hang trong gio hang
        $keyPerson = getPersonTicket();
        $personTickets = Cache::get($keyPerson) ?? [];
        if(!@$personTickets[$id]){
            $personTickets[$id] = $id;
        }
        Cache::put($keyPerson, $personTickets, now()->addHours(24));

        self::saveChuyen($personTickets, $request, $id);

        $veDat = [];
        foreach($personTickets as $k => $maCn){
            $key = getTicketName($maCn);
            $list_ghe = Cache::get($key);
            if($list_ghe == null || $list_ghe == []){
                continue;
            }
            $arr = array_values($list_ghe);

            $ticketInfor = GheXe::where('ky_hieu', $arr[0])->first();

            $soVe = count($list_ghe);
            $chuyenInfo = VeChuyen::join('chuyen_ngay', 've_chuyen.ma_cn', '=', 'chuyen_ngay.id')
                ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
                ->join('loai_xe', 'xe.ma_lx', '=', 'loai_xe.id')
                ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->where('ve_chuyen.ma_gx', $ticketInfor->id)
                ->where('ve_chuyen.ma_cn', $maCn)
                ->first();

            $ttChuyen = [
                "ma_cn" => $maCn,
                "ghe" => $list_ghe,
                "ten_xe" => $chuyenInfo->ten_xe,
                "ten_lx" => $chuyenInfo->ten_lx,
                "diem_don" => $chuyenInfo->diem_don,
                "diem_tra" => $chuyenInfo->diem_tra,
                "gio_don" => $chuyenInfo->gio_don,
                "trang_thai" => $chuyenInfo->trang_thai,
                "gio_tra" => $chuyenInfo->gio_tra,
                "gia_ve" => $chuyenInfo->gia_ve,
                "so_luong" => $request->number,
                "ten_chuyen" => $chuyenInfo->ten_chuyen,
                "ngay" => $chuyenInfo->ngay,
                'so_ve' => $soVe,
                'tong_tien' => $chuyenInfo->gia_ve * $soVe
            ];
            $veDat[] = $ttChuyen;
            Cache::put($key . '_detail', $ttChuyen, now()->addHours(24));
            $chuyenDetail = Cache::get($key . '_detail') ?? [];

        }
        $veChuyen = VeChuyen::where('trang_thai', 1)->where('ma_cn', $id)->first();

        return view("frontend.cart.list_cart", compact('veChuyen', 'veDat'));
    }

    public function destroyTicket(Request $request)
    {
        $id = $request->ma_cn;
        $keyPerson = getPersonTicket();
        $personTickets = Cache::get($keyPerson) ?? [];
        $key = getTicketName($id);
        $list_ghe = Cache::get($key);

        //Update person tickets
        unset($personTickets[$id]);
        Cache::put($keyPerson, $personTickets, now()->addHours(24));

        //Remove data detail ticket
        Cache::forget($key . '_detail');
        Cache::forget($key);

        if($list_ghe)
        {
            foreach ($list_ghe as $a => $b) {
                $ghe = GheXe::where('ky_hieu', $b)->first();
                $data = [
                    "trang_thai" => null,
                ];
                VeChuyen::where('ma_cn', '=', $id)->where('ma_gx', '=', $ghe->id)->update($data);
//            $ve = VeChuyen::where('ma_cn', $id)->get();
            }
        }

        //Get data to view
        $veDat = [];
        $veChuyen = VeChuyen::where('trang_thai', 1)->first();
        foreach($personTickets as $k => $maCn){
            $key = getTicketName($maCn);
            $chuyenDetail = Cache::get($key . '_detail') ?? [];

            $veDat[] = $chuyenDetail;
            $veChuyen = VeChuyen::where('trang_thai', 1)->where('ma_cn', $maCn)->first();
        }

        return view('frontend.cart.list_ticket', compact('veDat', 'veChuyen'));
    }

    public function listCart()
    {
        $chuyenInfo = VeChuyen::join('chuyen_ngay', 've_chuyen.ma_cn', '=', 'chuyen_ngay.id')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->join('loai_xe', 'xe.ma_lx', '=', 'loai_xe.id')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
            ->where('chuyen_ngay.id', $id)->where('ve_chuyen.ma_gx', $ghe->id)->first();

        $veChuyen = VeChuyen::where('trang_thai', 1)->where('ma_cn', $id)->first();
        $veDaDat = VeChuyen::where('trang_thai', 1)->where('ma_cn', $id)->get();
        return view('frontend.cart.list_ticket', compact('chuyenInfo', 'veChuyen', 'veDaDat'));
    }

}
