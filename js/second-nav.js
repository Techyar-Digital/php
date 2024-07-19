document.addEventListener('DOMContentLoaded', (event) => {
    const navBar = document.getElementById('side-nav');
    const secondNav = document.querySelector('.second-nav');
    const contentWrapper = document.getElementById('content-wrapper');

    navBar.addEventListener('click', (e) => {
        if (secondNav.classList.contains('show')) {
            secondNav.classList.remove('show');
            secondNav.classList.add('hide');
            navBar.style.color = 'black';
        } else {
            secondNav.classList.remove('hide');
            secondNav.classList.add('show');
            navBar.style.color = 'white';
        }
    });

    contentWrapper.addEventListener('click', (e) => {
        if (!secondNav.contains(e.target) && secondNav.classList.contains('show')) {
            secondNav.classList.remove('show');
            secondNav.classList.add('hide');
        }
    });

    secondNav.addEventListener('click', (e) => {
        e.stopPropagation(); // Prevent click inside secondNav from triggering contentWrapper click event
    });
});