<x-auth-layout>
    <h1 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Register</h1>
    <form action="{{ route('register.store') }}" method="post" class="space-y-5">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" id="name" name="name" autocomplete="off" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
            <input type="email" id="email" name="email" autocomplete="off" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
            <input type="password" id="password" name="password" required
                class="w-full border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" />
        </div>
        <div>
            <button type="submit" class="w-full bg-black text-white font-medium py-2 rounded-md hover:bg-gray-900 transition">
                Register
            </button>
        </div>
    </form>
    <p class="text-sm text-center text-gray-500 mt-6">
        Already have an account?
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login.</a>
    </p>
</x-auth-layout>