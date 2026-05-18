@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">Project</h2>

<div class="grid grid-cols-1 gap-8">
    @forelse ($projects as $project)
        <div 
            class="bg-white rounded-xl shadow"
            style="padding: 40px; margin-bottom: 30px;"
        >
            <h3 style="font-size: 28px; font-weight: bold; margin-bottom: 20px;">
                {{ $project->judul_project }}
            </h3>

            @if ($project->deskripsi)
                <div style="margin-bottom: 25px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 10px;">
                        Deskripsi Project
                    </h4>
                    <p style="line-height: 1.8;">
                        {{ $project->deskripsi }}
                    </p>
                </div>
            @endif

            @if ($project->latar_belakang)
                <div style="margin-bottom: 25px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 10px;">
                        Latar Belakang
                    </h4>
                    <p style="line-height: 1.8;">
                        {!! nl2br(e($project->latar_belakang)) !!}
                    </p>
                </div>
            @endif

            @if ($project->fitur_utama)
                <div style="margin-bottom: 25px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 10px;">
                        Fitur Utama
                    </h4>
                    <p style="line-height: 1.8;">
                        {!! nl2br(e($project->fitur_utama)) !!}
                    </p>
                </div>
            @endif

            @if ($project->teknologi)
                <div style="margin-bottom: 25px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 10px;">
                        Teknologi yang Digunakan
                    </h4>
                    <p style="line-height: 1.8;">
                        {{ $project->teknologi }}
                    </p>
                </div>
            @endif

            @if ($project->gambar_erd)
                <div style="margin-bottom: 30px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">
                        Gambar ERD
                    </h4>

                    <img 
                        src="{{ asset('storage/' . $project->gambar_erd) }}" 
                        alt="ERD {{ $project->judul_project }}"
                        style="
                            width: 100%;
                            max-width: 700px;
                            border-radius: 16px;
                            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
                        "
                    >
                </div>
            @endif

            @if ($project->gambar_flowchart)
                <div style="margin-bottom: 30px;">
                    <h4 style="font-size: 22px; font-weight: bold; margin-bottom: 15px;">
                        Gambar Flowchart
                    </h4>

                    <img 
                        src="{{ asset('storage/' . $project->gambar_flowchart) }}" 
                        alt="Flowchart {{ $project->judul_project }}"
                        style="
                            width: 100%;
                            max-width: 700px;
                            border-radius: 16px;
                            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
                        "
                    >
                </div>
            @endif

            <a 
                href="{{ $project->link_laporan }}"
                target="_blank"
                style="
                    display: inline-block;
                    padding: 12px 24px;
                    background-color: white;
                    color: black;
                    border-radius: 16px;
                    border: 2px solid #d1d5db;
                    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
                    text-decoration: none;
                    font-weight: bold;
                    transition: all 0.2s ease;
                "
            >
                Lihat Laporan
            </a>
        </div>
    @empty
        <p>Belum ada data project.</p>
    @endforelse
</div>

@endsection