<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LantaiSatu extends Model
{
    protected $table = 'lantai_satu';
    protected $fillable = ['name', 'posisi_awal', 'posisi_akhir', 'jumlah_kwh', 'total'];
    // protected $guarded = [];
}
