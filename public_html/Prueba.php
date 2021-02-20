<?php
$tipo = $_POST['tipo'];


if($tipo == "prueba")
Prueba();

function Prueba(){
    $server = "localhost";
    $usuario = "id14890233_pradios";
    $pass = "d8kM>H1iHBGryQT[";
    $bd = "id14890233_citas";
    //conectar a server
    $cone = mysqli_connect($server,$usuario,$pass,$bd);
    $sql = "SELECT `Nombre` FROM `DatosCitas`";
    $resultado=mysqli_query($cone,$sql);
    foreach($resultado as $a){
        $datos[]=array(
            "Nombre" => $a['Nombre']);    
    }
    
    echo json_encode($datos);
    mysqli_close($cone);
}

?>