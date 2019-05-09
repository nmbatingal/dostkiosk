<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_cards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sub_card_id')->unsigned();
            $table->text('story')->nullable();
            $table->timestamps();

            $table->foreign('sub_card_id')->references('id')->on('sub_main_info_cards')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children_cards');
    }
}
