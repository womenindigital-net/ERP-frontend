<?php

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
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->enum('type', ['online', 'offline'])->default('offline');
            $table->string('dob')->nullable();
            $table->string('date_of_assessment')->nullable();
            $table->string('gender');
            $table->string('blood_group')->nullable();
            $table->string('suborno_card_no')->nullable();
            $table->string('nid')->nullable();
            $table->string('photo')->nullable();
            $table->text('diagnosis')->nullable();
            $table->text('present_address')->nullable();
            $table->text('permanent_address')->nullable();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->boolean('approved_for_observation')->default(0);
            $table->timestamps();
            $table->softDeletes();
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
