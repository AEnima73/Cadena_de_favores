<?php
include('top.php');

?>

<?php
$id_publicacion = $_REQUEST['id_publicacion'];

$sql = "DELETE FROM publicaciones WHERE id_publicacion= ". $_SESSION['id_publicacion'];

$rs= mysqli_query($db, $sql);

header('Location: ../perfil.php');

?>