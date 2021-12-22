<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsInVerificationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('verification_documents', function (Blueprint $table) {
            $table->string('state')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('registration_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('verification_documents', function (Blueprint $table) {
            $table->dropColumn('state');
            $table->dropColumn('email');
            $table->dropColumn('phone');
            $table->dropColumn('registration_no');
        });
    }
}
