<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">

<!--importar datatable y ajax-->
<script type="text/javascript" src="/js/jquery-3.2.0.js"></script>
<script src="/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="/js/bootstrap.min.js"></script><!--ajax-modal-->

<link rel="stylesheet" type="text/css" href="/css/jquery.dataTables.min.css">
<!--estilos-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

<!--<link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">-->

<body>
<div class=" panel-danger btn-lg">
  <div class="panel-heading panel" style="float:left">LISTADO DE LA TABLA CATEGORIAS
  </div>
  <div><span class="glyphicon glyphicon-arrow-right" style="float: right;font-size:30px;"><a href="/index/inicioadmin">&nbsp; volver al Inicio</a></span>
  </div>
</div>
<br>
<br>
<br>

<script type="text/javascript">
$(document).ready( function () {

 var tabla1= $('#tcliente').DataTable({
        "ajax": "/clientes/listarcategorias",
        "columns": [
            { "data": "idcategoria" },
            { "data": "nombre" }
            ],
             "language": {
                   "url": "////cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
               }
    });

} );

</script>
<table id="tcliente" class="display"  cellspacing="0" width="100%">
 			<thead>
						<tr>
							<th>id</th>
							<th>NombreCategoria</th>                       
						</tr>
			</thead>
</table>


  <style>
  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }

  </style>
					
</body>
</html>