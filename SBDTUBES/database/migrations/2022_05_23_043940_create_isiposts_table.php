<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsipostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('isiposts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_author');
            $table->unsignedBigInteger('id_kelas');
            $table->text('judul')->nullable();
            $table->text('isi');
            $table->string('isi_attach')->nullable();
            $table->string('jenis');
            $table->timestamps();

            $table->foreign('id_author')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('isiposts');
    }
}
