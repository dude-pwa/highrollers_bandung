<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('color');
            $table->integer('size_s');
            $table->integer('size_m');
            $table->integer('size_l');
            $table->integer('size_ll');
            $table->integer('size_xl');
            $table->integer('size_xxl');
            $table->integer('size_xxxl');
            $table->float('price_normal', 20, 2);
            $table->float('price_over_size', 20, 2);
            $table->integer('qty_topi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
