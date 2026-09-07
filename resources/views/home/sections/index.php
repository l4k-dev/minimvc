<main>

    <!-- =========================================================
         1. HERO
    ========================================================== -->

    <section class="relative overflow-hidden bg-slate-950 text-white selection:bg-blue-500 selection:text-white">

        <!-- Background -->
        <div class="pointer-events-none absolute inset-0 overflow-hidden">

            <div class="absolute -top-40 -right-40 h-[32rem] w-[32rem] rounded-full bg-blue-500/10 blur-[140px]"></div>

            <div class="absolute top-1/2 -left-48 h-[28rem] w-[28rem] rounded-full bg-cyan-500/5 blur-[140px]"></div>

            <div class="absolute inset-0 opacity-[0.035]" style="
                    background-image:
                        linear-gradient(rgba(148,163,184,.4) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(148,163,184,.4) 1px, transparent 1px);
                    background-size: 48px 48px;
                "></div>

        </div>


        <div class="relative mx-auto max-w-7xl px-6 py-24 md:py-32">

            <div class="grid items-center gap-16 lg:grid-cols-[1.15fr_.85fr]">

                <!-- Conteúdo -->
                <div>

                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-blue-400/20 bg-blue-400/5 px-4 py-2 text-xs font-semibold uppercase tracking-[0.22em] text-blue-300">

                        <span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span>

                        PHP · MVC · OOP

                    </div>


                    <p class="mt-7 text-sm font-medium text-slate-500">

                        <?= htmlspecialchars($home['titulo']) ?>

                    </p>


                    <h1
                        class="mt-3 max-w-4xl text-4xl font-black leading-[1.05] tracking-tight text-white md:text-6xl lg:text-7xl">

                        Um mini framework MVC

                        <span class="block text-slate-400">
                            construído do zero.
                        </span>

                    </h1>


                    <p class="mt-7 max-w-2xl text-base leading-8 text-slate-400 md:text-lg">

                        Uma implementação própria em PHP para entender,
                        na prática, como funcionam o roteamento, MVC,
                        orientação a objetos, persistência e renderização
                        de uma aplicação web.

                    </p>


                    <div class="mt-10 flex flex-wrap gap-4">

                        <a href="#arquitetura"
                            class="inline-flex items-center gap-2 rounded-xl bg-blue-500 px-6 py-3.5 text-sm font-bold text-white shadow-lg shadow-blue-500/10 transition hover:-translate-y-0.5 hover:bg-blue-400">

                            Explorar arquitetura

                            <span>↓</span>

                        </a>


                        <a href="#como-usar"
                            class="inline-flex items-center rounded-xl border border-slate-800 bg-slate-900/70 px-6 py-3.5 text-sm font-bold text-slate-300 transition hover:-translate-y-0.5 hover:border-slate-700 hover:bg-slate-800 hover:text-white">

                            Como usar

                        </a>

                    </div>


                    <div class="mt-12 flex items-center gap-3 border-t border-slate-900 pt-6 text-sm">

                        <span class="text-slate-600">
                            Desenvolvido por
                        </span>

                        <a href="https://www.lucasleite.online" target="_blank" rel="noopener noreferrer"
                            class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-1.5 font-semibold text-slate-300 transition hover:border-blue-500/40 hover:text-blue-400">

                            <?= htmlspecialchars($home['desenvolvedor']) ?>

                        </a>

                    </div>

                </div>


                <!-- Terminal -->
                <div class="relative">

                    <div class="absolute -inset-4 rounded-3xl bg-blue-500/5 blur-2xl"></div>

                    <div class="relative overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16] shadow-2xl">

                        <!-- Header -->
                        <div class="flex items-center justify-between border-b border-slate-800 px-5 py-4">

                            <div class="flex gap-2">

                                <span class="h-3 w-3 rounded-full bg-slate-700"></span>
                                <span class="h-3 w-3 rounded-full bg-slate-700"></span>
                                <span class="h-3 w-3 rounded-full bg-slate-700"></span>

                            </div>

                            <span class="font-mono text-xs text-slate-600">
                                public/index.php
                            </span>

                        </div>


                        <!-- Código -->
                        <div class="overflow-x-auto p-6">

                            <pre class="font-mono text-sm leading-7 text-slate-400"><code><span class="text-purple-400">&lt;?php</span>

