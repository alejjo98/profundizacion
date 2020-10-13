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

$seleccionar3= $_REQUEST["seleccionar3"];

$conexion = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);

switch($seleccionar3){
    case 'total_productos': ?> 
    <form action="total_productos_valor.html"></form>
    <input type="submit" value="valor total">
    
    
    
    <?php
        ;
break;
    case 'total_servicios':?> 
    
    
    
    <?php
    ;
break;
}
?>