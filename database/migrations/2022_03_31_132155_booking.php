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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->BigInteger('user_id');
            $table->string('name',150);
            $table->date('date');
            $table->time('time');
            $table->BigInteger('time_da');
            $table->string('phone',150);
            $table->string('total_price',150);
            $table->string('pay_booblean',150);
            $table->string('address',150);
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
        Schema::dropIfExists('bookings');
    }
};
