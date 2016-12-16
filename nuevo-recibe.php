<?php
	include('inc/conexion.php');
	$sql	=	'INSERT INTO personas SET '
			.	"paterno = '{$_POST['text-paterno']}', "
			.	"materno = '{$_POST['text-materno']}', "
			.	"nombres = '{$_POST['text-nombres']}'";
			//echo $sql;
	$resultado = $conexion->query($sql);

	if ($resultado)
	{
		header('Location: 20-09-2016.php');
	}
	else
	{
		header('Location: nuevo.php');
	}
?>