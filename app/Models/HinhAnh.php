<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HinhAnh extends Model
{
    protected $table = 'hinh_anh';
    public $timestamps = false;
    protected $fillable = [
        'anh',
    ];

    public function loai_xe()
    {
        return $this->hasMany(VeChuyen::class, 'ma_dh');
    }
}
