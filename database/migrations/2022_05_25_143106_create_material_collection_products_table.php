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
        Schema::create('material_collection_products', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\MaterialCollection::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Category::class)->nullable()->constrained()->nullOnDelete();
            $table->foreignIdFor(\App\Models\Product::class)->constrained()->cascadeOnDelete();
            $table->integer('available_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->foreignIdFor(\App\Models\Unit::class)->nullable()->constrained()->nullOnDelete();
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
        Schema::dropIfExists('material_collection_products');
    }
};
