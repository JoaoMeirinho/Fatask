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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->length(255);
            $table->string('description');
            $table->date('conclusion_date');
            $table->integer('period');
            $table->foreignId('course_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->timestamps();

        //     'title',
        // 'description', 
        // 'conclusion_date',
        // 'period',
        // 'course_id',
        // 'user_id'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
