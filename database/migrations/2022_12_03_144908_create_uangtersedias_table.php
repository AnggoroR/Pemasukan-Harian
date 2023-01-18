<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uangtersedias', function (Blueprint $table) {
            $table->id();
            $table->string("tanggal_sisa");
            $table->integer("debit");
            $table->integer("kredit");
            $table->string("keterangan_sisa");
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
        Schema::dropIfExists('uangtersedias');
    }
};
