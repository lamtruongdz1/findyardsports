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
        Schema::create('types_yard', function (Blueprint $table) {
            $table->id();
            $table->string('name',150)->unique();
            $table->string('slug',150)->unique();
            $table->string('type',150)->unique();
            $table->timestamps();
            // $table->foreignId('id')->references('id_districts')->on('yards');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('types_yard');
    }
};
