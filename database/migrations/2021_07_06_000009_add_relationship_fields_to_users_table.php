<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedInteger('class_id')->nullable();
            $table->foreign('class_id', 'class')->references('id')->on('school_classes');
        });
    }
}