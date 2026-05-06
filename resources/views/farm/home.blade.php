<x-site-layout
    title="Aura Pigs"
    description="Pagina inicial ficticia de uma fazenda voltada a criacao responsavel de suinos."
>
    <section class="border-b border-farm-200 bg-farm-100">
        <div class="mx-auto grid w-full max-w-6xl gap-8 px-5 py-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-stretch lg:px-8 lg:py-14">
            <div class="flex flex-col justify-between gap-8 rounded-3xl border border-farm-300 bg-farm-50 p-6 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0 lg:p-8">
                <div class="flex flex-col gap-6">
                    <div class="inline-flex w-fit rounded-xl border border-barn-300 bg-barn-50 px-4 py-2 text-sm font-semibold text-barn-800">
                        Fazenda ficticia de suinos
                    </div>

                    <div class="flex flex-col gap-5">
                        <h1 class="max-w-3xl text-4xl font-bold leading-tight text-farm-900 sm:text-5xl">
                            Aura Pigs
                        </h1>
                        <p class="max-w-2xl text-lg leading-8 text-farm-700">
                            Um espaco demonstrativo inspirado em fazenda, com celeiro, piquetes, rotina de alimentacao e cuidados essenciais para uma suinocultura organizada.
                        </p>
                    </div>
                </div>

                <div class="grid gap-3 sm:grid-cols-2">
                    <a href="{{ route('farm.operation') }}" class="rounded-2xl border border-pasture-700 bg-pasture-700 px-5 py-3 text-center text-sm font-semibold text-farm-50 transition-colors duration-200 hover:border-pasture-800 hover:bg-pasture-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700">
                        Ver operacao
                    </a>
                    <a href="{{ route('farm.care') }}" class="rounded-2xl border border-farm-300 bg-farm-100 px-5 py-3 text-center text-sm font-semibold text-farm-900 transition-colors duration-200 hover:border-barn-400 hover:bg-barn-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700">
                        Conhecer cuidados
                    </a>
                </div>
            </div>

            <div class="grid gap-4 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
                <div class="overflow-hidden rounded-3xl border border-farm-300 bg-farm-50 p-3">
                    <img
                        src="{{ asset('images/pigs-farm-hero.jpg') }}"
                        alt="Foto real de suinos em uma area rural com cercas e estrutura de fazenda."
                        class="h-[24rem] w-full rounded-2xl object-cover sm:h-[30rem]"
                    >
                </div>

                <div class="grid gap-3 sm:grid-cols-3">
                    @foreach ([
                        ['value' => '3', 'label' => 'galpoes ficticios'],
                        ['value' => '120', 'label' => 'suinos por lote'],
                        ['value' => '24h', 'label' => 'rotina monitorada'],
                    ] as $metric)
                        <article class="rounded-2xl border border-farm-300 bg-farm-50 p-4 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-50">
                            <p class="text-2xl font-bold text-pasture-800">{{ $metric['value'] }}</p>
                            <p class="mt-1 text-sm leading-6 text-farm-700">{{ $metric['label'] }}</p>
                        </article>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="mx-auto grid w-full max-w-6xl gap-5 px-5 py-12 md:grid-cols-3 lg:px-8">
        @foreach ([
            ['title' => 'Celeiro organizado', 'body' => 'Racao, utensilios e registros ficam separados por setor para manter a rotina previsivel.'],
            ['title' => 'Piquetes e baias', 'body' => 'Areas de descanso, corredores e cercas ajudam a visualizar o fluxo da propriedade.'],
            ['title' => 'Manejo no campo', 'body' => 'Acompanhamento simples de agua, alimento e comportamento aproxima a tela da rotina rural.'],
        ] as $card)
            <article class="rounded-3xl border border-farm-300 bg-farm-100 p-6 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-50">
                <h2 class="text-lg font-semibold text-farm-900">{{ $card['title'] }}</h2>
                <p class="mt-3 text-sm leading-7 text-farm-700">{{ $card['body'] }}</p>
            </article>
        @endforeach
    </section>
</x-site-layout>
