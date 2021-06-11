<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DishesRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dishes_restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dishes_id')
                ->constrained('dishes')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('restaurants_id')
                ->constrained('restaurants')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->boolean('isOutstandingDish')->default(false);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dishes_restaurants');
    }
}
