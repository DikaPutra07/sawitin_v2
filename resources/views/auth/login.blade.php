<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AeroPalm</title>
    <!-- Tambahkan Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <!-- Bagian Kiri (Branding) -->
        <div class="hidden lg:flex flex-col justify-center items-start bg-green-600 w-1/2 p-12">
            <h1 class="text-white text-4xl font-bold mb-4">Palm Analytics & Land Monitoring</h1>
            <p class="text-white text-lg leading-relaxed">
                Meningkatkan efisiensi dan produktivitas dalam pengelolaan perkebunan kelapa sawit Anda.
            </p>
            <div class="absolute bottom-12 left-12">
                <!-- Dekorasi Lingkaran atau Elemen Tambahan -->
                <div class="w-32 h-32 rounded-full border-4 border-white opacity-25"></div>
                <div class="w-40 h-40 rounded-full border-4 border-white opacity-50 absolute top-4 left-4"></div>
            </div>
        </div>

        <!-- Bagian Kanan (Form Login) -->
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 bg-white p-8">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('uploads/logo.png') }}" alt="AeroPalm Logo" class="h-12">
                </div>

                <!-- Judul Form -->
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Masuk</h2>

                <!-- Form -->
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email -->

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <!-- Password -->
                    <div class="mt-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi:</label>
                        <input id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Lupa Kata Sandi -->
                    <div class="flex justify-end mb-4">
                        <a href="{{ route('password.request') }}" class="text-sm text-green-600 hover:underline">
                            Lupa kata sandi
                        </a>
                    </div>

                    <!-- Tombol Login -->
                    <div>
                        <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md shadow hover:bg-green-700">
                            Masuk
                        </button>
                    </div>
                </form>

                <!-- Daftar Akun -->
                <p class="mt-6 text-center text-sm text-gray-600">
                    Belum punya akun? <a href="{{ route('register') }}" class="text-green-600 hover:underline">Buat Akun</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>