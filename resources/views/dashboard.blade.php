<x-default-layout>
    <div class="bg-white rounded-2xl shadow-md p-6">
        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Hello, User!</h2>
        <p class="text-gray-600 mb-6">Here is a summary of your investment portfolio:</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Current Balance</h3>
                <p class="text-2xl font-semibold text-green-600">$12,540.00</p>
            </div>
            <div class="bg-gray-50 p-4 rounded-lg border border-gray-200">
                <h3 class="text-lg font-medium text-gray-700 mb-2">Investments</h3>
                <p class="text-2xl font-semibold text-blue-600">8 assets</p>
            </div>
        </div>
    </div>
</x-default-layout>
