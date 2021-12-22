<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVerificationDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verification_documents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string("pin");
            $table->string("pn");
            $table->enum('criminal', ["yes", "no"])->default('no');;
            $table->enum('awards', ["yes", "no"])->default('no');;
            $table->string("award_attach");
            $table->enum('certifications', ["yes", "no"])->default('no');;
            $table->enum('status', ["1", "0"])->default('0');;
            $table->string("certifications_attach");
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
        Schema::dropIfExists('verification_documents');
    }
}
