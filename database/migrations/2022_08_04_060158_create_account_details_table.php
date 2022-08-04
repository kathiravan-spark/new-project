<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_details', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->unsignedBigInteger('account_draft_id');
            $table->foreign('account_draft_id')->references('id')->on('account_details_draft')->onDelete('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('bank_id');
            $table->foreign('bank_id')->references('id')->on('bank_names')->onDelete('cascade');
            $table->string('bank_short_name')->nullable();
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
        Schema::dropIfExists('account_details');
    }
}
