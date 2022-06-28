<?php

use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function (Blueprint $table) {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('users')->cascadeOnDelete();

            $table->json('pragmatic_objective')->nullable();
            $table->json('personal')->nullable();
            $table->json('topic_maintenance')->nullable();
            $table->json('conversational_structure')->nullable();
            $table->json('word_structure')->nullable();
            $table->json('manner_effectiveness')->nullable();
            $table->json('repair_structures')->nullable();
            $table->json('responsiveness')->nullable();
            $table->json('instrumental_states_needs')->nullable();
            $table->json('requesting')->nullable();
            $table->json('prosody')->nullable();
            $table->json('protests')->nullable();
            $table->json('style_of_conversation')->nullable();
            $table->json('humor')->nullable();
            $table->json('greetings_acknowledgements')->nullable();
            $table->json('problem_solving')->nullable();
            $table->json('deceit')->nullable();
            $table->json('academy_communication')->nullable();
            $table->json('nonverbal_communication')->nullable();
            $table->json('perspective_taking')->nullable();
            $table->json('regulatory_gives_commands')->nullable();
            $table->json('social_emotional')->nullable();
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
        Schema::dropIfExists('socials');
    }
};
