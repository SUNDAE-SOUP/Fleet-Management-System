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
        Schema::create('request_particulars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mode_of_transaction_id')->nullable()->constrained();
            $table->foreignId('type_of_request_id')->nullable()->constrained();
            $table->foreignId('3rd_request_category_id')->nullable()->constrained();
            $table->foreignId('4th_request_category_id')->nullable()->constrained();
            $table->boolean('is_credit_card_within_limit')->nullable();
            $table->string('reason_for_cash_payment')->nullable();
            $table->boolean('how_many_liters')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_particulars');
    }
};
