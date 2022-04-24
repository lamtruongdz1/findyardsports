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
        Schema::create('partners', function (Blueprint $table) {
            $table->id();
            $table->string('name',150);
            $table->string('email',150)->unique();
            $table->string('password',150);
            $table->string('phone',15)->unique();
            $table->string('yard_name',150)->nullable();
            $table->string('time_open')->nullable();
            $table->string('time_close')->nullable();
            $table->longText('address')->nullable();
            $table->boolean('active')->default(false);
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
        Schema::dropIfExists('partners');
    }
};
