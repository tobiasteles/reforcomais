document.addEventListener('DOMContentLoaded', function() {
    const mobileMenu = document.querySelector('.mobile-menu');
    const navList = document.querySelector('.nav-list');

    mobileMenu.addEventListener('click', function() {
        navList.classList.toggle('active');
        this.querySelector('i').classList.toggle('bi-list');
        this.querySelector('i').classList.toggle('bi-x');
    });

    // Fechar menu ao clicar em um link
    document.querySelectorAll('.nav-list a').forEach(link => {
        link.addEventListener('click', () => {
            navList.classList.remove('active');
            mobileMenu.querySelector('i').classList.replace('bi-x', 'bi-list');
        });
    });
});