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

document.addEventListener('DOMContentLoaded', function () {
    const menuCheckbox = document.getElementById('menu');
    const content = document.querySelector('.content');
    
    menuCheckbox.addEventListener('change', function () {
        if (this.checked) {
            content.style.marginTop = `${document.querySelector('.navbar').offsetHeight}px`;
        } else {
            content.style.marginTop = '0';
        }
    });
});