<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KaryawanAPI extends Model
{
    protected $table = 'karyawan';
    protected $fillable = ['fname', 'lname', 'gender', 'no_hp', 'tgl_lahir'];
}
