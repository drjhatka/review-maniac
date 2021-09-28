<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biographies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();

            $table->integer('age')->nullable();
            $table->integer('country_id'); // relates to country table one to one

            $table->float('height')->nullable();
            $table->string('breast_size')->nullable();
            $table->integer('belly_size')->nullable();
            $table->integer('hip_size')->nullable();
            $table->boolean('bubble_butt')->nullable();
            $table->boolean('natural_breast')->nullable();
            $table->string('piercing')->nullable();

            $table->string('ethnicity')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();

            $table->boolean('is_retired')->nullable();
            $table->boolean('is_redhead')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('biographies');
    }
}
