<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datas3 extends Model
{
    protected $table = 'data3';
    protected $fillable = ['nama_mainan','kode','harga'];
    public $timestamps = true;
}
