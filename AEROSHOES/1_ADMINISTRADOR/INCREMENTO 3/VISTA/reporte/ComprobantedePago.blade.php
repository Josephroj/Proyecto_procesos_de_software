<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	

    <img class="img-responsive" src="{{ asset('/img/logotourperu.png') }}" width="220" height="70" style="position: absolute;">
        <div class="row">
            <div class="col-xs-6 text-right">
                <h3 style="text-align: right;line-height: 3px;" >R.U.C : 20486869233</h3>
                <h3 style="text-align: right;line-height: 3px;" >BOLETA DE VENTA N° # <?=$venta->id;?></h3>
                <div style="text-align: right;line-height: 3px;">
                    <span  > Date: <?=$venta->Fechaventa;?></span> 
                </div>
            </div>
    	</div>
    	<hr>
        <div style="width:500px;text-transform: capitalize;" >

                    <address>
        				<h4 style="text-align: right">Empresa Dedicada al rubro de Turismo</h4>
            			<strong>DOM. FISCAL:</strong> Mza. K1 lote. 1A C.P Virgen del Carmen - Lurigancho - Lima<br>
                        <strong>SUCURSAL:</strong> Av. Los Manzanos N°1035 - El Tambo - Huancayo - Junin<br>
                        <br>
                        <strong>NOMBRE DEL PASAJERO : </strong><?=$venta->cliente ." ". $venta->apellidos;?><br>
                        <strong>ORIGEN:</strong> Huancayo &nbsp;&nbsp; <strong>DESTINO:</strong> <?=$venta->Circuito;?><br>
                        <strong>FECHA SALIDA:</strong> <?=$venta->FechaSalida;?> &nbsp;&nbsp; <strong>HORA:</strong> 5:30 AM 
                        <br>
                        <strong>FECHA DE EXPEDICIÓN:</strong> <?=$venta->Fechaventa;?> 

    				</address>
        </div>

        <div style="text-align:right;padding-top: -155px;">
            <address>
                <span>Teléfono: 064-762004</span>
                <br> 
                <span>Celular 1: 964407046</span>
                <p>
                <span>Celular 2: 954158860</span>
                <br>
                <span>Celular 3: 954158860</span>
                <br> 
            </address>
        </div>

    	<br>
        <br>

        <center>DETALLE DEL PAGO DEL CIRCUITO TURISTICO</center>
        <br>
        <table class="table" >
            <thead>
                <tr>
                    <td><strong>CIRCUITO</strong></td>
                    <td><strong>PRECIO</strong></td>
                    <td><strong>CANTIDAD</strong></td>
                    <td><strong>SUBTOTAL</strong></td>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td><?=$venta->Circuito;?></td>
                    <td><?=$venta->Precio;?></td>
                    <td><?=$venta->Cantidad;?></td>
                    <td><?=$venta->subtotal;?></td>
                </tr>
  
            </tbody>
            <hr>
        </table>
    <div style="text-align: right">
        <strong>TOTAL A PAGAR: S/. </strong> <?=$venta->Total;?> <br>
    </div>

    <div style="text-align: justify;">
        <p>- La empresa no se responsabiliza por bullos perdidos no declarados <br>
        - Los pasajeros tienen derecho a 5kg de equipaje libre de pago <br>
        - No se devuelve dinero por pasaje expedido</p><br>
    </div>

    <div  style="text-align: center;">
        <address>
            <span>Emitido por la Empresa de <br>
            Transportes "Tourperu" S.R.L</span>
        </address>
    </div>



<style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
</style>
</body>
</html>