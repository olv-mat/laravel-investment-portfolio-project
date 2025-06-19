<!DOCTYPE html>
<html lang="en">
    <x-head />
    <body class="bg-gray-100 min-h-screen flex flex-col">
        <header class="bg-black shadow-sm py-4 px-6 mb-2 text-white">
            <div class="max-w-7xl mx-auto flex justify-between items-center">
                <h1 class="text-xl font-semibold">
                    <a href="{{ route('dashboard') }}" class="text-white hover:no-underline">
                        Investment Portfolio
                    </a>
                </h1>
            </div>
        </header>
        <div class="flex flex-1 px-4 max-w-7xl mx-auto w-full">
            <aside class="w-64 bg-white rounded-md shadow-sm p-4 mr-6">
                <nav class="space-y-2">
                    <a href="{{ route('dashboard') }}"
                    class="block px-3 py-2 rounded-md font-medium
                            {{ request()->routeIs('dashboard') ? 'bg-black text-white' : 'text-gray-800 hover:bg-gray-100' }}">
                        Dashboard
                    </a>
                    @auth
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
                    @endauth
                </nav>
            </aside>
            <main class="flex-1">
                {{ $slot }}
            </main>
        </div>
        <footer class="bg-black text-white text-sm py-4 px-6 shadow-sm mt-8">
            <div class="max-w-7xl mx-auto text-center">
                &copy; {{ date('Y') }} Investment Portfolio. All rights reserved.
            </div>
        </footer>
    </body>
</html>