<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->text('deskripsi')->nullable()->after('judul_project');
            $table->longText('latar_belakang')->nullable()->after('deskripsi');
            $table->longText('fitur_utama')->nullable()->after('latar_belakang');
            $table->string('teknologi')->nullable()->after('fitur_utama');
            $table->string('gambar_erd')->nullable()->after('teknologi');
            $table->string('gambar_flowchart')->nullable()->after('gambar_erd');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'deskripsi',
                'latar_belakang',
                'fitur_utama',
                'teknologi',
                'gambar_erd',
                'gambar_flowchart',
            ]);
        });
    }
};