<?php
include_once('app/config.php');

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <!--aqui meter el logo-->

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
         <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="about.php">Nosotros</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="coffees.php">Menu</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
         </li>

         <?php
         if (isset($_SESSION['usuario'])) {

         ?>

            <li class="nav-item">
               <a class="nav-link" href="reservas.php">Reservas</a>
            </li>
         <?php
         }

         ?>
      </ul>

      <form class="form-inline my-2 my-lg-0">
         <div class="login_bt">
            <ul>
               <?php if (isset($_SESSION['usuario'])) { ?>
                  <li class="nav-item dropdown">
                     <a class="nav-link" href="#">
                        <span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                        <?php echo ($_SESSION['usuario']);
                        
                        ?>
                     </a>
                     <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                     </ul>
                  </li>
               <?php } else { ?>
                  <li><a href="registro_usuario.php"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
               <?php } ?>
            </ul>
         </div>
      </form>
   </div>
</nav>
<?php

?>