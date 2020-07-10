<?php

class ProductoController extends Controller {

	public function getDtlistarproductos()
	{
		return View::make("MantenimientoDeTablas.Dtableproducto");
	}

	public function getListarproductos()
	{
		$objResult=new stdClass();
		$objResult->data=Producto::all();

		return json_encode($objResult);
	}

	public function getRegistrarproducto()
	{
		$marca=Marca::all()->lists("nombremarca","idmarca");
		$categoria=Categoria::all()->lists("nombre","idcategoria");

		return View::make("MantenimientoDeTablas.frmregistrarproducto")->with("marca",$marca)->with("categoria",$categoria);

	}

	public function postGuardarproducto()
	{
		$path_foto="";
		$Producto=new Producto();

		$Producto->idcategoria=Input::get("ddlCategoria");
		$Producto->idmarca=Input::get("ddlMarca");
		$Producto->nombre=Input::get("nombre");
		$Producto->color=Input::get("color");
		$Producto->preciounitario=Input::get("preciounitario");
		$Producto->stock=Input::get("stock");
		$Producto->descripcion=Input::get("descripcion");
		$Producto->save();

		if(Input::hasFile('ruta_imagen')) 
			{
			$foto =Input::file('ruta_imagen');

			$extension = Input::file('ruta_imagen')->getClientOriginalExtension();
			$nombre=strtolower("user_image_".$Producto->id.".".$extension);

			$destino='/img-producto/';
			$subir=$foto->move(public_path().$destino,$nombre);
			$path_foto=$destino.$nombre;

			$Producto->ruta_imagen=$path_foto;
			$Producto->save();
			
			
			}
			return Redirect::to('/productos/dtlistarproductos');
	}

	public function getObtenerproducto($idproducto)
	{
		$Producto=Producto::find($idproducto);
		return Response::json($Producto);
		
	}
			
	public function postActualizarproducto()
	{

		$Producto=Producto::find(Input::get("id"));
		$Producto->idcategoria=Input::get("idcategoria");
		$Producto->idmarca=Input::get("idmarca");
		$Producto->nombre=Input::get("nombre");
		$Producto->color=Input::get("color");
		$Producto->preciounitario=Input::get("preciounitario");
		$Producto->stock=Input::get("stock");
		$Producto->descripcion=Input::get("descripcion");

		if(Input::hasFile('ruta_imagen')) {
			$Producto =Input::file('ruta_imagen');

			$extension = Input::file('ruta_imagen')->getClientOriginalExtension();
			$nombre=strtolower("user_image_".$Producto->id.".".$extension);

			$destino='/img-producto/';
			$subir=$foto->move(public_path().$destino,$nombre);
			$path_foto=$destino.$nombre;

			$Producto->ruta_imagen=$path_foto;
			$Producto->save();
			}	

		$Producto->save();
		return Redirect::to('/productos/dtlistarproductos');
	}

	public function getEliminarproducto($idproducto)
	{
			$Producto = Producto::find($idproducto);
			$Producto->delete();
			return Response::json($Conductor);
			//return Redirect::to('/conductor/dtlistarconductores');	
	}

}