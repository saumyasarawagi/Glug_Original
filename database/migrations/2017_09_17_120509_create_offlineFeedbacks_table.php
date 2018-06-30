<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfflineFeedbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedbackoff', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event_heard_from');
            $table->integer('content');
            $table->integer('presentation');
            $table->integer('speaker');
            $table->integer('support_staff');
            $table->integer('organization');
            $table->integer('location');
            $table->integer('recommend');
            $table->integer('overall');
            $table->boolean('yes_no');
            $table->text('suggestions')->nullable();
            $table->integer('event_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('feedbackoff', function($table){
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
        Schema::dropIfExists('feedbackoff');
    }
}
