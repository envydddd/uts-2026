@extends('layouts.app')

@section('content')

<section 
    class="bg-white rounded-2xl shadow-md px-12 py-10" 
    style="margin-top: 40px; padding: 40px 60px;"
>
    <h2 class="text-4xl font-bold mb-4">
        Halo, Saya David Yehezkiel
    </h2>

    <p class="text-lg mb-6">
        Saya adalah mahasiswa Esa Unggul yang mendalami dalam jurusan Teknik Informatika.
    </p>

    <h2 class="text-4xl font-bold mb-1">
        About Me : 
    </h2>

    <p class="mb-4">
        Saya adalah mahasiswa Teknik Informatika di Universitas Esa Unggul 
        yang memiliki ketertarikan dalam pengembangan website, sistem informasi,
        dan teknologi berbasis modern framework. Saya fokus mempelajari
        pengembangan aplikasi menggunakan Laravel, Filament, Livewire,
        database management, serta integrasi API untuk membangun sistem
        yang efisien dan mudah digunakan.
    </p>

    <p class="mb-4">
        Contact dan Project dapat ditambahkan dengan mengubah url dari uts.test menjadi uts.test/admin
    </p>

    <div 
        style="
            display: flex;
            align-items: center;
            gap: 40px;
            margin-top: 40px;
        "
    >
        <img 
            src="{{ asset('images/david.png') }}" 
            alt="Foto David"
            style="
                width: 250px;
                border-radius: 20px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            "
        >

        <div>

            <p style="margin-bottom: 15px; font-size: 20px;">
                <strong>Nama:</strong> David Yehezkiel
            </p>

            <p style="margin-bottom: 15px; font-size: 20px;">
                <strong>Keahlian:</strong> Laravel, Filament, Livewire, Database
            </p>

            <p style="font-size: 20px;">
                <strong>Project Akhir:</strong> Website Pemesanan Meja Billiard
            </p>

        </div>
    </div>
</section>

@endsection