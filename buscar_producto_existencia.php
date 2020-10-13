<?php 

$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";
$cantidad_existencia= $_POST['cantidad_existencia'];


$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql_insertar_producto = "SELECT `nombre_producto`, `id_producto`, `tipo_producto_producto`, `valor_producto`, 
`existencia_producto` FROM `producto` WHERE `existencia_producto`= :cantidad_e ";



$q = $conexion->prepare($sql_insertar_producto);
$resultado = $q->execute(array(
    ':cantidad_e' =>$cantidad_existencia));
$elemento_buscado= $q -> fetchAll(PDO::FETCH_ASSOC);
echo json_encode($elemento_buscado);

?>