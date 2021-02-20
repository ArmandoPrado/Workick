<?php
$tipo = $_POST['tipo'];


if($tipo == "verRecomendaciones")
verRecomendaciones();

function verRecomendaciones(){
    $server = "localhost";
    $usuario = "id16193735_adminworkickdb";
    $pass = "fgv9T=a@fW%O*8a0";
    $bd = "id16193735_workickdb";
    //conectar a server
    $cone = mysqli_connect($server,$usuario,$pass,$bd);
    $sql = "SELECT Trabajador.Id,Trabajador.IdCuenta,Trabajador.DescripcionCorta,Trabajador.DescripcionLarga,Trabajador.CalificacionGlobal,Trabajador.CalificacionPrecio,Trabajador.Categoria,Trabajador.TituloTrabajo,Cuenta.Nombre AS Nombre FROM Trabajador INNER JOIN Cuenta  ON Trabajador.IdCuenta = Cuenta.Id";
    $resultado=mysqli_query($cone,$sql);
    foreach($resultado as $a){
        $datos[]=array(
            "Id" => $a['Id'],
            "IdCuenta" => $a['IdCuenta'],
            "DescripcionCorta" => $a['DescripcionCorta'],
            "DescripcionLarga" => $a['DescripcionLarga'],
            "CalificacionGlobal" => $a['CalificacionGlobal'],
            "CalificacionPrecio" => $a['CalificacionPrecio'],
            "Categoria" => $a['Categoria'],
            "TituloTrabajo" => $a['TituloTrabajo'],
            "Nombre" => $a['Nombre']); 
    }
    
    echo json_encode($datos);
    mysqli_close($cone);
}

?>