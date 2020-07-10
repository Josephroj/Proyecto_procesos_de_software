<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Reporte | venta</title>
<!--estilos-->
<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.css">
<link href="/css/responsive.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<br>
<div><span class="glyphicon glyphicon-arrow-right" style="float: right;font-size:20px;"><a href="/index/inicioadmin">&nbsp; volver al Inicio</a></span>
  </div>
<h1 style="text-align: center;text-decoration: underline;">REPORTE DE VENTA</h1>
<hr>
<br>
<form method="post" action="/listado/listadoventas">
  <div class="col-md-12">
    <div class="row">
      <div class="form-inline col-md-4">
        <label class="">Fecha Inicio </label>
          <div class="input-group">
              <span class="input-group-addon primary"><span class="glyphicon glyphicon-calendar"></span></span>
                <input type="date" class="form-control" name="txtfechadesde" 
                id="txtfechadesde" placeholder="Date" />
          </div>
      </div>

      <div class="form-inline col-md-4">
      <label class="">Fecha Hasta </label>
          <div class="input-group"> 
              <span class="input-group-addon primary"><span class="glyphicon glyphicon-calendar"></span></span>
                <input type="date" class="form-control" name="txtfechahasta" 
                id="txtfechahasta" placeholder="Date" />
          </div>
      </div>

      <div class="col-md-4">
          <input class="btn btn-md-4 btn-danger col-md-6" type="submit" name="emviar" value="Buscar Venta">
      </div>
    </div>   
  </div>

                              
</form>
<br>
<hr>
<table id="report-cliente" class="table  table-striped table-condensed table-bordered dt-responsive nowrap" cellspacing="0" width="100%" >
<thead>
  <tr>
      <th>Id</th>
      <th>Cliente</th>
      <th>Circuito</th>
      <th>Precio</th>
      <th>Cantidad</th>    
      <th>Total</th>
      <th>Pago</th>
      <th>FechaSalida</th>
      <th>FechaVenta</th>
      <th></th>
      <th></th>
  </tr>
</thead>
  <tbody>
  <?
  foreach ($venta as $ventas)
  {
  ?>
  <tr>
  <td><?=$ventas->id;?></td>
  <td><?=$ventas->cliente;?></td>
  <td><?=$ventas->Circuito;?></td>
  <td><?=$ventas->Precio;?></td>
  <td><?=$ventas->Cantidad;?></td>
  <td><?=$ventas->Total;?></td>
  <td><?=$ventas->Pago;?></td>
  <td><?=$ventas->FechaSalida;?></td>
  <td><?=$ventas->Fechaventa;?></td>
  <td><a href="/listado/buscarcliente/{{$ventas->id}}" class="btn btn-md btn-info" type="button"><span class="glyphicon glyphicon-print"></span>&nbsp;Boleta de venta</a></td>
  <td><a href="/listado/reportedeventa/{{$ventas->id}}" class="btn btn-md btn-danger" type="button" ><i class="fa fa-file-pdf-o"></i>&nbsp;Exportar a pdf</a></td>

  </tr>
  <?
  }
  ?>  
  </tbody>
  </table>

  <script type="text/javascript" src="/js/jquery-3.2.0.js"></script>
  <script language="JavaScript" src="/js/jquery.dataTables.min.js"></script>
  <script src="/js/dataTables.bootstrap.min.js"></script>
  <script src="/js/dataTables.buttons.min.js"></script><!--importar botones-->
  <script src="/js/dataTables.responsive.min.js"></script>

</body>
<style type="text/css">
  .input-group-addon.primary {
    color: rgb(255, 255, 255);
    background-color: rgb(50, 118, 177);
    border-color: rgb(40, 94, 142);
}
</style>   
</html>
              