<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubMainInfoCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_main_info_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('main_title_cards_id')->unsigned();
            $table->string('title')->nullable();
            $table->string('alt_name')->nullable();
            $table->string('card_description')->nullable();
            $table->string('main_description')->nullable();
            $table->text('story')->nullable();
            $table->string('image_path')->nullable();
            $table->string('tag')->nullable();
            $table->timestamps();

            $table->foreign('main_title_cards_id')->references('id')->on('main_title_cards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_main_info_cards');
    }
}
