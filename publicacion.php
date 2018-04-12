<?php 
// *****************************************************************************
// Nombre: perfil.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");

$buscar = $_REQUEST['id'];
//if ($_REQUEST['id']=='usuario_id') $buscar = $_REQUEST['id'];
  
$sql = "SELECT * FROM usuarios WHERE usuario_id = '".$buscar."';";

$rs = mysqli_query($db, $sql);
$r = mysqli_fetch_array($rs);

//$pub = "SELECT publicaciones.titulo, publicaciones.publicacion, publicaciones.tipo_panel, publicaciones.tipo_ayuda, publicaciones.fecha, usuarios.usuario_id FROM usuarios INNER JOIN publicaciones ON publicaciones.usuario_id= usuarios.usuario_id WHERE publicaciones.usuario_id = '".$buscar."';";
  //$pub = "SELECT * FROM publicaciones where id_publicacion = $buscar;";

//$rs = mysqli_query($db, $pub);
//$p = mysqli_fetch_array($rs);

?>

<body>

  <!--Main Navigation-->
  <!-- -----Comienzo del Header con barra de navegación-->
<?php 


include("includes/header.php");
?>  
<!-- Fin del Header-->


<div class="container lista-info">
  <div class="row content">
    <div class="col-md-4">
    <h5 class="text-center"><hr> <?php if ($r['tipo_usuario']==1) {
    echo 'Público';
    } else{ 
      echo 'Organización';
     }
    
     ?>
     <hr></h5>
    <?php
    
    if(file_exists( str_replace('../', '', $r['imagen']) )) {
    ?>
    <img class="img-perfil" src="<?php echo $r['imagen'];?>" >
    <?php } else { ?>
    <img class="img-perfil" src="img/sinfoto.png">
    <?php } ?>
    </br></br>
      <h3><?php echo $r['nombre_de_usuario'];?></h3>
      <h6 class="pink-text"> <?php
      
      echo getCategoria($r['idCategoria']);
      
      
      ?></h6> 
      <hr>

      <h5 class="success-text">Información de Contacto:</h5>
      <hr>
      <p class="success-text">Dirección:</p>
        <p><?php echo $r['direccion'];?></p>
        <p>Localidad: <?php echo $r['localidad'];?></p>
      <p class="success-text">Teléfono:</p>
        <p> <?php echo $r['telefono'];?></p>
      <p class="success-text">Email:</p>
        <p> <?php echo $r['email'];?></p>
      <p class="success-text">Sitio Web:</p>
        <p><?php echo $r['website'];?></p>
              <hr>
      <br>
    
    </div>

    <div class="col-md-8">
       <?php 
                if ($r['tipo_usuario']==2){ ?>
      
      <h3 class="success-text">¿QUIENES SOMOS?</h3>
      <hr>
      <br>
      <p><?php echo $r['descripcion']; }?>
      </p>
      
     
     
      <br><br>
         <hr>
      <h4 class="success-text"><small>PUBLICACIONES</small></h4>
      
    <?php
     
     $sql = "SELECT * FROM `publicaciones` WHERE usuario_id = '" . $_REQUEST['id'] . "' order by id_publicacion DESC;";
      
      $rs2 = mysqli_query($db,$sql);
      if ($rs2){
          while ($row = mysqli_fetch_assoc($rs2)) {
             ?>
              <hr>
              <h6 class="pink-text"><?php echo getTipo_ayuda ($row['tipo_ayuda']);?></h6>
              <h3><?php echo $row['titulo'];?></h3>
               
              <p class="grey-text">(Publicado en <?php echo $row['tipo_panel'];?>)</p>
              
              <p><?php echo $row['publicacion'];?>
              
              
              </p></br>
              <h6>Publicado el <?php echo $row['fecha'];?>.</h6>
              <br><br>
             <?php
          } 
          
      }
     
     ?>
    </div>
  </div>
</div>




          
<!--Footer-->

<?php 


include("includes/footer.php");
?>
