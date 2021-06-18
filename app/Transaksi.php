<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table    = 'transaksis';

    protected $fillable = [

        'pelanggan_id',
        'produk_id',
        'qyt',
        'description'

    ];
}
