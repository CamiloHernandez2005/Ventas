<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('dates');
            $table->string('bill_numbers');    
            $table->string('sellers');
            $table->string('payments_methods');
            $table->string('observations');
            $table->decimal('discounts_total');
            $table->decimal('gross_totals');
            $table->decimal('taxes_total');
            $table->decimal('net_total');
            $table->decimal('values_total');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
