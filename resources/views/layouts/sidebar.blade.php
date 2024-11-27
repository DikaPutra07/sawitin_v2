<div class="w-64 bg-creme flex flex-col justify-between shadow-md fixed h-full">
    <!-- Top Logo and Title -->

    <!-- Navigation Links -->
    <nav class="flex flex-col space-y-2 p-4">
        <div class="p-4 flex items-center space-x-3">
            <img src="{{ asset('uploads/logo.jpg') }}" alt="Logo" class="w-6 h-6">
            <span class="text-lg font-semibold">Kelapa Sawit</span>
        </div>

        <a href="/" class="flex items-center px-4 py-3 rounded-md {{ Request::is('/') ? 'bg-greenModal text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="7" height="9" x="3" y="3" rx="1" />
                <rect width="7" height="5" x="14" y="3" rx="1" />
                <rect width="7" height="9" x="14" y="12" rx="1" />
                <rect width="7" height="5" x="3" y="16" rx="1" />
            </svg>
            <span>Beranda</span>
        </a>

        <a href="/monitoring" class="flex items-center px-4 py-3 rounded-md {{ Request::is('monitoring') ? 'bg-greenModal text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M17 12h-2l-2 5-2-10-2 5H7" />
            </svg>
            <span>Monitoring</span>
        </a>

        <a href="/riwayatMonitoring" class="flex items-center px-4 py-3 rounded-md {{ Request::is('riwayatMonitoring') ? 'bg-greenModal text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            {{-- <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect width="18" height="18" x="3" y="3" rx="2" />
                <path d="M17 12h-2l-2 5-2-10-2 5H7" />
            </svg> --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-history"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/><path d="M12 7v5l4 2"/></svg>
            <span>Riwayat Monitoring</span>
        </a>

        <a href="/article" class="flex items-center px-4 py-3 rounded-md {{ Request::is('article') ? 'bg-greenModal text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2" />
                <path d="M18 14h-8" />
                <path d="M15 18h-5" />
                <path d="M10 6h8v4h-8V6Z" />
            </svg>
            <span>Artikel</span>
        </a>

        <a href="/profile" class="flex items-center px-4 py-3 rounded-md {{ Request::is('profile') ? 'bg-greenModal text-white' : 'text-gray-700 hover:bg-gray-100' }}">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="8" r="5" />
                <path d="M20 21a8 8 0 0 0-16 0" />
            </svg>
            <span>Profil</span>
        </a>
    </nav>


    <!-- Bottom Settings and Help -->
    <div class="flex flex-col space-y-2 p-4">
        <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 rounded-md px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings">
                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z" />
                <circle cx="12" cy="12" r="3" />
            </svg>
            <span>Pengaturan</span>
        </a>
        <a href="#" class="flex items-center text-gray-700 hover:bg-gray-100 rounded-md px-4 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help">
                <circle cx="12" cy="12" r="10" />
                <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                <path d="M12 17h.01" />
            </svg>
            <span>Bantuan</span>
        </a>
    </div>
</div>