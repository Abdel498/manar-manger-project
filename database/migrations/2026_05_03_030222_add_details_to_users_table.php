<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('job')->nullable(); // المهنة (مثل: ضابط جمارك)
            $table->integer('age')->nullable(); // السن
            $table->string('education_level')->nullable(); // المستوى الدراسي (مثل: طالب سنة أولى)
            $table->string('gender')->nullable(); // الجنس
            $table->string('marital_status')->nullable(); // الحالة العائلية
        });
    } 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
