<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mcqs', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->string('qui')->nullable();
            $table->enum('status',['easy','average','hard'])->nullable();

            $table->string('choose1')->nullable();
            $table->string('choose2')->nullable();
            $table->string('choose3')->nullable();
            $table->string('choose4')->nullable();
            $table->string('choose5')->nullable();
            $table->string('choose6')->nullable();

            $table->string('true1')->nullable();
            $table->string('true2')->nullable();
            $table->string('true3')->nullable();
            $table->string('true4')->nullable();
            $table->string('true5')->nullable();
            $table->string('true6')->nullable();
            
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
        Schema::dropIfExists('mcqs');
    }
};
