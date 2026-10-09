<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'TaskFlow')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta
        name="description"
        content="Organize suas tarefas e aumente sua produtividade."
    >

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#eef2ff',
                            100: '#e0e7ff',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                        }
                    }
                }
            }
        }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet"
    >
</head>

<body class="min-h-screen bg-slate-50 font-sans text-slate-800 antialiased">

    <div class="min-h-screen lg:grid lg:grid-cols-2">

        <!-- Painel visual -->
        <aside class="relative hidden overflow-hidden bg-indigo-700 lg:flex lg:flex-col lg:justify-between lg:p-12 xl:p-16">

            <div class="absolute -right-32 -top-32 h-96 w-96 rounded-full bg-indigo-500/40 blur-3xl"></div>

            <div class="absolute -bottom-40 -left-20 h-96 w-96 rounded-full bg-violet-500/30 blur-3xl"></div>

            <div class="relative z-10">
                <a href="#" class="inline-flex items-center gap-3">
                    <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-white text-indigo-700 shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5 12 4 4L19 6"/>
                        </svg>
                    </span>

                    <span class="text-2xl font-bold tracking-tight text-white">
                        TaskFlow
                    </span>
                </a>
            </div>

            <div class="relative z-10 max-w-lg">
                <span class="inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-4 py-2 text-sm font-medium text-indigo-50">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Organize. Conquiste. Evolua.
                </span>

                <h1 class="mt-8 text-4xl font-bold leading-tight tracking-tight text-white xl:text-5xl">
                    Suas tarefas em ordem.
                    <span class="text-indigo-200">
                        Seus objetivos mais perto.
                    </span>
                </h1>

                <p class="mt-6 max-w-md text-lg leading-8 text-indigo-100">
                    Organize sua rotina, acompanhe seu progresso e transforme
                    seus planos em resultados.
                </p>

                <!-- Prévia ilustrativa -->
                <div class="mt-10 rounded-2xl border border-white/20 bg-white/10 p-5 shadow-2xl backdrop-blur-sm">

                    <div class="flex items-center justify-between">
                        <div>
                            <p class="text-sm text-indigo-100">
                                Visão geral
                            </p>

                            <p class="mt-1 text-xl font-semibold text-white">
                                Seu progresso diário
                            </p>
                        </div>

                        <span class="rounded-lg bg-emerald-400/20 px-3 py-1.5 text-sm font-semibold text-emerald-200">
                            +12%
                        </span>
                    </div>

                    <div class="mt-6 space-y-4">
                        <div class="flex items-center gap-3 rounded-xl bg-white/10 p-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-emerald-400/20 text-emerald-200">
                                ✓
                            </span>

                            <div class="flex-1">
                                <p class="text-sm font-medium text-white">
                                    Planejar a semana
                                </p>
                                <p class="text-xs text-indigo-200">
                                    Concluída
                                </p>
                            </div>

                            <span class="h-2 w-2 rounded-full bg-emerald-300"></span>
                        </div>

                        <div class="flex items-center gap-3 rounded-xl bg-white/10 p-3">
                            <span class="flex h-9 w-9 items-center justify-center rounded-lg bg-amber-400/20 text-amber-200">
                                ◷
                            </span>

                            <div class="flex-1">
                                <p class="text-sm font-medium text-white">
                                    Revisar objetivos
                                </p>
                                <p class="text-xs text-indigo-200">
                                    Em andamento
                                </p>
                            </div>

                            <span class="h-2 w-2 rounded-full bg-amber-300"></span>
                        </div>
                    </div>

                    <div class="mt-5">
                        <div class="mb-2 flex justify-between text-xs text-indigo-100">
                            <span>Progresso do dia</span>
                            <span>75%</span>
                        </div>

                        <div class="h-2 overflow-hidden rounded-full bg-white/20">
                            <div class="h-full w-3/4 rounded-full bg-emerald-300"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative z-10 flex items-center justify-between text-sm text-indigo-200">
                <span>© {{ date('Y') }} TaskFlow</span>
                <span>Feito para sua produtividade.</span>
            </div>

        </aside>

        <!-- Área do formulário -->
        <main class="flex min-h-screen flex-col">

            <!-- Marca para telas pequenas -->
            <header class="px-6 pt-6 lg:hidden">
                <a href="#" class="inline-flex items-center gap-2">
                    <span class="flex h-10 w-10 items-center justify-center rounded-xl bg-indigo-600 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-6 w-6"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m5 12 4 4L19 6"/>
                        </svg>
                    </span>

                    <span class="text-xl font-bold text-slate-900">
                        TaskFlow
                    </span>
                </a>
            </header>

            <div class="flex flex-1 items-center justify-center px-6 py-10 sm:px-10 lg:px-12 xl:px-20">
                <div class="w-full max-w-md">

                    @yield('content')

                </div>
            </div>

            <footer class="px-6 pb-6 text-center text-xs text-slate-400">
                Organize seu dia. Alcance seus objetivos.
            </footer>

        </main>

    </div>

    @stack('scripts')

</body>
</html>