<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_houses', function (Blueprint $table) {
            $table->id();
            $table->string("user");
            $table->string("review");
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
        Schema::table('review_houses', function (Blueprint $table) {
            $table->dropForeign('review_houses_id_foreign');
        });
        Schema::dropIfExists('review_houses');
    }
}
