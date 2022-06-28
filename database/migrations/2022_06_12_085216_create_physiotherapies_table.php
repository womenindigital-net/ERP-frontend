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
        Schema::create('physiotherapies', function(Blueprint $table)
        {
            $table->id();
            $table->string('collection_date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->nullable()->constrained('students')->cascadeOnDelete();


            $table->json('general')->nullable();
            $table->json('visual_perception')->nullable();
            $table->json('activities_of_daily_living')->nullable();
            $table->json('strength')->nullable();
            $table->json('functional_gross_motor')->nullable();
            $table->json('transitional_movements')->nullable();
            $table->json('fine_motor_skill')->nullable();
            $table->json('automatic_reaction')->nullable();
            $table->json('sensory_skill_normal_hypo_response')->nullable();
            $table->json('cognitive_skills')->nullable();
            $table->json('treatment')->nullable();
            $table->json('signature')->nullable();
            $table->json('muscle_power')->nullable();
            $table->json('muscle_tone')->nullable();
            $table->json('behavior')->nullable();
            $table->json('domain_area')->nullable();
           
            // $table->string('birth_history')->nullable();
            // $table->string('before_birth')->nullable();
            // $table->string('pregnancy')->nullable();
            // $table->string('during_birth')->nullable();
            // $table->string('delivery')->nullable();
            // $table->string('after_birth')->nullable();
            // $table->string('history')->nullable();
            // $table->string('medication_treatment')->nullable();
            // $table->string('any_present_medicines')->nullable();
            // $table->string('home_equipment')->nullable();

            // $table->string('visual_discrimination')->nullable();
            // $table->string('visual_memory')->nullable();
            // $table->string('visual_figure_ground')->nullable();
            // $table->string('visual_spatial')->nullable();
            // $table->string('oral_motor')->nullable();
            // $table->string('sucking')->nullable();
            // $table->string('drooling')->nullable();
            // $table->string('swollen')->nullable();
            // $table->string('chewing')->nullable();
            // $table->string('choking')->nullable();
            // $table->string('drinking')->nullable();

            // $table->string('eating')->nullable();
            // $table->string('brushing_teeth')->nullable();
            // $table->string('dressing')->nullable();
            // $table->string('toilet')->nullable();
            // $table->string('bathing')->nullable();
            // $table->string('does_the_child_attend_school')->nullable();
            // $table->string('enter_your_name')->nullable();
            // $table->string('leisure_or_play_activities_of_interest')->nullable();

            // $table->string('please_explain_strength_area')->nullable();

            // $table->string('sitting')->nullable();
            // $table->string('crawling')->nullable();
            // $table->string('standing')->nullable();
            // $table->string('walking')->nullable();
            // $table->string('jumping')->nullable();
            // $table->string('running')->nullable();
            // $table->string('ball_skill')->nullable();

            // $table->string('prone_to_supine')->nullable();
            // $table->string('continuous_rolling')->nullable();
            // $table->string('lying_to_sit')->nullable();
            // $table->string('box_sit_to_stand')->nullable();
            // $table->string('cross_sit_to_stand')->nullable();
            // $table->string('kneeling_to_stand')->nullable();

            // $table->string('dominance')->nullable();
            // $table->string('left')->nullable();
            // $table->string('right')->nullable();
            // $table->string('reach')->nullable();
            // $table->string('release')->nullable();
            // $table->string('symmetrical_use')->nullable();
            // $table->string('bilateral_use')->nullable();
            // $table->string('in_hand_manipulation')->nullable();
            // $table->string('eye_hand_co_ordination')->nullable();
            // $table->string('transfer')->nullable();
            // $table->string('writing_skill')->nullable();

            // $table->string('protective_reactions')->nullable();
            // $table->string('equilibrium_reaction')->nullable();

            // $table->string('tactile')->nullable();
            // $table->string('auditory')->nullable();
            // $table->string('vestibular')->nullable();
            // $table->string('proprioceptive')->nullable();

            // $table->string('attention')->nullable();
            // $table->string('problem_solving')->nullable();
            // $table->string('able_to_follow_instruction')->nullable();
            // $table->string('memory')->nullable();
            // $table->string('perceptual_motor')->nullable();
            // $table->string('body_awareness')->nullable();
            // $table->string('body_co_ordination')->nullable();
            // $table->string('bilateral_integration')->nullable();

            // $table->string('problam_list')->nullable();
            // $table->string('treatment_plan')->nullable();
            // $table->string('treatment_plann')->nullable();
            // $table->string('progress')->nullable();
            
            // $table->string('therapist_signature')->nullable();
            // $table->string('designation')->nullable();

            // $table->string('upper_limbs')->nullable();
            // $table->string('lower_limbs')->nullable();
            // $table->string('trunk')->nullable();
            
            // $table->string('independence')->nullable();
            // $table->string('social_interaction')->nullable();
            // $table->string('social_communication')->nullable();
            // $table->string('interpersonal')->nullable();
            
            // $table->string('physical_Gross_motor_Fine_motor')->nullable();
            // $table->string('cognitive')->nullable();
            // $table->string('if_yes')->nullable();
            // $table->string('behavioral')->nullable();
            // $table->string('communication')->nullable();
            // $table->string('social')->nullable();
            // $table->string('emotional')->nullable();
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
        Schema::dropIfExists('physiotherapies');
    }
};
