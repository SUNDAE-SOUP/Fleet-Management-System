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
        Schema::create('4th_request_categories', function (Blueprint $table) {
            $table->id();
            $table->name('name')->nullable();
            $table->foreignId('3rd_request_category_id')->nullable()-constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('4th_request_categories');
    }
};
