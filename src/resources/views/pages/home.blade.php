@extends('layouts.app')

@section('content')

<section 
    class="bg-white rounded-2xl shadow-md"
    style="margin-top: 40px; padding: 40px 60px;"
>
    <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 30px;">
        Halo, Saya {{ $profile->nama ?? 'Nama Belum Diisi' }}
    </h2>

    <p style="font-size: 16px; margin-bottom: 35px;">
        {{ $profile->subtitle ?? 'Subtitle belum diisi.' }}
    </p>

    <h2 style="font-size: 28px; font-weight: bold; margin-bottom: 15px;">
        About Me :
    </h2>

    <p style="font-size: 16px; line-height: 1.5; margin-bottom: 30px;">
        {{ $profile->about_me ?? 'About me belum diisi.' }}
    </p>

    <p style="font-size: 16px; margin-bottom: 60px;">
        {{ $profile->admin_info ?? 'Contact dan Project dapat ditambahkan melalui admin.' }}
    </p>

    <div 
        style="
            display: flex;
            align-items: center;
            gap: 60px;
        "
    >
        @if ($profile && $profile->foto)
            <img 
                src="{{ asset('storage/' . $profile->foto) }}" 
                alt="Foto {{ $profile->nama }}"
                style="
                    width: 330px;
                    border-radius: 20px;
                    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
                "
            >
        @else
            <div 
                style="
                    width: 330px;
                    height: 430px;
                    border-radius: 20px;
                    background: #e5e7eb;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                "
            >
                Foto belum diisi
            </div>
        @endif

        <div>
            <p style="font-size: 28px; margin-bottom: 30px;">
                <strong>Nama:</strong> {{ $profile->nama ?? '-' }}
            </p>

            <p style="font-size: 28px; margin-bottom: 30px;">
                <strong>Keahlian:</strong> {{ $profile->keahlian ?? '-' }}
            </p>

            <p style="font-size: 28px;">
                <strong>Project Akhir:</strong> {{ $profile->project_akhir ?? '-' }}
            </p>
        </div>
    </div>
</section>

@endsection