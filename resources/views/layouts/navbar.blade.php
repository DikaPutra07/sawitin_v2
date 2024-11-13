<!-- Navbar -->
        <div class="flex justify-end items-center p-4 bg-gray-100 shadow">
            <span class="text-gray-700 mr-2">Hari Ini:</span>
            <div class="flex items-center space-x-2">
                <!-- Date Box -->
                <div class="flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-md border border-green-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10m-7 4h7M4 21h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span>{{ now()->format('l, d F Y') }}</span>
                </div>
                
                <!-- Time Box -->
                <div class="flex items-center px-3 py-1 bg-green-100 text-green-700 rounded-md border border-green-500">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m9-3a9 9 0 11-9-9 9 9 0 019 9z"></path>
                    </svg>
                    {{-- <span id="live-clock">{{ now()->format('H:i:s') }} WIB</span> --}}
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        function updateClock() {
                            var now = new Date();
                            var hours = String(now.getHours()).padStart(2, '0');
                            var minutes = String(now.getMinutes()).padStart(2, '0');
                            var seconds = String(now.getSeconds()).padStart(2, '0');
                            var timeString = hours + ':' + minutes + ':' + seconds + ' WIB';
                            document.getElementById('live-clock').textContent = timeString;
                        }
                        setInterval(updateClock, 1000);
                        updateClock();
                    });
                </script>
                <span id="live-clock"></span>
                </div>
            </div>
        </div>
    