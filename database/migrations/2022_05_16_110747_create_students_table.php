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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->enum('type', ['online', 'offline'])->default('offline');
            $table->string('dob')->nullable();
            $table->string('gender');
            $table->string('blood_groop')->nullable();
            $table->string('suborno_card_no')->nullable();
            $table->string('nid')->nullable();
            $table->string('image')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('present_address');
            $table->text('permanent_address');
            $table->foreignIdFor(\App\Models\User::class)->nullable()->constrained()->cascadeOnDelete();
            $table->boolean('approved_for_observation')->default(0);
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
        Schema::dropIfExists('students');
    }
};
