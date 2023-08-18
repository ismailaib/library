<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commands', function (Blueprint $table) {
            $table->foreign('id_book')->references('id')->on('books');
        });
    }

    public function down()
    {
        Schema::table('commands', function (Blueprint $table) {
            $table->dropForeign(['id_book']);
        });
    }
}
