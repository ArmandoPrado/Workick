function notificacion(tipo, titulo, msj, posicion) {
    var type = tipo;
    var titulo = titulo;
    var msj = msj;
    var posicion = posicion;



    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": true,
        "preventDuplicates": true,
        "positionClass": posicion,
        "onclick": null,
        "showDuration": "400",
        "hideDuration": "1000",
        "timeOut": "7000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }

    toastr[type](msj, titulo);



}

/*function verAlertas(){

    var tipo = "verAlertas";
    var personaID = localStorage.getItem('personaID');


    $.ajax({
        method: "POST",
        data: {
            tipo:tipo,
            personaID:personaID
        },
        url: "../php/fn/notificacion.php",
        success: function(resp){

            resp = JSON.parse(resp);
            var renglones ="";
            var noAlerts = 0;


            for(var i=0; i<resp.length; i++){
                noAlerts = noAlerts +1;
                renglones +=
                    '<li>'+
                    '<a onclick="quitarAlerta('+resp[i].TicketID+','+resp[i].AlertaTicketID+'); verTicketsID('+resp[i].TicketID+');">'+
                    '<div>'+
                    '<i class="'+resp[i].Icono+'"></i> '+resp[i].Alerta +
                    '<span class="pull-right text-muted small">'+resp[i].Tiempo+'</span>'+
                    '</div>'+
                    '</a>'+
                    '</li>'+
                    '<li class="divider"></li>';
            }



            if(noAlerts > 0){
                $("#alertas li").remove();
                $("#noAlertas").html(noAlerts);
                $("#alertas").append(renglones);
            }else{
                $("#noAlertas").attr('style','display:none;')
            }

        }
    });

    onerror=stoperror;
};

function stoperror() {
   return true;
}

function quitarAlerta(ticketID,alertaID){
    var tipo = "quitarAlerta";
    var personaID = localStorage.getItem('personaID');

    $.ajax({
        method: "POST",
        data: {
            tipo:tipo,
            personaID:personaID,
            ticketID:ticketID,
            alertaID:alertaID
        },
        url: "../php/fn/notificacion.php",
        success: function(resp){

            resp = JSON.parse(resp);
            if(resp != null)
            {


            }
        }
    });

}*/
