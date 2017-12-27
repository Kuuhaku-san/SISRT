<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('dni', 8);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('apellido_p');
            $table->string('apellido_m');
            $table->string('nombres');
            $table->string('tipo');
            $table->boolean('habilitado')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->primary('dni');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
