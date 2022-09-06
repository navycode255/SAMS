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
        Schema::create('groups', function (Blueprint $table) {
            $table->increments('id');
            $table->string('group_name');
            $table->string('address');
            $table->string('chairperson_name');
            $table->integer('secretary_name');
            $table->string('accountant_name');
            $table->string('phone_number1');
            $table->string('phone_number2');
            $table->unsignedBigInteger('status');
            $table->string('post_address');
            $table->integer('Loan_status');
            $table->unsignedBigInteger('membership_type');
            $table->timestamps();

            //the foreign key from member table
            $table->foreign('membership_type') ->references('id') ->on('member_types')->OnDelete('cascade');;
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
        Schema::dropIfExists('groups');
    }
};
