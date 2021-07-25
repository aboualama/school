<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_counts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
			$table->integer('count');
			$table->foreignId('class_room_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
			$table->foreignId('year_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_counts');
    }
}
