<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KtpBaru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ktp_baru', function (Blueprint $table) {
            $table->id();
            $table->string('nik');
            $table->date('jadwal');
            $table->string('service_point');
            $table->string('fotokopi_kk_path')->nullable();
            $table->string('fotokopi_akta_path')->nullable();
            $table->string('status');
            // $table->string('no_kk')->unique();
            // $table->string('nama');
            // $table->string('email')->unique();
            // $table->string('no_telp')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            // $table->foreignId('current_team_id')->nullable();
            // $table->text('profile_photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('permohonan');
    }
}
