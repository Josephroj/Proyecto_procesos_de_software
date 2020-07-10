<!DOCTYPE html>
<html lang="en">
<head>
  <title>cpanel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/stiloadmin.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <script src="/js/bootstrap.min.js"></script>
</head>
<body  style="background: #eb4800;">

  <div class="container">
  <h1 class="welcome text-center">Logearse a AEROSHOES <br>Web Admin</h1>
    <div class="card card-container">
       <center><img src="/img/logo.jpg" style="width:300px;"></center>
        <h2 class='login_title text-center'>INICIAR SESION</h2>
        <hr>
        <form class="form-signin" method="post" action="/usuario/autenticarusuario">
          <span id="reauth-email" class="reauth-email"></span>
          <p class="input_title">USUARIO</p>
          <input type="text"  name="txtlogin" class="login_box" placeholder="Tu login" required autofocus>
          <br>
          <p class="input_title">CONTRASEÑA</p>
          <input type="password"  name="txtpassword" class="login_box" placeholder="******" required>
          <button class="btn btn-lg btn-danger" type="submit">INICIAR SESIÓN</button>
          <br>
      <? 
      if($errors->first("loginerror")!=null)
        {
          ?>
            <div class="alert alert-danger" style="text-align: center;">
            <strong><?echo $errors->first("loginerror");?></strong> 
            </div>
          <?
        }
      ?>
    </div>
</body>
</html>

