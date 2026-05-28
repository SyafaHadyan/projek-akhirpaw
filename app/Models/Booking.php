<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [

        'nama_mahasiswa',
        'nim',
        'no_hp',
        'console_id',
        'tanggal',
        'jam_mulai',
        'status'

    ];
}