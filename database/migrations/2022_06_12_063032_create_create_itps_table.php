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
        Schema::create('create_itps', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class, 'student_id')->nullable()->constrained('students')->cascadeOnDelete();
            $table->foreignIdFor(User::class, 'teacher_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('itp_name')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('instruction')->nullable();
            $table->string('personal_work')->nullable();
            $table->string('family_work')->nullable();
            $table->string('recreational_work')->nullable();
            $table->string('household_work')->nullable();
            $table->string('computer_homework')->nullable();
            $table->string('meal_preparetion_skill')->nullable();
            $table->string('cooking_catering')->nullable();
            $table->string('gym_exercise')->nullable();
            $table->string('therapeutic_homework')->nullable();
            $table->string('Homework_karisma')->nullable();
            $table->string('Homework_karisma1')->nullable();
            $table->string('Homework_karisma2')->nullable();
            $table->string('Homework_karisma3')->nullable();
            $table->string('Homework_karisma4')->nullable();
            $table->string('Homework_karisma5')->nullable();
            $table->string('Homework_karisma6')->nullable();
            $table->string('Homework_karisma7')->nullable();
            $table->string('Homework_karisma8')->nullable();
            $table->string('Homework_karisma9')->nullable();
            $table->string('section_g')->nullable();
            $table->string('Homework_karisma10')->nullable();
            $table->string('section_interpersonal_skill')->nullable();
            $table->string('section_different_situation')->nullable();
            $table->string('section_termsof_age')->nullable();
            $table->string('section_play_with_others')->nullable();
            $table->string('section_social_interection')->nullable();
            $table->string('section_ethical_values')->nullable();
            $table->string('section_work_habit_ethical_values')->nullable();
            $table->string('section_self_development')->nullable();
            $table->string('section_cleaning_selfdevelopment')->nullable();
            $table->string('section_telephone_selfdevelopment')->nullable();
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
        Schema::dropIfExists('create_itps');
    }
};
