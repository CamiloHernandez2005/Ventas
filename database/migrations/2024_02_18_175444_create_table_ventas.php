<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('id_cliente');
            $table->string('fecha');
            $table->string('numero_factura');
            $table->string('vendedor');
            $table->string('forma_pago');
            $table->string('valor');
            $table->string('observaciones');
            $table->string('total_bruto');
            $table->string('total_impcargo');
            $table->string('total_neto');
            $table->string('valor_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
