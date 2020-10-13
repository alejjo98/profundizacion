<?php 

$dbhost = "localhost";
$dbname = "servicios_electrodomesticos";
$dbuser= "root";
$dbpass="";

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


$sql="SELECT id_producto,nombre_producto,valor_producto, existencia_producto , tipo_producto_producto from producto";

$q= $conexion->prepare($sql);
$q->execute();


$lista_producto= $q->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($lista_producto);

?>