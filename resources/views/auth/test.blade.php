<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - AeroPalm</title>
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
                <!-- Dekorasi Lingkaran -->
                <div class="w-32 h-32 rounded-full border-4 border-white opacity-25"></div>
                <div class="w-40 h-40 rounded-full border-4 border-white opacity-50 absolute top-4 left-4"></div>
            </div>
        </div>

        <!-- Bagian Kanan (Form Register) -->
        <div class="flex flex-col justify-center items-center w-full lg:w-1/2 bg-white p-8">
            <div class="w-full max-w-md">
                <!-- Logo -->
                <div class="flex justify-center mb-6">
                    <img src="{{ asset('uploads/logo.png') }}" alt="AeroPalm Logo" class="h-12">
                </div>

                <!-- Judul Form -->
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Buat Akun</h2>

                <!-- Form -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <!-- Nama Lengkap -->
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Nama Lengkap:</label>
                        <input id="name" name="name" type="text" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>

                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input id="email" name="email" type="email" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>

                    <!-- Password -->
                    <div class="mb-4 relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Kata Sandi:</label>
                        <input id="password" name="password" type="password" required
                            class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>

                    <!-- Tombol Register -->
                    <div>
                        <button type="submit" class="w-full bg-green-600 text-white py-2 px-4 rounded-md shadow hover:bg-green-700">
                            Buat Akun
                        </button>
                    </div>
                </form>

                <!-- Masuk ke Akun -->
                <p class="mt-6 text-center text-sm text-gray-600">
                    Sudah punya akun? <a href="{{ route('login') }}" class="text-green-600 hover:underline">Masuk</a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>


<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>