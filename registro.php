<?php
if(isset($_POST['submit'])){

$mail = $_POST['mail'];
$nombre = htmlentities($_POST['nombre']);
$comentario = nl2br(htmlentities($_POST['comentario']));

echo $mail."<br><br>";
echo $nombre."<br><br>";
/*echo "<pre>";
  print_r($_POST);
echo "</pre>";*/
//$datos = array('' => , );
if (!empty($_POST['check_list'])) {
  foreach ($_POST['check_list'] as $check =>$checkvalor) {
    echo "CheckBox de $checkvalor seleccionado <br><br>";

    }
  }
  echo $comentario;
  //header("location: index.php?seccion=registroSuccess");
}



file_put_contents ( "datos_formulario/" . $mail . ".txt" /*, $datos_formulario*/, FILE_APPEND);

?>

<h1>Gracias <?= $nombre ?> su mensaje fue enviado correctamente</h1>

<button type="button" name="volver">
  <a href="index.php">Volver al inicio</a>
</button>
