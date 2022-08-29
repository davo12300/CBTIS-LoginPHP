<?

include_once('conexion.php');

$email=$_POST['email'];
$pass=$_POST['pass'];

$query="select * from usuarios where email='$email' and passwor='$pass';";
$resultado=mysqli_query($conexion,$query);
$arreglo=mysqli_fetch_array($resultado);
?>

<?
if($arreglo['email']!="")
{

	setcookie("email",$_POST['email']);
	setcookie("pass",$_POST['pass']);
	
?>
<script>
	window.location.href='mostrar.php';
</script>
<?
}
else{
?>
<script>
	alert('No te has logueado');
	window.location.href='logueo.php';
</script>
<?	
}
?>