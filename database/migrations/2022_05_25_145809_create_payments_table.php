<?php

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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('date')->nullable();
            $table->foreignIdFor(\App\Models\Project::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(\App\Models\Purchase::class)->nullable()->constrained()->nullOnDelete();
            $table->double('amount', 8, 2)->nullable();
            $table->string('purpose')->nullable();
            $table->foreignIdFor(\App\Models\BankAccount::class, 'from_account')->nullable()->constrained('bank_accounts')->nullOnDelete();
            $table->foreignIdFor(\App\Models\BankAccount::class, 'to_account')->nullable()->constrained('bank_accounts')->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class)->constrained()->cascadeOnDelete();
            $table->double('due', 8, 2)->nullable();
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
        Schema::dropIfExists('payments');
    }
};

