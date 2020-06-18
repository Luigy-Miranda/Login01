<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ingresar - MIDOCTOR.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assest/css/Log.css">

  </head>
  
  <body background="assest/ima/homeofi.jpg">
    <!-- Estructura del Formulario -->
        <form class="container" action="validacion.php" method="post">
    <!-- Cuadro de contenido izquierdo-->
        <div class="modal-container">
    <!-- Divicion superior  -->
          <div class="banner-container">
            <p>Mi Doctor.com</p>
                <!-- Division de la imagen -->
            <div class="ima-container">
              <img src="assest/ima/log.png" alt="imagen">
            </div>
                <!-- Division de el texto inferior -->
            <div class="info-banner">
              <p>Tu salud nuestra Prioridad</p>
            </div>
          </div>
<!-- Cuadro de contenido derecho-->
<div class="form-container">
  <!-- Boton Regresar-->
  <div class="retu">
    <a href="index.php">Regresar</a>
  </div>
  <!-- Division de Texto-->
  <div class="welcome">
    <h1>Bienvenido</h1>
  </div>
  <!--Division de Ingreso de datos-->
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
  <!-- Boton de Olvidaste tu Contraseña-->
<div class="olvido">
  <a href="#">Olvidaste tu Contraseña?</a>
</div>
<!--Boton de Ingresar-->
<input type="submit" name="boton" value="Ingresar">
          <!-- Boton de Registrarse-->
<div class="repp">
  <a href="RegistroDOC.php">Registrarme</a>
</div>
               </div>
            </div>
        </div>
    </form>
  </body>
</html>
