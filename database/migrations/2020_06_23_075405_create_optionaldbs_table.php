<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionaldbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('optionaldbs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titlepage');
            $table->string('email');
            $table->string('instagram');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('optionaldbs');
    }
}
