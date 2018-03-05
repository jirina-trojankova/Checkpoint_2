<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Emergencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('categories', function (Blueprint $emergencies) {
            $emergencies->increments('id');

            $emergencies->integer('hero_id', 'nullable');
            $emergencies->integer('user_id', 'nullable');
            $emergencies->string('subject', 'nullable');
            $emergencies->string('description', 'nullable');

            $emergencies->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
