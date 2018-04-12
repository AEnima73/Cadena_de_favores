<?php
include('top.php');
$_SESSION['usuario_id'] = '';
session_destroy();
header('Location: ../index.php');

?>