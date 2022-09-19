<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicinas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string ('Laboratorio');
            $table->string('Formula');
            $table->text('Descripcion');
            $table->float('PrecioCosto');
            $table->float('PrecioVenta');
            $table->integer('Existencias');
            $table->enum('posted', ['yes', 'not']);
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
        Schema::dropIfExists('medicinas');
    }
};
