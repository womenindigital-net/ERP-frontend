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
        Schema::create('job_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('depertment')->nullable();
            $table->string('applicant_name')->nullable();
            $table->string('workStation')->nullable();
            $table->string('start_date')->nullable();
            $table->string('log')->nullable();
            $table->string('basic_salary')->nullable();
            $table->string('house_allowence')->nullable();
            $table->string('madical_allowance')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('job_contacts');
    }
};
