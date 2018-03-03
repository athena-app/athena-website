<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use app\Models\Subject;

class CreateSubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id')->comment("The ID of the Subject");
            $table->string('name', 100)->comment("The name of the Subject");
            $table->timestamp('created_at')->comment("The time the Subject was created")->nullable();
            $table->timestamp('updated_at')->comment("The time the Subject was last updated")->nullable();
            $table->timestamp('deleted_at')->comment("The time the Subject was deleted")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjects');
    }
}
