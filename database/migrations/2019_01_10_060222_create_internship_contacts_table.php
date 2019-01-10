<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('internship_id');
            $table->string('name');
            $table->string('email');
            $table->string('college');
            $table->string('city');
            $table->integer('phone_no');
            $table->integer('study_year');
            $table->integer('course');
            $table->text('area_of_interest');
            $table->text('who_is_your_role_model_in_life');
            $table->text('what_type_of_internship_are_you_looking_forward_to');
            $table->text('in_which_field_are_you_looking_forward_to_intern');
            $table->text('additional_answer_1');
            $table->text('additional_answer_2');
            $table->text('additional_answer_3');
            $table->text('additional_answer_4');
            $table->text('additional_answer_5');
            $table->boolean('is_permitted_for_future_communication');
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
        Schema::dropIfExists('internship_contacts');
    }
}
