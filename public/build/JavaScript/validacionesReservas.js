$(document).ready(function(){
    //!Validar que sea mayor de edad
    $('#formReserva').on('submit',function(event){
        var $valor = $('#eda').val();
        if($valor <= 18){
            event.preventDefault();
            var mjs = "<br class='menjsAlert'><span class='menjsAlert' style='color: red; display: flex; transform: translateY(-120%);'>Eres menor de edad</span>";
            $("#eda").after($(mjs));
            //!Elimina el mensaje despues de un tiempo
            setTimeout(function(){
                $("br, span").remove('.menjsAlert');
            },5000)
        }
    });
    //!Validar la cantidad de invitados no sea mayor a 150 personas
    $('#formReserva').on('submit',function(event){
        var $valor = $('#canP').val();
        if($valor > 150){
            event.preventDefault();
            var mjs = "<br class='menjsAlert'><span class='menjsAlert' style='color: red; display: flex; transform: translateY(-120%);'>Se supero el limite de invitados</span>";
            $("#canP").after($(mjs));
            //!Elimina el mensaje despues de un tiempo
            setTimeout(function(){
                $("br, span").remove('.menjsAlert');
            },5000)
        }
    });
    //!Validar la hora de inicio no se inferior las 07:00 am
    $('#formReserva').on('submit',function(event){
        var $valor = $('#hoi').val();
        if($valor < "08:00"){
            event.preventDefault();
            var mjs = "<br class='menjsAlert'><span class='menjsAlert' style='color: red; display: flex; transform: translateY(-120%);'>Fuera de rango de horas</span>";
            $("#hoi").after($(mjs));
            //!Elimina el mensaje despues de un tiempo
            setTimeout(function(){
                $("br, span").remove('.menjsAlert');
            },5000)
        }
    });
    //!Validar la hora de final no se superior o igual las 10:00 pm
    $('#formReserva').on('submit',function(event){
        var $valor = $('#hof').val();
        if($valor > "22:00"){
            event.preventDefault();
            var mjs = "<br class='menjsAlert'><span class='menjsAlert' style='color: red; display: flex; transform: translateY(-120%);'>Fuera de rango de horas</span>";
            $("#hof").after($(mjs));
            //!Elimina el mensaje despues de un tiempo
            setTimeout(function(){
                $("br, span").remove('.menjsAlert');
            },5000)
        }
    });
    //!Validar que la casilla este marcada
    $('#formReserva').on('submit',function(event){
        
        if(!($('#checkbox').prop('checked'))){
            event.preventDefault();
            var mjs = "<span class='menjsAlert' style='color: red; display: flex; transform: translateY(-10%), translateX(150%);'>Por favor acepte los terminos y condiciones</span>";
            $("#checkbox").after($(mjs));
            //!Elimina el mensaje despues de un tiempo
            setTimeout(function(){
                $("br, span").remove('.menjsAlert');
            },5000)
        }
    });
});

