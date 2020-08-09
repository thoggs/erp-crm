<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCrmContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_crm_contatos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->char('name', 100);
            $table->char('estado', 50);
            $table->char('cidade', 50);
            $table->char('mail', 100);
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
        Schema::dropIfExists('tbl_crm_contatos');
    }
}
