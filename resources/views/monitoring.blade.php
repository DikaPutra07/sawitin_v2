{{-- resources/views/monitoring.blade.php --}}
@extends('layouts.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-xl font-semibold">Monitoring Tanaman</h4>
        <div class="flex items-center space-x-2">
            <span class="text-gray-500">Hari Ini:</span>
            <span class="font-semibold">{{ \Carbon\Carbon::now()->format('l, d F Y') }}</span>
            <span class="px-2 py-1 bg-gray-200 text-gray-800 rounded">{{ \Carbon\Carbon::now()->format('H:i:s') }} WIB</span>
            <a href="#" class="ml-4 px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600">Monitoring Sekarang</a>
        </div>
    </div>

    <p class="text-gray-500 mb-6">Terakhir Diperbarui: 01/01/2023, 12:34:40 WIB</p>

    <div class="bg-white shadow rounded-lg p-6">
        <h5 class="text-lg font-semibold mb-4">Hasil Monitoring</h5>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white border rounded-lg overflow-hidden">
                <img src="{{ asset('uploads/foto1.jpg') }}" alt="Tanaman Sehat" class="w-full h-full object-cover">
                <div class="p-4">
                    <h6 class="text-center font-semibold">Tanaman Sehat</h6>
                </div>
            </div>

            <div class="bg-white border rounded-lg overflow-hidden">
                <img src="{{ asset('uploads/foto2.jpg') }}" alt="Tanaman Terdeteksi Berisiko" class="w-full h-full object-cover">
                <div class="p-4">
                    <h6 class="text-center font-semibold">Tanaman Terdeteksi Berisiko</h6>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div class="bg-gray-100 p-4 rounded-lg">
                <h6 class="font-semibold mb-2">Kondisi Tanaman</h6>
                <p>Total Tanaman Terdeteksi: <strong>150 pohon</strong></p>
                <p>Tanaman Sehat: <strong>120 pohon</strong></p>
                <p>Tanaman Terdeteksi Berisiko (Penyakit / Hama): <strong>30 pohon</strong></p>
            </div>

            <div class="bg-gray-100 p-4 rounded-lg">
                <h6 class="font-semibold mb-2">Jenis Penyakit/Hama Terdeteksi</h6>
                <p>Busuk Pangkal Batang: <strong>15 pohon</strong></p>
                <p>Ulat Api: <strong>10 pohon</strong></p>
                <p>Gulma Berlebih: <strong>5 pohon</strong></p>
            </div>
        </div>

        <div class="bg-gray-100 p-4 rounded-lg mt-6">
            <h6 class="font-semibold mb-2">Rekomendasi Tindakan</h6>
            <p class="mb-2">Untuk tanaman yang terdeteksi memiliki risiko penyakit atau hama, berikut rekomendasi tindakan lanjut:</p>
            <ul class="list-disc list-inside space-y-1">
                <li><strong>Busuk Pangkal Batang:</strong> Disarankan untuk melakukan pemangkasan area terinfeksi dan aplikasi fungisida.</li>
                <li><strong>Ulat Api:</strong> Periksa area sekitar dan lakukan penyemprotan insektisida.</li>
                <li><strong>Gulma Berlebih:</strong> Direkomendasikan untuk membersihkan gulma secara manual atau dengan herbisida yang sesuai.</li>
            </ul>
        </div>
    </div>
</div>
@endsection