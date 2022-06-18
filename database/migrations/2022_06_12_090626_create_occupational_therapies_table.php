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
        Schema::create('occupational_therapies', function (Blueprint $table) {
            $table->id();
            $table->string('date')->nullable();
            $table->foreignIdFor(User::class, 'teacher_id')->constrained('users')->cascadeOnDelete();
            $table->foreignIdFor(Student::class, 'candidate_id')->constrained('students')->cascadeOnDelete();
            $table->string('medication_treatment')->nullable();
            $table->string('any_present_medicines')->nullable();
            $table->string('separate_home_equipment')->nullable();
            $table->string('communication')->nullable();
            $table->string('communication_one')->nullable();
            $table->string('upper_limbs')->nullable();
            $table->string('upper_left')->nullable();
            $table->string('upper_right')->nullable();
            $table->string('lower_limbs_one')->nullable();
            $table->string('trunk_or_neck')->nullable();
            $table->string('lower_limbs_two')->nullable();
            $table->string('trunk_or_neck_left')->nullable();
            $table->string('trunk_or_neck_right')->nullable();
            $table->string('range_upper_limbs')->nullable();
            $table->string('range_or_neck_left')->nullable();
            $table->string('range_or_neck_right')->nullable();
            $table->string('range_lower_limbs_two')->nullable();
            $table->string('sitting')->nullable();
            $table->string('standing')->nullable();
            $table->string('ball_skill')->nullable();
            $table->string('crawling')->nullable();
            $table->string('walking')->nullable();
            $table->string('running')->nullable();
            $table->string('jumping')->nullable();
            $table->string('rolling_supine_to_prone')->nullable();
            $table->string('continuous_rolling')->nullable();
            $table->string('box_sit_to_stand')->nullable();
            $table->string('kneeling_to_stand')->nullable();
            $table->string('prone_to_supine')->nullable();
            $table->string('lying_to_sit')->nullable();
            $table->string('cross_sit_to_stand')->nullable();
            $table->string('dominance')->nullable();
            $table->string('reach')->nullable();
            $table->string('grasp_type')->nullable();
            $table->string('release')->nullable();
            $table->string('symmetrical_use')->nullable();
            $table->string('bilateral_use')->nullable();
            $table->string('in_hand_manipulation')->nullable();
            $table->string('eye_hand_co_ordination')->nullable();
            $table->string('transfer')->nullable();
            $table->string('writing_skills')->nullable();
            $table->string('grasp_type')->nullable();
            $table->string('protective_reactions')->nullable();
            $table->string('equilibrium_reaction')->nullable();
            $table->string('tactile')->nullable();
            $table->string('visual')->nullable();
            $table->string('auditory')->nullable();
            $table->string('vestibular')->nullable();
            $table->string('proprioceptive')->nullable();
            $table->string('vestibular')->nullable();
            $table->string('visual_discrimination')->nullable();
            $table->string('visual_memory')->nullable();
            $table->string('visual_figure_ground')->nullable();
            $table->string('visual Spatial')->nullable();
            $table->string('behavior')->nullable();
            $table->string('social_interaction')->nullable();
            $table->string('eating')->nullable();
            $table->string('brushing_teeth')->nullable();
            $table->string('dressing')->nullable();
            $table->string('toilet')->nullable();
            $table->string('bathing')->nullable();
            $table->string('any_more_information')->nullable();
            $table->string('activities_of_interest')->nullable();
            $table->string('physical_(gross_motor_or_fine_motor)')->nullable();
            $table->string('cognitive')->nullable();
            $table->string('strength_behavioral')->nullable();
            $table->string('strength_communication')->nullable();
            $table->string('social')->nullable();
            $table->string('adls')->nullable();
            $table->string('emotional')->nullable();
            $table->string('therapist_signature')->nullable();
            $table->string('designation_organization')->nullable();
            $table->string('supervisor_signature')->nullable();
            $table->string('designation_name')->nullable();
            $table->string('attention')->nullable();
            $table->string('problem_solving')->nullable();
            $table->string('able_to_follow_instruction')->nullable();
            $table->string('skills_memory')->nullable();
            $table->string('perceptual_motor')->nullable();
            $table->string('body_awareness')->nullable();
            $table->string('body_co_ordination')->nullable();
            $table->string('bilateral_integration')->nullable();
            $table->string('problem_list')->nullable();
            $table->string('treatment_plan')->nullable();
            $table->string('progress')->nullable();
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
        Schema::dropIfExists('occupational_therapies');
    }
};
