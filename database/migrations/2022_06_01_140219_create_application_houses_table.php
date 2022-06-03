<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application_houses', function (Blueprint $table) {
            $table->id();
            $table->boolean('accepted')->default('0');
            $table->foreign("id")->references("id")->on("houses");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('application_houses', function (Blueprint $table) {
            $table->dropForeign('application_houses_id_foreign');
        }); 
        Schema::dropIfExists('application_houses');
    }
}
