<?php
include('top.php');

?>

<?php

  $titulo = $_REQUEST['titulo'];
  $publicacion = $_REQUEST['publicacion'];
  $tipo_panel = $_REQUEST['tipo_panel'];
  $tipo_ayuda = $_REQUEST['tipo_ayuda'];
  $fecha = $_REQUEST['fecha'];
  $usuario_id = $_REQUEST['usuario_id'];
  
  $into= "INSERT INTO publicaciones (titulo, publicacion, tipo_panel, tipo_ayuda, fecha, usuario_id) values ('$titulo', '$publicacion', '$tipo_panel', '$tipo_ayuda', NOW(), '$usuario_id');";

    $pub = mysqli_query($db, $into);
    
    
  
  
 header('Location: ../perfil.php');


?>