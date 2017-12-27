<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleProformaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_proforma', function (Blueprint $table) {
            $table->string('codigo_p');
            $table->integer('id_p');
            $table->integer('cantidad');
            $table->decimal('precio', 7, 2);
            $table->timestamps();
            $table->primary(['codigo_p', 'id_p']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_proforma');
    }
}
