  /*SCROLL REVEAL*/

ScrollReveal({ 
    reset: true,
    distance: '80px',
    duration: 1000,
    delay: 100 
});

ScrollReveal().reveal('.home-content', { origin: 'top' });
ScrollReveal().reveal('.home-img, .about-img, .fund-content, .explor-content, .slide-content', { origin: 'bottom' });
ScrollReveal().reveal('.about-content', { origin: 'left' });

/*TYPED JS*/

const typed = new Typed('.infinite-text',{
    strings: ['Integral', 'Integral', 'Integral'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})
