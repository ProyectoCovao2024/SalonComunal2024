document.addEventListener("DOMContentLoaded", function() {
    const modalLink = document.querySelector('a[href="#openModal"]');
    modalLink.addEventListener("click", function() {
        setTimeout(function() {
            const modal = document.getElementById("modalContent");
            modal.scrollIntoView({ behavior: "smooth", block: "center" });
        }, 400); // Adjust the delay if needed
    });
});