<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApiSubscribersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_subscribers', function (Blueprint $table) {
            $table->increments('api_subscriber_id');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->timestamps();
            $table->softDeletes();

            // unique key
            $table->unique('email');

            // indexes
            $table->index(['email', 'password']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('api_subscribers');
    }
}
