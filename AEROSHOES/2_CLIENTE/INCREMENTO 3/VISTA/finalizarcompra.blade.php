@extends('master')
@section('cuerpo')

 <section class="header_text sub">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="" >
              <br>
            <div class="container">
            <div class="alert alert-warning mt-5 pt-3" role="alert">
            <strong>
        <span class="badge badge-default">¡</span></strong> ¿Ya eres cliente? <a href="/login" class="alert-link">Haz clic aquí para acceder</a>
    </div>
    </div>
                <h4><span>INGRESE LOS SIGUIENTES DATOS</span></h4>
            </section> 

            <section class="main-content">              
                <div class="row">
                    <div class="span5">                 
                        <h4 class="title"><span class="text"><strong>FORMULARIO </strong> CLIENTE</span></h4>
                        <form action="#" method="post">
                            <input type="hidden" name="next" value="/">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Nombre :</label>
                                    <div class="controls">
                                        <input readonly="true" type="text" placeholder="Ingrese su Nombre" id="username" class="input-xlarge" value="{{$cliente->nombre}}" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Apellidos :</label>
                                    <div class="controls">
                                          <input readonly="true" type="text" value="{{$cliente->apellidos}}" placeholder="Ingrese su Apellido" id="username" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">DNI :</label>
                                    <div class="controls">
                                        <input readonly="true" type="text" value="{{$cliente->dni}}" placeholder="Ingrese su Documento de identidad" id="password" class="input-xlarge" name="txtpassword" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')" maxlength="50">
                                    </div>
                                </div>
                                  <label class="control-label">Teléfono :</label>
                                    <div class="controls">
                                          <input type="text" readonly="true" placeholder="Ingrese su Teléfono" id="username"  value="{{$cliente->telefono}}" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                     <label class="control-label">Dirección de correo electrónico :</label>
                                    <div class="controls">
                                          <input type="email" readonly="true" placeholder="Ingrese su correo" id="username"  value="{{$cliente->correo}}" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                    <label class="control-label">Dirección 1 y Dirección 2 :</label>
                                    <div class="controls">
                                          <input type="text" placeholder="Ingrese su Dirección" id="username" readonly="true" value="{{$cliente->direccion}}" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">

                                          <input type="text" placeholder="Ingrese otra Dirección" id="username" readonly="true" value="{{$cliente->direccion2}}" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">

                                    <label class="control-label">Distrito :</label>
                                    <div class="controls">
                                          <input type="text" readonly="true" placeholder="Ingrese su correo" id="username"  value="{{$cliente->distrito}}" class="input-xlarge" name="txt" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                   <script type="text/javascript" src="/app/carrito/CarritoController.js?version=7.3"></script> 
                               </div>
                                    
                            </fieldset>
                        </form>             
                    </div>
                    <div class="span7">                 
                        <h4 class="title"><span class="text"><strong>DETALLE DE</strong> VENTA</span></h4>
                        <form action="#" method="post" class="form-stacked">
                        <table class="table table-striped" width="100%" border="1">
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





                            
                            <hr>
                            <fieldset>
                              <strong>TOTAL A PAGAR</strong>:
                              <strong id="ltotal">Total</strong><br>  
                              <input type="hidden" id="htotal" name="">     
                                <div class="control-group">
                                    <p></p>
                                </div>
                                <hr>
                                <div id="idPayuButtonContainer"></div>
                                    <a class="btn btn-danger" href="/productos/listarproductos" type="button">Seguir Comprando</a>
                            </fieldset>
                               
          

                              

                        </form>                 
                    </div>              
                </div>
            </section>     
 @stop
       