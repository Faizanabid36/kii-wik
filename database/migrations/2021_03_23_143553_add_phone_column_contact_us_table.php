<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneColumnContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("contact_us", function (Blueprint $table) {
            $table->string('phone')->nullable();
            $table->string('job_position')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("contact_us", function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('job_position');
        });
    }
}
