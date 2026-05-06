<x-site-layout
    title="Operacao da Granja"
    description="Tela ficticia sobre rotina e estrutura operacional de uma fazenda de suinos."
>
    <section class="mx-auto flex w-full max-w-6xl flex-col gap-8 px-5 py-12 lg:px-8 lg:py-16">
        <div class="grid gap-5 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
            <div class="rounded-3xl border border-farm-300 bg-farm-100 p-6 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
                <p class="text-sm font-semibold uppercase text-barn-700">Operacao</p>
                <h1 class="mt-3 text-4xl font-bold leading-tight text-farm-900 sm:text-5xl">Rotina clara para cada fase da criacao</h1>
                <p class="mt-5 text-lg leading-8 text-farm-700">
                    A operacao ficticia organiza recebimento, crescimento e acompanhamento dos suinos em setores simples, com processos pensados para limpeza e previsibilidade.
                </p>
            </div>

            <div class="rounded-3xl border border-pasture-300 bg-pasture-50 p-6 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
                <h2 class="text-xl font-semibold text-pasture-900">Mapa da propriedade</h2>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ([
                        'Porteira e triagem',
                        'Baias de crescimento',
                        'Deposito de racao',
                        'Corredor do manejo',
                    ] as $item)
                        <div class="rounded-2xl border border-pasture-200 bg-farm-50 px-4 py-3 text-sm text-farm-700 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-100">
                            {{ $item }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="grid gap-4">
            @foreach ([
                ['time' => '06:30', 'title' => 'Abertura do celeiro', 'body' => 'Conferencia visual dos animais, bebedouros e ventilacao antes da primeira alimentacao.'],
                ['time' => '09:00', 'title' => 'Limpeza das baias', 'body' => 'Retirada de residuos e organizacao dos corredores sem misturar fluxos entre lotes.'],
                ['time' => '14:00', 'title' => 'Ronda dos piquetes', 'body' => 'Atualizacao ficticia de indicadores de racao, agua e comportamento dos grupos.'],
                ['time' => '17:30', 'title' => 'Fechamento da porteira', 'body' => 'Revisao dos portoes, cercas e anotacoes para a equipe do proximo turno.'],
            ] as $step)
                <article class="rounded-3xl border border-farm-300 bg-farm-50 p-6 transition-colors duration-200 hover:border-barn-400 hover:bg-barn-50">
                    <div class="flex flex-col gap-3 sm:flex-row sm:items-start">
                        <span class="w-fit rounded-xl border border-farm-300 bg-farm-100 px-3 py-1 text-sm font-semibold text-farm-800">{{ $step['time'] }}</span>
                        <div>
                            <h2 class="text-lg font-semibold text-farm-900">{{ $step['title'] }}</h2>
                            <p class="mt-2 text-sm leading-7 text-farm-700">{{ $step['body'] }}</p>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
</x-site-layout>
