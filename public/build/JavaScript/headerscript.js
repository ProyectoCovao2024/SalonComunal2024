let menuIcon = document.querySelector('#img');
let navbar = document.querySelector('.navbar');

const originalSrc = 'http://localhost/SalonComunal2024/public/build/assets/image/menu.png';
const secondarySrc = 'http://localhost/SalonComunal2024/public/build/assets/image/x.png';

menuIcon.onclick = () => {
    if (menuIcon.src === originalSrc) { 
        menuIcon.src = secondarySrc; 
    } else {
        menuIcon.src = originalSrc; 
    }
    navbar.classList.toggle('active');
};