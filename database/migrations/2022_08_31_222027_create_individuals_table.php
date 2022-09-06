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
        Schema::create('individuals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('sname');
            $table->string('id_type');
            $table->string('Id_number');
            $table->enum('gender', ['m', 'f']);
            $table->string('maritial_status');
            $table->string('next_of_kin');
            $table->string('employer_name');
            $table->string('business_name');
            $table->string('spous');
            $table->string('description');
            $table->string('education_level');
            $table->string('occupation');
            $table->string('physical_address');
            $table->string('postal_address');
            $table->string('DOB');
            $table->unsignedBigInteger('status');
            $table->string('post_address');
            $table->integer('Loan_status');
            $table->string('citizenship');
            $table->unsignedBigInteger('membership_type');
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
        Schema::dropIfExists('individuals');
    }
};
