<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->id();
/*            $table->unsignedBigInteger("empresa_id");*/
            $table->string("nombre", 50);
            $table->string("apellidos", 100);
            $table->string("slug");
            $table->date("fechaPermisoConducir");
            $table->string("imagen");
            $table->timestamps();
/*            $table->foreign("empresa_id")->references("id")->on("empresas");*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transportistas');
    }
}
