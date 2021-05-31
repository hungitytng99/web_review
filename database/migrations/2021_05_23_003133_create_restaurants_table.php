<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
<<<<<<< HEAD
            $table->string('id')->unique();
=======
            $table->id();
            $table->string('linkTo');
>>>>>>> fe8b7cd52930dd744c9fd54e07a89ff4dca36c32
            $table->string('name');
            $table->string('location');
            $table->float('rate');
            $table->string('phone')->nullable();
            $table->float('sale_percent');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('restaurants');
    }
}
