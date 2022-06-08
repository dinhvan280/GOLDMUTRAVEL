<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiXe extends Model
{
    protected $table = 'loai_xe';
    public $timestamps = false;
    protected $fillable = [
        'ten_lx',
        'so_ghe',
        'gia_ve'
    ];

    public function gheXe()
    {
        return $this->hasMany(GheXe::class, 'ma_lx');
    }

    public function xe()
    {
        return $this->hasMany(Xe::class, 'ma_lx');
    }
}
