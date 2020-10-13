<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$busqueda_id= $_POST['busqueda_id'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "SELECT `nombre_producto`, `id_producto`, `tipo_producto_producto`, `valor_producto`, 
`existencia_producto` FROM `producto` WHERE `id_producto`=:id_p";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':id_p'=>$busqueda_id));
$elemento_buscado= $q -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($elemento_buscado);

?>