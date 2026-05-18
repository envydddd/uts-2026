<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'judul_project' => 'Website Pemesanan Meja Billiard',
            'link_laporan' => 'https://docs.google.com/document/d/18Fj3-XaC2CApNLOxD0IM6vjJ9zjbpjsO1Totuo2OAas/edit?usp=sharing',
        ]);
    }
}