@extends('master')
@section('cuerpo')
			<section class="header_text sub">
				<img class="pageBanner" src="/themes/images/pageBanner.png" alt="New products" >
				<h4><span>DETALLE DEL PRODUCTO</span></h4>

			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">

					<?php

					foreach ($listaproductos as $producto) {

					?>
						<div class="row">
							<div class="span4">
								<a href="<?=$producto->ruta_imagen;?>" class="thumbnail" data-fancybox-group="group1" title="Description 1">
								<img alt="" src="<?=Config::get('constants.url_archivos')."/".$producto->ruta_imagen;?>"></a>			
							</div>
							<div class="span5">
								<address>
									<strong >MARCA:</strong> <span><?=$producto->nombremarca;?></span><br>
									
									<strong>COLOR: </strong> <span><?=$producto->color;?></span><br>
									<strong>TALLA:</strong> <span></span><br>
									<select name="talla" id="talla">
									  <option value="35">35</option>
									  <option value="36">36</option>
									  <option value="37">37</option>
									  <option value="38">38</option>
									  <option value="39">39</option>
									  <option value="40">40</option>
									  <option value="41">41</option>
									  <option value="42">42</option>
									</select>
									<br>
									<strong>DESCRIPCIÓN:</strong> <span><?=$producto->descripcion;?></span><br>
									<strong>STOCK:</strong> <span> <?=$producto->stock;?> </span>
									<br>
									<strong>CANTIDAD:</strong> <input type="number" name="idcantidad" min="1"  id="idcantidad" value="1">

								</address>									
								
							</div>
							<div class="span5">
								<form class="form-inline">

									<a class="btn btn-warning type=submit-warning" type="button" onclick="agregar()">Añadir al carrito</a>	
								
									<a class="btn btn-danger" href="/productos/listarproductos" type="button">Seguir Comprando</a>

								</form>

								<br>
							</div>							
						</div>
					<?
				}
				?>

				<script type="text/javascript">
				function agregar()
				{
					 var cantidad=$('#idcantidad').val();
				     var capacidad=<?=$producto->stock;?>;
				     if(cantidad>capacidad)
				     {
				       alert("El producto solo esta disponible para" +" "+capacidad +" "+"zapatos, elija esa cantidad o menor a ello, o de otro modo comunicarse con la empresa AEROSHOES (Diríjase al item contáctos).");
				       return false;
				     }

				
				var talla=$("#talla").val();
				var tallas=encodeURI(talla);

				window.location.href="/carrito/agregarproducto/<?=$producto->id;?>/"+cantidad +"/"+tallas;
				}

				</script>
									
						</div>
					</div>
					
				@stop	
					</div>
					
			</section>	
	