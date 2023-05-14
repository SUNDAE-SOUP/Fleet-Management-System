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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('plate_no')->nullable()->unique();
            $table->string('year_model')->nullable();
            $table->foreignId('model_id')->nullable()->constrained();
            $table->string('engine_no')->nullable();
            $table->string('chassis_no')->nullable();
            $table->date('date_acquired')->nullable();
            $table->date('date_due')->nullable();
            $table->date('lto_renewal_date')->nullable();
            $table->string('lto_or_copy')->nullable();
            $table->string('lto_cr_copy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
};
