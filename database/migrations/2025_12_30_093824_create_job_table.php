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
        Schema::create('job', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('desc')->default('none');
            $table->string('salary');
            $table->string('subsidize');
            $table->integer('quantity')->default(random_int(10,30));
            $table->string('requirement')->default('none');
            $table->string('exp')->default('none');
            $table->tinyInteger('status')->default(1);
            $table->foreignId('jobTypeId')->constrained('job_type');
            $table->foreignId('categoriesId')->constrained('categories');
            $table->foreignId('shiftId')->constrained('shift');
            $table->foreignId('companyId')->constrained('company');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job');
    }
};
