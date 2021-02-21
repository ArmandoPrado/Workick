function verRecomendaciones() {
    var tipo = "verRecomendaciones";
    $.ajax({
        method: "POST",
        data: {
            tipo: tipo
        },
        url: "controllers/Principal.php",
        success: function (respuesta) {
            resp = JSON.parse(respuesta);
            if (resp != null) {
                $("#PanelRecomendaciones").empty();
                var caja = "";
                for (var i = 0; i < resp.length; i++) {
                    
                    Estrellas = resp[i].CalificacionGlobal;
                    Precio = resp[i].CalificacionPrecio;

                    if (Precio == 1) {
                        Precio = "| <a href='#' class='text-muted'><i class='fa fa-usd'></i></a>";
                    } else if (Precio == 2) {
                        Precio = "| <a href='#' class='text-muted'><i class='fa fa-usd'></i><i class='fa fa-usd'></i></a>";
                    } else if (Precio == 3) {
                        Precio = "| <a href='#' class='text-muted'><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i></a>";
                    } else if (Precio == 4) {
                        Precio = "| <a href='#' class='text-muted'><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i></a>";
                    } else if (Precio == 5) {
                        Precio = "| <a href='#' class='text-muted'><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i><i class='fa fa-usd'></i></a>";
                    }

                    if (Estrellas == 1) {
                        Estrellas = "<a href='#' class='text-muted'><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>"
                    } else if (Estrellas == 2) {
                        Estrellas = "<a href='#' class='text-muted'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>"

                    } else if (Estrellas == 3) {
                        Estrellas = "<a href='#' class='text-muted'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i><i class='fa fa-star-o'></i></a>"
                    } else if (Estrellas == 4) {
                        Estrellas = "<a href='#' class='text-muted'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star-o'></i></a>"
                    } else if (Estrellas == 5) {
                        Estrellas = "<a href='#' class='text-muted'><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i><i class='fa fa-star'></i></a>"
                    }
                     caja += "<div class='ibox'><div class='ibox-content'><div class='table-responsive'><table class='table shoping-cart-table'><tbody><tr><td width='90'><div class='cart-product-imitation'></div></td><td class='desc'><h3><a href='#' class='text-navy'>" + resp[i].TituloTrabajo + "</a></h3><p class='small'>" + resp[i].DescripcionLarga + "</p><dl class='small m-b-none'><dt>" + resp[i].Nombre + "</dt><dd>" + resp[i].DescripcionCorta + "</dd></dl><div class='m-t-sm'>" + Estrellas + Precio + "</div></td><td></td><td width='65'> </td><td><h4></h4 > </td></tr> </tbody></table> </div></div > <div class = 'ibox-content'> <button class = 'btn btn-primary float-right' onclick='verPropuestaID(" + resp[i].Id + ");'> <i class = 'fa fa-volume-control-phone' > </i> Contactar</button > </div></div>";
                    

                }
                $("#PanelRecomendaciones").append(caja);
            }
        }
    })
};

function verPropuestaID(Id){
    //Id lo puedes usar para guardarlo sessionStorage.setItem("PropuestaID", ID); y sepas a que tranajador le estan haciendo la propuesta
    $("#mdlPropuesta").modal('show');
}
