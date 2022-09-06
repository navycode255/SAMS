<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('location');
            $table->string('email');
            $table->integer('phone_number1');
            $table->string('phone_number2');
            $table->integer('Loan_status');
            $table->string('registration_number');
            $table->unsignedBigInteger('status');
            $table->unsignedBigInteger('membership_type');
            $table->string('post_address');
            $table->timestamps();
            //the foreign key from member table
            $table->foreign('membership_type')->references('id') ->on('member_types')->OnDelete('cascade');
            $table->foreign('status') ->references('id') ->on('statuses')->OnDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
};
