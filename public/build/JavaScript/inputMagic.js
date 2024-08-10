let divFormMagic = document.getElementById("updateInput");
let inputMagic = document.getElementById("nombre_actividad_Antigua");
let btnMagic = document.getElementById("updateBtn");
let displayStatus = true;

btnMagic.addEventListener("mouseover",()=>{
    divFormMagic.style.display = "inline";
})

btnMagic.addEventListener("mouseleave",()=>{
    let interV = setInterval(()=>{
        if (inputMagic.value == null || inputMagic.value == ""){
            divFormMagic.style.display = "none";
        }
        setInterval(()=>{
            clearInterval(interV);
        },3000);
    },3000)
})

