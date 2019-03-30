<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                ->on('users');
            $table->bigInteger('subscription_plan_id')->unsigned();
            $table->foreign('subscription_plan_id')->references('id')
                ->on('subscription_plans');
            $table->string('title');
            $table->string('slug');
            $table->date('start_date');
            $table->date('end_date');
            $table->bigInteger('delivery_id')->unsigned();
            $table->foreign('delivery_id')->references('id')
                ->on('deliveries');
            $table->integer('delivery_price')->nullable();
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
        Schema::dropIfExists('subscriptions');
    }
}
