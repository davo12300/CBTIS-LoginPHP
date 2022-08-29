<?

include_once('conexion.php');

$id=$_GET['idcliente'];

$query="delete from infopro where idcliente=$id";
mysqli_query($conexion,$query);
?>
<script>
	alert('Exito En Eliminar');
        
</script>


<?
if(mysqli_affected_rows($conexion))
{
header("Location: mostrar2.php");


}
else{
	
}
?>