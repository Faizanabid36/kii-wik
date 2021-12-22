<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('lastname')->nullable();
            $table->enum('role',['user','admin','freelancer','company'])->default('user');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tag')->nullable();
            $table->string('loc')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('cnic')->nullable();
            $table->string('gender')->nullable();
            $table->string('description')->nullable();
            $table->date('dob')->nullable();
            $table->boolean('is_approved')->default(0);
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
