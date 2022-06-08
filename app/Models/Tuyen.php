<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tuyen extends Model
{
    protected $table = "tuyen";
    public $timestamps = false;
    protected $fillable = [
        'ten_tuyen',
        'diem_dau',
        'diem_cuoi',
        'diem_dn',
    ];

    public function chuyen()
    {
        return $this->hasMany(chuyen::class, 'ma_tuyen');
    }

    public function tuyen_diemdo()
    {
        return $this->hasMany(TuyenDiemDo::class, 'ma_tuyen');
    }
}