<span class="text-purple-400">require_once</span>
<span class="text-slate-300">__DIR__ . </span>
<span class="text-blue-300">'/../vendor/autoload.php'</span>;

<span class="text-purple-400">$app</span> =
    <span class="text-purple-400">require_once</span>
    <span class="text-blue-300">'../bootstrap/app.php'</span>;

<span class="text-purple-400">$app</span>-&gt;<span class="text-cyan-300">run</span>();</code></pre>

                        </div>


                        <!-- Status -->
                        <div class="border-t border-slate-800 bg-slate-900/40 px-6 py-4">

                            <div class="flex items-center gap-3 font-mono text-xs">

                                <span class="text-emerald-400">
                                    ●
                                </span>

                                <span class="text-slate-500">
                                    Aplicação inicializada
                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- =========================================================
         2. ARQUITETURA
    ========================================================== -->

    <section id="arquitetura" class="scroll-mt-20 border-t border-slate-900 bg-slate-950">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">

            <div class="max-w-2xl">

                <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                    Arquitetura
                </span>


                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white md:text-4xl">

                    Pequenas peças.

                    <span class="text-slate-500">
                        Uma aplicação organizada.
                    </span>

                </h2>


                <p class="mt-5 text-base leading-7 text-slate-400">

                    O framework divide responsabilidades entre componentes
                    independentes, tornando o fluxo da aplicação mais simples
                    de entender e manter.

                </p>

            </div>


            <?php

            $componentes = [

                [
                    'numero' => '01',
                    'nome' => 'Request',
                    'descricao' => 'Centraliza o acesso aos dados enviados pelo cliente, como parâmetros, query strings e formulários.'
                ],

                [
                    'numero' => '02',
                    'nome' => 'Router',
                    'descricao' => 'Recebe a URL e o método HTTP e determina qual controller deve processar a requisição.'
                ],

                [
                    'numero' => '03',
                    'nome' => 'Controller',
                    'descricao' => 'Coordena a lógica da aplicação e conecta a requisição às demais camadas.'
                ],

                [
                    'numero' => '04',
                    'nome' => 'Database',
                    'descricao' => 'Centraliza a conexão com o MySQL utilizando PDO.'
                ],

                [
                    'numero' => '05',
                    'nome' => 'Model',
                    'descricao' => 'Representa os dados e fornece métodos para consultar e manipular informações no banco.'
                ],

                [
                    'numero' => '06',
                    'nome' => 'View',
                    'descricao' => 'Renderiza os templates responsáveis pela apresentação dos dados para o usuário.'
                ],

                [
                    'numero' => '07',
                    'nome' => 'Response',
                    'descricao' => 'Centraliza a criação das respostas HTTP, como conteúdo, status, JSON e redirecionamentos.'
                ],

                [
                    'numero' => '08',
                    'nome' => 'Migration',
                    'descricao' => 'Permite versionar e reproduzir a estrutura do banco através de código.'
                ],

            ];

            ?>


            <div class="mt-14 grid gap-5 md:grid-cols-2 lg:grid-cols-4">

                <?php foreach ($componentes as $componente): ?>

                    <article
                        class="group relative overflow-hidden rounded-2xl border border-slate-800 bg-slate-900/40 p-7 transition duration-300 hover:-translate-y-1 hover:border-blue-500/40 hover:bg-slate-900">

                        <div class="flex items-center justify-between">

                            <span class="font-mono text-xs font-bold text-slate-600 transition group-hover:text-blue-400">

                                <?= $componente['numero'] ?>

                            </span>


                            <span
                                class="h-px w-10 bg-slate-800 transition group-hover:w-16 group-hover:bg-blue-500/50"></span>

                        </div>


                        <h3 class="mt-8 text-xl font-bold text-white">

                            <?= $componente['nome'] ?>

                        </h3>


                        <p class="mt-3 text-sm leading-6 text-slate-400">

                            <?= $componente['descricao'] ?>

                        </p>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- =========================================================
         3. FLUXO
    ========================================================== -->

    <section id="fluxo" class="scroll-mt-20 border-t border-slate-900 bg-[#080d16]">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">

            <div class="max-w-2xl">

                <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                    Fluxo
                </span>


                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white md:text-4xl">

                    O caminho de uma requisição.

                </h2>


                <p class="mt-5 text-base leading-7 text-slate-400">

                    Cada camada possui uma responsabilidade específica
                    dentro do ciclo de execução da aplicação.

                </p>

            </div>


            <div class="mt-16 w-full overflow-x-auto px-4">
                <div
                    class="flex flex-col sm:flex-row min-w-full sm:min-w-[950px] items-center justify-center gap-4 sm:gap-0">

                    <!-- Request -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">01</span>
                        <p class="mt-2 font-bold text-white">Request</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- Router -->
                    <div
                        class="w-full sm:w-auto rounded-xl border border-blue-500/20 bg-blue-500/5 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-blue-400">02</span>
                        <p class="mt-2 font-bold text-white">Router</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- Controller -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">03</span>
                        <p class="mt-2 font-bold text-white">Controller</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- Model -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">04</span>
                        <p class="mt-2 font-bold text-white">Model</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- Database -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">05</span>
                        <p class="mt-2 font-bold text-white">Database</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- View -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">06</span>
                        <p class="mt-2 font-bold text-white">View</p>
                    </div>

                    <div class="text-blue-400 rotate-90 sm:rotate-0 my-1 sm:my-0 sm:px-3">
                        →
                    </div>

                    <!-- Response -->
                    <div class="w-full sm:w-auto rounded-xl border border-slate-800 bg-slate-900 px-6 py-5 text-center">
                        <span class="font-mono text-xs text-slate-600">07</span>
                        <p class="mt-2 font-bold text-white">Response</p>
                    </div>

                </div>
            </div>


            <!-- Explicação -->
            <div class="mx-auto mt-12 max-w-3xl rounded-2xl border border-slate-800 bg-slate-900/50 p-6">

                <p class="text-sm leading-7 text-slate-400">

                    Uma requisição chega à aplicação através do
                    <strong class="text-slate-200">Request</strong>.
                    O <strong class="text-slate-200">Router</strong>
                    identifica a rota e encaminha a execução para o
                    <strong class="text-slate-200">Controller</strong>.
                    Quando necessário, o Controller utiliza o
                    <strong class="text-slate-200">Model</strong> para acessar
                    o banco. Depois, os dados podem ser enviados para uma
                    <strong class="text-slate-200">View</strong>, que será
                    apresentada ao usuário através da
                    <strong class="text-slate-200">Response</strong>.

                </p>

            </div>

        </div>

    </section>


    <!-- =========================================================
     4. COMO USAR
