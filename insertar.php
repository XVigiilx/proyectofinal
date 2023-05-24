<?php

/*CAMBIAR BASE DE DATOS / USUARIOS A LA ACTUAL*/
$conexion = mysqli_connect("localhost", "root", "", "usuarioss");

/*CAMBIAR DATOS DE LA BASE DE DATOS Y AGREGAR LA ACTUAL*/
$sql = "INSERT INTO usuarios(nombre, edad, numero) 
VALUES ('Migeul', '12', '4661257912')";

$res = $conexion->query($sql);

if($res){
    echo "Dato agregado";
}else{
    echo "Fallo la insercion";
}

?>