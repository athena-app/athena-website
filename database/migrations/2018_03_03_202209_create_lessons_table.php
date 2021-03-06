<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\Models\Lesson;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id')->comment("The ID of the Lesson");
            $table->integer('subtopic_id')->unsigned()->index()->nullable()->comment("The ID of the Topic's Location");
            $table->foreign('subtopic_id')->references('id')->on('subtopics')->comment("The Topic ID references the ID column in the Topics table");
            $table->string('name', 255)->comment("The name of the Well");
            $table->string('video_url', 255)->comment("The Lessons video");
            $table->text('description')->comment("Description of video")->nullable();
            $table->string('keywords', 500)->comment("Keywords used for searching")->nullable();
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
        Schema::dropIfExists('lessons');
    }
}
