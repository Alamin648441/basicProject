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
        Schema::create("student_information", function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("session");
            $table->string("semester");
            $table->string("shift");
            $table->string("group");
            $table->string("roll");
            $table->string("image");
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
