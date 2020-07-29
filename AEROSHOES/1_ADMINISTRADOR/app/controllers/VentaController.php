<?php

class VentaController extends BaseController
{


	public function getReporteventa()
	{
		$venta=DB::table("ventas as v")
		->join("clientes as c","v.idcliente","=","c.id")
		->join("pago as p","v.idpago","=","p.idpago")

		->select("v.idventas","c.id","c.nombre","c.apellidos","p.idpago","v.fecha_venta","v.total")

		->get();
		return View::make('home.reporteventa')->with("venta",$venta);
	}


	public function getBuscarboleta($id)
	{
		$venta=DB::table("ventas as v")
		->join("clientes as c","v.idcliente","=","c.id")

		->join("detalle_venta as det","v.idventas","=","det.idventa")
		->join('productos as p', 'det.idproducto', '=', 'p.id')
		->join('marca as m', 'p.idmarca', '=', 'm.idmarca')

		->select("v.idventas","c.nombre as cliente","c.apellidos","c.direccion","c.telefono","p.nombre as producto","p.preciounitario","det.cantidad",DB::raw('(p.preciounitario * det.cantidad) AS subtotal'),"v.total","v.fecha_venta","det.talla","m.nombremarca")

		->where("v.idventas","=",$id)
		->first();

		 $ventas=DB::table("ventas as v")

		 ->join("detalle_venta as det","v.idventas","=","det.idventa")
		 ->join('productos as p', 'det.idproducto', '=', 'p.id')
		 ->join('marca as m', 'p.idmarca', '=', 'm.idmarca')

		 ->select("v.idventas","det.idventa","p.nombre","m.nombremarca","det.talla","det.precio_venta","det.cantidad","v.total",DB::raw('(det.precio_venta * det.cantidad) AS subtotal'))

		 ->where("det.idventa","=",$id)
		 ->get();

//$pdf = PDF::loadView('backend.servicecases.receipt', $servicecase);
		$pdf = PDF::loadView('home.comprobantedepago', compact('venta','ventas'));

		return $pdf->stream();

	}

		public function postListadoventas()
	{
		$fecha1 = date_create(Input::get("txtfechadesde"));
		date_format($fecha1, 'j/m/Y');
		$fecha2 = date_create(Input::get("txtfechahasta"));
		date_format($fecha1, 'j/m/Y');

		$venta=DB::table("ventas as v")
		->join("clientes as c","v.idcliente","=","c.id")
		->join("pago as p","v.idpago","=","p.idpago")

		->select("v.idventas","c.id","c.nombre","c.apellidos","p.idpago","v.fecha_venta","v.total")
	

		->whereBetween('fecha_venta',array($fecha1,$fecha2))
		->orderBy("v.total" ,"asc")
		->get();
		return View::make('home.reporteventa')->with("venta",$venta);
	}




}