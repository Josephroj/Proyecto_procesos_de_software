@extends('master')

@section("compra")

<br>
<hr>
<br>
<h2 class="text-center"><mark>DETALLE DE MIS COMPRAS</mark><span></span> <br>
 El producto o los productos se le estara entregando dentro de las 24 horas</h2> 
<a class="btn btn-danger" href="/productos/listarproductos" type="button">Seguir Comprando</a>
<br>
<hr>
<table class="table table-striped table-bordered">
<thead>
	<th>DNI</th>
	<th>Cliente</th>
	<th>Dirección</th>
	<th>Teléfono</th>
	<th>Distrito</th>
	<th>Producto</th>
	<th>Color</th>
	<th>Talla</th>
	<th>Marca</th>
	<th>Cantidad</th>
	<th>Precio</th>
	<th>Total</th>
	<th>Estado</th>
	

</thead>

<?

	foreach ($miscompras as $compra) {
		?>

		<tr>
			<td><?=$compra->dni?></td>
			<td><?=$compra->nombrecliente?> <?=$compra->apellidos?></td>
			<td><?=$compra->direccion?></td>
			<td><?=$compra->telefono?></td>
			<td><?=$compra->distrito?></td>
			<td><?=$compra->nombre?></td>
			<td><?=$compra->color?></td>
			<td><?=$compra->talla?></td>
			<td><?=$compra->nombremarca?></td>
			<td><?=$compra->cantidad?></td>
			<td><?=$compra->precio_venta?></td>
			<td><?=$compra->total?></td>
			<td><?=$compra->fecha_venta?></td>
			<td>APROBADO</td>
			
		</tr>
		<?

	}


?>

</table>


@stop