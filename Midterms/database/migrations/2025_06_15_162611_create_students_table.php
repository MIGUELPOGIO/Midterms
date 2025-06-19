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
        Schema::create('students', function (Blueprint $table ){
            $table->id();
            $table->string('first_name')->comment('student first name');
            $table->string('last_name')->comment('student last name');
            $table->string('program')->comment('student acad track');
            $table->string('enrollment_year')->comment('year of student enrollment')->max(4);
            $table->datetime('birthday')->comment('student birthday');
            $table->foreignId('course_id')->nullable()->constrained('class');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('students');
    }
};
