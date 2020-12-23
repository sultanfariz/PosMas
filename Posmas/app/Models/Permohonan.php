<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    protected $table = "permohonan";
    protected $fillable = [
        'nik',
        'jadwal',
        'service_point',
        'pelayanan',
        'status'
    ];
}
