<?php
include('top.php');

?>

<?php
$ok=false;

if ($_SESSION['usuario_id']!= '') {
    header('Location: ../perfil.php'); 
    } else {
  
  $nombre = $_REQUEST['nombre_de_usuario'];
  $email = filter_var($_REQUEST['email'], FILTER_SANITIZE_EMAIL);
  $contrasenia = md5($_REQUEST['contrasenia'] . "5b3");
  $telefono = $_REQUEST['telefono'];
  $localidad = $_REQUEST['localidad'];
  $direccion = $_REQUEST['direccion'];
  $website = filter_var($_REQUEST['website'], FILTER_SANITIZE_URL);
  $descripcion = $_REQUEST['descripcion'];
  $idCategoria = $_REQUEST['idCategoria'];
  $imagen = $_REQUEST['imagen'];
  $name = $_REQUEST['name'];
  $tipo_usuario = $_REQUEST['tipo_usuario'];
  
  
  $sql = "SELECT * FROM usuarios WHERE email = '$email';";
  
   $rs = mysqli_query($db,$sql);
    $r = mysqli_fetch_array($rs);
    
     if ($r) {
        echo "Ya existe una cuenta registrada con ese email";
    } else {
  
  $poner= "INSERT INTO usuarios (nombre_de_usuario, email, contrasenia, telefono, localidad, direccion, website, descripcion, idCategoria, imagen, tipo_usuario) values ('$nombre', '$email', '$contrasenia', '$telefono', '$localidad', '$direccion', '$website', '$descripcion', '$idCategoria', '$imagen', '$tipo_usuario');";

    $reg = mysqli_query($db, $poner);
        $sql = "SELECT * FROM usuarios WHERE email = '$email';";
        $rs = mysqli_query($db, $sql);
        $getid = mysqli_fetch_array($rs);
        $lastid = $db->insert_id;
        $_SESSION['usuario_id'] = $lastid;//$getid['usuario_id'];
        $_SESSION['nombre_de_usuario'] =$getid['nombre_de_usuario'];
        
        if ($_FILES) {
        	$carpeta = "../uploads/";
        	$ext = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        	$destino = $carpeta . $lastid . "." .  $ext;//$_FILES['imagen']['name'];	
        	
            //	echo $destino . "<BR>";
            //	echo $getid['usuario_id'] . "<BR>";
            	
        	//if (($_FILES["imagen"]["type"] == "image/gif") || ($_FILES["imagen"]["type"] == "image/png") || ($_FILES["imagen"]["type"] == "image/jpeg") || ($_FILES["imagen"]["type"] == "image/jpg")) {
        		if (move_uploaded_file($_FILES['imagen']['tmp_name'], $destino)){
        		    //guardar el nombre del archivo - update a usuarios
        		   // $poner= "INSERT INTO usuarios (name) values ('$name');";
        		    
        		   //$reg = mysqli_query($db, $poner);
        		    
        		        $sql = "UPDATE usuarios SET imagen='$destino' WHERE usuario_id = '".$getid['usuario_id']."';";
        		   // echo $sql;
        		        $rs = mysqli_query($db,$sql);
                        //$r = mysqli_fetch_array($rs);
                        //$_SESSION['usuario_id'] = $getid['usuario_id'];
        		}
        		
        	
        
        }
        //die();
        sleep(1);
        header('Location: ../perfil.php');
    $ok= true;
    
  }
 
}
?>

