<?php
$seleccionar2= $_REQUEST["seleccionar2"];


switch($seleccionar2){

    case 'seleccionar_busqueda_producto': ?> 
        <div name="div_busqueda_producto" class="div_busqueda_producto"> 
        <strong> BUSQUEDA DETALLADA PRODUCTOS </strong> <br> <br>
            <strong>SELECCIONE TIPO DE BUSQUEDA</strong><br>
        <form action="buscar_producto_nombre.html" method="POST">
            1
        <input type="submit" value="BUSCAR PRODUCTOS POR NOMBRE" />    
        </form>
        <form action="buscar_producto_id.html" method="POST">
            2
        <input type="submit" value="BUSCAR PRODUCTOS POR ID" />    
        </form>
        <form action="buscar_producto_valor.html" method="POST">
            3
        <input type="submit" value="BUSCAR PRODUCTOS POR VALOR" />    
        </form>
        <form action="buscar_producto_existencia.html" method="POST">
            4
        <input type="submit" value="BUSCAR PRODUCTOS POR EXISTENCIA" />    
        </form>


        </div> <br>
    
    
    
    
    <?php
         ;

break;
case 'seleccionar_busqueda_servicio': ?> 
<strong>PROXIMAMENTE</strong>





<?php 
    ;

break;

}
?>