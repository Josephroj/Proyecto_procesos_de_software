<?php



class CarritoController extends BaseController
{


	public function getAgregarproducto($idproducto,$cantidad,$talla)
	{
		$carrito=new stdClass();
		$carrito->total=0;
		$carrito->productos=[];
		$producto=Producto::find($idproducto);

		//return json_encode($producto);
		if(Session::has("carrito"))
		{
			$carrito=json_decode(Session::get("carrito"));
		}

		$producto_encontrado=false;

		if(count($carrito->productos)>0)
		{
			
			foreach ($carrito->productos as $itemProducto) {

				if($itemProducto->id==$producto->id)
				{
					$producto_encontrado=true;

					$itemProducto->cantidad=$itemProducto->cantidad+$cantidad;
					$itemProducto->subtotal=$itemProducto->cantidad*$itemProducto->preciounitario;
				}
			}

		}
		if(!$producto_encontrado)
		{
			$producto->cantidad=$cantidad;
			$producto->subtotal=$producto->preciounitario*$cantidad;
			$producto->nombremarca=$producto->Marca->nombremarca;
			$producto->talla=$talla;
			$producto->ruta_imagen=Config::get('constants.url_archivos')."/".$producto->ruta_imagen;
			$carrito->productos[]=$producto;			
		}

		$total=0;

		foreach ($carrito->productos as $producto) {
			
			$total=$total+$producto->subtotal;
		}

		$carrito->total=$total;


		Session::put("carrito",json_encode($carrito));

		return Redirect::to('/carrito');
		
	}	

	public function getObtenercarrito()
	{
		$carrito=new stdClass();
		$carrito->total=0;
		$carrito->productos=[];

		if(Session::has("carrito"))
			$carrito=json_decode(Session::get("carrito"));
		
		return json_encode($carrito);

	}

	public function getLimpiarcarrito()
	{
		$carrito=new stdClass();
		$carrito->total=0;
		$carrito->productos=[];

		Session::put("carrito",json_encode($carrito));
	}

	public function getIndex()
	{
		return View::make("carrito");
	}

	public function getModificarproducto($idproducto,$cantidad)
	{

		$carrito=new stdClass();
		$carrito->total=0;
		$carrito->productos=[];

		if(Session::has("carrito"))
		{
			$carrito=json_decode(Session::get("carrito"));
		}

		for($i=0;$i<count($carrito->productos);$i++)
		{
			if($carrito->productos[$i]->id==$idproducto)
			{
				$carrito->productos[$i]->cantidad=$cantidad;
				$carrito->productos[$i]->subtotal=$cantidad*$carrito->productos[$i]->preciounitario;

			}

		}

		$total=0;

		foreach ($carrito->productos as $producto) {
			
			$total=$total+$producto->subtotal;
		}

		$carrito->total=$total;


		Session::put("carrito",json_encode($carrito));

		return json_encode($carrito);

	}

	public function getConfirmarpago()
	{
		return View::make("carrito.confirmacionpago");
	}


	public function getEliminarproducto($idproducto)
	{
		$carrito=new stdClass();
		$carrito->productos=[];
		$carrito->total=0;

		if(Session::has("carrito"))
		{
			$carrito=json_decode(Session::get("carrito"));
		}

		for($i=0;$i<count($carrito->productos);$i++)
		{
			if($carrito->productos[$i]->id==$idproducto)
			{
				array_splice($carrito->productos,$i,1);
				break;
			}
		}



		$total=0;

		foreach ($carrito->productos as $producto) {
			
			$total=$total+$producto->subtotal;
		}

		$carrito->total=$total;


		Session::put("carrito",json_encode($carrito));

		return json_encode($carrito);

	}
	
}

