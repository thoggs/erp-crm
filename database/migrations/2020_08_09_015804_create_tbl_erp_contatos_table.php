<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblErpContatosTable extends Migration
{
    public $data;

    public function getData()
    {
        return $this->data;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_erp_contatos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name');
            $table->string('estado');
            $table->string('cidade');
            $table->string('mail');
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
