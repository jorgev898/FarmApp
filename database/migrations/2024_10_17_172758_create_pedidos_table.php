<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->decimal('total', 8, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
