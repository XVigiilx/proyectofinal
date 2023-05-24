<?php

$conexion = mysqli_connect("localhost", "root", "", "usuarioss");

$sql = "SELECT * FROM usuarios";
$res = $conexion->query($sql);

while($usuarios = $res->fetch_assoc()){
    echo "Usuario No." . $usuarios['id'] . "<br>";
    echo "Su Nombre es:" . $usuarios['nombre'] . "<br>";
    echo "Su edad es:" . $usuarios['edad'] . "<br>";
    echo "Su numero es:" . $usuarios['numero'] . "<br>";
}

?>