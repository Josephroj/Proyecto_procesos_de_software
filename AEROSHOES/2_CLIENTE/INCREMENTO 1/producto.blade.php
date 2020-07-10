@extends('master')
@section('cuerpo')
			<section class="header_text sub">
				<img class="pageBanner" src="/themes/images/pageBanner.png" alt="New products" >
				<h4><span>NUEVOS PRODUCTOS</span></h4>
			</section>
			<section class="main-content">
				<div class="row">						
					<div class="span9">	

								<!-- Small modal -->
								<div class="modal fade " tabindex="-1" role="dialog" aria-hidden="true" id="confirmacion">
								 <div class="modal-dialog modal-sm">
								   <div class="modal-content">

								       <div class="modal-header">
								           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
								             <span aria-hidden="true">×</span>
								           </button>
								           <h4 class="modal-title" id="myModalLabel2">Estimado Cliente</h4>

								       </div>

								       <div class="modal-body">
								         <p>Este producto esta agotado</p>
								         <p>Escoge otro calzado </p>
								       </div>

								       <div class="modal-footer">
								         <button type="button" href="#" class="btn btn-lg btn-danger" data-dismiss="modal">Salir</button>
								       </div>

								   </div>
								 </div>
								</div>
								<!-- /modals -->

					<?php

					foreach ($listaproductos as $producto) {

					?>	
					<li class="span thumbnails listing-products">		
								<div class="product-box">
									<span class="sale_tag"></span>											
									<a href=""><img src="<?=Config::get('constants.url_archivos')."/".$producto->ruta_imagen;?>"
									 width="50%"></a><br/>
									<a href="" class="title"></a><?=$producto->nombre?><br/>
									<a href="" class="category"><?=$producto->nombremarca?></a>
									<p class="price">S/.<?=$producto->preciounitario?> </p>
									<p class="price">Stock: <?=$producto->stock?> </p>

									<?php
								         if($producto->stock==0)
								         {
								         ?>

								         <a class="btn btn-danger" data-toggle="modal" data-target="#confirmacion">AGOTADO</a>

								         <?
								         } 
								         else
								         {
								         ?>
								        <a href="/productos/listarproductounitario/<?=$producto->id?>" class="btn btn-warning">VER DETALLE</a>
								         <?
								         }
								         ?>	
								</div>
							</li>       
						</ul>
						<?php
							}
						?>								
						<hr>
					</div>
					<div class="span3 col">
						<div class="block">
           						<ul class="nav nav-list">
								<li class="nav-header">CATEGORIAS</li>
								<?php 
           						foreach ($listacategoria as $categoria ) {  ?>
								<li><a href="/productos/listarproductocategoria/<?=$categoria->idcategoria;?>" style="color:black;"><?=$categoria->nombre;?></a></li>
								<?php   }
							  ?>
							</ul>
							<br/>	
						</div>
								</div>
							</div>

										@stop
						</div>

					</div>
				</div>
			</section>
			

