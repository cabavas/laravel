@extends('layouts.guest')

@section('title', 'Entrar | TaskFlow')

@section('content')

    <div class="mb-8">
        <p class="mb-3 text-sm font-semibold uppercase tracking-widest text-indigo-600">
            Bem-vindo de volta
        </p>

        <h2 class="text-3xl font-bold tracking-tight text-slate-900 sm:text-4xl">
            Entre na sua conta
        </h2>

        <p class="mt-3 text-slate-500">
            Informe seus dados para continuar de onde parou.
        </p>
    </div>

    <!-- Mensagem visual de erro -->
    <div id="login-error"
        class="mb-6 hidden rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700"
        role="alert">
        Não foi possível entrar. Verifique seus dados e tente novamente.
    </div>

    <!-- Erros de validação do Laravel, caso sejam enviados pelo backend -->
    @if ($errors->any())
        <div class="mb-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
            <ul class="list-inside list-disc space-y-1">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="#" method="POST" class="space-y-5" id="login-form">
        @csrf

        <!-- E-mail -->
        <div>
            <label for="email" class="mb-2 block text-sm font-semibold text-slate-700">
                E-mail
            </label>

            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3 8l9 6 9-6M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="voce@exemplo.com"
                    autocomplete="email"
                    required
                    class="w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-4 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                >
            </div>

            @error('email')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Senha -->
        <div>
            <div class="mb-2 flex items-center justify-between gap-3">
                <label for="password" class="text-sm font-semibold text-slate-700">
                    Senha
                </label>

                <a href="#"
                    class="text-sm font-semibold text-indigo-600 transition hover:text-indigo-800">
                    Esqueceu a senha?
                </a>
            </div>

            <div class="relative">
                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-4 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <rect width="16" height="11" x="4" y="10" rx="2"/>
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M8 10V6a4 4 0 118 0v4m-4 5v2"/>
                    </svg>
                </div>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Digite sua senha"
                    autocomplete="current-password"
                    required
                    class="w-full rounded-xl border border-slate-200 bg-white py-3.5 pl-12 pr-12 text-sm text-slate-800 outline-none transition placeholder:text-slate-400 hover:border-slate-300 focus:border-indigo-500 focus:ring-4 focus:ring-indigo-500/10"
                >

                <button
                    type="button"
                    data-toggle-password="password"
                    aria-label="Mostrar senha"
                    aria-pressed="false"
                    class="absolute inset-y-0 right-0 flex items-center px-4 text-slate-400 transition hover:text-indigo-600"
                >
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="1.8">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.5 12s3.5-7 9.5-7 9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </button>
            </div>

            @error('password')
                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
            @enderror
        </div>

        <!-- Lembrar acesso -->
        <div class="flex items-center gap-3">
            <input
                type="checkbox"
                id="remember"
                name="remember"
                class="h-4 w-4 rounded border-slate-300 accent-indigo-600 focus:ring-indigo-500"
            >

            <label for="remember" class="text-sm text-slate-600">
                Lembrar de mim
            </label>
        </div>

        <!-- Botão de login -->
        <button
            type="submit"
            class="group flex w-full items-center justify-center gap-2 rounded-xl bg-indigo-600 px-4 py-3.5 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:-translate-y-0.5 hover:bg-indigo-700 hover:shadow-xl hover:shadow-indigo-600/25 focus:outline-none focus:ring-4 focus:ring-indigo-500/20 active:translate-y-0"
        >
            Entrar na plataforma

            <svg xmlns="http://www.w3.org/2000/svg"
                class="h-4 w-4 transition-transform group-hover:translate-x-1"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M5 12h14m-7-7 7 7-7 7"/>
            </svg>
        </button>

    </form>

    <!-- Cadastro -->
    <div class="mt-8 border-t border-slate-100 pt-6 text-center">
        <p class="text-sm text-slate-500">
            Ainda não tem uma conta?

            <a href="#"
                class="font-semibold text-indigo-600 transition hover:text-indigo-800">
                Criar uma conta
            </a>
        </p>
    </div>

@endsection

@push('scripts')
<script>
    document.querySelectorAll('[data-toggle-password]').forEach(button => {
        button.addEventListener('click', () => {
            const input = document.getElementById(
                button.dataset.togglePassword
            );

            const mostrar = input.type === 'password';

            input.type = mostrar ? 'text' : 'password';
            button.setAttribute('aria-pressed', String(mostrar));
            button.setAttribute(
                'aria-label',
                mostrar ? 'Ocultar senha' : 'Mostrar senha'
            );
        });
    });

    // Demonstração visual opcional. Remova quando conectar o backend.
    // O formulário continua sem autenticação até ser conectado à rota real.
    document.getElementById('login-form').addEventListener('submit', event => {
        if (event.currentTarget.action.endsWith('#')) {
            event.preventDefault();
            document.getElementById('login-error').classList.remove('hidden');
        }
    });
</script>
@endpush