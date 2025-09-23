<?php

use App\Models\MsClass;
use App\Models\MsStudent;
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
        Schema::create('set_student_classes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MsStudent::class);
            $table->foreignIdFor(MsClass::class);
            $table->foreignIdFor(SetAcademicYear::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_student_classes');
    }
};
