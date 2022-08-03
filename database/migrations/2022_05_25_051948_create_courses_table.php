<?php

use App\Models\Course;
use App\Models\User;
use App\Models\BankAccount;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(Course::class, 'parent_course_id')->nullable()->constrained('courses')->nullOnDelete();
            // $table->double('amount', 8, 2);
            $table->string('duration')->nullable();
            // $table->foreignIdFor(BankAccount::class, 'cash_account_id')->nullable()->constrained('bank_accounts')->nullOnDelete();
            $table->string('description')->nullable();
            $table->foreignIdFor(User::class, 'created_by')->nullable()->constrained('users')->nullOnDelete();
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
        Schema::dropIfExists('courses');
    }
};
