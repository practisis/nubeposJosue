<?php
	header("Access-Control-Allow-Origin: *");
	$empresa = $_REQUEST['empresa'];
	$formulado = $_REQUEST['formulado'];
	$codigo = $_REQUEST['codigo'];
	$precio = $_REQUEST['precio'];
	$categoriaid = $_REQUEST['categoriaid'];
	$cargaiva = $_REQUEST['cargaiva'];
	$productofinal = $_REQUEST['productofinal'];
	$materiaprima = $_REQUEST['materiaprima'];
	
	echo $empresa."@".$formulado."@".$codigo."@".$precio."@".$categoriaid."@".$cargaiva."@".$productofinal."@".$materiaprima;
?>