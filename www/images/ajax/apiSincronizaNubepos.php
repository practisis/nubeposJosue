<?php
	header("Access-Control-Allow-Origin: *");
	$clientName = $_REQUEST['clientName'];
	$ruc = $_REQUEST['ruc'];
	$address = $_REQUEST['address'];
	$tele = $_REQUEST['tele'];
	$fetchJson = $_REQUEST['fetchJson'];
	$paymentsUsed = $_REQUEST['paymentsUsed'];
	$cash = $_REQUEST['cash'];
	$cheques = $_REQUEST['cheques'];
	$vauleCxC = $_REQUEST['vauleCxC'];
	$paymentConsumoInterno = $_REQUEST['paymentConsumoInterno'];
	$fecha = $_REQUEST['fecha'];
	$empresa = $_REQUEST['empresa'];
	
	//echo $clientName."@".$ruc."@".$address."@".$tele."@".$fetchJson."@".$paymentsUsed."@".$cash."@".$cheques."@".$vauleCxC."@".$paymentConsumoInterno."@".$fecha;
	$factura = json_decode($fetchJson);
	foreach($factura as $key => $value){
		//print_r($value);
		foreach($value as $datos){
			//print_r($datos['producto']);
			//print_r($datos->cliente);
			//print_r($datos->producto);
			//print_r($datos->factura);
			$cliente = $datos->cliente;
			$cliente->id_cliente;
			$cliente->cedula;
			$cliente->nombre;
			$cliente->telefono;
			$cliente->tipoCliente."<br/>";
			$cliente->direccion;
		}
		foreach($value as $datosP){
			$producto = $datosP->producto;
			echo $producto -> id_producto;
		}
		//echo $pago;
	}
?>