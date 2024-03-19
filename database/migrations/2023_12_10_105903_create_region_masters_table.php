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
        Schema::create('region_masters', function (Blueprint $table) {
            $table->id();
            $table->string('region_master_id')->nullable();
            $table->string('status_id')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable(); // prov/kab/kel/kec
            $table->string('desc')->nullable();
            $table->string('lang')->default('en');
            $table->string('lang_id')->nullable();
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('region_masters');
    }
};
