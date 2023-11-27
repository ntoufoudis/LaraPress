<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user_meta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('nickname');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('displayName');
            $table->string('website')->nullable();
            $table->text('bio')->nullable();
            $table->string('profilePicture')->nullable();
            $table->string('language')->default('en');
            $table->boolean('enableKeyboardShortcuts')->default(false);
            $table->boolean('showToolbar')->default(true);
            $table->string('colorScheme')->default('default');
            $table->boolean('disableVisualEditor')->default(false);
            $table->boolean('disableSyntaxHighlight')->default(false);
            $table->string('applicationPassword')->nullable();
            $table->timestamps(); //
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_meta');
    }
};
