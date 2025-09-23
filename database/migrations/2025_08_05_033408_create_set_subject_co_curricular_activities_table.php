<?php

use App\Models\MsClass;
use App\Models\MsSubject;
use App\Models\MsTeacher;
use App\Models\SetAcademicYear;
use App\Models\SetSchedule;
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
        Schema::create('set_subject_co_curricular_activities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MsSubject::class);
            $table->foreignIdFor(SetAcademicYear::class);
            $table->foreignIdFor(SetSchedule::class);
            $table->foreignIdFor(MsTeacher::class);
            $table->foreignIdFor(MsClass::class);
            $table->integer('quota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_subject_co_curricular_activities');
    }
};
