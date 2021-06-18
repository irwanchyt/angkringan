<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table='pelanggans';

    protected $fillable =[

        'name',
        'email',
        'alamat'
     
    ];
}
