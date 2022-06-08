<?php

namespace App\Exports;

use App\Models\TaiKhoan;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class CustomersExport implements FromView, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TaiKhoan::all();
    }

    public function view(): View
    {
        return view('backend.users.report', [
            'customers' => TaiKhoan::all()
        ]);
    }
}
