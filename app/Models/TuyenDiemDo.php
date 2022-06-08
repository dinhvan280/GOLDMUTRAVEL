<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TuyenDiemDo extends Model
{
    protected $table = 'tuyen_diemdo';
    public $timestamps = false;
    protected $fillable = [
        'ma_tuyen',
        'ma_dd',
        'chieu_xe',
        'loai_dd',
        'thoi_gian'
    ];

    public function tuyen()
    {
        return $this->hasMany(Tuyen::class, 'ma_tuyen');
    }

    public function diemdo()
    {
        return $this->hasMany(DiemDo::class, 'ma_dd');
    }

    public function tuyenDiemDo()
    {
        return $this->belongsTo(TuyenDiemDo::class);
    }
}
