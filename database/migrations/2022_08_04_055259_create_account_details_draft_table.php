<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountDetailsDraftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_details_draft', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('bank_id');
            $table->string('bank_short_name')->nullable();
            $table->foreign('bank_id')->references('id')->on('bank_names')->onDelete('cascade');
            $table->string('account_number');
            $table->string('confirmation_account_number');
            $table->string('bank_branch');
            $table->string('account_name');
            $table->string('source')->nullable();
            $table->integer('account_type');
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
        Schema::dropIfExists('account_details_draft');
    }
}
