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
        //Name
            $table->string('firstname')->nullable();
            $table->string('middlename')->nullable();
            $table->string('lastname')->nullable();
            
        //Basic Info
            $table->string('gender');
            $table->integer('age')->nullable();
            $table->date('date_of_birth');
            $table->integer('country_id'); // relates to country table one to one

            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->string('breast_size')->nullable();
            $table->integer('belly_size')->nullable();
            $table->integer('hip_size')->nullable();
         
            $table->string('piercing_detail')->nullable();
            $table->boolean('tattoos_detail');
            

            $table->string('ethnicity')->nullable();
            $table->string('skin_color')->nullable();
            $table->string('eye_color')->nullable();
            $table->string('hair_color')->nullable();

        //Boolean Data
            $table->boolean('natural_breast')->nullable();
            $table->boolean('is_redhead')->nullable();
            $table->boolean('bubble_butt')->nullable();
            $table->boolean('piercing')->nullable();
            $table->boolean('tattoos');

            $table->boolean('does_interracial')->nullable();
            $table->boolean('does_anal')->nullable();
            $table->boolean('does_dp')->nullable();
            $table->boolean('does_gangbang')->nullable();
            $table->boolean('does_threesome')->nullable();
            $table->boolean('does_lesbian')->nullable();
            $table->boolean('is_retired')->nullable();

            


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
