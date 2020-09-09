<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPizzaIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pizza_ingredients', function (Blueprint $table) {
            $table->foreign('ingredient_id', 'fk_ingredient_id')->references('id')->on('ingredient')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('pizza_id', 'pizza_id')->references('id')->on('pizza')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pizza_ingredients', function (Blueprint $table) {
            $table->dropForeign('fk_ingredient_id');
            $table->dropForeign('pizza_id');
        });
    }
}
