<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERTAR</title>
</head>
<body>
<?php


$dbhost= "localhost";
$dbname= "servicios_electrodomesticos";
$dbuser="root";
$dbpass="";

$seleccionar= $_REQUEST["seleccionar"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

switch($seleccionar){
        case 'seleccionar_producto': ?> 
            <div name="div_crud_producto" class="div_crud_producto"> 
            <strong> CRUD PRODUCTOS </strong> <br> <br>
                <strong>SELECCION ACCION A REALIZAR</strong><br>
            <form action="buscar_producto.html" method="POST">
                1
            <input type="submit" value="BUSCAR PRODUCTOS" />    
            </form>
            <form action="borrar_producto.html" method="POST">
                2
            <input type="submit" value="BORRAR PRODUCTOS" />    
            </form>
            <form action="actualizar_productos.html" method="POST">
                3
            <input type="submit" value="ACTUALIZAR PRODUCTO" />    
            </form>
            <form action="crear_producto.html" method="POST">
                4
            <input type="submit" value="CREAR PRODUCTOS" />    
            </form>


            </div> <br>
        <?php
       
        ;
        break ;
        case 'seleccionar_servicio': ?> 
        
        <div name="div_crud_producto" class="div_crud_producto"> 
            <strong> CRUD SERVICIOS </strong> <br> <br>
                <strong>SELECCION ACCION A REALIZAR</strong><br>
                <form action="buscar_servicios.html" method="POST">
               1
            <input type="submit" value="BUSCAR SERVICIOS" />    
            </form>            
            <form action="borrar_servicios.html" method="POST">
                2
            <input type="submit" value="BORRAR SERVICIO" />    
            </form>
            <form action="actualizar_servicios.html" method="POST">
                3
            <input type="submit" value="ACTUALIZAR SERVICIO" />    
            </form>
            <form action="crear_servicios.html" method="POST">
                4
            <input type="submit" value="CREAR SERVICIO" />    
            </form>
            </div> <br>
        

            <?php
           
            ;
            break ;
    




}


    ?>