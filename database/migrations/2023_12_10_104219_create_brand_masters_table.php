<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('brand_masters', function (Blueprint $table) {
            $table->id();
            $table->string('brand_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('image_id')->nullable();
            $table->string('name')->nullable();
            $table->string('lang')->default('en');
            $table->string('lang_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brand_masters');
    }
};
