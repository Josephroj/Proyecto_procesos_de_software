@extends('master')
@section('cuerpo')
    
            <section class="header_text sub">
            <img class="pageBanner" src="themes/images/pageBanner.png" alt="New products" >
                <h4><span>INICIAR SESIÓN O REGISTRARSE</span></h4>
            </section>          
            <section class="main-content">              
                <div class="row">
                    <div class="span5">                 
                    </div>
                    <div class="span7">                 
                        <h4 class="title"><span class="text"><strong>FORMULARIO DE</strong> PASSWORD</span></h4>

                      
                        <form action="/usuarios/guardarnuevopassword" method="post" class="form-stacked">
                         
                         <?
                         foreach ($tokens as $usuario ) {
                        ?>
                        <input type="hidden" name="idcliente" value="<?=$usuario->idusuario;?>">
                        <?
                         }
                         ?>
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Correo Electronico</label>
                                    <div class="controls">
                                        <input type="email" placeholder="Escribir tu correo electronico" class="input-xlarge" name="correoelectronico" id="correoelectronico" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>


                                    <label class="control-label">Cambiar Password</label>
                                    <div class="controls">
                                        <input type="password" placeholder="Escribir tu nuevo password" class="input-xlarge" name="txtpassword" id="txtpassword" minlength="5"  maxlength="20" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>

                                       <label class="control-label">Confirmar Password</label>
                                    <div class="controls">
                                        <input type="password" placeholder="Confirmar tu nuevo password" minlength="5"  maxlength="20" class="input-xlarge" name="txtconfirmar" id="txtconfirmar" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>                                                     
                                <div class="control-group">
                                    <p></p>
                                </div>
                                <hr>
                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Cambiar Contraseña"></div>
                            </fieldset>
                        </form> 
                                    
                    </div>              
                </div>
            </section>     

            

@stop