<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-Sidebar>
        <h1 class="text-2xl font-bold border-b border-orange-200 uppercase">{{ $title }}</h1>
        <div class="grid grid-cols-3 gap-3 mt-5">
            <x-stats-card>
                <x-slot:extra>Income</x-slot>
                Rp {{$income}}
            </x-stats-card>
            <x-stats-card>Rp {{$spending}}</x-stats-card>
            <x-stats-card>Rp {{$margin}}</x-stats-card>
        </div>
    </x-Sidebar>
</body>

</html>
