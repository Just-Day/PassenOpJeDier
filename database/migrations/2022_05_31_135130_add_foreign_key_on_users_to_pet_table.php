<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyOnUsersToPetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       /** Schema::table('pet', function (Blueprint $table) {
          *  $table->foreign('user')->references('email')->on('users');
        *});*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /**Schema::table('pet', function (Blueprint $table) {
            $table->dropForeign('pet_user_foreign');**/
       // });
    }
}
