<?php 

$dbhost = "localhost";
$dbname = "servicios_electrodomesticos";
$dbuser= "root";
$dbpass="";

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


$sql="SELECT SUM(`valor_producto`) as `valor_producto` FROM producto";

$q= $conexion->prepare($sql);
$q->execute();



$valor_producto= $q->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($valor_producto);

?>