<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$valor_producto= $_POST['valor_producto'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "SELECT `nombre_producto`, `id_producto`, `tipo_producto_producto`, `valor_producto`, 
`existencia_producto` FROM `producto` WHERE `valor_producto`=:valor_p";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':valor_p' =>$valor_producto));
$elemento_buscado= $q -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($elemento_buscado);

?>