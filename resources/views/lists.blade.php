<x-default-layout>
    <div class="bg-white p-6 rounded-md shadow-sm">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Your Custom Lists</h2>
            <a href="#" class="inline-block px-4 py-2 text-sm font-medium text-white bg-black rounded-md shadow-sm hover:bg-gray-900 transition">
                Create New List
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider">
                    <tr>
                        <th class="px-4 py-2 text-left">List Name</th>
                        <th class="px-4 py-2 text-left">Number of Stocks</th>
                        <th class="px-4 py-2 text-left">Created At</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-medium">Tech Giants</td>
                        <td class="px-4 py-2">5</td>
                        <td class="px-4 py-2">2025-06-01</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">Dividend Picks</td>
                        <td class="px-4 py-2">8</td>
                        <td class="px-4 py-2">2025-05-20</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">Watchlist</td>
                        <td class="px-4 py-2">12</td>
                        <td class="px-4 py-2">2025-04-15</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>