<!DOCTYPE html>
<html lang="en">
    <x-head />
    <body class="bg-gray-100 min-h-screen flex flex-col">
        <header class="bg-black shadow-sm py-4 px-6 mb-2 text-white">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-xl font-semibold">
                    <a href="{{ route('dashboard') }}" class="hover:underline text-white">
                        Investment Portfolio
                    </a>
                </h1>
                @auth
                <a href="" class="inline-block px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md shadow-sm hover:bg-red-700 transition">Logout</a>
                @endauth
                @guest
                <a href="" class="inline-block px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md shadow-sm hover:bg-blue-700 transition">Login</a>
                @endguest
            </div>
        </header>
        <div class="flex flex-1 px-4 max-w-7xl mx-auto w-full">
            <aside class="w-64 bg-white rounded-md shadow-sm p-4 mr-6">
                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}"
                    class="block px-3 py-2 rounded-md font-medium
                            {{ request()->routeIs('dashboard') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                        Search
                    </a>
                    <a href="{{ route('favorites') }}"
                    class="block px-3 py-2 rounded-md font-medium
                            {{ request()->routeIs('favorites') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                        Favorites
                    </a>
                    <a href="{{ route('lists') }}"
                    class="block px-3 py-2 rounded-md font-medium
                            {{ request()->routeIs('lists') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                        Lists
                    </a>
                </nav>
            </aside>
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
        <footer class="text-center text-sm text-gray-400 py-6">
            &copy; {{ date('Y') }} Investment Portfolio. All rights reserved.
        </footer>
    </body>
</html>