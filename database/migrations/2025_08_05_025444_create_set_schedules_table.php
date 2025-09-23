<?php

use App\Models\MsSubject;
use App\Models\SetAcademicYear;
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
        Schema::create('set_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(SetAcademicYear::class);
            // $table->string('unit');
            $table->integer('semester');
            $table->date('enrollment_start_time');
            $table->date('enrollment_end_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_schedules');
    }
};
