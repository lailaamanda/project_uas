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
        Schema::create('kabkotas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('alt_name');
            $table->double('latitude');
            $table->double('longitude');
            $table->string('kepadatan_penduduk');
            $table->string('sekolah_sma');
            $table->string('rumah_sakit');
            $table->enum('type_polygon', ['Polygon', 'MultiPolygon'])->default('Polygon');
            $table->longText('polygon');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kabkotas');
    }
};
