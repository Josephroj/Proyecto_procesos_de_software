@extends('templates.maestroinicio')


@section('head')
<script type="text/javascript" src="/app/carrito/CarritoController.js?version=8.3"></script>
@stop
@section("body")

<link:rel="stylesheet" href="https://meaxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVY115IFeKldGmJRAKycuHAHRg320mUcww7on3RYdg4Va+PaSTz/K68vbdEjh4u" crossorigin="anonymous">
@section("body")

<h1>CARRITO DE COMPRAS11</h1>

<table>
	<thead>
		<th>Foto</th>
		<th>Producto</th>
		<th>Cantidad</th>
		<th>Precio</th>
		<th>Subtotal</th>
    <th></th>
	</thead>
  <tbody id="tblCarrito">
    
  </tbody>
</table>
	
<label>TOTAL : </label>
<H3 id="ltotal"></H3>

<input type="hidden" name="" id="htotal" value=""> 


<div id="boton-pago-container"></div>





@stop