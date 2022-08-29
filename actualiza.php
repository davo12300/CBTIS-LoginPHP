<?

include_once('conexion.php');

$id=$_POST['ide'];
$nom=$_POST['nombre'];
$ape=$_POST['apellido'];
$corr=$_POST['correo'];
$urll=$_POST['url'];

$query="update infopro set nombre='$nom',apellido='$ape',email='$corr',url='$urll' where idcliente='$id'";
mysqli_query($conexion,$query);

?>
<script>
	alert('Exito En Actualizar');
	
</script>



<?
if(mysqli_affected_rows($conexion))
{

header("Location: mostrar2.php");

}
else{
	
}
?>