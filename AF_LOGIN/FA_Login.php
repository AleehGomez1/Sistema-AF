<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="FA_Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body>
<div class="barra-superior">
    <div class="tabla-imagenes">
        <img src="imagen2.png" alt="">
        <img src="C:\xampp\htdocs\SAG-FAO\Imagenes\imagen2.png" alt="imagen2">
        <img src="C:\xampp\htdocs\SAG-FAO\Imagenes" alt="">
    </div>
</div>
<div class="content">
 <div class="text">Iniciar Sesión</div>
  <form action="#">
    <div class="field">
      <span class="fa fa-user"></span>
      <input type="text" placeholder="Usuario" required>
   
    </div>
    <div class="field">
      <span class="fa fa-lock"></span>
      <input type="password" placeholder="Contraseña">
      
    </div>

    
    
    <button>Acceder</button>
    <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
      <span id="remember">Recuerdame</span>
      <span id="forgotten">Olvide Mi Contraseña</span>
    </div>
    </div>
  </form>

</div>
</body>
</html>