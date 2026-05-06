<x-site-layout
    title="Cuidados e Bem-estar"
    description="Tela ficticia sobre manejo, biosseguranca e bem-estar em uma criacao de suinos."
>
    <section class="mx-auto flex w-full max-w-6xl flex-col gap-8 px-5 py-12 lg:px-8 lg:py-16">
        <div class="max-w-3xl rounded-3xl border border-farm-300 bg-farm-100 p-6 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
            <p class="text-sm font-semibold uppercase text-barn-700">Cuidados</p>
            <h1 class="mt-3 text-4xl font-bold leading-tight text-farm-900 sm:text-5xl">Manejo limpo, silencioso e observavel</h1>
            <p class="mt-5 text-lg leading-8 text-farm-700">
                Esta tela mostra cuidados ficticios que ajudam a comunicar boas praticas de higiene, conforto termico e acompanhamento dos animais.
            </p>
        </div>

        <div class="grid gap-5 md:grid-cols-3">
            @foreach ([
                ['title' => 'Cocho e agua', 'body' => 'Bebedouros conferidos ao longo do dia e pontos de acesso ajustados para cada lote.'],
                ['title' => 'Cama seca', 'body' => 'Pisos vistoriados, areas de descanso preservadas e corredores mantidos livres.'],
                ['title' => 'Porteira controlada', 'body' => 'Fluxo de visitantes, materiais e equipe separado por area para reduzir riscos.'],
            ] as $care)
                <article class="rounded-3xl border border-farm-300 bg-farm-50 p-6 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-50">
                    <h2 class="text-lg font-semibold text-farm-900">{{ $care['title'] }}</h2>
                    <p class="mt-3 text-sm leading-7 text-farm-700">{{ $care['body'] }}</p>
                </article>
            @endforeach
        </div>

        <div class="grid gap-5 lg:grid-cols-2">
            <section class="rounded-3xl border border-pasture-300 bg-pasture-50 p-6 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
                <h2 class="text-xl font-semibold text-pasture-900">Checklist de biosseguranca</h2>
                <div class="mt-6 grid gap-3">
                    @foreach ([
                        'Higienizar calcados na entrada dos galpoes',
                        'Separar utensilios por setor',
                        'Registrar qualquer alteracao de comportamento',
                        'Manter racao fechada e identificada',
                    ] as $item)
                        <div class="flex items-start gap-3 rounded-2xl border border-pasture-200 bg-farm-50 p-4 transition-colors duration-200 hover:border-pasture-500 hover:bg-pasture-100">
                            <span class="mt-0.5 flex size-6 shrink-0 items-center justify-center rounded-lg bg-pasture-700 text-[10px] font-bold text-farm-50">OK</span>
                            <p class="text-sm leading-6 text-farm-700">{{ $item }}</p>
                        </div>
                    @endforeach
                </div>
            </section>

            <section class="rounded-3xl border border-barn-700 bg-farm-900 p-6 text-farm-50 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
                <h2 class="text-xl font-semibold">Programa alimentar ficticio</h2>
                <div class="mt-6 grid gap-4">
                    @foreach ([
                        ['label' => 'Crescimento', 'value' => 'racao balanceada em duas ofertas'],
                        ['label' => 'Termino', 'value' => 'ajuste por lote e observacao de consumo'],
                        ['label' => 'Agua', 'value' => 'pontos limpos e revisados diariamente'],
                    ] as $row)
                        <div class="rounded-2xl border border-farm-600 bg-farm-800 px-4 py-4 transition-colors duration-200 hover:border-farm-300 hover:bg-farm-700">
                            <p class="text-sm font-semibold text-farm-100">{{ $row['label'] }}</p>
                            <p class="mt-1 text-sm leading-6 text-farm-50">{{ $row['value'] }}</p>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </section>
</x-site-layout>
