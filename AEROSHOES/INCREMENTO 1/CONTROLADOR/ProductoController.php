<?php

class ProductoController extends BaseController
{
	public function getListarcatalogo()
	{
		$producto=Producto::all();
		return $producto;
		return View::make("emails.recuperar")->with("producto",$producto);
	}
	public function getListarproductos()
	{
		$listaproductos=Producto::all();
		$listacategorias=Categoria::all();
		return View::make("producto")->with("listaproductos",$listaproductos)->with('listacategoria',$listacategorias);
	}
	public function getListarproductocategoria($idcategoria)
	{
		$listaproductos=DB::table('productos')
		//->join('stock','stock.idproducto','=','productos.id')

		->join('marca','marca.idmarca','=','productos.idmarca')
		->join('categoria','categoria.idcategoria','=','productos.idcategoria')

		->select('productos.nombre','productos.preciounitario','productos.ruta_imagen','productos.color','productos.descripcion','marca.nombremarca','categoria.nombre','productos.id',"productos.stock")
		->where('categoria.idcategoria','=',$idcategoria)
		//->orderBy('stock.idstock','desc')
		//		->take(1)
		->get();
		//return json_encode($listaproductos);
		$listacategorias=Categoria::all();
		return View::make("producto")->with("listaproductos",$listaproductos)->with('listacategoria',$listacategorias);
	}

	public function getListarproductounitario($idproducto)
	{
		$producto = DB::table('productos')
		->join('categoria','categoria.idcategoria','=','productos.idcategoria')
		->join('marca','marca.idmarca','=','productos.idmarca')
	    ->select('productos.nombre','productos.preciounitario','ruta_imagen','productos.color','productos.descripcion','marca.nombremarca','productos.id',"productos.stock")
	    ->where('productos.id','=', $idproducto)

	    ->get();

	    return View::make("productodetalle")->with("listaproductos",$producto);
	}
	
}
