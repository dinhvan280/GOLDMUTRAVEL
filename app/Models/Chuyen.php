<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chuyen extends Model
{
    protected $table = "chuyen";
    public $timestamps = false;
    protected $fillable = [
        'ten_chuyen',
        'ma_tuyen',
        'ma_lx',
        'gio',
        'thu_tu',
        'chieu'
    ];

    public function tuyen()
    {
        return $this->belongsTo(Tuyen::class);
    }

    public function chuyenNgay()
    {
        return $this->hasMany(ChuyenNgay::class);
    }

    public function veChuyen()
    {
        return $this->hasMany(VeChuyen::class, 'ma_chuyen');
    }

    public function loaiXe()
    {
        return $this->belongsTo(LoaiXe::class);
    }
}
