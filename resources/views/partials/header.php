<header class="sticky top-0 z-50 border-b border-slate-800/80 bg-slate-950/90 backdrop-blur-xl">

    <div class="mx-auto flex h-16 max-w-7xl items-center justify-between px-6">

        <!-- Logo -->
        <a href="/" class="group flex items-center gap-3" aria-label="Página inicial">

            <span
                class="flex h-12 w-12 items-center justify-center rounded-lg  bg-blue-500/10 text-sm font-black text-blue-400 transition group-hover:border-blue-400/40 group-hover:bg-blue-500/15">
                <img src="/assets/images/icon.png" alt="">
            </span>

            <div class="flex items-baseline gap-2">
                <span class="text-lg font-extrabold tracking-tight text-white">
                    Mini<span class="text-slate-500">MVC</span>
                </span>

                <span class="hidden text-xs font-medium text-slate-600 sm:inline">
                    PHP
                </span>
            </div>

        </a>


        <!-- Navegação desktop -->
        <nav class="hidden items-center gap-8 md:flex">

            <a href="#arquitetura" class="text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Arquitetura
            </a>

            <a href="#fluxo" class="text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Fluxo
            </a>

            <a href="#como-usar" class="text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Como usar
            </a>

        </nav>


        <!-- Status -->
        <div class="hidden items-center gap-2 text-xs text-slate-500 md:flex">

            <span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span>

            <span>
                Projeto educacional
            </span>

        </div>


        <button id="mobile-menu-button" type="button"
            class="flex h-10 w-10 items-center justify-center rounded-lg border border-slate-800 bg-slate-900 text-slate-400 transition hover:border-slate-700 hover:text-white md:hidden"
            aria-label="Abrir menu" aria-expanded="false" aria-controls="mobile-menu">
            <!-- Ícone hamburger -->
            <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>

            <!-- Ícone X -->
            <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="2" stroke="currentColor" class="hidden h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6l12 12M6 18L18 6" />
            </svg>
        </button>

    </div>


    <!-- Menu mobile -->
    <div id="mobile-menu" class="hidden border-t border-slate-800 bg-slate-950 md:hidden">

        <nav class="mx-auto flex max-w-7xl flex-col px-6 py-4">

            <a href="#arquitetura"
                class="border-b border-slate-800 py-4 text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Arquitetura
            </a>

            <a href="#fluxo"
                class="border-b border-slate-800 py-4 text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Fluxo
            </a>

            <a href="#como-usar" class="py-4 text-sm font-medium text-slate-400 transition-colors hover:text-blue-400">
                Como usar
            </a>

        </nav>

    </div>

</header>