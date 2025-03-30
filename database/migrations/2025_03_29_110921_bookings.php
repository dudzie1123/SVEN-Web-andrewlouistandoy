<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bookings')) {
            Schema::create('bookings', function (Blueprint $table) {
                $table->id();
                $table->date('booking_date');
                $table->string('booking_days');
                $table->string('booking_time');
                $table->string('note')->nullable();
                $table->timestamps('timestamp');
            });
        }
    }

    /**
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
