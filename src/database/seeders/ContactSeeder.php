<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::create([
            'nama' => 'David Yehezkiel',
            'nomor_telepon' => '085117744442',
            'gmail' => 'firstvidd@gmail.com',
        ]);
    }
}