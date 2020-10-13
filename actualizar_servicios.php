<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$id_servicio= $_POST['id_servicio'];
$nombre_servicio= $_POST['nombre_servicio'];
$costo_servicio= $_POST['costo_servicio'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "UPDATE servicios set `nombre_producto_servicio`= :nombre_s ,
 `costo_servicio`=:costo_s WHERE `id_servicios`= :id_s";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':id_s' =>$id_servicio,
    ':nombre_s'=>$nombre_servicio,
    ':costo_s' =>$costo_servicio));


if($resultado){
    ?> <strong> se ha actualizado el servicio</strong> <?php 
}
else{
    ?> <strong> error ha actualizado el servicio</strong> <?php

}

?>
