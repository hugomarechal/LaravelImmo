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
        Schema::create('tag_property', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Tag::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(\App\Models\Property::class)->constrained()->cascadeOnDelete();
            $table->primary('tag_id', 'property_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tag_property');
    }
};
