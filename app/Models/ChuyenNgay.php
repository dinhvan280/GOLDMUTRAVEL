<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChuyenNgay extends Model
{
    protected $table = "chuyen_ngay";
    public $timestamps = false;
    protected $fillable = [
        'ma_chuyen',
        'ma_xe',
        'ma_tx',
        'ngay'
    ];

    public function chuyen()
    {
        return $this->belongsTo(Chuyen::class);
    }

    public function veChuyen()
    {
        return $this->hasMany(VeChuyen::class, 'ma_cn');
    }

    public function xe()
    {
        return $this->belongsTo(Xe::class);
    }
}
