<?php
$titulo = 'reservas';
include_once("plantillas/inicio.php");
include("app/BaseDatos.php");

session_start();

$bd = new BaseDatos();

// Asegurarse de que el usuario está autenticado
if (isset($_SESSION['id'])) {// Obtener el ID del usuario desde la sesión
$id_usuario = $_SESSION['id'];

// Consultar las reservas del usuario
$sql = "SELECT * FROM reservas WHERE id_usuario = :id_usuario";
$params = [':id_usuario' => $id_usuario];
$rows = $bd->consulta($sql, $params);
  
}






?>

<div class="header_section">
   <div class="container">
      <?php include_once("plantillas/nav.php"); ?>
   </div>
   <!-- banner section start -->
   <div class="banner_section layout_padding">
      <div class="container">
         <div id="banner_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="banner_taital_main">
                           <h1 class="banner_taital">Reserva<br>Tu mesa</h1>
                           <p class="banner_text">JUNTO CON NOSOTROS</p>
                           <div class="btn_main">
                              <div class="about_bt active"><a href="about.php">Nosotros</a></div>
                              <div class="callnow_bt"><a href="#">Contactanos</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- banner section end -->
</div>

<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="contact_taital">Reserva Aquí!</h1>
         </div>
      </div>
   </div>
   <div class="container-fluid">
      <div class="contact_section_2">
         <div class="row">
            <div class="col-md-12">
               <div class="mail_section_1">
                  <form method="POST" action="app/Guardar_Reserva.php">

                     <input type="text" class="mail_text" placeholder="Reserva a nombre de" name="Anombre" required>
                     <input type="time" class="mail_text" placeholder="hora de reserva" name="hora" required>
                     <input type="date" class="mail_text" placeholder="fecha de reserva" name="fecha" required>
                     <input type="numeric" class="mail_text" placeholder="para cuantas personas" name="cantidad" require>
                     <input type="submit" class="mail_text" value="Enviar" name="registro" style="background-color:#f01c1c;">
                  </form>
                  <br><br>






                  <div class="container">
                     <div class="row">
                        <div class="col-sm-12">
                           <h1 class="contact_taital" style="margin-top: 10%;">mis reservas</h1>
                           <p style="text-align: center;">asegurate de hacer tu reserva 24 horas antes</p>
                           <p style="text-align: center;">se recomienda ser puntual para su reserva ya que al cabo de 30 minutos esta se desabilitara y no habra devoluciones</p>
                        </div>
                     </div>
                  </div>




                  <!--aqui quiero meter el for each para que muestre las reservas del usuario-->

                  <?php
                  
                  
                  
                  foreach ($rows as $d) {
                  ?>


                  <div class="container" style="border: #071f69;  background-color:black; padding: 15px; border-radius: 10px;">
                     <div class="row">


                        <div class="col-md-12">
                           <div class="card mb-6">
                              <div class="card-body">
                                 <h5 class="card-title">reserva a nombre de : <?php echo $d['Anombre']; ?></h5><!--aqui se agregara el titulo de cada card-->
                                 <p class="card-text">hora: <?php echo $d['hora']; ?></p> 
                                 <p class="card-text">fecha: <?php echo $d['fecha']; ?></p>
                                 <p class="card-text">cantidad de personas : <?php echo $d['cantidad']; 
                                 
                                 ?></p>

                                 
                                 
                                 <!--y esta sera su descripcion todo se encuentra guardado en la base de datos-->
                              </div>
                           </div>
                        </div>


                     </div>
                  </div>
                  <?php // Incrementamos el contador después de mostrar cada comentario
                  }
               
                  ?>




               </div>


            </div>




         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15085.254259451136!2d-65.2743727!3d-19.0499463!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93fbcf045a60a015%3A0x5f53986684acb281!2sCoffee%20Bike%20Roastery%20Central!5e0!3m2!1ses-419!2sbo!4v1718281245448!5m2!1ses-419!2sbo" width="250" height="500" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
   </div>
</div>
</div>


<?php
include("plantillas/footer.php");
include("plantillas/final.php");
?>