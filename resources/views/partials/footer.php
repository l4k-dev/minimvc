<footer class="border-t border-slate-900 bg-slate-950">

    <div class="mx-auto max-w-7xl px-6">

        <div
            class="flex flex-col items-center gap-10 py-12 text-center md:flex-row md:items-start md:justify-between md:text-left">

            <!-- Marca -->
            <div class="max-w-lg flex flex-col items-center md:items-start">

                <a href="/" class="group inline-flex items-center gap-3" aria-label="Página inicial">

                    <span
                        class="flex h-12 w-12 items-center justify-center rounded-lg  bg-blue-500/10 text-sm font-black text-blue-400 transition group-hover:border-blue-400/40 group-hover:bg-blue-500/15">
                        <img src="/assets/images/icon.png" alt="">
                    </span>

                    <span class="text-lg font-extrabold tracking-tight text-white">
                        Mini<span class="text-slate-500">MVC</span>
                    </span>

                </a>

                <p class="mt-4 max-w-md text-sm leading-6 text-slate-500">
                    Mini framework MVC desenvolvido em PHP para explorar,
                    na prática, os fundamentos de uma aplicação web:
                    roteamento, MVC, orientação a objetos e persistência.
                </p>

            </div>


            <!-- Navegação -->
            <nav class="flex flex-wrap justify-center md:justify-start gap-x-7 gap-y-3">

                <a href="#arquitetura" class="text-sm font-medium text-slate-500 transition-colors hover:text-white">
                    Arquitetura
                </a>

                <a href="#fluxo" class="text-sm font-medium text-slate-500 transition-colors hover:text-white">
                    Fluxo
                </a>

                <a href="#como-usar" class="text-sm font-medium text-slate-500 transition-colors hover:text-white">
                    Como usar
                </a>

            </nav>

        </div>


        <!-- Copyright -->
        <div
            class="flex flex-col items-center gap-3 border-t border-slate-900 py-6 text-center text-xs md:flex-row md:items-center md:justify-between md:text-left">

            <p class="text-slate-600">
                © <?= date('Y') ?> MiniMVC. Projeto educacional.
            </p>

            <a href="https://www.lucasleite.online" target="_blank" rel="noopener noreferrer" class="group">
                <p class="text-slate-600 transition-colors group-hover:text-slate-400">
                    Desenvolvido por
                    <span class="font-medium text-slate-400 transition-colors group-hover:text-blue-400">
                        <?= htmlspecialchars($home['desenvolvedor']) ?>
                    </span>
                </p>
            </a>

        </div>

    </div>

</footer>