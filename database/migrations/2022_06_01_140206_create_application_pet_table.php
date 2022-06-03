<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationPetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_pet', function (Blueprint $table) {
            $table->id();
            $table->boolean('accepted')->default('0');
            $table->foreign("id")->references("id")->on("pet");


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_pet', function (Blueprint $table) {
            $table->dropForeign('application_pet_id_foreign');
        }); 
        Schema::dropIfExists('application_pet');
    }
}
