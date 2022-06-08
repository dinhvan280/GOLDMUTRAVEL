<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    protected $table = 'don_hang';
    public $timestamps = false;
    protected $fillable = [
        'thoi_gian',
        'so_ve',
        'don_gia',
        'trang_thai',
        'ma_tk',
        'ghi_chu',
        'li_do'
    ];

    public function veChuyen()
    {
        return $this->hasMany(VeChuyen::class, 'ma_dh');
    }
}
