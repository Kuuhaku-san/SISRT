<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->string('ruc', 11);
            $table->string('razon_social');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->string('numero_cuenta')->nullable();
            $table->string('rubro')->nullable();
            $table->boolean('habilitado')->default(1);
            $table->timestamps();
            $table->primary('ruc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedors');
    }
}
