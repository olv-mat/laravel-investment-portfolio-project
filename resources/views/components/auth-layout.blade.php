<!DOCTYPE html>
<html lang="en">
    <x-head></x-head>
    <body class="bg-gray-100 flex flex-col items-center justify-center min-h-screen px-4">
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-6 py-4 rounded-xl mb-6 w-full max-w-lg text-base shadow-sm">
            <ul class="list-disc list-inside space-y-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="bg-white p-8 rounded-2xl shadow-md w-full max-w-md">
            {{ $slot }}
        </div>
    </body>
</html>