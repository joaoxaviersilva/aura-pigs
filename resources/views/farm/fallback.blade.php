<x-site-layout
    title="Pagina nao encontrada"
    description="Tela fallback para rotas inexistentes do site ficticio da Aura Pigs."
>
    <section class="mx-auto flex min-h-[70vh] w-full max-w-4xl flex-col items-center justify-center gap-7 px-5 py-16 text-center lg:px-8">
        <div class="rounded-xl border border-barn-300 bg-barn-50 px-4 py-2 text-sm font-semibold text-barn-800 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
            Erro 404
        </div>

        <div class="flex flex-col gap-5 rounded-3xl border border-farm-300 bg-farm-100 p-8 transition duration-700 ease-out starting:translate-y-3 starting:opacity-0">
            <h1 class="text-4xl font-bold leading-tight text-farm-900 sm:text-5xl">Pagina nao encontrada</h1>
            <p class="mx-auto max-w-2xl text-lg leading-8 text-farm-700">
                O caminho solicitado saiu da trilha principal da granja. Volte para uma das telas disponiveis e continue a visita.
            </p>
        </div>

        <div class="flex flex-wrap justify-center gap-3">
            <a href="{{ route('farm.home') }}" class="rounded-2xl border border-pasture-700 bg-pasture-700 px-5 py-3 text-sm font-semibold text-farm-50 transition-colors duration-200 hover:border-pasture-800 hover:bg-pasture-800 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700">
                Voltar ao inicio
            </a>
            <a href="{{ route('farm.operation') }}" class="rounded-2xl border border-farm-300 bg-farm-100 px-5 py-3 text-sm font-semibold text-farm-900 transition-colors duration-200 hover:border-barn-400 hover:bg-barn-50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-pasture-700">
                Ver operacao
            </a>
        </div>
    </section>
</x-site-layout>
