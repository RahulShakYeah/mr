<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->longText('company_logo');
            $table->string('job_title');
            $table->longText('job_description');
            $table->enum('job_level',['Senior','Mid','Junior']);
            $table->integer('number_of_vacancy');
            $table->enum('employement_type',['full-time','part-time']);
            $table->string('education_level');
            $table->string('experience');
            $table->string('salary');
            $table->date('exp_date');
            $table->string('location');
            $table->enum('status',['active','inactive'])->default('inactive');
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
        Schema::dropIfExists('jobs');
    }
}
