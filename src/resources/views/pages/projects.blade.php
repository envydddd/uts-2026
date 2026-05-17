@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">Project</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @forelse ($projects as $project)
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="text-xl font-bold mb-4">
                {{ $project->judul_project }}
            </h3>

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