<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$nombre_producto= $_POST['nombre_producto'];
$valor_producto= $_POST['valor_producto'];
$existencia_producto= $_POST['existencia_producto'];
$tipo_producto= $_POST['tipo_producto'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "INSERT INTO producto(id_producto,nombre_producto,valor_producto,existencia_producto, tipo_producto_producto)
 values(:id_p,:nombre_p ,:valor_p ,:existencia_p ,:tpp_p)";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':id_p' =>NULL,
    'nombre_p'=>$nombre_producto,
    'valor_p' =>$valor_producto,
    'existencia_p' =>$existencia_producto,
    'tpp_p' =>$tipo_producto));


if($resultado){
    ?> <strong> se a incertado el producto</strong> <?php 
}
else{
    ?> <strong> error al incertar producto</strong> <?php

}

?>
