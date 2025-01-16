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
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('accepted');//whether user has accepted to attend the event
            $table->foreignId('user_id')->constrained();
            $table->foreignId('event_happening_id')->constrained();
            $table->boolean('is_read'); //whether the user has viewed this event
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};
