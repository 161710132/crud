<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datas extends Model
{
    protected $table = 'data';
    protected $fillable = ['nama','kelas','jurusan'];
    public $timestamps = true;
}
