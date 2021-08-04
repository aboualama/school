<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
			$table->enum('type', ['input', 'output', 'missing', 'retrieved', 'damaged', 'transported']); 
			$table->string('date');
			$table->string('files');
			$table->foreignId('year_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
			$table->foreignId('custody_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade');   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notes');
    }
} 