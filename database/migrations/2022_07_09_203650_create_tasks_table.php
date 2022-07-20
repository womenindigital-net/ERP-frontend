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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            /*$table->foreignIdFor(\App\Models\Course::class)->nullable()->constrained()->nullOnDelete();
            $table->string('title');
            $table->text('detail')->nullable();
            $table->string('date')->nullable();
            $table->foreignIdFor(\App\Models\Student::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'teacher_id')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();*/
            $table->string('title');
            $table->foreignIdFor(\App\Models\Activity::class)->constrained('activities')->cascadeOnDelete();
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
        Schema::dropIfExists('tasks');
    }
};
