<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard') | TaskFlow</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">

    <div class="min-h-screen">

        <!-- Overlay do menu mobile -->
        <div
            id="sidebar-overlay"
            class="fixed inset-0 z-40 hidden bg-slate-950/50 backdrop-blur-sm lg:hidden"
        ></div>

        <!-- Sidebar -->
        <aside
            id="sidebar"
            class="fixed inset-y-0 left-0 z-50 flex w-72 -translate-x-full flex-col border-r border-slate-200 bg-white transition-transform duration-300 lg:translate-x-0"
        >

            <!-- Logo -->
            <div class="flex h-20 items-center justify-between border-b border-slate-100 px-6">

                <a href="{{ url('/dashboard') }}" class="flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-600/20">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m5 12 4 4L19 6"
                            />
                        </svg>
                    </span>

                    <span class="text-xl font-bold tracking-tight text-slate-900">
                        Task<span class="text-indigo-600">Flow</span>
                    </span>
                </a>

                <button
                    id="close-sidebar"
                    type="button"
                    class="rounded-lg p-2 text-slate-400 hover:bg-slate-100 lg:hidden"
                    aria-label="Fechar menu"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m18 6-12 12M6 6l12 12"
                        />
                    </svg>
                </button>

            </div>

            <!-- Navegação -->
            <nav class="flex-1 space-y-8 overflow-y-auto px-4 py-6">

                <!-- Menu principal -->
                <div>
                    <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-widest text-slate-400">
                        Menu principal
                    </p>

                    <div class="space-y-1">

                        <a
                            href="{{ url('/dashboard') }}"
                            class="flex items-center gap-3 rounded-xl bg-indigo-50 px-3 py-3 text-sm font-semibold text-indigo-700"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect x="3" y="3" width="7" height="9" rx="1"/>
                                <rect x="14" y="3" width="7" height="5" rx="1"/>
                                <rect x="14" y="12" width="7" height="9" rx="1"/>
                                <rect x="3" y="16" width="7" height="5" rx="1"/>
                            </svg>

                            Dashboard

                            <span class="ml-auto h-2 w-2 rounded-full bg-indigo-600"></span>
                        </a>

                        <a
                            href="#tarefas"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-500 transition hover:bg-slate-50 hover:text-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect x="4" y="4" width="16" height="17" rx="2"/>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M8 2v4m8-4v4M8 11h8m-8 4h5"
                                />
                            </svg>

                            Minhas tarefas

                            <span class="ml-auto rounded-md bg-slate-100 px-2 py-0.5 text-xs text-slate-500">
                                12
                            </span>
                        </a>

                        <a
                            href="#calendario"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-500 transition hover:bg-slate-50 hover:text-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <rect x="3" y="5" width="18" height="16" rx="2"/>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M16 3v4M8 3v4M3 11h18"
                                />
                            </svg>

                            Calendário
                        </a>

                    </div>
                </div>

                <!-- Organização -->
                <div>
                    <p class="mb-3 px-3 text-xs font-semibold uppercase tracking-widest text-slate-400">
                        Organização
                    </p>

                    <div class="space-y-1">

                        <a
                            href="#prioridades"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-500 transition hover:bg-slate-50 hover:text-slate-900"
                        >
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
                                    d="m12 3 2.8 5.7 6.2.9-4.5 4.4 1.1 6.2-5.6-3-5.6 3 1.1-6.2L3 9.6l6.2-.9L12 3z"
                                />
                            </svg>

                            Prioridades
                        </a>

                        <a
                            href="#concluidas"
                            class="flex items-center gap-3 rounded-xl px-3 py-3 text-sm font-medium text-slate-500 transition hover:bg-slate-50 hover:text-slate-900"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="1.8"
                            >
                                <circle cx="12" cy="12" r="9"/>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m8 12 2.5 2.5L16 9"
                                />
                            </svg>

                            Concluídas
                        </a>

                    </div>
                </div>

            </nav>

            <!-- Dica do dia -->
            <div class="px-4 pb-5">
                <div class="rounded-2xl bg-gradient-to-br from-indigo-600 to-violet-700 p-4 text-white">

                    <div class="mb-3 flex h-9 w-9 items-center justify-center rounded-xl bg-white/15">
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
                    </div>

                    <p class="text-sm font-semibold">
                        Dica do dia
                    </p>

                    <p class="mt-2 text-xs leading-5 text-indigo-100">
                        Divida grandes objetivos em pequenas tarefas. Um passo de cada vez!
                    </p>

                    <div class="mt-4 h-1.5 overflow-hidden rounded-full bg-white/20">
                        <div class="h-full w-3/4 rounded-full bg-white"></div>
                    </div>

                </div>
            </div>

            <!-- Perfil na sidebar -->
            <div class="border-t border-slate-100 p-4">

                <div class="flex items-center gap-3 rounded-xl p-2">

                    <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-indigo-100 font-bold text-indigo-700">
                        U
                    </div>

                    <div class="min-w-0 flex-1">
                        <p class="truncate text-sm font-semibold text-slate-800">
                            Usuário Demo
                        </p>

                        <p class="truncate text-xs text-slate-400">
                            Plano pessoal
                        </p>
                    </div>

                    <button
                        type="button"
                        class="rounded-lg p-2 text-slate-400 hover:bg-slate-100"
                        aria-label="Opções do usuário"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <circle cx="5" cy="12" r="1"/>
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="19" cy="12" r="1"/>
                        </svg>
                    </button>

                </div>
            </div>

        </aside>

        <!-- Área principal -->
        <div class="min-h-screen lg:pl-72">

            <!-- Cabeçalho -->
            <header class="sticky top-0 z-30 border-b border-slate-200/80 bg-white/90 backdrop-blur-xl">

                <div class="flex h-20 items-center justify-between gap-4 px-4 sm:px-6 lg:px-8">

                    <!-- Título da página -->
                    <div class="flex min-w-0 items-center gap-3">

                        <button
                            id="open-sidebar"
                            type="button"
                            class="rounded-xl border border-slate-200 p-2.5 text-slate-600 hover:bg-slate-50 lg:hidden"
                            aria-label="Abrir menu"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M4 6h16M4 12h16M4 18h16"
                                />
                            </svg>
                        </button>

                        <div class="min-w-0">
                            <p class="truncate text-sm text-slate-500">
                                Área de trabalho
                            </p>

                            <h1 class="truncate text-lg font-bold text-slate-900 sm:text-xl">
                                @yield('page-heading', 'Dashboard')
                            </h1>
                        </div>

                    </div>

                    <!-- Ações do cabeçalho -->
                    <div class="flex shrink-0 items-center gap-2 sm:gap-4">

                        <!-- Busca -->
                        <div class="relative hidden md:block">

                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                class="absolute left-3 top-1/2 h-4 w-4 -translate-y-1/2 text-slate-400"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <circle cx="11" cy="11" r="7"/>
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m16 16 4 4"
                                />
                            </svg>

                            <input
                                type="search"
                                placeholder="Buscar..."
                                aria-label="Buscar"
                                class="w-44 rounded-xl border border-slate-200 bg-slate-50 py-2.5 pl-10 pr-4 text-sm outline-none transition focus:border-indigo-500 focus:bg-white focus:ring-4 focus:ring-indigo-500/10 lg:w-64"
                            >

                        </div>

                        <!-- Notificações -->
                        <button
                            type="button"
                            class="relative rounded-xl border border-slate-200 p-2.5 text-slate-500 transition hover:bg-slate-50 hover:text-indigo-600"
                            aria-label="Notificações"
                        >
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
                                    d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9m-8 12a2 2 0 0 0 4 0"
                                />
                            </svg>

                            <span class="absolute right-2 top-2 h-2 w-2 rounded-full border-2 border-white bg-red-500"></span>
                        </button>

                        <!-- Avatar -->
                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 text-sm font-bold text-white transition hover:bg-indigo-700"
                            aria-label="Perfil do usuário"
                        >
                            U
                        </button>

                    </div>
                </div>

            </header>

            <!-- Conteúdo da página -->
            <main class="p-4 sm:p-6 lg:p-8">
                @yield('content')
            </main>

            <!-- Rodapé -->
            <footer class="px-4 pb-6 text-center text-xs text-slate-400 sm:px-6 lg:px-8">
                © {{ date('Y') }} TaskFlow. Organize seu dia, alcance seus objetivos.
            </footer>

        </div>

    </div>

    <!-- Menu responsivo -->
    <script>
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('sidebar-overlay');
        const openButton = document.getElementById('open-sidebar');
        const closeButton = document.getElementById('close-sidebar');

        function openSidebar() {
            sidebar.classList.remove('-translate-x-full');
            overlay.classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeSidebar() {
            sidebar.classList.add('-translate-x-full');
            overlay.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        openButton?.addEventListener('click', openSidebar);
        closeButton?.addEventListener('click', closeSidebar);
        overlay?.addEventListener('click', closeSidebar);

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeSidebar();
            }
        });
    </script>

</body>
</html>