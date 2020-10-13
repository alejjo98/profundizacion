<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$id_producto= $_POST['id_producto'];
$nombre_producto= $_POST['nombre_producto'];
$valor_producto= $_POST['valor_producto'];
$existencia_producto= $_POST['existencia_producto'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "UPDATE producto set `nombre_producto`= :nombre_p, `valor_producto`=:valor_p, 
`existencia_producto`= :existencia_p WHERE `id_producto`= :id_p";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':id_p' =>$id_producto,
    'nombre_p'=>$nombre_producto,
    'valor_p' =>$valor_producto,
    'existencia_p' =>$existencia_producto));


if($resultado){
    ?> <strong> se ha actualizado el producto</strong> <?php 
}
else{
    ?> <strong> error ha actualizado el producto</strong> <?php

}

?>
