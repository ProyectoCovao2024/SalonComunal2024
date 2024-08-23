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

document.addEventListener('DOMContentLoaded', () => {
    const modals = document.querySelectorAll('.modal');
    const openButtons = document.querySelectorAll('.btn');
    const closeButtons = document.querySelectorAll('.close');

    // Función para abrir un modal
    function openModal(modalId) {
        const targetModal = document.getElementById(modalId);
        if (targetModal) {
            targetModal.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Evita el scroll en el fondo
        }
    }

    // Función para cerrar un modal
    function closeModal(modal) {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto'; // Permite el scroll en el fondo
    }

    // Abrir modales cuando se haga clic en los botones
    openButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const targetModalId = button.id.replace('openModalBtn', '') + 'Modal';
            openModal(targetModalId);
        });
    });

    // Cerrar modales cuando se haga clic en el botón de cierre
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal');
            const modal = document.getElementById(modalId);
            if (modal) {
                closeModal(modal);
            }
        });
    });

    // Cerrar el modal si se hace clic fuera del contenido del modal
    window.addEventListener('click', (event) => {
        modals.forEach(modal => {
            if (event.target === modal) {
                closeModal(modal);
            }
        });
    });
});





