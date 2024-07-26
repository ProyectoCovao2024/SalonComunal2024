// Función para alternar la visibilidad del formulario
function toggleForm() {
    var form = document.getElementById('crudForm');
    if (form.classList.contains('show')) {
        form.classList.remove('show');
        setTimeout(function() {
            form.style.display = 'none';
        }, 500); 
    } else {
        form.style.display = 'block';
        setTimeout(function() {
            form.classList.add('show');
        }, 10); 
    }
}


// Función para seleccionar todos los checkboxes
function seleccionarTodos(source) {
    checkboxes = document.getElementsByName('selectAuto[]');
    for(var i=0, n=checkboxes.length; i<n; i++) {
        checkboxes[i].checked = source.checked;
    }
    toggleActionButtons();
}

// Función para mostrar/ocultar el botón de eliminar seleccionados
function toggleActionButtons() {
    var checkboxes = document.getElementsByName('selectAuto[]');
    var deleteButton = document.getElementById('multiActionButton');
    var anyChecked = false;
    for(var i=0; i<checkboxes.length; i++) {
        if(checkboxes[i].checked) {
            anyChecked = true;
            break;
        }
    }
    if(anyChecked) {
        deleteButton.classList.remove('d-none');
    } else {
        deleteButton.classList.add('d-none');
    }
}

// Funciones para confirmar eliminación (individual y múltiple)
function eliminar() {
    return confirm('¿Estás seguro de que deseas eliminar este registro?');
}

function fulleliminar() {
    return confirm('¿Estás seguro de que deseas eliminar los registros seleccionados?');
}

// Función para limpiar los campos del formulario
function limpiarCampos() {
    var form = document.getElementById('crudForm');
    form.reset();
}