<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolClassUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_class_user', function (Blueprint $table) {
			$table->unsignedInteger('user_id');
			$table->unsignedInteger('school_class_id');
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('school_class_id')->references('id')->on('school_classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('school_class_user');
    }
}
