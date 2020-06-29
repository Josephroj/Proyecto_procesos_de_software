<?php

class PagoController extends BaseController
{

	public function getObtenerinformacionpago($monto,$tot)
	{

		$api_key="4Vj8eK4rloUd272L48hsrarnUA";
		


		$email_cliente="cliente1@syslacstraining.com";

		if(Session::has("clientes"))
		{
			$cliente=json_decode(Session::get("clientes"));
			$email_cliente=$cliente->correo;

		}

		$info_pago=new stdClass();

		$info_pago->merchantId="508029";
		$info_pago->accountId="512323";
		$info_pago->description="MIS VENTAS EN LINEA AERO SHOES";
		$info_pago->referenceCode="PAGO001";
		$info_pago->amount=$monto;
		$info_pago->tax="0";
		$info_pago->taxReturnBase="0";
		$info_pago->currency="PEN";
		$info_pago->signature=md5($api_key."~".$info_pago->merchantId."~".$info_pago->referenceCode."~".$monto."~PEN");
		$info_pago->test="1";
		$info_pago->buyerEmail=$email_cliente;
		$info_pago->responseUrl="http://aeroshoes.syslacstraining.com/pagos/respuestapagos/".$tot;
		$info_pago->confirmationUrl="http://aeroshoes.syslacstraining.com/compras/miscompras";


		return  json_encode($info_pago);


	} 

	public function getRespuestapagos($tot)
	{

		$transactionState = $_REQUEST['transactionState'];
		$processingDate	=$_REQUEST['processingDate'];
		$buyerEmail=$_REQUEST['buyerEmail'];
		$transactionId = $_REQUEST['transactionId'];

		if($transactionState==4)
		{

			$pago = new Pago();

		  	$pago->idtransaccion=$transactionId;
		  	$pago->estado=$transactionState;
		  	$pago->idclientepago=$buyerEmail;

		  	$pago->save();

		  	$usuario=json_decode(Session::get("clientes"));
			$carrito=json_decode(Session::get("carrito"));


		  	$venta = new Venta();
		  	$venta->idcliente=$usuario->id;
		  	$venta->fecha_venta=new DateTime();
		  	//FECHA DEL SISTEMAS
		  	//$dt = new DateTime();echo $dt->format('Y-m-d H:i:s');
		  	$venta->idpago=$pago->id;
		  	$venta->total=$carrito->total;

		  	$venta->save();

		  	

		  	foreach ($carrito->productos as $itemProducto)
		  	{
		  		$detalleventa=new DetalleVenta();
		  		$detalleventa->idventa=$venta->id;
		  		$detalleventa->idproducto=$itemProducto->id;
		  		$detalleventa->cantidad=$itemProducto->cantidad;
		  		$detalleventa->talla=$itemProducto->talla;

		  		$detalleventa->precio_venta=$itemProducto->preciounitario;

				
				$producto=Producto::find($itemProducto->id);
				$producto->stock=$itemProducto->stock - $tot;
			  	$producto->save();

			  	$detalleventa->save();
			  	$carrito=new  stdClass();
			 	$carrito->total=0;
			 	$carrito->productos=[];
			 	Session::put("carrito",json_encode($carrito));

		  	}

		 	return View::make("pagos.frmConfirmacionPago");
		 }
		 else
		 {
		 	return View::make("pagos.frmErrorPago");
		 }

	}

}