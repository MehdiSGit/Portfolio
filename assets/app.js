/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// start the Stimulus application
import './bootstrap';

import anime from 'animejs/lib/anime.es.js';



window.addEventListener('scroll', reveal);

function reveal() {
    let element = document.querySelector('.subheading');

    let position = element.getBoundingClientRect();

    if (position.top >= 0 && position.bottom <= window.innerHeight) {
        element.classList.add('logo_animation')
    }
}

let typed = new Typed('#typed', {
    strings: ['UX Design', 'UI Design', 'Developpeur', 'Web', 'Dev', 'Front', 'Data'],
    typeSpeed: 0,
    backSpeed: 0,
    smartBackspace: true, // c'est par defaut
    loop: true
});

anime({
    targets: '#yo',
    translateX: 250,
    rotate: '1turn',
    backgroundColor: '#FFF',
    duration: 800
});