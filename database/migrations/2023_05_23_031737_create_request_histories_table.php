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
        Schema::create('request_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_assigned_vehicle_id')->nullable()->constrained();
            $table->string('particulars')->nullable();
            $table->foreignId('mode_of_transaction_id')->nullable()->constrained();
            $table->foreignId('type_of_request_id')->nullable()->constrained();
            $table->decimal('quotation_amount', $precision = 8, $scale = 2)->nullable();
            $table->decimal('fleet_nego_amount', $precision = 8, $scale = 2)->nullable();
            $table->string('shop_name')->nullable();
            $table->foreignId('status_id')->nullable()->constrained();
            $table->date('date_of_submission')->nullable();
            $table->date('date_of_evaluation')->nullable();
            $table->date('date_of_approval')->nullable();
            $table->string('po_number')->nullable();
            $table->date('po_date')->nullable();
            $table->string('po_copy')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_histories');
    }
};
