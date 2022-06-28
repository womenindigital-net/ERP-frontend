<?php

use App\Models\Student;
use App\Models\User;
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
        Schema::create('functional_communications', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->json('speech')->nullable();
            $table->json('body_language')->nullable();
            $table->json('words_usages_vocabulary')->nullable();
            $table->json('sentence_structure')->nullable();
            $table->json('relaying_information')->nullable();
            $table->json('following_directions')->nullable();
            $table->json('attention_and_memory')->nullable();
            $table->json('conversation_social_communication')->nullable();
            $table->json('play_skill')->nullable();


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
        Schema::dropIfExists('functional_communications');
    }
};
