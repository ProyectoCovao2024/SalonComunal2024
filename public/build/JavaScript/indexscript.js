  /*SCROLL REVEAL*/

ScrollReveal({ 
    reset: true,
    distance: '80px',
    duration: 1000,
    delay: 100 
});

ScrollReveal().reveal('.home-content', { origin: 'top' });
ScrollReveal().reveal('.home-img, .about-img, .fund-content, .explor-content, .slideranimation', { origin: 'bottom' });
ScrollReveal().reveal('.about-content', { origin: 'left' });

/*TYPED JS*/

const typed = new Typed('.infinite-text',{
    strings: ['Integral', 'Integral', 'Integral'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true
})


/*MODALS*/
var modal = document.getElementById("BenefModal");
var btn = document.getElementById("openModalBtnBenf");
var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
    event.preventDefault();
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
}

span.onclick = function() {
    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        document.body.style.overflow = "auto";
    }
}


