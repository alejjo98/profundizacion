<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$busqueda_nombre= $_POST['busqueda_nombre'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "SELECT `nombre_producto`, `id_producto`, `tipo_producto_producto`, `valor_producto`, 
`existencia_producto` FROM `producto` WHERE `nombre_producto`=:nombre_p";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':nombre_p'=>$busqueda_nombre));
$elemento_buscado= $q -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($elemento_buscado);

?>