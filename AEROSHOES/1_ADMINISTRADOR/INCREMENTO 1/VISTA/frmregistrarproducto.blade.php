
<!DOCTYPE html>
<html>
<head>

  <title></title>
</head>

<body>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<!-- REGISTRAR-->
  <form enctype="multipart/form-data" action="/productos/guardarproducto" method="post" >
      <div class="modal-content modal-dialog modal-body form-group">

        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-ok"></span> Registrar un Producto</h4>
        </div>

            <input class="form-control" type="hidden" placeholder="" id="id" value="0">
            <br>

            <h3>Categoria</h3>
            <br>
            <?
            echo Form::select('ddlCategoria', $categoria, null) 
            ?>
            <br>

            <h3>Marca</h3>
            <br>
            <?
            echo Form::select('ddlMarca', $marca, null) 
            ?>
            <br>
            <br>
             <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value="{{Input::old('nombre')}}" required="">
            <br>
      
            <h3>Foto</h3>
            <input type="file" class="form-control" name="ruta_imagen" id="ruta_imagen" accept=".jpg,.jpeg,.png"  required>
            <br>

            <input type="text" class="form-control" name="color" id="color" placeholder="Color" value="{{Input::old('color')}}" required="">
            <br>
            
            <input type="number" class="form-control" name="preciounitario" id="preciounitario" placeholder="preciounitario" value="{{Input::old('preciounitario')}}" required="">
            <br>

            <input type="number" class="form-control" name="stock" id="stock" placeholder="Stock producto" value="{{Input::old('stock')}}" required="">
            <br>

            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion" value="{{Input::old('descripcion')}}" required="">
            <br>

            <button type="submit" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-ok"</span> Registrar</button>
            <br>

     </div>
  </form> 

</body>
</html>
x


