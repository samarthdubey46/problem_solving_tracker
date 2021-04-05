<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name');
            $table->date('solvedOn')->useCurrent();
            $table->enum('Status', ['Accepted', 'Rejected', 'Wrong Answer', 'Runtime error', 'Time Limit Exceed', 'Memory Limit Exceed', 'Compilation Error']);
            $table->integer('submitCount')->nullable();
            $table->decimal('readingTime')->nullable();
            $table->decimal('thinkingTime')->nullable();
            $table->decimal('codingTime')->nullable();
            $table->decimal('debugTime')->nullable();
            $table->decimal('totalTime')->nullable();
            $table->integer('problemLevel')->nullable();
            $table->text('url')->nullable();
            $table->enum('byYourself', ['Yes', 'No', 'Hint'])->nullable();
            $table->string('Category')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
}
