<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proformas', function (Blueprint $table) {
            $table->string('codigo', 12);
            $table->string('ruc_c', 11);
            $table->string('dni_u', 8);
            $table->date('fecha');
            $table->text('mano_de_obra');
            $table->decimal('precio_mano_obra', 8, 2);
            $table->enum('tipo', ['I', 'M', 'R']);
            $table->boolean('eliminado')->default(false);
            $table->timestamps();
            $table->primary('codigo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proformas');
    }
}
