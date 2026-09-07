<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Javelin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-gray-800 text-white px-6 py-4 flex gap-6">
        <a href="/dashboard" class="hover:text-teal-400">Dashboard</a>
        <a href="/vault" class="hover:text-teal-400">Vault Protocol</a>
        <a href="/spearhead" class="hover:text-teal-400">Spearhead</a>
        <a href="/signalflare" class="hover:text-teal-400">Signal Flare</a>
        <a href="/ironcore" class="hover:text-teal-400">Iron Core</a>
        <a href="/forge" class="hover:text-teal-400">Forge</a>
    </nav>
    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>