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
        Schema::create('budget_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('startdate')->nullable();
            $table->string('name')->nullable();
            $table->string('enddate')->nullable();
            $table->string('note')->nullable();
            $table->string('isactive')->nullable();

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
        Schema::dropIfExists('budget_reviews');
    }
};
