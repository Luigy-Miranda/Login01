<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar - MIDOCTOR.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/Log.css">

  </head>
  
  <body background="assest/ima/homeofi.jpg">
        <form class="container" action="validacionentrar.php" method="post">


        <div class="modal-container">
          <div class="banner-container">
            <p>Mi Doctor.com</p>
            <div class="ima-container">
              <img src="assest/ima/log.png" alt="imagen">
            </div>
            <div class="info-banner">
              <p>Tu salud nuestra Prioridad</p>
            </div>
          </div>
<div class="form-container">
  <div class="retu">
    <a href="index.php">Regresar</a>
  </div>
  <div class="welcome">
    <h1>Bienvenido</h1>
  </div>
<div class="credenciales">
  <div class="icono">
    <i class="fas fa-user"></i>
  </div>
  <div>
    <h5>Numero de Identificacion:</h5>
    <input type="text" name="cedula" placeholder="Ingrese su numero de Cedula">
  </div>
</div>
<div class="credenciales2">
  <div class="icono">
    <i class="fas fa-lock"></i>
  </div>
  <div>
    <h5>Contraseña:</h5>
    <input type="password" name="pass" placeholder="Ingrese su Contraseña">
  </div>
</div>
<div class="olvido">
  <a href="#">Olvidaste tu Contraseña?</a>
</div>

<input type="submit" name="boton" value="Ingresar">
<div class="repp">
  <a href="RegistroDOC.php">Registrarme</a>
</div>
               </div>
            </div>
        </div>
    </form>
  </body>
</html>
