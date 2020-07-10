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
                        <h4 class="title"><span class="text"><strong>FORMULARIO DE</strong> RECUPERACION DE CONTRASEÑA</span></h4>
                        <form action="/usuarios/validartoken" method="post" class="form-stacked">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Insertar el codigo topken::</label>
                                    <div class="controls">
                                        <input type="text" placeholder="token" class="input-xlarge" name="txttoken" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>                                                  
                                <div class="control-group">
                                    <p></p>
                                </div>
                                <hr>
                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Enviar Codigo"></div>
                            </fieldset>
                        </form>                 
                    </div>              
                </div>
            </section>     
 
             <?php   if($errors->first("errortoken")!=null)
                    {
                        echo  '<script type="text/javascript">alert("Tokens no existe en nuestro sistema");</script>'  ;
                    }

            ?>  

@stop