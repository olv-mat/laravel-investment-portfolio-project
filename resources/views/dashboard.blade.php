<x-default-layout>
    <div class="bg-white p-6 rounded-md shadow-sm mb-6">
        @auth
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold text-gray-800">Welcome, {{ Auth::user()->name }}!</h2>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-red-600 rounded-md shadow-sm hover:bg-red-700 transition">
                    Logout
                </button>
            </form>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-2">
            <div class="bg-gray-100 p-4 rounded-md text-center shadow-sm">
                <p class="text-sm text-gray-500">Total Favorites</p>
                <p class="text-2xl font-bold text-gray-800">7</p>
            </div>
            <div class="bg-gray-100 p-4 rounded-md text-center shadow-sm">
                <p class="text-sm text-gray-500">Total Lists</p>
                <p class="text-2xl font-bold text-gray-800">3</p>
            </div>
        </div>
        @endauth
        @guest
            <div class="rounded-md p-6">
                <h2 class="text-2xl font-semibold text-gray-800 mb-4">Welcome to Investment Portfolio!</h2>
                <p class="text-gray-700 mb-6">
                    To view your lists and favorites, please log in or register.
                </p>
                <div class="flex gap-4">
                    <a href="{{ route('login') }}" class="px-5 py-2.5 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 transition">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="px-5 py-2.5 bg-blue-600 text-white rounded-md shadow hover:bg-blue-700 transition">
                        Register
                    </a>
                </div>
            </div>
        @endguest
    </div>
    <div class="bg-white p-4 rounded-md shadow-sm mb-6">
        <input
            type="text"
            placeholder="Search for stocks..."
            class="w-full border border-gray-300 rounded-md px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-blue-500"
        />
    </div>
    <div class="bg-white p-6 rounded-md shadow-sm">
        <h3 class="text-md font-semibold text-gray-800 mb-4">Market Overview</h3>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider">
                    <tr>
                        <th class="px-4 py-2 text-left">Symbol</th>
                        <th class="px-4 py-2 text-left">Company</th>
                        <th class="px-4 py-2 text-left">Price</th>
                        <th class="px-4 py-2 text-left">Change</th>
                        <th class="px-4 py-2 text-left">Volume</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-medium">TSLA</td>
                        <td class="px-4 py-2">Tesla, Inc.</td>
                        <td class="px-4 py-2">$245.32</td>
                        <td class="px-4 py-2 text-green-600">+2.30%</td>
                        <td class="px-4 py-2">25.1M</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">AMZN</td>
                        <td class="px-4 py-2">Amazon.com, Inc.</td>
                        <td class="px-4 py-2">$130.54</td>
                        <td class="px-4 py-2 text-red-600">-0.65%</td>
                        <td class="px-4 py-2">18.4M</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">NVDA</td>
                        <td class="px-4 py-2">NVIDIA Corp.</td>
                        <td class="px-4 py-2">$730.10</td>
                        <td class="px-4 py-2 text-green-600">+1.12%</td>
                        <td class="px-4 py-2">22.9M</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>
