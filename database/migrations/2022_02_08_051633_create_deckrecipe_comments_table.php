<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeckrecipeCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deckrecipe_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('deckrecipe_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('body',200);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deck_recipe_comments');
    }
}
