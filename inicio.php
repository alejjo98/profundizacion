<?php 
$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";

$nombre_ingresado= $_REQUEST["nombre_administrador_ingresado"];
$contraseña_ingresada = $_REQUEST["contraseña_administrador_ingresado"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

$sql ="SELECT id_administrador, contraseña_administrador,nombre_administrador from administrador";

$q =$conexion->prepare($sql);
$resultado =$q->execute();

$administrador=$q->fetchAll();

if($administrador[0]["nombre_administrador"] == $nombre_ingresado){    
if($administrador[0]["contraseña_administrador"]!=$contraseña_ingresada){
    echo "los datos ingresados no se pueden validar";
}
else{
     ?>  
     <div name="div_seleccionar" class="div_seleccionar"> 
     <strong> MENU PRINCIPAL </strong> <br> <br>
         <strong>SELECCIONAR PRODUCTOS O SERVICIOS</strong><br>
     
     <form action="crudProducto.php" name="form_accion" method="POST" >
     <input type="radio" name="seleccionar" value="seleccionar_producto">
     <label for="seleccionar_producto">PRODUCTOS</label><br>     
     <input type="radio" name="seleccionar" value="seleccionar_servicio">
     <label for="seleccionar_servicio">SERVICIOS</label><br>
     <input type="submit" value="seleccionar">
     </form>
     </div> <br>

     <strong>BUSQUEDA DETALLADA</strong><br>
     <form action="busqueda_detallada.php" name="form_busqueda" method="POST" >
     <input type="radio" name="seleccionar2" value="seleccionar_busqueda_producto">
     <label for="seleccionar_busqueda_producto">BUSQUEDA POR PRODUCTOS</label><br>     
     <input type="radio" name="seleccionar2" value="seleccionar_busqueda_servicio">
     <label for="seleccionar_busqueda_servicio">BUSQUEDA POR SERVICIOS</label><br>
     <input type="submit" value="seleccionar">
     </form>

     
     <strong>TOTAL DEL VALOR DE LOS PRODUCTOS</strong><br>
     <form action="total_productos_valor.php">
     oprima el boton para poder generar el resultado del valor total de productos <br>
     <input type="submit" value="dirigir">
     </form>



<?php


}
}
else{
    echo "los datos ingresados no se pueden validar";

}