<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama',50)->unique();
            $table->string('email',100)->unique();
            $table->string('alamat',100);
            $table->string('password',50);
            $table->date('tgl_lahir');
            $table->string('Status_Sekolah',50);
            $table->string('gambar',50)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->datetime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
