<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('timezones', function (Blueprint $table) {
            $table->id();
            $table->string('continent');
            $table->string('timezone')->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('timezones');
    }
};
