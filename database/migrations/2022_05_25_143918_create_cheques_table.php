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
        Schema::create('cheques', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignIdFor(\App\Models\BankAccount::class)->constrained()->cascadeOnDelete();
            $table->integer('page_no')->nullable();
            $table->string('note')->nullable();
            $table->boolean('is_invalid')->default(0);
            $table->integer('order_no')->nullable();
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
        Schema::dropIfExists('cheques');
    }
};
