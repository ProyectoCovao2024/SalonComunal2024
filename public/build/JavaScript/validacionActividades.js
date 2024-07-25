
document.addEventListener('DOMContentLoaded', function() {
    const tipoActividadInput = document.getElementById('nombre_actividad');

    tipoActividadInput.addEventListener('input', function() {
        // Reemplazar números y signos con una cadena vacía
        const value = tipoActividadInput.value;
        tipoActividadInput.value = value.replace(/[^a-zA-Z\s]/g, '');
    });
});


//