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
        Schema::create('leave_applications', function (Blueprint $table) {
            $table->id();
            $table->string('reason')->nullable();
            $table->string('employee')->nullable();
            $table->string('support_employee')->nullable();
            $table->string('duration_in_days')->nullable();
            $table->string('duration_in_hours')->nullable();
            $table->string('address_at_leave')->nullable();
            $table->string('phone_at_leave')->nullable();
            $table->string('available_leave_ttachment')->nullable();
            $table->string('type')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('duration')->nullable();
            $table->string('is_houe')->nullable();
            $table->string('avl_time')->nullable();
            $table->string('half_day')->nullable();
            $table->string('hour')->nullable();
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
        Schema::dropIfExists('leave_applications');
    }
};
