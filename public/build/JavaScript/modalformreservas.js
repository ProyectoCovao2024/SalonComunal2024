/*MODALS*/
var modal = document.getElementById("BenefModal");
var btn = document.getElementById("openModalBtn");
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