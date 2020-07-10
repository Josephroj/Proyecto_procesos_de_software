<?php

class ComprasController extends BaseController
{

	public function getMiscompras()
	{

		$cliente = json_decode(Session::get("clientes"));
		$miscompras=DB::table("ventas as v")
		->join('detalle_venta as det', 'v.idventas', '=', 'det.idventa')
		->join('clientes as c', 'v.idcliente', '=', 'c.id')
		->join('productos as p', 'det.idproducto', '=', 'p.id')
		->join('marca as m', 'p.idmarca', '=', 'm.idmarca')
		->select("c.nombre as nombrecliente","c.apellidos","c.dni","c.direccion","c.telefono","c.distrito","p.nombre","p.color","m.nombremarca","det.cantidad","det.precio_venta","det.talla","v.fecha_venta",DB::raw("(det.precio_venta * det.cantidad )as total"))

		->where("idcliente","=",$cliente->id)
		->get();
		return View::make("compras.frmListaCompras")->with("miscompras",$miscompras);
	}

		public function getFinalizarcompra()
	{
		 
		$cliente=json_decode(Session::get("clientes"));
		//$cliente = json_decode(Session::get("cliente"));
		//return json_encode($cliente);

		return View::make("/finalizarcompra")->with("cliente",$cliente);
	}

}