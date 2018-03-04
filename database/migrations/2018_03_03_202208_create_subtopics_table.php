<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Subtopic;

class CreateSubtopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subtopics', function (Blueprint $table) {
            $table->increments('id')->comment("The ID of the Subtopic");
            $table->integer('topic_id')->unsigned()->index()->nullable();
            $table->foreign('topic_id')->references('id')->on('topics');
            $table->string('name', 100)->comment("The name of the Subtopic");
            $table->timestamp('created_at')->comment("The time the Lesson was created")->nullable();
            $table->timestamp('updated_at')->comment("The time the Lesson was last updated")->nullable();
            $table->timestamp('deleted_at')->comment("The time the Lesson was deleted")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subtopics');
    }
}
