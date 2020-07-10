<?php

class ClienteController extends BaseController {


	public function getDtlistarclientes()
	{
		return View::make("MantenimientoDeTablas.frmdatatables-clientes");
	}

	public function getListarclientes()
	{

		$objResult=new stdClass();
		$objResult->data=Cliente::all();
		return json_encode($objResult);
	}


	public function getDtlistarcategorias()
	{
		return View::make("MantenimientoDeTablas.frmdatatables-Categorias");
	}

	public function getListarcategorias()
	{

		$objResult=new stdClass();
		$objResult->data=Categoria::all();
		return json_encode($objResult);
	}

	public function getDtlistarmarcas()
	{
		return View::make("MantenimientoDeTablas.frmdatatables-Marcas");
	}

	public function getListarmarcas()
	{

		$objResult=new stdClass();
		$objResult->data=Marca::all();
		return json_encode($objResult);
	}

}