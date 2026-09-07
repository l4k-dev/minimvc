
const menuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

const menuIconOpen = document.getElementById('menu-icon-open');
const menuIconClose = document.getElementById('menu-icon-close');

menuButton.addEventListener('click', () => {

    const isOpen = mobileMenu.classList.contains('hidden');

    // Alterna menu
    mobileMenu.classList.toggle('hidden');

    // Alterna ícones
    menuIconOpen.classList.toggle('hidden', isOpen);
    menuIconClose.classList.toggle('hidden', !isOpen);

    // Acessibilidade
    menuButton.setAttribute('aria-expanded', isOpen);
    menuButton.setAttribute(
        'aria-label',
        isOpen ? 'Fechar menu' : 'Abrir menu'
    );
});

// Fecha ao clicar em um link
mobileMenu.querySelectorAll('a').forEach(link => {

    link.addEventListener('click', () => {

        mobileMenu.classList.add('hidden');

        menuIconOpen.classList.remove('hidden');
        menuIconClose.classList.add('hidden');

        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Abrir menu');
    });

});
document.addEventListener('DOMContentLoaded', () => {
    // Seleciona todos os botões de cópia da página (permite reutilizar em outros passos)
    const copyButtons = document.querySelectorAll('.copy-btn');

    copyButtons.forEach(button => {
        const iconSvg = button.querySelector('.icon-svg');
        const feedbackText = button.querySelector('.feedback-text');

        // Pacha o elemento de código anterior dentro do mesmo container
        const codeContainer = button.closest('div');
        const codeElement = codeContainer.querySelector('.code-to-copy');

        button.addEventListener('click', () => {
            if (!codeElement) return;

            // Limpa o cifrão e pega apenas o texto limpo do comando
            const textToCopy = codeElement.innerText.replace('$', '').trim();

            navigator.clipboard.writeText(textToCopy).then(() => {
                iconSvg.classList.add('hidden');
                feedbackText.classList.remove('hidden');
                button.classList.add('border-green-500/50');

                // Retorna ao normal após 500ms (0,5s)
                setTimeout(() => {
                    feedbackText.classList.add('hidden');
                    iconSvg.classList.remove('hidden');
                    button.classList.remove('border-green-500/50');
                }, 500);
            }).catch(err => {
                console.error('Erro ao copiar: ', err);
            });
        });
    });
});