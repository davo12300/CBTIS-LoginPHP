<!doctype html>
<head long="es">

          <meta charset="utf-8">
          <meta name="Actualiza" content="ejemplo">

      </head>
<title>Actualiza datos</title>
<body background="madera.jpg">
<?
include_once('conexion.php');

$id=$_GET['idcliente'];

$query="select * from infopro where idcliente=$id";
mysqli_query($conexion,$query);
$queryresult=mysqli_query($conexion,$query);
$arreglo=mysqli_fetch_array($queryresult);

?>
<form action="actualiza.php" method="post">
<font color="#FFFFFF">
<center>
<label>ID</label>
<input type="number" name="ide" value="<?echo $arreglo[0];?>" readonly><br><br>
<label>Nombre</label>
<input type="text" name="nombre" value=" <?echo $arreglo[1];?>" required><br><br>
<label>Apellido</label>
<input type="text" name="apellido" value=" <?echo $arreglo[2];?>" required><br><br>
<label>Email</label>
<input type="text" name="correo" value=" <?echo $arreglo[3];?>"><br><br>
<label>URL</label>
<input type="url" name="url" value=" <?echo $arreglo[4];?>"><br><br>

<button>Enviar</button>
</font>
</center>
</form>
</body>