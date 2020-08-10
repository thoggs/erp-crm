<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblErpContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_erp_contatos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nome');
            $table->string('estado');
            $table->string('cidade');
            $table->string('email');
            $table->timestamp('data')->useCurrent();
            $table->string('status')->default('1');
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
        Schema::dropIfExists('tbl_erp_contatos');
    }
}
