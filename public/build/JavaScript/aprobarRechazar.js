$(document).ready(function(){
    //*Aceptar Solicitud
    $('#aprov').on('click',function(){
        var cedula = $("#aprov").val();
        $.ajax({
            url: '../../../controller/historialReservas2.php', //!Dado a errores de url se crea un 2° Controlador.
            type: 'POST',
            data: {cedulaR: cedula,estatus: 2},
            success: function (data) { 
                alert("Reserva Aprovada Exitosamente");
                window.location.reload();
            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    });
    //*Rechazar Solicitud
    $('#rechaz').click(function(){
        var cedula = $("#rechaz").val();
        $.ajax({
            url: '../../../controller/historialReservas2.php', //!Dado a errores de url se crea un 2° Controlador.
            type: 'POST',
            data: {cedulaR: cedula,estatus: 3},
            success: function (data) { 
                alert("Reserva Denegada Exitosamente");
                window.location.reload();
            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    });
    //*Cargar Modal
    $('#ModalInfo').click(function(){
        var cedula = $("#aprov").val();//!No recupera el valor de la etiqueta <a></a>
        $.ajax({
            url: '../../../controller/historialReservas2.php', //!Dado a errores de url se crea un 2° Controlador.
            type: 'POST',
            data: {cedulaR: cedula, estatus: 'modal'},
            success: function (response) { 
                $('#openModal').html(response);
            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    });

    //form para el modal
    $('#delete').on('click',function(){
        var cedula = $("#cedula").val();
            $.ajax({
            url: '../../../controller/historialReservas3.php', //!Dado a errores de url se crea un 2° Controlador.
            type: 'POST',
            data: {cedulaR: cedula, estatus: 'eliminar'},
            success: function (response) { 
                alert("Reserva Eliminada");
            },
            error: function (response) {
                console.log(response.responseText);
            }
        });
    });

});