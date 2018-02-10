<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class datas2 extends Model
{
    protected $table = 'data2';
    protected $fillable = ['nama_barang','jumlah','harga'];
    public $timestamps = true;
}
