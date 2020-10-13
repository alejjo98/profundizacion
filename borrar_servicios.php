<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$id_servicios= $_POST['id_servicios'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_borrar_servicio = "DELETE FROM `servicios` WHERE id_servicios =$id_servicios";



$q = $conexion->prepare($sql_borrar_servicio);
$resultado = $q->execute();


if($resultado){
    ?> <strong> se ha borrado el servicio</strong> <?php 
}
else{
    ?> <strong> error al borrar servicio</strong> <?php

}

?>
