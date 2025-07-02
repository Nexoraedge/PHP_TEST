<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DevDhoni-Ai | AI-Powered Creations</title>

    <!-- Fonts & Tailwind -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="min-h-screen bg-gray-900 text-white flex items-center justify-center p-6">
    <main class="w-full max-w-4xl text-center space-y-8">
        <h1 class="text-4xl sm:text-6xl font-bold leading-tight">Hi, I'm <span class="text-emerald-400">DevDhoni-Ai</span></h1>
        <p class="text-lg sm:text-2xl text-gray-300 max-w-2xl mx-auto">Building <span class="font-semibold text-amber-400">AI-powered websites</span>, crafting the <span class="font-semibold text-fuchsia-400">Togenine</span> extension, and sharing knowledge on my YouTube channel.</p>

        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="https://github.com/Nexoraedge" target="_blank" class="px-6 py-3 rounded-lg font-semibold bg-white text-gray-900 hover:bg-gray-200 transition">GitHub ↗</a>
            <a href="https://www.youtube.com/channel/UCLURA5d5DmvU_4q9pp9tyQg" target="_blank" class="px-6 py-3 rounded-lg font-semibold bg-red-600 hover:bg-red-500 transition">YouTube ↗</a>
        </div>

        <!-- Showcase image -->
        <div class="w-full h-64 sm:h-80 rounded-lg object-cover overflow-hidden">
            <img src="{{ asset('image.png') }}" alt="Showcase image" class="w-full h-full object-cover">
        </div>
    </main>
</body>
</html>
