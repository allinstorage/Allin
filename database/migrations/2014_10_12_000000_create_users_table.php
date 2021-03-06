<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
	    $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password');
			//$table->boolean('confirmed')->default(0);
			$table->boolean('activated')->default(false);
			//$table->string('confirmation_code')->nullable();
            $table->integer('role_id')->unsigned();
            $table->integer('package_id')->unsigned();
            $table->string('job_title');
            $table->string('address');
            $table->string('mobile');
			$table->string('account_number');
            $table->string('avatar');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
