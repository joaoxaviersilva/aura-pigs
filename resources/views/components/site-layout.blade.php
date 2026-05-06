@props([
    'title' => 'Aura Pigs',
    'description' => 'Site ficticio sobre uma fazenda de criacao de suinos.',
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{ $description }}">

        <title>{{ $title }} | {{ config('app.name', 'Laravel') }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=poppins:400,500,600,700" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-farm-50 font-sans text-farm-900 antialiased">
        <div class="flex min-h-screen flex-col">
            <header class="border-b border-farm-200 bg-farm-100">
                <nav class="mx-auto flex w-full max-w-6xl flex-col gap-4 px-5 py-5 sm:flex-row sm:items-center sm:justify-between lg:px-8" aria-label="Navegacao principal">
                    <a href="{{ route('farm.home') }}" class="inline-flex items-center gap-3 rounded-2xl border border-farm-300 bg-farm-50 px-4 py-2 text-sm font-semibold text-farm-900 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700">
                        <span class="flex size-9 items-center justify-center rounded-xl bg-barn-600 text-sm font-bold text-farm-50">AP</span>
                        <span>Aura Pigs</span>
                    </a>

                    <div class="flex flex-wrap gap-2">
                        @foreach ([
                            ['label' => 'Inicio', 'route' => 'farm.home'],
                            ['label' => 'Operacao', 'route' => 'farm.operation'],
                            ['label' => 'Cuidados', 'route' => 'farm.care'],
                        ] as $item)
                            <a
                                href="{{ route($item['route']) }}"
                                @class([
                                    'rounded-xl border px-4 py-2 text-sm font-medium transition-colors duration-200 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700',
                                    'border-pasture-500 bg-pasture-100 text-pasture-900' => request()->routeIs($item['route']),
                                    'border-transparent text-farm-700 hover:border-farm-300 hover:bg-farm-50 hover:text-farm-900' => ! request()->routeIs($item['route']),
                                ])
                            >
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </div>
                </nav>
            </header>

            <main class="flex-1">
                {{ $slot }}
            </main>

            <footer class="border-t border-farm-300 bg-farm-900 text-farm-100">
                <div class="mx-auto flex w-full max-w-6xl flex-col gap-3 px-5 py-6 text-sm sm:flex-row sm:items-center sm:justify-between lg:px-8">
                    <p>Projeto ficticio para fins academicos.</p>
                    <p>Rotina de granja, pasto, celeiro e manejo responsavel.</p>
                </div>
            </footer>
        </div>
    </body>
</html>
