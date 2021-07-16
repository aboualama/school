<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOtherSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('other_settings', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
			$table->integer('agents');
			$table->integer('administrators');
			$table->integer('teachers');
			$table->integer('users');
			$table->integer('guards');
			$table->integer('primary_no');
			$table->integer('middle_no');
			$table->integer('secondary_no');
			$table->foreignId('year_id')->constrained();
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('other_settings');
    }
}
