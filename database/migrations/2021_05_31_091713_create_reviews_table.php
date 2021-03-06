<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                    ->constrained('users')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('restaurant_id')
                    ->constrained('restaurants')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->foreignId('dish_id')
                    ->constrained('dishes')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
            $table->string('comment', 100);
            $table->decimal('rate', 2, 1);
            $table->text('images');
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
        Schema::dropIfExists('reviews');
    }
}
