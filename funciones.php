
    <!--generarNavbar---------------------------------------------------------->
<?php function generarNavbar(){
  require 'arrays.php';
  ?>
    <?php foreach ($navbar as $url => $nombre): ?>
    <li><a href="<?= $url ?>" class="btn-menu"><span><?php echo $nombre ?></span></a></li>
    <?php endforeach; ?>
<?php } ?>
    <!--generarNavbar---------------------------------------------------------->






    <!--generarContenido------------------------------------------------------->
    <?php
    function generarContenido($current_page = 'home')
    {

    if(!empty($_GET['seccion'])) {
        $current_page = $_GET['seccion'];
    }

    switch ($current_page) {
        case 'galeria':
            include_once 'secciones/galeria.php';
            break;
        case 'contacto':
            include_once 'secciones/contacto.php';
            break;
        case 'home':
          include_once 'secciones/home.php';
          break;
        case 'registroSuccess':
          include 'registro.php';
          break;

        default:
            include_once 'secciones/404.php';
    }
  }
     ?>
     <!--generarContenido------------------------------------------------------>





    <!--GenerarGaleria--------------------------------------------------------->
    <?php
    function generarGaleria() {

      require 'arrays.php';
      foreach ($categorias as $categoria => $value): ?>

      <div class="col-xs-16 col-md-3">
          <div class="thumbnail">
            <?php echo '<img src="img/categoria/'.$categoria.'.jpg" alt="" class="img-responsive">' ?>
              <div class="caption">
                <!--<h4><?= $value ?></h4>-->
              </div>
          </div>
      </div>

      <?php endforeach;
    }
     ?>
     <!--GenerarGaleria-------------------------------------------------------->
