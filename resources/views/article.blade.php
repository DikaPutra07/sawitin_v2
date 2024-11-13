@extends('layouts.layout') <!-- Assuming you have a main layout file -->

@section('content')
<div class="flex">

    <!-- Main Content -->
    <main class="flex-1 p-6 bg-gray-100">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold">Artikel Terkait</h2>
            <div class="flex items-center space-x-2">
                <span class="text-gray-600">Hari Ini:</span>
                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-md">
                    Minggu, 12 Januari 2023
                </div>
                <div class="bg-green-100 text-green-800 px-3 py-1 rounded-md">
                    12:09:50 WIB
                </div>
            </div>
        </div>

        <!-- Search Bar -->
        <div class="mb-6">
            <input type="text" placeholder="Cari..." class="w-full p-3 border border-gray-300 rounded-md">
        </div>
        @php
        $articles = [
        (object) [
        'id' => 1,
        'title' => 'Mengenal Penyakit Busuk Pang
        kal Batang pada Tanaman Kelapa Sawit',
        'excerpt' => 'Busuk pangkal batang adalah penyakit yang sering menyerang tanaman kelapa sawit. Penyakit ini disebabkan oleh jamur yang menyerang batang tanaman.',
        'image' => 'foto1.jpg',
        'date' => \Carbon\Carbon::now()->subDays(2),
        ],
        (object) [
        'id' => 2,
        'title' => 'Mengatasi Hama Ulat Api pada Tanaman Kelapa Sawit',
        'excerpt' => 'Ulat api adalah salah satu hama yang sering menyerang tanaman kelapa sawit. Hama ini dapat merusak daun dan batang tanaman.',
        'image' => 'foto2.jpg',
        'date' => \Carbon\Carbon::now()->subDays(5),
        ],
        (object) [
        'id' => 3,
        'title' => 'Tips Merawat Tanaman Kelapa Saw
        it Agar Tetap Sehat',
        'excerpt' => 'Tanaman kelapa sawit memerlukan perawatan yang baik agar tetap sehat dan produktif. Berikut adalah tips merawat tanaman kelapa sawit yang perlu Anda ketahui.',
        'image' => 'foto1.jpg',
        'date' => \Carbon\Carbon::now()->subDays(10),
        ],
        ];

        @endphp
        <!-- Articles List -->
        <div class="space-y-4">
            <!-- Article Item -->
            @foreach($articles as $article)
            <div class="bg-white border rounded-lg overflow-hidden">
                <div class="flex p-4">
                    <img src="{{ asset('/uploads/' . $article->image) }}" alt="{{ $article->title }}" class="w-24 h-24 object-cover rounded-lg mr-4">
                    <div>
                        <h3 class="font-semibold">{{ $article->title }}</h3>
                        <p class="text-sm text-gray-600">{{ $article->date->format('d M Y') }}</p>
                        <p class="text-gray-700 mt-2">{{ $article->excerpt }}</p>
                        <a href="/" class="text-green-600 mt-2 inline-block">Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>
@endsection