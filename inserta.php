<?php
$id=$_POST['id'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$emai=$_POST['correo'];
$url=$_POST['url'];



include_once('conexion.php');

if(mysqli_connect_errno())
{
	echo "error";
}
else
{
    $query="insert into infopro values($id,'$nom','$ape','$emai','$url');";
    mysqli_query($conexion,$query);
    echo "<h1>Exito Bro!!</h1>
    <button><a href='index.html'>Volver al inicio</a></button>
    ";
    mysqli_close($conexion);
}


?>