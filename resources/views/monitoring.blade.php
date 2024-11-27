{{-- resources/views/monitoring.blade.php --}}
@extends('layouts.layout')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-xl font-semibold">Monitoring Tanaman</h4>
        <div class="flex items-center space-x-2">
            <a href="#" class="ml-4 px-4 py-2 bg-greenModal text-white rounded hover:bg-green-600">Monitoring Sekarang</a>
        </div>
    </div>

    <p class="text-gray-500 mb-6">Terakhir Diperbarui: 01/01/2023, 12:34:40 WIB</p>

    <div class="bg-white shadow-sm rounded-lg p-6 border-1 border">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <h5 class="text-lg font-semibold mb-4">Tanaman Terdeteksi Beresiko</h5>
            <h5 class="text-lg font-semibold mb-4">Mapping Area Terdeteksi Beresiko</h5>
        </div>
        

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-white border rounded-lg overflow-hidden">
                <img src="{{ asset('uploads/foto1.jpg') }}" alt="Tanaman Sehat" class="w-full h-full object-cover">
                <div class="p-4">
                    <h6 class="text-center font-semibold">Tanaman Sehat</h6>
                </div>
            </div>

            <div class="bg-white border rounded-lg overflow-hidden">
                <img src="{{ asset('uploads/Mapping Area.jpg') }}" alt="Tanaman Terdeteksi Berisiko" class="w-full h-full object-cover cursor-pointer" id="openModal">
                <div class="p-4">
                    <h6 class="text-center font-semibold">Tanaman Terdeteksi Berisiko</h6>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-6">
            <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
                <h6 class="font-semibold mb-2">Kondisi Tanaman</h6>
                <p>Total Tanaman Terdeteksi: <strong>150 pohon</strong></p>
                <p>Tanaman Sehat: <strong>120 pohon</strong></p>
                <p>Tanaman Terdeteksi Berisiko (Penyakit / Hama): <strong>30 pohon</strong></p>
            </div>

            <div class="bg-creme p-4 rounded-lg border-1 border-greentea">
                <h6 class="font-semibold mb-2">Jenis Penyakit/Hama Terdeteksi</h6>
                <p>Busuk Pangkal Batang: <strong>15 pohon</strong></p>
                <p>Ulat Api: <strong>10 pohon</strong></p>
                <p>Gulma Berlebih: <strong>5 pohon</strong></p>
            </div>
        </div>

        <div class="bg-creme p-4 rounded-lg mt-6 border-1 border-greentea">
            <h6 class="font-semibold mb-2">Rekomendasi Tindakan</h6>
            <p class="mb-2">Untuk tanaman yang terdeteksi memiliki risiko penyakit atau hama, berikut rekomendasi tindakan lanjut:</p>
            <ul class="list-disc list-inside space-y-1">
                <li><strong>Busuk Pangkal Batang:</strong> Disarankan untuk melakukan pemangkasan area terinfeksi dan aplikasi fungisida.</li>
                <li><strong>Ulat Api:</strong> Periksa area sekitar dan lakukan penyemprotan insektisida.</li>
                <li><strong>Gulma Berlebih:</strong> Direkomendasikan untuk membersihkan gulma secara manual atau dengan herbisida yang sesuai.</li>
            </ul>
        </div>

                <!-- Modal -->
        <div id="modal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
            <div class="bg-white rounded-lg shadow-lg w-4/5 max-w-5xl">
            <!-- Konten-->
                <div class="flex justify-between items-center bg-greenModal text-white px-6 py-3 rounded-t-lg">
                    <h2 class="text-lg font-medium">Mapping Area Terdeteksi Berisiko</h2>
                    <button id="closeModal" class="text-white font-bold text-lg">&times;</button>
                </div>
                <!-- Modal Content -->
                <div class="p-6 flex flex-col md:flex-row">
                <!-- Image -->
                    <div class="relative w-full md:w-2/3 mb-4 md:mb-0">
                        <img src="{{ asset('uploads/Mapping Area.jpg') }}" alt="Mapping Area" class="w-full h-full object-cover rounded-lg">
                    <!-- Add your overlay text (Area labels) here -->
                    </div>
                    <!-- Information Section -->
                    <div class="pl-0 md:pl-6 w-full md:w-1/3">
                        <h3 class="font-semibold text-lg">Titik Koordinat Terdeteksi Berisiko</h3>
                        <div class="gap-4 mt-2 text-sm">
                            <div class="mb-4">
                                <p class="font-semibold">Area 1</p>
                                <ul class="list-disc list-inside text-gray-700">
                                <li>37.7749,-122.4194</li>
                                <li>-6.2088,106.8456</li>
                                <li>51.5074,-0.1278</li>
                                <li>48.8566,2.3522</li>
                                <li>-33.8688,151.2093</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <p class="font-semibold">Area 2</p>
                                <ul class="list-disc list-inside text-gray-700">
                                <li>35.6895,139.6917</li>
                                <li>40.7128,-74.0060</li>
                                <li>19.0760,72.8777</li>
                                <li>-34.6037,-58.3816</li>
                                <li>55.7558,37.6173</li>
                                </ul>
                            </div>
                            <div class="mb-4">
                                <p class="font-semibold">Area 6</p>
                                <ul class="list-disc list-inside text-gray-700">
                                <li>35.6895,139.6917</li>
                                <li>40.7128,-74.0060</li>
                                <li>19.0760,72.8777</li>
                                <li>-34.6037,-58.3816</li>
                                <li>55.7558,37.6173</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
                // Get modal elements
                const modal = document.getElementById('modal');
                const openModalBtn = document.getElementById('openModal');
                const closeModalBtns = document.querySelectorAll('#closeModal, #closeModalFooter');

                // Open modal
                openModalBtn.addEventListener('click', () => {
                modal.classList.remove('hidden');
                });

                // Close modal
                closeModalBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    modal.classList.add('hidden');
                });
                });

                // Close modal when clicking outside the modal
                modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.add('hidden');
                }
                });
        </script>
    
</div>
@endsection