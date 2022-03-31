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
        Schema::create('yards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            // $table->foreignId('districts_id')->constrained('districts')->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->string('price');
            $table->longText('img');
            $table->string('view')->default('0');
            $table->string('time_open')->default('08:00');
            $table->string('time_close')->default('23:00');
            $table->string('total_booking')->default('0');
            $table->longText('address');
            $table->longText('description')->nullable();
            $table->boolean('status')->default('1');
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
        Schema::dropIfExists('yards');
    }
};
