<?php

use App\Models\User;
use App\Models\Warehouse;
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
        Schema::create('material_collections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class, 'collected_for')->nullable()->constrained('users')->nullOnDelete();
            $table->string('date');
            $table->foreignIdFor(Warehouse::class)->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('material_collections');
    }
};
