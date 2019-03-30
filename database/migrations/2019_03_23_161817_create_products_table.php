<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')
                ->on('users')->ondelete('cascade');
            $table->bigInteger('ad_category_id')->unsigned();
            $table->foreign('ad_category_id')->references('id')
                ->on('ad_categories');
            $table->bigInteger('subscription_id')->unsigned();
            $table->foreign('subscription_id')->references('id')
                ->on('subscriptions');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->string('type')->default('new');
            $table->integer('previous_price')->default('0');
            $table->integer('current_price')->default('0');
            $table->float('discount',4,1)->nullable();
            $table->float('vat',4,1)->nullable();
            $table->text('default_image')->nullable();
            $table->text('images')->nullable();
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
        Schema::dropIfExists('products');
    }
}
