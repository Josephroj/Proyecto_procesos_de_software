@extends('master')
@section('cuerpo')

	<script type="text/javascript" src="/app/carrito/CarritoController.js?version=4.3"></script>


	
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
				<h4><span>CARRITO DE COMPRAS</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>MI</strong> CARRITO</span></h4>
						<table class="table table-striped" width="100%" border="2">
								<thead>
									<th>Foto</th>
									<th>Marca</th>
									<th>Talla</th>
									<th>Color</th>
									<th>Producto</th>
									<th>Cantidad</th>
									<th>Precio</th>
									<th>Subtotal</th>
								</thead>
   								<tbody id="tblCarrito"> 

   								</tbody> 
							</table>

						<p class="cart-total right">
							<strong ></strong><br>
							<strong>TOTAL A PAGAR </strong>:
							<strong id="ltotal">Total</strong><br>
							<input type="hidden" id="htotal" name="">
						</p>
						<hr/>
						<p class="buttons center">				
							<a class="btn btn-danger" href="#" type="button">Actualizar</a>
							<a class="btn btn-warning" href="/productos/listarproductos" type="button">Seguir Comprando</a>
							 <?php
					          if (!Session::has("clientes")) 
					          {                           
					          ?>
									<a class="btn btn-inverse" href="/login" type="button">Continuar</a>
					          <?php
					          }


								
					           else
					          {    
					           $clientes= json_decode(Session::get("clientes"));
					          ?>
									
												<a class="btn btn-inverse" href="/compras/finalizarcompra" type="button">Comprar</a>
					        <?php
					         }
					        ?>
						</p>					 
					</div>
				</div>



			</section>			
@stop