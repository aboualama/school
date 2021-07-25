<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustodiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custodies', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
			$table->integer('item_no')->nullable();
			$table->string('item_name')->nullable();
			$table->string('item_des', 255)->nullable();
			$table->string('item_status')->nullable();
			$table->string('item_type')->nullable();
			$table->integer('quantity')->nullable(); 
			$table->date('insert_date')->nullable();
			$table->integer('notebook_no');
			$table->integer('notebook_name')->nullable();
			$table->string('unit')->nullable();
			$table->integer('shortage')->nullable();
			$table->integer('record_no')->nullable();
			$table->string('record_description')->nullable();
			$table->string('notes')->nullable();
			$table->integer('serial_number')->nullable();
			$table->string('received_date')->nullable();
			$table->string('received_signature')->nullable();
			$table->string('recipient_signature')->nullable();
			$table->string('retrieved_date')->nullable();
			$table->integer('public_number')->nullable();
			$table->integer('private_number')->nullable();
			$table->integer('receipt_number')->nullable();
			$table->string('book_supplier')->nullable();
			$table->string('author')->nullable();
			$table->string('book_title')->nullable();
			$table->string('publisher')->nullable();
			$table->string('place_of_publication')->nullable();
			$table->string('date_of_publication')->nullable(); 
			$table->foreignId('years_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
			$table->foreignId('custody_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
			$table->foreignId('school_record_type_id')->constrained()->onUpdate('cascade')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('custodies');
    }
}
