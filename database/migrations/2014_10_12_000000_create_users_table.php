<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('name',100)->default('bek imad');
            $table->string('email',100)->unique()->default('bek.im@gmail.com');
            $table->string('password',191)->default('123456');
            $table->string('type')->default(\App\User::NORMAL_USER);
            $table->date('Birth_Date')->default('1998-08-08');
            $table->integer('phone_number')->default(791750868);
            $table->string('location')->default('Algeria, Boussouf');
            $table->string('verified')->default(\App\User::UNVERIFIED_USER);
            $table->string('verification_token')->nullable();
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
        Schema::dropIfExists('users');
    }
}
