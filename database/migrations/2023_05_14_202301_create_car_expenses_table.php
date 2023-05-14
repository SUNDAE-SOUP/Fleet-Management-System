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
        Schema::create('car_expenses', function (Blueprint $table) {
            $table->foreignId('vehicle_id')->nullable()->constrained();
            $table->foreignId('request_history_id')->nullable()->constrained();
            $table->string('total_expenses')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_expenses');
    }
};
