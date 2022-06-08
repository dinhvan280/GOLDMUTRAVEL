<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VeChuyen extends Model
{
    protected $table = 've_chuyen';
    public $timestamps = false;
    protected $fillable = [
        'ma_cn',
        'ma_gx',
        'ma_dh',
        'trang_thai',
        'diem_don',
        'gio_don',
        'diem_tra',
        'gio_tra'
    ];

    public function donHang()
    {
        return $this->belongsTo(DonHang::class);
    }

    public function gheXe()
    {
        return $this->belongsToMany(GheXe::class);
    }

    public function chuyenNgay()
    {
        return $this->belongsTo(ChuyenNgay::class);
    }
}
