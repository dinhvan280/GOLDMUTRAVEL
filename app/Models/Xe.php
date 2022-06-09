<?php

namespace App\Models;

use App\HinhAnh;
use Illuminate\Database\Eloquent\Model;

class Xe extends Model
{
    protected $table = 'xe';
    public $timestamps = false;
    protected $fillable = [
        'ten_xe',
        'bien_so',
        'anh',
        'gioi_thieu',
        'ma_lx',
    ];

    public function loaiXe()
    {
        return $this->belongsTo(LoaiXe::class);
    }

    public function chuyenNgay()
    {
        return $this->hasOne(ChuyenNgay::class, 'ma_xe');
    }

    public function hinh_anh()
    {
        return $this->hasMany(HinhAnh::class, 'xe_id');
    }
}
