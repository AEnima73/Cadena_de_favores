<?php
include('top.php');

if (isset($_REQUEST['email'])){
    //aca, lo vas a bguscar a ese usuario a la base de datos
    
    $rs = mysqli_query($db, "select * from usuarios where email = '".$_REQUEST['email']."';");
    $user = mysqli_fetch_array($rs);
    //$_REQUEST['email']
    
    $mostrar_error = false;
    //si lo encontró
   // $rs['pass']='123';
//   echo $user['contrasenia'] . "<BR>";
//   echo $_REQUEST['contrasenia'] . "<BR>";
//   die();
    if ($user['contrasenia']==md5( $_REQUEST['contrasenia'] . "5b3")) {
        //logueado
        $_SESSION['usuario_id'] =$user['usuario_id'];
        $_SESSION['nombre_de_usuario'] =$user['nombre_de_usuario'];
        session_write_close();
        header("location: ../perfil.php");
    } else {
         header("location: ../sesion.php?error=1");
    }
}

?>