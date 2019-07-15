<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblKomiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_komiks', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('judul',100);
            $table->text('sinopsis');
            $table->string('buatan',50);
            $table->string('genre',100);
            $table->date('tanggal_rilis');
            $table->string('pengarang',50);
            $table->string('skor', 30);
            $table->string('gambar',50)->nullable();
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
        Schema::dropIfExists('tbl_komiks');
    }
}
