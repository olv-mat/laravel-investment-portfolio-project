<x-default-layout>
    <div class="bg-white p-6 rounded-md shadow-sm">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Your Favorite Stocks</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 text-sm">
                <thead class="bg-gray-50 text-gray-600 uppercase tracking-wider">
                    <tr>
                        <th class="px-4 py-2 text-left">Symbol</th>
                        <th class="px-4 py-2 text-left">Company</th>
                        <th class="px-4 py-2 text-left">Price</th>
                        <th class="px-4 py-2 text-left">Change</th>
                        <th class="px-4 py-2 text-left">Market Cap</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100 bg-white text-gray-700">
                    <tr>
                        <td class="px-4 py-2 font-medium">AAPL</td>
                        <td class="px-4 py-2">Apple Inc.</td>
                        <td class="px-4 py-2">$178.00</td>
                        <td class="px-4 py-2 text-green-600">+1.25%</td>
                        <td class="px-4 py-2">$2.78T</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">GOOGL</td>
                        <td class="px-4 py-2">Alphabet Inc.</td>
                        <td class="px-4 py-2">$134.50</td>
                        <td class="px-4 py-2 text-red-600">-0.58%</td>
                        <td class="px-4 py-2">$1.70T</td>
                    </tr>
                    <tr>
                        <td class="px-4 py-2 font-medium">MSFT</td>
                        <td class="px-4 py-2">Microsoft Corp.</td>
                        <td class="px-4 py-2">$318.60</td>
                        <td class="px-4 py-2 text-green-600">+0.90%</td>
                        <td class="px-4 py-2">$2.50T</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-default-layout>