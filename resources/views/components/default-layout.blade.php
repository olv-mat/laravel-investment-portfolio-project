<!DOCTYPE html>
<html lang="en">
    <x-head />
    <body class="bg-gray-100 min-h-screen flex flex-col">
        <header class="bg-white shadow-sm py-4 px-6 mb-6">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-xl font-semibold text-gray-800">
                    <a href="{{ route('dashboard') }}" class="hover:underline">
                        Investment Portfolio
                    </a>
                </h1>
                <a href="" class="inline-block px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md shadow-sm hover:bg-red-700 transition">
                    Logout
                </a>
            </div>
        </header>
        <main class="flex-1 px-4">
            <div class="max-w-5xl mx-auto w-full">
                {{ $slot }}
            </div>
        </main>
        <footer class="text-center text-sm text-gray-400 py-6">
            &copy; {{ date('Y') }} Investment Portfolio. All rights reserved.
        </footer>
    </body>
</html>