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
        Schema::create('activates', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('location');
            $table->string('type_of_work');
            $table->string('category');
            $table->string('photo', 300);
            $table->foreignId('org_id');
            $table->string('descrption');
            $table->timestamp('activates_start_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('volunter');
    }
};
