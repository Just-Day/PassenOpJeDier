<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pet', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("kind");
            $table->foreign("kind")->references("kind")->on("kind_of_pet");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pet', function (Blueprint $table) {
            $table->dropForeign('pet_kind_foreign');
        });

        Schema::dropIfExists('pet');
    }
}
