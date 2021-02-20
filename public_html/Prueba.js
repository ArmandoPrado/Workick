function prueba() {
    var tipo = "prueba";
    $.ajax({
        method: "POST",
        data: {
            tipo: tipo,

        },
        url: "https://pradosweb.000webhostapp.com/Prueba.php",
        success: function (respuesta) {
            resp = JSON.parse(respuesta);
                console.log("Fuera");
                console.log(resp.length);
                for (var i = 0; i < resp.length; i++) {
                    alert(resp[i].Nombre)
                }
                
        }
    })
};