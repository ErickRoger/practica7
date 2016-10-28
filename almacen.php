<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if($_SESSION['ok']=="ok")
{
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Almacen</title>
<link rel="stylesheet" type="text/css" href="css/view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<?php
	include("conexion.php");
	$con=conectarse();	
	$result=$con->query("SELECT * FROM almacen");
	$row = $result->fetch_array();
?>
<style>	
	img
	{
		 height: 27px;
         width: 27px;
	}	
roger {
	font-weight: bold;
}
.ER {
	font-size: 16px;
	color: #FFF;
}
</style>	
</head>
<body id="main_body" >
<p><span class="ER">UNIV.: ERICK ROGER GUTIERREZ ZAPATA</span><br />
<span class="ER">UNIVERSIDAD PÚBLICA DE EL ALTO</span></p>
<p class="ER">INGENIERIA DE SISTEMAS<br />
  <br />
</p>
    <table>
	<tr>
	
	<td bgcolor="#FFFFFF"><strong><a href="productos.php">INICIO</a></strong></td>
    <td bgcolor="#FFFFFF"><strong><a href="ventas.php">VENTAS</a></strong></td>
	<td bgcolor="#FFFFFF"><strong><a href="productos1.php">PRODUCTOS</a></strong></td>	
   	  <td bgcolor="#FFFFFF"><strong><a href="personal.php">EMPLEADOS</a></strong></td>
	<td bgcolor="#FFFFFF"><strong><a href="compras.php">COMPRAS</a></strong></td>
	
	</tr>
</table
	
	><img id="top" src="css/top.png" alt="">
	<div id="form_container">
	
		<h1><a><?php echo $row['nombre'];?></a></h1>
		<form id="form_1075005" class="appnitro"  method="post" action="personal.php">
					<div class="form_description">
			<h2 align="center">FARMACIA</h2><a title=" Modificar los datos de la farmacia? " href="editar_almacen.php">  <img src="css/edit.jpg">  </a>
			<p></p>
			Usuario: <?php echo $_SESSION['nomusuario']." ".$_SESSION['apeusuario']; ?>
			<br>Rol: <?php echo $_SESSION['rol']; ?>
			<br><a href="close.php">Salir</a>
		</div>						

			
		
	  </form>	
		<div id="footer">
			
		</div>
	</div>	
	
	<style>
	
	table
	{
		border: 2px solid #FF8000;		
		width: 100%;
    }
    
	</style>
	

		
	a
</body>
	
<?php
}
else
{
	header("location: login.php");
}
?>
</html>