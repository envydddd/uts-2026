<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HomeProfile;

class HomeProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HomeProfile::create([
            'nama' => 'David Yehezkiel',

            'subtitle' => 'Saya adalah mahasiswa Esa Unggul yang mendalami dalam jurusan Teknik Informatika.',

            'about_me' => 'Saya adalah mahasiswa Teknik Informatika di Universitas Esa Unggul yang memiliki ketertarikan dalam pengembangan website, sistem informasi, dan teknologi berbasis modern framework. Saya fokus mempelajari pengembangan aplikasi menggunakan Laravel, Filament, Livewire, database management, serta integrasi API untuk membangun sistem yang efisien dan mudah digunakan.',

            'admin_info' => 'Contact dan Project dapat ditambahkan dengan mengubah url dari uts.test menjadi uts.test/admin',

            'keahlian' => 'Laravel, Filament, Livewire, Database',

            'project_akhir' => 'Website Pemesanan Meja Billiard',

            'foto' => 'home/david.png',
        ]);
    }
}