<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('teachers', function(Blueprint $table){
            $table->id();
            $table->string('first_name')->comment('teacher first name');
            $table->string('last_name')->comment('teacher last name');
            $table->string('email')->comment('teacher email')->max(50);
            $table->string('department')->comment('teaching department')->max(10);
            $table->datetime('birthday')->comment('teacher birthday');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('teachers');
    }
};
