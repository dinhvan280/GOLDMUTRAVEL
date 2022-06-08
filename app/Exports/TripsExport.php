<?php

namespace App\Exports;

use App\Models\Chuyen;
use App\Models\ChuyenNgay;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;;

class TripsExport implements FromView, ShouldAutoSize
{
    public function __construct($start, $end) {
        $this->start = $start;
        $this->end = $end;
    }
//    /**
//    * @return \Illuminate\Support\Collection
//    */
//    public function collection()
//    {
//        return ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
//            ->select('chuyen_ngay.id', 'chuyen.ten_chuyen', 'xe.ten_xe', 'tai_khoan.name', 'chuyen.gio', 'chuyen.chieu', 'chuyen_ngay.ngay')
//            ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
//            ->join('tai_khoan', 'tai_khoan.id', '=', 'chuyen_ngay.ma_tx')
//            ->whereBetween('ngay', [$this->start, $this->end])
//            ->get();
//    }

    public function view(): View
    {
        return view('backend.trips.report', [
            'trips' => ChuyenNgay::join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->select('chuyen_ngay.id', 'chuyen.ten_chuyen', 'xe.ten_xe', 'tai_khoan.name', 'chuyen.gio', 'chuyen.chieu', 'chuyen_ngay.ngay')
                ->join('xe', 'xe.id', '=', 'chuyen_ngay.ma_xe')
                ->join('tai_khoan', 'tai_khoan.id', '=', 'chuyen_ngay.ma_tx')
                ->whereBetween('ngay', [$this->start, $this->end])
                ->get(),
            'start' => $this->start,
            'end' => $this->end
        ]);
    }
}
