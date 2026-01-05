<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('lagus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('penyanyi');
            $table->string('tahun');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lagus');
    }
};
