<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainTitleCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_title_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('alt_name')->nullable();
            $table->string('card_description')->nullable();
            $table->string('main_description')->nullable();
            $table->string('card_border')->nullable();
            $table->string('image_path')->nullable();
            $table->string('tag')->nullable();
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
        Schema::dropIfExists('main_title_cards');
    }
}
