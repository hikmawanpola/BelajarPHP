<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
    <nav class="bg-white shadow p-4">
        <div class="max-w-7xl mx-auto">
            <a href="{{ url('/') }}" class="text-xl font-bold">CRUD Siswa</a>
        </div>
    </nav>

    <div class="container mx-auto px-4 py-6">
        @yield('content')
    </div>
</body>
</html>
