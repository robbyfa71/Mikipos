
    <x-layout>
        <h1 class="text-2xl font-bold border-b border-orange-200 uppercase">{{ $title }}</h1>
        <div class="grid grid-cols-3 gap-3 mt-5">
            <x-stats-card >
                Rp {{$income}}
            </x-stats-card>
            <x-stats-card>Rp {{$spending}}</x-stats-card>
            <x-stats-card>Rp {{$margin}}</x-stats-card>
        </div>
    </x-layout>

