<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KtpBaru extends Model
{
    use HasFactory;

    protected $table = "ktp_baru";
    protected $fillable = [
        'nik',
        'jadwal',
        'service_point',
        'fotokopi_kk_path',
        'fotokopi_akta_path',
        'status',
    ];
}
