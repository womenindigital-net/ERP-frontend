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
        Schema::create('drama_diary_evaluations', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();


            $table->json('বেসিক / ফাংশনাল এরিয়া')->nullable();
            $table->json('অন্যান এরিয়া')->nullable();


            // $table->string('understanding_the_character')->nullable();
            // $table->string('understanding_the_character_secondary')->nullable();
            // $table->string('being_able_to_understand_the_character_and_act')->nullable();
            // $table->string('being_able_to_understand_the_character_and_act_secondary')->nullable();
            // $table->string('say_three_lines_clearly_about_yourself')->nullable();
            // $table->string('say_three_lines_clearly_about_yourself_secondary')->nullable();
            // $table->string('be_able_to_present_fluently')->nullable();
            // $table->string('be_able_to_present_fluently_secondary')->nullable();
            // $table->string('the_vowel_will_be_pronounced_clearly')->nullable();
            // $table->string('the_vowel_will_be_pronounced_clearly_secondary')->nullable();
            // $table->string('be_able_to_memorize')->nullable();
            // $table->string('be_able_to_memorize_secondary')->nullable();
            // $table->string('being_able_to_speak_with_open_mouth')->nullable();
            // $table->string('being_able_to_speak_with_open_mouth_secondary')->nullable();
            // $table->string('mouth_tongue_exercises')->nullable();
            // $table->string('mouth_tongue_exercises_secondary')->nullable();
            // $table->string('being_able_to_tell_a_minute_story')->nullable();
            // $table->string('being_able_to_tell_a_minute_story_secondary')->nullable();
            // $table->string('being_able_to_bring_variation_in_words')->nullable();
            // $table->string('being_able_to_bring_variation_in_words_secondary')->nullable();
            // $table->string('being_able_to_speak_in_regional_tenses_or_other_accents')->nullable();
            // $table->string('being_able_to_speak_in_regional_tenses_or_other_accents_secondary')->nullable();
            // $table->string('after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue')->nullable();
            // $table->string('after_listening_to_the_dialogue_of_the_coartist_he_will_give_his_own_dialogue_secondary')->nullable();
            // $table->string('will_act_using_body_gestures')->nullable();
            // $table->string('will_act_using_body_gestures_secondary')->nullable();
            // $table->string('will_wait_for_his_turn_to_act')->nullable();
            // $table->string('will_wait_for_his_turn_to_act_secondary')->nullable();
            // $table->string('will_help_the_coartist')->nullable();
            // $table->string('will_help_the_coartist_secondary')->nullable();
            // $table->string('respect_for_the_coartist')->nullable();
            // $table->string('respect_for_the_coartist_secondary')->nullable();

            // $table->string('hold_attention')->nullable();
            // $table->string('hold_attention_secondary')->nullable();
            // $table->string('presentation')->nullable();
            // $table->string('presentation_secondary')->nullable();
            // $table->string('perticipating_drama')->nullable();
            // $table->string('perticipating_drama_secondary')->nullable();
            // $table->string('will_take_part_in_the_play_with_everyone')->nullable();
            // $table->string('will_take_part_in_the_play_with_everyone_secondary')->nullable();
            // $table->string('self_doing_ownwork')->nullable();
            // $table->string('self_doing_ownwork_secondary')->nullable();
            // $table->string('others')->nullable();
            // $table->string('others_secondary')->nullable();
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
        Schema::dropIfExists('drama_diary_evaluations');
    }
};
