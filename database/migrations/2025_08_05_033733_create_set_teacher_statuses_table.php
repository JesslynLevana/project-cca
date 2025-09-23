<?php

use App\Models\MsTeacher;
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
        Schema::create('set_teacher_statuses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(MsTeacher::class);
            $table->string('active_period');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('set_teacher_statuses');
    }
};
