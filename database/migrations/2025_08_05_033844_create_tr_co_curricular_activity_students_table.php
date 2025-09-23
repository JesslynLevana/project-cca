<?php

use App\Models\MsStudent;
use App\Models\MsSubject;
use App\Models\SetAcademicYear;
use App\Models\SetSubjectCoCurricularActivity;
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
        Schema::create('tr_co_curricular_activity_students', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MsStudent::class);
            $table->foreignIdFor(SetSubjectCoCurricularActivity::class);
            $table->foreignIdFor(SetAcademicYear::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tr_co_curricular_activity_students');
    }
};
