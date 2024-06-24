<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" type="text/css" href="css/styleLog.css">
   <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

   <link href="https://tresplazas.com/web/img/big_punto_de_venta.png" rel="shortcut icon">
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <title>Inicio de sesión</title>
</head>

<body>
   <img class="wave" src="images/service-1.jpg">
   <div class="container">
      <div class="img">

      </div>
      <div class="login-content">
         <form method="POST" action="app/GuardarUsuario.php">
            


            <img src="images/service-3.jpg">


            <h2>registrarse</h2>

            <div class="padre">

               <div class="input-div one">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                     <h5>nombres</h5>
                     <input id="nombre" type="text" class="input" name="nombre" required>
                  </div>
               </div>







               <div class="input-div one">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                     <h5>apellidos</h5>
                     <input id="apellido" type="text" class="input" name="apellido" required>
                  </div>
               </div>




               <div class="input-div one">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                     <h5>Usuario</h5>
                     <input id="usuario" type="text" class="input" name="usuario" required>
                  </div>
               </div>


               <div class="input-div one">
                  <div class="i">
                     <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                     <h5>contraceña</h5>
                     <input id="contra" type="password" class="input" name="contra" required>
                  </div>
               </div>

            </div>
            <div class="cuenta">
              
               <input name="registro" class="btn" type="submit" value="INICIAR SESION">
               <a href="login.php">ya tengo cuenta</a>
            </div>
      </div>

      </form>
   </div>
   </div>





   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script>
      AOS.init();
   </script>


</body>

</html>