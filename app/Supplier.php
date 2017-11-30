<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Supplier extends Model
{
    //
    protected $table = "supplier";

    protected $fillable = [
    'id_supplier',
    'id_users',
    'nama_toko',
    'alamat_toko',
    'jenis_toko',
    'slogan_toko',
    ]


   
}
