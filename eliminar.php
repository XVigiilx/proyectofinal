<?php

$conexion = mysqli_connect("localhost", "root", "", "ventas");

$sql = "DELETE FROM usuarios WHERE id='7' ";

$res = $conexion->query($sql);

if($res){
    echo "Eliminacion exitosa";
}else{
    echo "Fallo la eliminacion";
}

?>