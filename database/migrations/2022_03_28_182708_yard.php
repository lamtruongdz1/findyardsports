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
        Schema::create('districts', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique();
            $table->string('slug',150)->unique();
            $table->timestamps();
        });

        Schema::create('yards', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('id_districts')->default(1);
            $table->foreign('id_districts')->references('id')->on('districts');
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
