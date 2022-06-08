<?php

namespace App\Http\Controllers\Admin;

use App\Models\ChuyenNgay;
use App\Models\Tuyen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Chuyen;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $listChuyenNgay = [];
        if(Auth::user()->type === 'laixe'){
            $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                ->where('ma_tx', Auth::user()->id)->get();
        }

        return view('backend.trips.index', compact('listChuyenNgay'));
    }

}
