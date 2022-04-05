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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title',150);
            $table->string('source',150);
            $table->string('time',150);
            $table->string('slug',150);
            // $table->string('author',150)->unique();
            $table->longText('description');
            $table->string('images',150);
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
        Schema::dropIfExists('blogs');
    }
};
