<?php 

$dbhost = "localhost";
$dbname = "servicios_electrodomesticos";
$dbuser= "root";
$dbpass="";

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);


$sql="SELECT id_servicios,nombre_producto_servicio,costo_servicio, tipo_servicio_servicio  from servicios";

$q= $conexion->prepare($sql);
$q->execute();


$lista_servicio= $q->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($lista_servicio);

?>