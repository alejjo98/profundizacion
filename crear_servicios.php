<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$nombre_servicio= $_POST['nombre_servicio'];
$costo_servicio= $_POST['costo_servicio'];
$tipo_servicio= $_POST['tipo_servicio'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "INSERT INTO servicios(id_servicios,nombre_producto_servicio,costo_servicio
,tipo_servicio_servicio) values(:id_s,:nombre_s ,:costo_s ,:tss_s)";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':id_s' =>NULL,
    'nombre_s'=>$nombre_servicio,
    'costo_s' =>$costo_servicio,
    'tss_s' =>$tipo_servicio));


if($resultado){
    ?> <strong> se a incertado el servicio</strong> <?php 
}
else{
    ?> <strong> error al incertar servicio</strong> <?php

}

?>
