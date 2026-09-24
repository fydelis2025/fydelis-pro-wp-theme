/**
 * Fydelis Pro — Navegação Acessível
 * Baseado nos padrões oficiais do WordPress
 * 
 * @package Fydelis_Pro
 * @since 1.0.0
 */

document.addEventListener('DOMContentLoaded', function() {
    const menuContainers = document.querySelectorAll('.main-nav');

    menuContainers.forEach(container => {
        const menu = container.querySelector('.nav-menu');
        if (!menu) return;

        // Adiciona atributos de acessibilidade
        menu.setAttribute('role', 'menubar');
        menu.querySelectorAll('li').forEach(item => {
            const link = item.querySelector('a');
            if (link) {
                item.setAttribute('role', 'none');
                link.setAttribute('role', 'menuitem');
            }
        });

        // Navegação por teclado
        menu.addEventListener('keydown', function(e) {
            const items = Array.from(menu.querySelectorAll('a[role="menuitem"]'));
            const currentIndex = items.findIndex(el => el === document.activeElement);

            if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
                e.preventDefault();
                const next = items[(currentIndex + 1) % items.length];
                next?.focus();
            }

            if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
                e.preventDefault();
                const prev = items[(currentIndex - 1 + items.length) % items.length];
                prev?.focus();
            }

            if (e.key === 'Escape') {
                container.querySelector('.menu-toggle')?.focus();
            }
        });
    });
});