========================================================== -->

    <section id="como-usar" class="scroll-mt-20 border-t border-slate-900 bg-slate-950">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">

            <!-- Cabeçalho -->
            <div class="max-w-2xl">

                <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                    Como usar
                </span>

                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white md:text-4xl">

                    Clone, configure

                    <span class="text-slate-500">
                        e execute.
                    </span>

                </h2>

                <p class="mt-5 text-base leading-7 text-slate-400">

                    O projeto foi preparado para ser executado através do Docker,
                    facilitando a configuração do ambiente e permitindo que você
                    explore o framework sem precisar instalar manualmente todas
                    as dependências da aplicação.

                </p>

            </div>


            <!-- =====================================================
             PASSO A PASSO
        ====================================================== -->

            <div class="mt-14 space-y-5">
                <!-- =====================================================
     DOWNLOAD DIRETO
====================================================== -->

                <div class="mt-10 overflow-hidden rounded-2xl border border-blue-500/20 bg-blue-500/5">

                    <div class="flex flex-col gap-5 p-6 sm:flex-row sm:items-center sm:justify-between">

                        <div>

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-9 w-9 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">

                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 3v12m0 0 4-4m-4 4-4-4M5 21h14" />
                                    </svg>

                                </span>

                                <h3 class="font-bold text-white">
                                    Baixe o projeto
                                </h3>

                            </div>

                            <p class="mt-2 text-sm text-slate-500">
                                Baixe o projeto completo em formato ZIP e execute localmente.
                            </p>

                        </div>


                        <a href="/downloads/minimvc.zip" download
                            class="inline-flex shrink-0 items-center justify-center gap-2 rounded-xl bg-blue-500 px-5 py-3 text-sm font-semibold text-white transition hover:bg-blue-400">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 3v12m0 0 4-4m-4 4-4-4M5 21h14" />
                            </svg>

                            Baixar ZIP

                        </a>

                    </div>

                </div>

                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16]">

                    <div class="flex items-center gap-4 border-b border-slate-800 px-6 py-4">
                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            01
                        </span>
                        <div>
                            <h3 class="font-bold text-white">Clone o repositório</h3>
                            <p class="mt-1 text-xs text-slate-600">Baixe o projeto para sua máquina</p>
                        </div>
                    </div>

                    <div class="overflow-x-auto p-6 space-y-3">
                        <!-- Linha 1: Git Clone com o botão -->
                        <div class="flex items-center gap-3">
                            <pre
                                class="font-mono text-sm leading-7 text-slate-400"><code class="code-to-copy"><span class="text-blue-400">$</span> git clone https://github.com/l4k-dev/minimvc</code></pre>

                            <button type="button"
                                class="copy-btn relative inline-flex h-7 items-center gap-1.5 rounded-md border border-slate-700 bg-slate-800 px-2 text-xs font-mono text-slate-300 transition hover:bg-slate-700 hover:text-white active:scale-95"
                                title="Copiar comando">
                                <!-- Ícone SVG -->
                                <svg class="h-3.5 w-3.5 icon-svg" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <!-- Texto de feedback -->
                                <span class="feedback-text hidden text-green-400 font-semibold">Copiado!</span>
                            </button>
                        </div>

                        <!-- Linha 2: CD -->
                        <pre
                            class="font-mono text-sm leading-7 text-slate-400"><code><span class="text-blue-400">$</span> cd minimvc</code></pre>
                    </div>

                </article>



                <!-- 02 - Dependências -->
                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16]">

                    <div class="flex items-center gap-4 border-b border-slate-800 px-6 py-4">

                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            02
                        </span>

                        <div>

                            <h3 class="font-bold text-white">
                                Instale as dependências
                            </h3>

                            <p class="mt-1 text-xs text-slate-600">
                                Instala as dependências definidas no Composer
                            </p>

                        </div>

                    </div>


                    <div class="overflow-x-auto p-6">

                        <pre
                            class="font-mono text-sm leading-7 text-slate-400"><code><span class="text-blue-400">$</span> composer install</code></pre>

                    </div>

                </article>



                <!-- 03 - Env -->
                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16]">

                    <div class="flex items-center gap-4 border-b border-slate-800 px-6 py-4">

                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            03
                        </span>

                        <div>

                            <h3 class="font-bold text-white">
                                Configure o ambiente
                            </h3>

                            <p class="mt-1 text-xs text-slate-600">
                                Crie seu arquivo de configuração local
                            </p>

                        </div>

                    </div>


                    <div class="overflow-x-auto p-6">

                        <pre
                            class="font-mono text-sm leading-7 text-slate-400"><code><span class="text-blue-400">$</span> cp .env.example .env</code></pre>

                    </div>

                </article>



                <!-- 04 - Docker -->
                <article class="overflow-hidden rounded-2xl border border-blue-500/20 bg-blue-500/5">

                    <div class="flex items-center gap-4 border-b border-blue-500/10 px-6 py-4">

                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            04
                        </span>

                        <div>

                            <h3 class="font-bold text-white">
                                Suba os containers
                            </h3>

                            <p class="mt-1 text-xs text-slate-500">
                                PHP, Nginx e MySQL
                            </p>

                        </div>

                    </div>


                    <div class="overflow-x-auto p-6">

                        <pre
                            class="font-mono text-sm leading-7 text-slate-300"><code><span class="text-blue-400">$</span> docker compose up -d</code></pre>

                    </div>

                </article>



                <!-- 05 - Migration -->
                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16]">

                    <div class="flex items-center gap-4 border-b border-slate-800 px-6 py-4">

                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            05
                        </span>

                        <div>

                            <h3 class="font-bold text-white">
                                Prepare o banco de dados
                            </h3>

                            <p class="mt-1 text-xs text-slate-600">
                                Execute as migrations e o seeder
                            </p>

                        </div>

                    </div>


                    <div class="overflow-x-auto p-6">

                        <pre
                            class="font-mono text-sm leading-7 text-slate-400"><code><span class="text-blue-400">$</span> docker compose exec app php console migrate:fresh --seed</code></pre>

                    </div>

                </article>



                <!-- 06 - Acessar -->
                <article class="overflow-hidden rounded-2xl border border-slate-800 bg-[#080d16]">

                    <div class="flex items-center gap-4 border-b border-slate-800 px-6 py-4">

                        <span
                            class="flex h-8 w-8 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 font-mono text-sm font-bold text-blue-400">
                            06
                        </span>

                        <div>

                            <h3 class="font-bold text-white">
                                Acesse a aplicação
                            </h3>

                            <p class="mt-1 text-xs text-slate-600">
                                O framework estará disponível pelo Nginx
                            </p>

                        </div>

                    </div>


                    <div class="flex flex-col gap-4 p-6 sm:flex-row sm:items-center sm:justify-between">

                        <!-- Lado esquerdo: URL e observação que empilham no mobile -->
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2 sm:gap-3">
                            <code
                                class="w-fit rounded-xl border border-slate-800 bg-slate-900 px-4 py-3 font-mono text-sm text-blue-300">
            http://localhost:<span class="font-bold text-white">8095</span>
        </code>
                            <span class="text-xs text-slate-500">
                                (Padrão, para mudar alterar no <code class="text-slate-400">docker-compose.yml</code>)
                            </span>
                        </div>

                        <!-- Lado direito: Fluxo técnico -->
                        <div class="flex items-center gap-2 font-mono text-xs text-slate-500">
                            <span class="text-slate-400">Nginx</span>
                            <span class="text-blue-400">→</span>
                            <span class="text-slate-400">PHP-FPM</span>
                            <span class="text-blue-400">→</span>
                            <span class="font-semibold text-blue-300">MiniMVC</span>
                        </div>

                    </div>

                </article>

            </div>



            <!-- =====================================================
             FLUXO FINAL
        ====================================================== -->

            <div class="mt-10 rounded-2xl border border-slate-800 bg-slate-900/40 p-6">

                <div class="flex flex-col gap-5 lg:flex-row lg:items-center lg:justify-between">

                    <div>

                        <p class="text-sm font-semibold text-white">
                            Depois disso, explore o código.
                        </p>

                        <p class="mt-2 max-w-2xl text-sm leading-6 text-slate-400">

                            Comece pelo <code class="text-slate-300">public/index.php</code>,
                            siga para o <code class="text-slate-300">bootstrap/app.php</code>
                            e acompanhe a requisição até o Controller, Model e View.

                        </p>

                    </div>


                    <div class="flex flex-wrap items-center gap-2 font-mono text-xs">

                        <span class="rounded-lg bg-slate-800 px-3 py-2 text-slate-300">
                            public/index.php
                        </span>

                        <span class="text-slate-600">
                            →
                        </span>

                        <span class="rounded-lg bg-slate-800 px-3 py-2 text-slate-300">
                            bootstrap
                        </span>

                        <span class="text-slate-600">
                            →
                        </span>

                        <span class="rounded-lg bg-blue-500/10 px-3 py-2 text-blue-300">
                            MiniMVC
                        </span>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         5. BANCO DE DADOS / MIGRATIONS
    ========================================================== -->

    <section class="border-t border-slate-900 bg-[#080d16]">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">

            <div class="grid gap-16 lg:grid-cols-2 lg:items-center">

                <!-- Texto -->
                <div>

                    <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                        Banco de dados
                    </span>


                    <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white md:text-4xl">

                        Estrutura reproduzível.

                        <span class="text-slate-500">
                            Sem depender de alterações manuais.
                        </span>

                    </h2>


                    <p class="mt-5 max-w-xl text-base leading-7 text-slate-400">

                        As migrations permitem definir a estrutura do banco
                        através de código e reproduzir essa estrutura
                        em diferentes ambientes.

                    </p>

                </div>


                <!-- Terminal -->
                <div class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-950">

                    <div class="flex items-center gap-2 border-b border-slate-800 px-5 py-4">

                        <span class="h-3 w-3 rounded-full bg-slate-700"></span>
                        <span class="h-3 w-3 rounded-full bg-slate-700"></span>
                        <span class="h-3 w-3 rounded-full bg-slate-700"></span>

                    </div>


                    <div class="p-6 font-mono text-sm leading-8">

                        <p>

                            <span class="text-blue-400">$</span>

                            <span class="text-slate-300">
                                php console migrate
                            </span>

                        </p>


                        <p class="text-slate-600">
                            Executando migrations...
                        </p>


                        <p class="text-emerald-400">
                            ✓ Migration executada
                        </p>


                        <p class="mt-4">

                            <span class="text-blue-400">$</span>

                            <span class="text-slate-300">
                                php console migrate:fresh --seed
                            </span>

                        </p>


                        <p class="text-slate-600">
                            Recriando banco...
                        </p>


                        <p class="text-emerald-400">
                            ✓ Banco recriado e populado
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         6. EXTENSIBILIDADE DO MODEL
    ========================================================== -->

    <section id="model-custom" class="border-t border-slate-900 bg-slate-950">

        <div class="mx-auto max-w-7xl px-6 py-24 md:py-32">

            <div class="max-w-3xl">

                <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                    Extensibilidade
                </span>


                <h2 class="mt-4 text-3xl font-extrabold tracking-tight text-white md:text-4xl">

                    Crie seus próprios métodos no Model

                </h2>


                <p class="mt-5 text-base leading-7 text-slate-400">

                    O Model base fornece métodos genéricos para consultar
                    o banco. Quando uma entidade precisar de uma consulta
                    específica, você pode criar um novo método no seu
                    próprio Model e reutilizar os métodos existentes.

                </p>

            </div>


            <div class="mt-14 grid gap-8 lg:grid-cols-2">

                <!-- Código -->
                <div class="overflow-hidden rounded-2xl border border-slate-800 bg-slate-900">

                    <div class="border-b border-slate-800 px-5 py-4">

                        <p class="font-mono text-sm font-semibold text-slate-300">
                            app/Models/Usuario.php
                        </p>

                    </div>


                    <div class="overflow-x-auto p-6">

                        <pre class="text-sm leading-7 text-slate-300"><code><span class="text-blue-400">class</span> Usuario <span class="text-blue-400">extends</span> Model
{
    <span class="text-blue-400">protected static string</span> $table = <span class="text-cyan-400">'usuarios'</span>;

    <span class="text-blue-400">public static function</span> ativos(): array
    {
        <span class="text-blue-400">return static::</span>where(<span class="text-cyan-400">'ativo'</span>, <span class="text-purple-400">1</span>);
    }
}</code></pre>

                    </div>

                </div>


                <!-- Explicação -->
                <div class="flex flex-col justify-center">

                    <div class="space-y-6">

                        <!-- 01 -->
                        <div>

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-500/10 text-sm font-bold text-blue-400">
                                    1
                                </span>


                                <h3 class="font-semibold text-white">
                                    Herde do Model base
                                </h3>

                            </div>


                            <p class="mt-2 pl-10 text-sm leading-6 text-slate-400">

                                A classe <code class="text-slate-300">Usuario</code>
                                herda os métodos que já existem no Model.

                            </p>

                        </div>


                        <!-- 02 -->
                        <div>

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-500/10 text-sm font-bold text-blue-400">
                                    2
                                </span>


                                <h3 class="font-semibold text-white">
                                    Crie um método específico
                                </h3>

                            </div>


                            <p class="mt-2 pl-10 text-sm leading-6 text-slate-400">

                                O método <code class="text-slate-300">ativos()</code>
                                representa uma consulta específica da entidade
                                <code class="text-slate-300">Usuario</code>.

                            </p>

                        </div>


                        <!-- 03 -->
                        <div>

                            <div class="flex items-center gap-3">

                                <span
                                    class="flex h-7 w-7 items-center justify-center rounded-full bg-blue-500/10 text-sm font-bold text-blue-400">
                                    3
                                </span>


                                <h3 class="font-semibold text-white">
                                    Reaproveite o que já existe
                                </h3>

                            </div>


                            <p class="mt-2 pl-10 text-sm leading-6 text-slate-400">

                                Em vez de escrever novamente toda a consulta
                                SQL, o método utiliza o
                                <code class="text-slate-300">where()</code>
                                que já existe no Model base.

                            </p>

                        </div>

                    </div>


                    <!-- Fluxo -->
                    <div class="mt-8 rounded-xl border border-slate-800 bg-slate-900/60 p-5">

                        <p class="text-xs font-bold uppercase tracking-widest text-slate-600">
                            Fluxo
                        </p>


                        <div class="mt-4 flex flex-wrap items-center gap-2 font-mono text-sm">

                            <span class="rounded-lg bg-blue-500/10 px-3 py-2 text-blue-300">
                                Usuario::ativos()
                            </span>

                            <span class="text-slate-600">
                                →
                            </span>

                            <span class="rounded-lg bg-slate-800 px-3 py-2 text-slate-300">
                                where()
                            </span>

                            <span class="text-slate-600">
                                →
                            </span>

                            <span class="rounded-lg bg-slate-800 px-3 py-2 text-slate-300">
                                Database
                            </span>

                        </div>

                    </div>


                    <!-- Utilização -->
                    <div class="mt-4 rounded-xl border border-blue-500/20 bg-blue-500/5 p-5">

                        <p class="text-sm font-medium text-blue-300">
                            Exemplo de utilização
                        </p>


                        <pre class="mt-3 text-sm text-slate-300"><code>$usuarios = Usuario::ativos();</code></pre>


                        <p class="mt-3 text-sm leading-6 text-slate-400">

                            Assim, o Model específico pode concentrar regras
                            relacionadas à sua entidade sem modificar o
                            funcionamento do Model base.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- =========================================================
         7. CONCEITO FINAL
    ========================================================== -->

    <section class="border-t border-slate-900 bg-[#080d16]">

        <div class="mx-auto max-w-5xl px-6 py-24 text-center md:py-32">

            <span class="text-xs font-bold uppercase tracking-[0.25em] text-blue-400">
                O conceito
            </span>


            <h2 class="mt-5 text-3xl font-black tracking-tight text-white md:text-5xl">

                Entender o framework

                <span class="text-slate-500">
                    é entender a aplicação.
                </span>

            </h2>


            <p class="mx-auto mt-6 max-w-2xl text-base leading-8 text-slate-400 md:text-lg">

                O MiniMVC não pretende substituir frameworks completos.
                Ele existe para mostrar como as peças fundamentais
                de uma aplicação web podem ser construídas,
                organizadas e conectadas.

            </p>


            <div class="mx-auto mt-10 h-px max-w-xs bg-gradient-to-r from-transparent via-blue-500/40 to-transparent">
            </div>


            <div class="mt-8 flex flex-wrap justify-center gap-3">

                <span
                    class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-1.5 font-mono text-xs text-slate-500">
                    PHP
                </span>

                <span
                    class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-1.5 font-mono text-xs text-slate-500">
                    MVC
                </span>

                <span
                    class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-1.5 font-mono text-xs text-slate-500">
                    OOP
                </span>

                <span
                    class="rounded-lg border border-slate-800 bg-slate-900 px-3 py-1.5 font-mono text-xs text-slate-500">
                    PDO
                </span>

            </div>

        </div>

    </section>

</main>