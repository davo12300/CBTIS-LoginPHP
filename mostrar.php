<?
include_once('conexion.php');

if(isset($_COOKIE['email'])&& isset($_COOKIE['pass']))
{

$query="select * from infopro;";
    $queryresult=mysqli_query($conexion,$query);

echo "<body background='modern.jpg'>

<center>
<font color='white'>";


echo "
<button><a href='formulario.php'><img src='more.png'></a></button>
<table border='1'><tr>
<td>id</td>
<td>nombre</td>
<td>apellido</td>
<td>email</td>
<td>url</td>
</tr>
";
while ($arreglo=mysqli_fetch_array($queryresult)) 

{
	
	echo "<tr>

     <td>$arreglo[0]</td>
     <td>$arreglo[1]</td>
     <td>$arreglo[2]</td>
     <td>$arreglo[3]</td>
     <td>$arreglo[4]</td>
     <td><a href='eliminar.php?idcliente=$arreglo[0]'>Eliminar</td>
	 <td><a href='menuactualizar.php?idcliente=$arreglo[0]'>Actualizar</td>
     </tr>";
   ;


}

echo "</table>";
echo "</center>";
echo "</body>";
mysqli_close($conexion);
}
else{
?>
<script>
    alert('No te has logueado');
    window.location.href='loguearte.php';
</script>
<?  
}
?>