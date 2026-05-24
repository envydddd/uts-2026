<?php

use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Illuminate\Support\Facades\Response;
use App\Models\Contact;
use App\Models\Project;
use App\Models\HomeProfile;

/* NOTE: Do Not Remove
/ Livewire asset handling if using sub folder in domain
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contact', function () {
    $contacts = Contact::latest()->get();

    return view('pages.contact', compact('contacts'));
});

Route::get('/projects', function () {
    $projects = Project::latest()->get();

    return view('pages.projects', compact('projects'));
});

Route::get('/', function () {
    $profile = HomeProfile::latest()->first();

    return view('pages.home', compact('profile'));
});