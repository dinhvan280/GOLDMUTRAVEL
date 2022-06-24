<?php

namespace App\Providers;

use App\Models\Tuyen;
use App\Models\Xe;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(env('APP_ENV') != 'local'){
            $this->app['request']->server->set('HTTPS','on');
        }
        View::share('key', 'value');
        Schema::defaultStringLength(191);

        $listChuyen = DB::table('chuyen')->get();

        $chuyen = DB::table('chuyen')
            ->select('chuyen.*', 'tuyen.diem_dau', 'tuyen.ten_tuyen', 'tuyen.diem_cuoi', 'tuyen.diem_dn', 'loai_xe.so_ghe')
            ->leftJoin('tuyen', 'chuyen.ma_tuyen', '=', 'tuyen.id')
            ->leftJoin('loai_xe', 'chuyen.ma_lx', '=', 'loai_xe.id')
            ->groupBy('chuyen.id', 'tuyen.id', 'loai_xe.id')
            ->get();

        $listChuyenNgay = DB::table('chuyen_ngay')
            ->select('chuyen_ngay.*', 'chuyen.ten_chuyen', 'chuyen.chieu', 'chuyen.gio')
            ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')->get();

        $listXe = Xe::all();
        $listTuyen = Tuyen::get();
        View::share(['listTuyen' => $listTuyen, 'listXe' => $listXe, 'ListChuyenNgay' => $listChuyenNgay, 'listChuyen' => $listChuyen, 'chuyen' => $chuyen]);
    }
}
