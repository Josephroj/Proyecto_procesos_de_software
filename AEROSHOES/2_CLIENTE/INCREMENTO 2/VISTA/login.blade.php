@extends('master')
@section('cuerpo')
    
            <section class="header_text sub">
            <img class="pageBanner" src="/themes/images/pageBanner.png" alt="" >
                <h4><span>INICIAR SESIÓN O REGISTRARSE</span></h4>
            </section>          
            <section class="main-content">              
                <div class="row">
                    <div class="span5">                 
                        <h4 class="title"><span class="text"><strong>FORMULARIO DE</strong> LOGIN</span></h4>
                        <form action="/usuarios/autenticarusuario" method="post">
                            <input type="hidden" name="next" value="/">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">Dirección de correo electrónico</label>
                                    <div class="controls">
                                        <input type="email" placeholder="Ingrese su correo" id="username" class="input-xlarge" name="txtlogin" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Contraseña</label>
                                    <div class="controls">
                                        <input type="password" placeholder="Ingrese su contraseña" id="password" class="input-xlarge" name="txtpassword" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')" minlength="5"  maxlength="20">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input tabindex="3" class="btn btn-inverse large" type="submit" value="Ingresar">
                                    <hr>
                                    <p class="reset">Recuperar su <a tabindex="4" href="/recuperarcontrasena" title="Recover your username or password"> contraseña</a></p>
                                </div>

                                <h1> 
                                    <? 
                                        if($errors->first("error")!=null)
                                        {
                                        ?>
                                        <div class="alert alert-success">
                                          <strong>Alerta!</strong><?echo $errors->first("error");?> 
                                        </div>
                                         
                                        <?
                                        }

                                    ?>
                                
                                </h1>

                            </fieldset>
                        </form>             
                    </div>
                    <div class="span7">                 
                        <h4 class="title"><span class="text"><strong>FORMULARIO DE</strong> REGISTRO CLIENTES</span></h4>
                        <form action="/usuarios/guardarusuario" method="post" class="form-stacked">
                            <fieldset>
                                <div class="control-group">
                                    <label class="control-label">NOMBRES</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Ingrese su nombre" class="input-xlarge" name="txtNombres" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('Ingrese un Nombre')" minlength="5" maxlength="30"onkeypress="return soloLetras(event)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">APELLIDOS</label>
                                    <div class="controls">
                                    <input type="text" placeholder="Ingrese su apellidos" class="input-xlarge" name="txtapellido"  required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('Ingrese un Nombre')" minlength="5" maxlength="30" onkeypress="return soloLetras(event)">
                                    </div>
                                    </div>
                                    <div class="control-group">
                                    <label class="control-label">DNI</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Ingrese su dni" class="input-xlarge" name="txtdni" required oninvalid="setCustomValidaty ('Complete su DNI')" oninput="setCustomValidaty('Ingrese un DNI')" minlength="8" maxlength="8" name="numpiso" onkeypress="return valida(event)">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">CORREO ELECTRONÍCO</label>
                                    <div class="controls">
                                        <input type="email" placeholder="Ingrese su correo" class="input-xlarge" name="txtCorreo"
                                        required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">Contraseña:</label>
                                    <div class="controls">
                                        <input type="password" placeholder="Ingrese una contraseña" class="input-xlarge" name="txtpassword" required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')" minlength="5"  maxlength="20">
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">DIRECCÍON</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Ingrese su Dirección" class="input-xlarge" name="txtdireccion"
                                        required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">DIRECCÍON 2</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Ingrese su Dirección" class="input-xlarge" name="txtdireccion2"
                                        required oninvalid="setCustomValidaty ('Complete el Nombre')" oninput="setCustomValidaty('')">
                                    </div>
                                </div>

                                   <div class="control-group">
                                    <label class="control-label">CELULAR O TÉLEFONO</label>
                                    <div class="controls">
                                        <input type="text" placeholder="Ingrese su numero de celular" class="input-xlarge" name="txttelefono" required oninvalid="setCustomValidaty ('Complete su DNI')" oninput="setCustomValidaty('Ingrese un numero')" minlength="9" maxlength="9" name="numpiso" onkeypress="return valida(event)">
                                    </div>
                                </div>
                                     <label class="control-label"><span class="required"></span> Distrito:</label>
                                        <div class="controls">
                                            <select class="input-xlarge"  id="cbodistrito" name="cbodistrito">
                                            <option value="HUANCAYO">HUANCAYO</option>
                                            <option value="CHILCA">CHILCA</option>
                                            <option value="EL TAMBO">EL TAMBO</option>
                                    </select>                                                      
                                <div class="control-group">
                                    <p></p>
                                </div>
                                <hr>
                                <div class="actions"><input tabindex="9" class="btn btn-inverse large" type="submit" value="Crear Cuenta"></div>
                            </fieldset>
                        </form>                 
                    </div>              
                </div>
            </section>  
                            <script>
                                $(document).ready(function(){
                                    $('#cbodistrito').change(function(){
                                        $.get("{{ url('dropdown')}}",
                                        { option: $(this).val() },
                                        function(data) {
                                            });
                                        });
                                    });    
                            </script>
                            
                                    <script>
                                    function valida(e){
                                        tecla = (document.all) ? e.keyCode : e.which;

                                        //Tecla de retroceso para borrar, siempre la permite
                                        if (tecla==8){
                                            return true;
                                        }
                                            
                                        // Patron de entrada, en este caso solo acepta numeros
                                        patron =/[0-9]/;
                                        tecla_final = String.fromCharCode(tecla);
                                        return patron.test(tecla_final);
                                    }
                                    </script>
                                    <script>
                                        function soloLetras(e){
                                           key = e.keyCode || e.which;
                                           tecla = String.fromCharCode(key).toLowerCase();
                                           letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                                           especiales = "8-37-39-46";

                                           tecla_especial = false
                                           for(var i in especiales){
                                                if(key == especiales[i]){
                                                    tecla_especial = true;
                                                    break;
                                                }
                                            }

                                            if(letras.indexOf(tecla)==-1 && !tecla_especial){
                                                return false;
                                            }
                                        }
                                    </script>
                                    
                                    <?php   if($errors->first("autenticar")!=null)
                                                    {
                                                        echo  '<script type="text/javascript">alert("Usuarios Registrado Correctamente");</script>'  ;
                                                    }

                                            ?>   
                                                 <?php   if($errors->first("autenticarerror")!=null)
                                                    {
                                                        echo  '<script type="text/javascript">alert("Usuarios Existente");</script>'  ;
                                                    }

                                            ?> 
                                            <?php   if($errors->first("claveerrors")!=null)
                                                    {
                                                        echo  '<script type="text/javascript">alert("Contraseña Incorrecta");</script>'  ;
                                                    }

                                            ?> 
                                             <?php   if($errors->first("claveerrorsa")!=null)
                                                    {
                                                        echo  '<script type="text/javascript">alert("SU CUENTA NO HA SIDO ACTIVADA,REVISA SU CORREO");</script>'  ;
                                                    }

                                            ?> 
                                            <?php   if($errors->first("loginerror")!=null)
                                                    {
                                                        echo  '<script type="text/javascript">alert("Usuario Incorrecto");</script>'  ;
                                                    }

                                            ?> 
                                            <?php   if($errors->first("erroractual")!=null)
                                             {
                                                 echo  '<script type="text/javascript">alert("Inicia Sesión de nuevo");</script>'  ;
                                             }
                                             ?>

                                              <?php   if($errors->first("loginerrorcuenta")!=null)
                                             {
                                                 echo  '<script type="text/javascript">alert("Activa tu cuenta verifica tu EMAIL");</script>'  ;
                                             }
                                             ?>

                                               <?php   if($errors->first("error")!=null)
                                             {
                                                 echo  '<script type="text/javascript">alert("REGISTRADO  CORRECTAMENTE..TIENE QUE ACTIVAR SU CUENTA..VERIFIQUE SU CORREO");</script>'  ;
                                             }
                                             ?>
                                            

@stop