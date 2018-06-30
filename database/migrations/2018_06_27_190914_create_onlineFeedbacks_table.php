<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbackon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_heard_from');
            $table->integer('userfriendly');
            $table->integer('design');
            $table->integer('diversity');
            $table->integer('helpavailability');
            $table->integer('innovation');
            $table->integer('recommend');
            $table->integer('overall');
            $table->boolean('yes_no');
            $table->text('suggestions')->nullable();
            $table->integer('event_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('feedbackon', function($table){
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropForeign(['event_id']);
        Schema::dropIfExists('feedbackon');
    }
}
