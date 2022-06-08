<?php

namespace App\Http\Controllers;

use App\Models\VeChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HistoryController extends Controller
{
    public function listTicket($id)
    {
        $veDat = VeChuyen::join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->select('ve_chuyen.*', 'chuyen_ngay.ngay', 'xe.ten_xe', 'ghe_xe.ky_hieu', 'tai_khoan.name', 'loai_xe.gia_ve')
            ->join('tai_khoan', 'tai_khoan.id', '=', 'don_hang.ma_tk')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
            ->join('loai_xe', 'loai_xe.id', '=', 'xe.ma_lx')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->where('ve_chuyen.trang_thai', 2)
            ->where('tai_khoan.id', $id)->get();
        $veChuyen = VeChuyen::where('trang_thai', 1)->first();

        return view('frontend.customers.history', compact('veDat', 'veChuyen'));

    }

    public function listPoint()
    {
        return view('frontend.customers.point');
    }

    public function profile()
    {
        return view('frontend.customers.profile');
    }

    public function changePassword()
    {
        return view('frontend.customers.change_password');
    }
}
