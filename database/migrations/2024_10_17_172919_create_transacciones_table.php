<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('pedido_id'); 
            $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
            $table->unsignedBigInteger('metodo_pago_id'); 
            $table->foreign('metodo_pago_id')->references('id')->on('metodos_pago')->onDelete('cascade');
            $table->decimal('monto', 8, 2);
            $table->string('estado');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
};
