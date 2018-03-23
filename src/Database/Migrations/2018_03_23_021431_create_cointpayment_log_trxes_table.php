<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCointpaymentLogTrxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cointpayment_log_trxes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('payment_id');
            $table->string('payment_address');
            $table->string('coin');
            $table->string('status_text');
            $table->string('status')->default(0);
            $table->datetime('payment_created_at');
            $table->datetime('expired');
            $table->datetime('confirmation_at')->nullable();
            $table->double('amount', 20, 8);
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
        Schema::dropIfExists('cointpayment_log_trxes');
    }
}