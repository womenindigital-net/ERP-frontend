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
        Schema::create('reporting_memos', function (Blueprint $table) {
            $table->id();
            $table->string('depertment')->nullable();
            $table->string('job_contact_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('joining_date')->nullable();
            $table->string('search')->nullable();
            $table->string('title')->nullable();
            $table->string('notice_type')->nullable();
            $table->string('Message')->nullable();
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
        Schema::dropIfExists('reporting_memos');
    }
};
