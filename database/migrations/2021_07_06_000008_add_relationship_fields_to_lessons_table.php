<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToLessonsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::table('lessons', function (Blueprint $table) {
            $table->unsignedInteger('teacher_id');
			$table->unsignedInteger('class_id');
			$table->foreign('teacher_id')->references('id')->on('users');
			$table->foreign('class_id')->references('id')->on('school_classes');
        });
    }
}
