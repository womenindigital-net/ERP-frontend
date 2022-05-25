<?php

use App\Models\Project;
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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Project::class)->constrained()->cascadeOnDelete();
            $table->float('transaction_amount', 8, 2);
            $table->string('voucher_date')->nullable();
            $table->string('particulars')->nullable();
            $table->string('reference')->nullable();
            $table->boolean('is_approved')->default(0);
            $table->foreignIdFor(\App\Models\User::class, 'approved_by')->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'created_by')->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(\App\Models\User::class, 'updated_by')->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('journals');
    }
};
