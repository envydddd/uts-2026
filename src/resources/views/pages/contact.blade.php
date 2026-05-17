@extends('layouts.app')

@section('content')

<h2 class="text-3xl font-bold mb-6">Contact</h2>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
    @forelse ($contacts as $contact)
        <div class="bg-white rounded-xl shadow p-6">
            <h3 class="text-xl font-bold mb-2">
                {{ $contact->nama }}
            </h3>

            <p>
                <strong>No. Telepon:</strong><br>
                {{ $contact->nomor_telepon }}
            </p>

            <p class="mt-3">
                <strong>Gmail:</strong><br>
                {{ $contact->gmail }}
            </p>
        </div>
    @empty
        <p>Belum ada data contact.</p>
    @endforelse
</div>

@endsection