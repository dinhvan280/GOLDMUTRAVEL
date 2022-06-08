<?php

namespace App\Exports;

use App\Models\ChuyenNgay;
use App\Models\VeChuyen;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TicketsExport implements FromView, ShouldAutoSize
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
        return view('backend.tickets.report', [
            'tickets' => VeChuyen::join('chuyen_ngay', 'chuyen_ngay.id', '=', 've_chuyen.ma_cn')
                ->join('chuyen', 'chuyen.id', '=', 'chuyen_ngay.ma_chuyen')
                ->join('tuyen', 'tuyen.id', '=', 'chuyen.ma_tuyen')
                ->join('ghe_xe', 'ghe_xe.id', '=', 've_chuyen.ma_gx')
                ->join('loai_xe', 'loai_xe.id', '=', 'ghe_xe.ma_lx')
                ->join('don_hang', 'don_hang.id', '=', 've_chuyen.ma_dh')
                ->join('tai_khoan', 'tai_khoan.id', '=', 'don_hang.ma_tk')
                ->whereBetween('ngay', [$this->start, $this->end])
                ->where('ve_chuyen.trang_thai', 2)
                ->get(),
            'start' => $this->start,
            'end' => $this->end
        ]);
    }
}
