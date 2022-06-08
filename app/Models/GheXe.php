<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GheXe extends Model
{
    protected $table = 'ghe_xe';
    public $timestamps = false;
    protected $fillable = [
        'thu_tu',
        'ky_hieu',
        'ma_lx'
    ];

    public function veChuyen()
    {
        return $this->hasMany(VeChuyen::class, 'ma_gx');
    }
}
