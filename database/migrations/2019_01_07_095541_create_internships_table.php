<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('city_id');
            $table->string('title');
            $table->text('internship_logo');
            $table->date('internship_start_date');
            $table->date('internship_end_date');
            $table->date('internship_deadline');
            $table->integer('no_of_internship_available');
            $table->boolean('is_paid');
            $table->integer('any_stipend');
            $table->integer('internship_duration');
            $table->text('about_brand');
            $table->text('about_internship');
            $table->text('internship_criteria');
            $table->text('internship_perks');
            $table->string('location');
            $table->text('internship_q1');
            $table->text('internship_q2');
            $table->text('internship_q3');
            $table->text('internship_q4');
            $table->text('internship_q5');
            $table->boolean('status');
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
        Schema::dropIfExists('internships');
    }
}
