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
        Schema::create('journal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Journal::class)->constrained()->cascadeOnDelete();
            $table->string('account_no');
            $table->string('account_particulars')->nullable();
            $table->float('amount', 8, 2);
            $table->float('debit', 8, 2)->default(0);
            $table->float('credit', 8, 2)->default(0);
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
        Schema::dropIfExists('journal_details');
    }
};
