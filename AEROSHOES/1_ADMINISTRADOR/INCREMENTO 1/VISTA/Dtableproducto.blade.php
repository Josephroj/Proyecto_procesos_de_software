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



<body>
<div class=" panel-danger btn-lg">
  <div class="panel-heading panel" style="float:left">MANTENIMIENTO DE LA TABLA PRODUCTO
  </div>
  <div><span class="glyphicon glyphicon-arrow-right" style="float: right;font-size:30px;"><a href="/index/inicioadmin">&nbsp; volver al Inicio</a></span>
  </div>
</div>
<a class="btn btn-primary" type='button' href="/productos/registrarproducto" style="width: 100% ; height: 50px;"> <i class="glyphicon glyphicon-ok"></i>&nbsp;REGISTRAR PRODUCTO</a>
<br>
<br>
<br>

<script type="text/javascript">
$(document).ready( function () {

 var tabla1= $('#producto').DataTable({
        "ajax": "/productos/listarproductos",
        "columns": [
            { "data": "id" },
            { "data": "idcategoria" },
            { "data": "idmarca" },
            { "data": "nombre" },
            { "data": "ruta_imagen",
             "render": function(data, type, row) {
                 return '<img src="'+data+'" /img-producto/ width="50" height="50"> ';
             } 
            },  
  
            { "data": "color" },
            { "data": "preciounitario" },
            { "data": "stock" },
            { "data": "descripcion" }
  
            ],

     "columnDefs": [
            {"targets":[9],"visible":true,
                "render": function ( data, type, row ) 
                {
                    return "<button class='btn-info' type='button' data-toggle='modal' data-target='#myeditar' data-id='"+row.id+"'><i class='glyphicon glyphicon-edit'></i>&nbsp;Modificar</button>";
                }
            },

            {"targets":[10],"visible":true,
                "render": function ( data, type, row )
                 {
                    return "<button class='btn-danger' type='button' data-toggle='modal' data-target='#myeliminar' data-id='"+row.id+"'><i class='glyphicon glyphicon-trash'></i>&nbsp;Eliminar</button>";
                 }
            } ],
             "language": {
                   "url": "////cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
               }     

    } );



// Editar
  $('#myeditar').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget);
  var idproducto = button.data('id');
  console.log("el id es "+idproducto);

    $.ajax(
      {
        method: "GET",
        url:"/productos/obtenerproducto/"+idproducto  
      }
    )
  .done(

    function(response)
    {
           $('#myeditar input[name=id]').val(response.id);
           $('#myeditar input[name=idcategoria]').val(response.idcategoria);
           $('#myeditar input[name=idmarca]').val(response.idmarca);
           $('#myeditar input[name=nombre]').val(response.nombre);
           
           $('#myeditar input[name=color]').val(response.color);
           $('#myeditar input[name=preciounitario]').val(response.preciounitario);
            $('#myeditar input[name=stock]').val(response.stock);
           $('#myeditar input[name=descripcion]').val(response.descripcion);
           $('#myeditar input[name=ruta_imagen]').val(response.ruta_imagen);
    }
    ); 

});

  //Eliminar

  $('#myeliminar').on('show.bs.modal', function (event){
  var button = $(event.relatedTarget);
  var id = button.data('id');
  console.log("el id es "+id);

    $.ajax(
      {
        method: "GET",
        url:"/productos/eliminarproducto/"+id  
      }
    )
  .done(

    function(response)
    {
           $('#myeliminar input[name=id]').val(response.id);
            tabla1.ajax.reload();
         
    }
    ); 

});

} );

</script>



<table id="producto" class="display"  cellspacing="0" width="100%">
      <thead>
            <tr>
              <th>id</th>
              <th>Categoria</th>
              <th>Marca</th>
              <th>Nombre</th> 
              <th>Foto</th> 
              <th>Color</th> 
              <th>PrecioUnitario</th> 
              <th>Stock</th> 
              <th>Descripcion</th>                    
              <th style="width:70px;">Modificar</th>
              <th style="width:70px;">Eliminar</th>
            </tr>
      </thead>
</table>


     <!-- EDITAR-->
    <form class="modal fade"  tabindex="-1" role="dialog"  id="myeditar" role="dialog" action="/productos/actualizarproducto"  method="post" enctype="multipart/form-data">
    <div class="modal-content modal-dialog modal-body form-group" style="width:400px; background: white">

        <div class="modal-header" style="">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
          <h4 class="modal-title custom_align" id="Heading">Editar el Producto</h4>
        </div>

        <input class="form-control" type="hidden" name="id" id="id">
         <br>
        <input class="form-control"  type="text" name="idcategoria" id="idcategoria">
        <br>

        <input class="form-control"  type="text" name="idmarca" id="idmarca">
        <br>
        <input class="form-control" type="text"  name="nombre" id="nombre"> 
        <br>
         
   
        <br>
        <input class="form-control" type="text"  name="color" id="color"> 
        <br>
        <input class="form-control" type="text"  name="preciounitario" id="preciounitario"> 
        <br>
        <input class="form-control" type="text"  name="stock" id="stock"> 
        <br>
        <input class="form-control" type="text"  name="descripcion" id="descripcion"> 
        <br>
        <input type="file" name="ruta_imagen" id="ruta_imagen">
        <br>
        <button type="submit" class="btn btn-warning btn-lg"  
         style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Modificar</button>

      </div>
    </form>


  

<!-- ELIMINAR-->
    <div class="modal fade" id="myeliminar" tabindex="-1" role="dialog" action="" method="post" >
      <div class="modal-dialog" style="background:white;">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title custom_align" id="Heading">Eliminar el Producto</h4>
        </div>
          <div class="modal-body">  
            <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Esta seguro que va eliminar este Producto seleccionado?</div>  
          </div>

        <div class="modal-footer ">
          <button type="button" class="btn btn-success" data-dismiss="modal" >
          <span class="glyphicon glyphicon-ok-sign"></span> Si</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> No</button>
        </div>

    </div>
  </div>
 


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
</html