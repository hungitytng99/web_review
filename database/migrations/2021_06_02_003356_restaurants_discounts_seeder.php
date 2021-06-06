<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestaurantsDiscountsSeeder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants_discounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('discounts_id')
                ->constrained('discounts')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('restaurants_id')
                ->constrained('restaurants')
                ->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('restaurants_discounts');
    }
}
