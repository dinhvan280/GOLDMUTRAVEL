<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChuyenNgay;
use App\Models\DonHang;
use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carts = DB::table('don_hang')
            ->join('users', 'don_hang.ma_tk', '=', 'users.id')
            ->join('ve_chuyen', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->join('ghe_xe', 've_chuyen.ma_gx', '=', 'ghe_xe.id')
            ->join('loai_xe', 'ghe_xe.ma_lx', '=', 'loai_xe.id')
            ->get();
        return view('backend.checkouts.index', compact('carts'));
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
        //
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
        $data = DonHang::find($id);
        $listChuyenNgay = [];
        if(Auth::user()->type === 'laixe'){
            $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                ->where('ma_tx', Auth::user()->id)->get();
        }
        return view('backend.checkouts.edit', compact( 'data', 'listChuyenNgay'));
    }

    public function editCheckout($id)
    {
        $data = DonHang::find($id);
        $listChuyenNgay = [];
        if(Auth::user()->type === 'laixe'){
            $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                ->where('ma_tx', Auth::user()->id)->get();
        }

        return view('backend.checkouts.edit_checkout_status', compact( 'data', 'listChuyenNgay'));
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
            $trans = DonHang::find($id);
            $chuyenNgay = DB::table('ve_chuyen')
                ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->where('don_hang.id', $trans->id)
                ->get();
            if(!isset($trans)){
                throw new Exception("Not found!");
            }

            $trans->trang_thai = $request->status;
            $trans->save();
            $data = DB::table('ve_chuyen')
                ->select('don_hang.*', 'ghe_xe.thu_tu', 'loai_xe.gia_ve', 'users.phone', 'users.address', 'users.name')
                ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->join('chuyen', 'chuyen_ngay.ma_chuyen', '=', 'chuyen.id')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->join('users', 'users.id', '=', 'don_hang.ma_tk')
                ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
                ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
                ->get();
            $listChuyenNgay = [];
            if(Auth::user()->type === 'laixe'){
                $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                    ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                    ->where('ma_tx', Auth::user()->id)->get();
            }

            \DB::commit();
            return view('backend.checkouts.index', compact('data', 'listChuyenNgay'));
        } catch (Exception $e) {
            \Log::error($e->getMessage());
            \DB::rollback();
            return redirect()->back();
        }
    }

    public function updateCheckout(Request $request, $id)
    {
        try {
            $trans = DonHang::find($id);
            $chuyenNgay = DB::table('ve_chuyen')
                ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->where('don_hang.id', $trans->id)
                ->first();
            if(!isset($trans)){
                throw new Exception("Not found!");
            }

            $trans->trang_thai = $request->status;
            $trans->save();
            $data = DB::table('ve_chuyen')
                ->select('don_hang.*', 've_chuyen.diem_don', 've_chuyen.diem_tra', 've_chuyen.gio_don', 've_chuyen.gio_tra', 'ghe_xe.thu_tu', 'loai_xe.ten_lx', 'loai_xe.gia_ve', 'users.phone', 'users.address', 'users.name')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->join('users', 'users.id', '=', 'don_hang.ma_tk')
                ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
                ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
                ->where('chuyen_ngay.id', $chuyenNgay->ma_cn)
                ->get();
            $listChuyenNgay = [];
            if(Auth::user()->type === 'laixe'){
                $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                    ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                    ->where('ma_tx', Auth::user()->id)->get();
            }

            \DB::commit();
            return view('backend.checkouts.list_customer', compact('data', 'listChuyenNgay'));
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
    public function destroy($id)
    {
        $trans = Transaction::find($id);
        $order = Order::where('Od_transaction_id', '=', $id);

        if (empty($trans) || empty($order)) {
            return redirect()->back();
        }
        $trans->delete();
        $order->delete();
        return view('frontend.checkout.checkout_destroy');
    }

    public function list_all($id)
    {
        $donHang = DB::table('ve_chuyen')
            ->select('don_hang.*', 'ghe_xe.thu_tu', 'loai_xe.ten_lx', 'loai_xe.gia_ve', 'users.phone', 'users.address', 'users.name')
            ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('users', 'users.id', '=', 'don_hang.ma_tk')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->where('chuyen_ngay.id', $id)
            ->get();

        $listChuyenNgay = [];
        if(Auth::user()->type === 'laixe'){
            $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                ->where('ma_tx', Auth::user()->id)->get();
        }

        return view('backend.checkouts.index', compact('donHang', 'listChuyenNgay'));
    }

    public function listCustomer($id)
    {
        $data = DB::table('ve_chuyen')
            ->select('don_hang.*', 've_chuyen.diem_don', 've_chuyen.diem_tra', 've_chuyen.gio_don', 've_chuyen.gio_tra', 'ghe_xe.thu_tu', 'loai_xe.ten_lx', 'loai_xe.gia_ve', 'users.phone', 'users.address', 'users.name')
            ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
            ->join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
            ->join('users', 'users.id', '=', 'don_hang.ma_tk')
            ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
            ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
            ->where('chuyen_ngay.id', $id)
            ->where('ve_chuyen.trang_thai', 2)
            ->get();
        $listChuyenNgay = [];
        if(Auth::user()->type === 'laixe'){
            $listChuyenNgay = ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
                ->where('ma_tx', Auth::user()->id)->get();
        }

        return view('backend.checkouts.list_customer', compact('data', 'listChuyenNgay'));
    }
}
