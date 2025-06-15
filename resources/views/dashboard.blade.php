<x-default-layout>
    <div class="bg-white p-6 rounded-md shadow-sm mb-6">
        @auth
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Welcome, {{ Auth::user()->name }}!</h2>
            <p class="text-gray-600 text-sm">
                You have <span class="font-medium">3</span> lists and <span class="font-medium">7</span> favorites.
            </p>
        @endauth
        @guest
            <h2 class="text-lg font-semibold text-gray-800 mb-2">Welcome to Investment Portfolio</h2>
            <p class="text-gray-600 text-sm">
                Please <a href="#" class="text-blue-600 hover:underline">log in</a> to view your lists and favorites.
            </p>
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
