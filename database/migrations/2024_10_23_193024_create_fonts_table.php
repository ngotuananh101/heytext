<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('fonts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('url');
            $table->string('author');
            $table->string('format');
            $table->text('icon')->default('https://cdn-icons-png.flaticon.com/512/9210/9210865.png');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fonts');
    }
};
