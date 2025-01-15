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
        Schema::create('event_happenings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->nullable();
            $table->date('start_date');
            $table->string('duration')->nullable()->default('>2h');
            $table->string('location')->nullable();
            $table->text('description'); //added this field to help provide further details about the event
            $table->foreignId('user_id')->constrained();
            $table->boolean('is_office_event')->default(false);
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_happenings');
    }
};
