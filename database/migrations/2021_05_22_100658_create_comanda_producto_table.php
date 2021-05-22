<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda_producto', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('comanda_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('comanda_id')
              ->references('id')
              ->on('comandas')
              ->onDelete('cascade');

            $table->foreign('producto_id')
              ->references('id')
              ->on('productos')
              ->onDelete('cascade');

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
        Schema::dropIfExists('comanda_producto');
    }
}
