<?php
$titulo = "productos";
include("plantillas_admin/inicio.php");
include_once("plantillas_admin/nav.php");
include("../app/BaseDatos.php");
include("../app/config.php");


//session_start();
$bd = new BaseDatos();
$row = $bd->consulta2("SELECT * FROM `menu`");
$cate = $bd->consulta("SELECT * FROM `categoria`");



?>

<div class="container mt-5">
  <div class="row tm-content-row">
    <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-products">
        <div class="tm-product-table-container">
          <table class="table table-hover tm-table-small tm-product-table">
            <thead style="text-align: center;">
              <tr>
                <th scope="col">&nbsp;</th>
                <th scope="col">Nombre del producto</th>
                <th scope="col">precio unitario</th>
                <th scope="col">descripcion</th>
                <!--<th scope="col">EXPIRE DATE</th>-->
                <th scope="col">&nbsp;</th>
              </tr>
            </thead>
            <tbody>

              <?php
              foreach ($row as $d) {
              ?>


                <tr>
                  <th scope="row"><input type="checkbox" /></th>
                  <td class="tm-product-name"><?php echo $d['nombre'] ?></td>
                  <td><?php echo $d['precio'] ?> bs</td>
                  <td><?php echo $d['descripcion'] ?></td>
                  <!--<td>28 March 2019</td>-->
                  <td>
                    <a href="app_ad/eliminar_producto.php?id=<?php echo $d['id']; ?>" class="tm-product-delete-link" onclick="return confirm('¿Estás seguro de que deseas eliminar este producto?');">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>

              <?php  } ?>



          </table>
        </div>
        <!-- table container -->
        <a href="add-product.php" class="btn btn-primary btn-block text-uppercase mb-3">agregar nuevo producto al menu</a>
        <button class="btn btn-primary btn-block text-uppercase">
          borrar producto
        </button>
      </div>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
      <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
        <h2 class="tm-block-title">Categoria de productos</h2>
        <div class="tm-product-table-container">
          <table class="table tm-table-small tm-product-table">
            <tbody>



              <?php
              foreach ($cate as $de) {
              ?>
                <tr>
                  
                  <td class="tm-product-name"><?php echo $de['descripcion']; ?></td>
                  <td class="text-center">
                    <a href="app_ad/borrar_categoria.php ?id=<?php echo $de['id']; ?>" class="tm-product-delete-link">
                      <i class="far fa-trash-alt tm-product-delete-icon"></i>
                    </a>
                  </td>
                </tr>

              <?php } ?>




            </tbody>
          </table>
        </div>
        <!-- table container -->
        <button id="btn-abrir-modal" class="btn btn-primary btn-block text-uppercase mb-3">
          agregar nueva categoria
        </button>



        <dialog id="modal">
          <form action="app_ad/añadir_categoria.php" method="POST" class="tm-edit-product-form">
            <div class="form-group mb-3" style="margin: 60px;">
              <label for="descripcion">Nombre de la categoría</label>
              <input id="descripcion" name="descripcion" type="text" class="form-control validate" required />
            </div>

            <div style="margin: 60px;" >
            <button type="submit" class="btn btn-primary btn-block text-uppercase" >Agregar</button>
            <button id="cerrar-modal" class="btn btn-primary btn-block text-uppercase mb-3">Cerrar</button>

            </div>
            
          </form>
          
        </dialog>


      </div>
    </div>
  </div>
</div>
<footer class="tm-footer row tm-mt-small">
  <div class="col-12 font-weight-light">
    <p class="text-center text-white mb-0 px-4 small">
      Copyright &copy; <b>2018</b> All rights reserved.

      Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
    </p>
  </div>
</footer>


<script>
  const btnabrirmodal = document.querySelector("#btn-abrir-modal");
  // const btncerrarmodal = document.querySelector("#cerrar-modal");


  btnabrirmodal.addEventListener("click", () => {
    modal.showModal();
  })

  //btncerrarmodal.addEventListener("click", () => {

  // modal.close()

  // })

  document.getElementById('cerrar-modal').addEventListener('click', function() {
    document.getElementById('modal').close();
  });
</script>

<?php
include("plantillas_admin/final.php");


?>