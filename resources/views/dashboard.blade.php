@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-heading', 'Dashboard')

@section('content')

    <!-- Saudação e ação principal -->
    <section class="mb-8 flex flex-col justify-between gap-5 sm:flex-row sm:items-center">

        <div>
            <p class="text-sm font-semibold uppercase tracking-wider text-indigo-600">
                Sua visão geral
            </p>

            <h2 class="mt-2 text-2xl font-bold tracking-tight text-slate-900 sm:text-3xl">
                Olá, Usuário! 👋
            </h2>

            <p class="mt-2 text-sm text-slate-500 sm:text-base">
                Aqui está o resumo da sua produtividade.
            </p>
        </div>

        <a
            href="#nova-tarefa"
            class="inline-flex items-center justify-center gap-2 rounded-xl bg-indigo-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:-translate-y-0.5 hover:bg-indigo-700"
        >
            <svg
                xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 5v14m-7-7h14"/>
            </svg>

            Nova tarefa
        </a>

    </section>

    <!-- Cards de estatísticas -->
    <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">

        <!-- Total de tarefas -->
        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Total de tarefas
                    </p>

                    <p class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        24
                    </p>
                </div>

                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-50 text-indigo-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <rect x="4" y="4" width="16" height="17" rx="2"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 2v4m8-4v4M8 11h8m-8 4h5"/>
                    </svg>
                </span>
            </div>

            <p class="mt-4 text-xs text-slate-400">
                Todas as suas tarefas
            </p>

        </article>

        <!-- Tarefas pendentes -->
        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Pendentes
                    </p>

                    <p class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        12
                    </p>
                </div>

                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-amber-50 text-amber-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle cx="12" cy="12" r="9"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                    </svg>
                </span>
            </div>

            <p class="mt-4 text-xs text-amber-600">
                Precisam da sua atenção
            </p>

        </article>

        <!-- Tarefas em andamento -->
        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Em andamento
                    </p>

                    <p class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        5
                    </p>
                </div>

                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-50 text-sky-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle cx="12" cy="12" r="9"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2"/>
                    </svg>
                </span>
            </div>

            <p class="mt-4 text-xs text-sky-600">
                Você está progredindo
            </p>

        </article>

        <!-- Tarefas concluídas -->
        <article class="rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition duration-200 hover:-translate-y-1 hover:shadow-md">

            <div class="flex items-start justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-500">
                        Concluídas
                    </p>

                    <p class="mt-3 text-3xl font-bold tracking-tight text-slate-900">
                        7
                    </p>
                </div>

                <span class="flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-50 text-emerald-600">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8"
                    >
                        <circle cx="12" cy="12" r="9"/>
                        <path stroke-linecap="round" stroke-linejoin="round" d="m8 12 2.5 2.5L16 9"/>
                    </svg>
                </span>
            </div>

            <p class="mt-4 text-xs text-emerald-600">
                Bom trabalho!
            </p>

        </article>

    </section>

    <!-- Área inferior -->
    <section class="mt-6 grid grid-cols-1 gap-6 xl:grid-cols-3">

        <!-- Lista de tarefas -->
        <div class="overflow-hidden rounded-2xl border border-slate-200 bg-white xl:col-span-2">

            <div class="flex flex-col gap-3 border-b border-slate-100 px-5 py-5 sm:flex-row sm:items-center sm:justify-between sm:px-6">

                <div>
                    <h3 class="font-bold text-slate-900">
                        Tarefas recentes
                    </h3>

                    <p class="mt-1 text-sm text-slate-500">
                        Acompanhe suas atividades.
                    </p>
                </div>

                <a
                    href="#tarefas"
                    class="text-sm font-semibold text-indigo-600 transition hover:text-indigo-800"
                >
                    Ver todas →
                </a>

            </div>

            <div class="divide-y divide-slate-100">

                <!-- Tarefa 1 -->
                <div class="flex items-center gap-3 px-5 py-4 transition hover:bg-slate-50 sm:gap-4 sm:px-6">

                    <input
                        type="checkbox"
                        class="h-4 w-4 shrink-0 cursor-pointer rounded border-slate-300 accent-indigo-600"
                        aria-label="Marcar Planejar a semana como concluída"
                    >

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-slate-800">
                            Planejar a semana
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Organização pessoal
                        </p>
                    </div>

                    <span class="hidden rounded-lg bg-red-50 px-2.5 py-1.5 text-xs font-medium text-red-600 sm:inline-flex">
                        Alta
                    </span>

                    <span class="shrink-0 text-xs text-slate-400">
                        Hoje
                    </span>

                </div>

                <!-- Tarefa 2 -->
                <div class="flex items-center gap-3 px-5 py-4 transition hover:bg-slate-50 sm:gap-4 sm:px-6">

                    <input
                        type="checkbox"
                        class="h-4 w-4 shrink-0 cursor-pointer rounded border-slate-300 accent-indigo-600"
                        aria-label="Marcar Estudar Laravel como concluída"
                    >

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-slate-800">
                            Estudar Laravel
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Desenvolvimento
                        </p>
                    </div>

                    <span class="hidden rounded-lg bg-amber-50 px-2.5 py-1.5 text-xs font-medium text-amber-600 sm:inline-flex">
                        Média
                    </span>

                    <span class="shrink-0 text-xs text-slate-400">
                        Hoje
                    </span>

                </div>

                <!-- Tarefa 3 -->
                <div class="flex items-center gap-3 px-5 py-4 transition hover:bg-slate-50 sm:gap-4 sm:px-6">

                    <input
                        type="checkbox"
                        class="h-4 w-4 shrink-0 cursor-pointer rounded border-slate-300 accent-indigo-600"
                        aria-label="Marcar Revisar o projeto como concluída"
                    >

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-slate-800">
                            Revisar o projeto
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Trabalho
                        </p>
                    </div>

                    <span class="hidden rounded-lg bg-emerald-50 px-2.5 py-1.5 text-xs font-medium text-emerald-600 sm:inline-flex">
                        Baixa
                    </span>

                    <span class="shrink-0 text-xs text-slate-400">
                        Amanhã
                    </span>

                </div>

                <!-- Tarefa 4: concluída -->
                <div class="flex items-center gap-3 px-5 py-4 transition hover:bg-slate-50 sm:gap-4 sm:px-6">

                    <input
                        type="checkbox"
                        checked
                        class="h-4 w-4 shrink-0 cursor-pointer rounded border-slate-300 accent-indigo-600"
                        aria-label="Planejar o dia concluído"
                    >

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-slate-400 line-through">
                            Planejar o dia
                        </p>

                        <p class="mt-1 text-xs text-slate-400">
                            Organização pessoal
                        </p>
                    </div>

                    <span class="shrink-0 rounded-lg bg-emerald-50 px-2.5 py-1.5 text-xs font-medium text-emerald-600">
                        Concluída
                    </span>

                </div>

            </div>

            <div class="border-t border-slate-100 bg-slate-50/50 px-5 py-4 text-center sm:px-6">
                <p class="text-xs text-slate-400">
                    Exibindo tarefas fictícias para demonstração.
                </p>
            </div>

        </div>

        <!-- Coluna lateral -->
        <div class="space-y-6">

            <!-- Progresso semanal -->
            <article class="rounded-2xl border border-slate-200 bg-white p-5 sm:p-6">

                <div class="flex items-center justify-between gap-3">
                    <div>
                        <h3 class="font-bold text-slate-900">
                            Seu progresso
                        </h3>

                        <p class="mt-1 text-sm text-slate-500">
                            Resumo das tarefas
                        </p>
                    </div>

                    <span class="shrink-0 rounded-lg bg-indigo-50 px-2.5 py-1.5 text-xs font-semibold text-indigo-600">
                        Esta semana
                    </span>
                </div>

                <!-- Gráfico circular -->
                <div class="flex flex-col items-center py-7">

                    <div
                        class="relative flex h-40 w-40 items-center justify-center rounded-full"
                        style="background: conic-gradient(#4f46e5 0% 75%, #e0e7ff 75% 100%);"
                        role="img"
                        aria-label="75 por cento de progresso"
                    >

                        <div class="flex h-32 w-32 flex-col items-center justify-center rounded-full bg-white">

                            <span class="text-4xl font-bold tracking-tight text-slate-900">
                                75%
                            </span>

                            <span class="mt-1 text-xs text-slate-400">
                                Concluído
                            </span>

                        </div>
                    </div>

                    <p class="mt-5 text-center text-sm text-slate-500">
                        Você está indo muito bem!
                    </p>

                </div>

                <!-- Legenda -->
                <div class="space-y-4 border-t border-slate-100 pt-5">

                    <div class="flex items-center justify-between">

                        <div class="flex items-center gap-2.5">
                            <span class="h-2.5 w-2.5 rounded-full bg-indigo-600"></span>

                            <span class="text-sm text-slate-600">
                                Concluídas
                            </span>
                        </div>

                        <span class="text-sm font-semibold text-slate-800">
                            18
                        </span>

                    </div>

                    <div class="flex items-center justify-between">

                        <div class="flex items-center gap-2.5">
                            <span class="h-2.5 w-2.5 rounded-full bg-indigo-100"></span>

                            <span class="text-sm text-slate-600">
                                Restantes
                            </span>
                        </div>

                        <span class="text-sm font-semibold text-slate-800">
                            6
                        </span>

                    </div>

                </div>

            </article>

            <!-- Dica de produtividade -->
            <article class="relative overflow-hidden rounded-2xl bg-slate-900 p-5 text-white sm:p-6">

                <div class="absolute -right-8 -top-8 h-32 w-32 rounded-full bg-indigo-500/20 blur-2xl"></div>

                <div class="relative">

                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-white/10 text-amber-300">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="1.8"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M12 3v2m0 14v2M5.6 5.6 7 7m10 10 1.4 1.4M3 12h2m14 0h2M5.6 18.4 7 17m10-10 1.4-1.4M16 12a4 4 0 1 1-8 0 4 4 0 0 1 8 0z"
                            />
                        </svg>
                    </span>

                    <h3 class="mt-4 font-bold">
                        Dica de produtividade
                    </h3>

                    <p class="mt-2 text-sm leading-6 text-slate-300">
                        Comece pela tarefa mais importante do dia. Pequenos avanços consistentes geram grandes resultados.
                    </p>

                    <span class="mt-5 inline-flex items-center gap-2 text-xs font-medium text-indigo-300">
                        <span class="h-1.5 w-1.5 rounded-full bg-indigo-400"></span>
                        Um passo de cada vez
                    </span>

                </div>

            </article>

        </div>

    </section>

@endsection