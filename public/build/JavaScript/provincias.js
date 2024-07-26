let idProvinciaSelect = document.getElementById("prov");
let idCantonSelect = document.getElementById("can");
let idDistritoSelect = document.getElementById("dis");

idProvinciaSelect.addEventListener("change",getIdCanton)
idCantonSelect.addEventListener("change",getIdDistrito)

function fetchAndSetData(url,dataForm,targetElement){
    return fetch(url,{
        method: "POST",
        body: dataForm,
        mode: "cors"
    })
    .then(response => response.json())
    .then(data =>{
        targetElement.innerHTML = data
    })
    .catch(error => console.log(error))
}


function getIdCanton(){
    let idProvincia = idProvinciaSelect.value;
    let url = '../CantDist/cantones.php';
    let dataForm = new FormData();
    dataForm.append("codProvincia",idProvincia);

    fetchAndSetData(url,dataForm,idCantonSelect)
    .then(()=>{
        idDistritoSelect.innerHTML = "<option value=''>Seleccione una opcione</option>";
    })
    .catch(
        err => console.log(err)
    )
}


function getIdDistrito(){
    let idCanton = idCantonSelect.value;
    let url = '../CantDist/distritos.php';
    let dataForm = new FormData();
    dataForm.append("codDistrito",idCanton);

    fetchAndSetData(url,dataForm,idDistritoSelect);
}