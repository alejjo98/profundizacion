<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$id_producto= $_POST['id_producto'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_borrar_producto = "DELETE FROM `producto` WHERE id_producto =$id_producto";



$q = $conexion->prepare($sql_borrar_producto);
$resultado = $q->execute();


if($resultado){
    ?> <strong> se ha borrado el producto</strong> <?php 
}
else{
    ?> <strong> error al borrar producto</strong> <?php

}

?>
