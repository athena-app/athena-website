<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\Models\Topic;

class CreateTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics', function (Blueprint $table) {
            $table->increments('id')->comment("The ID of the Topic");
            $table->integer('subject_id')->unsigned()->index()->nullable()->comment("The ID of the Topic's Subject");
            $table->foreign('subject_id')->references('id')->on('subjects')->comment("The Subject ID references the ID column in the Subjects table");
            $table->string('name', 100)->comment("The name of the Topic");
            $table->timestamp('created_at')->comment("The time the Topic was created")->nullable();
            $table->timestamp('updated_at')->comment("The time the Topic was last updated")->nullable();
            $table->timestamp('deleted_at')->comment("The time the Topic was deleted")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topics');
    }
}
