<?php 
// *****************************************************************************
// Nombre: perfil.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");


$buscar = $_SESSION['usuario_id'];
if ($_REQUEST['id']!='') $buscar = $_REQUEST['id'];
  
$sql = "SELECT * FROM usuarios WHERE usuarios.usuario_id = '".$buscar."';";

$rs = mysqli_query($db, $sql);
$r = mysqli_fetch_array($rs);

//$pub = "SELECT publicaciones.titulo, publicaciones.publicacion, publicaciones.tipo_panel, publicaciones.tipo_ayuda, publicaciones.fecha, usuarios.usuario_id FROM usuarios INNER JOIN publicaciones ON publicaciones.usuario_id= usuarios.usuario_id WHERE publicaciones.usuario_id = '".$buscar."';";
  $pub = "SELECT * FROM publicaciones";

$rs = mysqli_query($db, $pub);
$p = mysqli_fetch_array($rs);

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
              <a href="#">Modificar datos</a>
              <br>
    </div>

    <div class="col-md-8">
      
       <?php 
                if ($r['tipo_usuario']==2) { ?>
      <h3 class="success-text">¿QUIENES SOMOS?</h3>
      <hr>
      <br>
      <p><?php echo $r['descripcion']; }?>
       </p>
      
       
      
     
      <br><br>
         <hr>
      <h4 class="default-text"><small>HAZ UNA PUBLICACIÓN</small></h4>
      <hr>
     <form method="post" action="includes/publicacion.php">
       <input type="hidden" name="usuario_id" value="<?php echo $_SESSION['usuario_id'];?>"/>
       
       <label for="titulo"><h5 class="grey-text">Titulo breve: </h5></label>
              <input type="text" id="titulo" name="titulo" required/></br></br>
              
     <label for="textarea"><h5 class="grey-text">Descripción: </h5></label>
      <textarea id="textarea" class="md-textarea" name="publicacion" required></textarea>
    </br>
        </br>
       <h5 class="grey-text">Publicar en el panel de:</h5></br>
              <div class="radio">
        <label><input type="radio" name="tipo_panel" value="Necesito">NECESITO</label>
      </div>
      <div class="radio">
        <label><input type="radio" name="tipo_panel" value="Tengo">TENGO</label>
      </div></br>
       <div class="form-group">
                  <label for="sel1" class="grey-text"><h5>Eliga el tipo de ayuda:</h5></label></br>
                 <select class="form-control" id="sel1" name="tipo_ayuda">
                    <option value="1">Alimentos y bebidas</option>
                    <option value="2">Artículos deportivos</option>
                    <option value="3">Artículos de limpieza e higiene</option>
                    <option value="4">Blanquería y colchones</option>
                    <option value="5">Indumentaria y calzado</option>
                    <option value="6">Insumos médicos y prótesis</option>
                    <option value="7">Mano de obra</option>
                    <option value="8">Material educativo</option>
                    <option value="9">Material de construcción</option>
                    <option value="10">Muebles y electrodomésticos</option>
                    <option value="11">Transporte</option>
                    <option value="12">Varios</option>
                    <option value="13">Voluntariado</option>
                 </select>
                  </div>
          <button type="submit" class="btn btn-default">Publicar</button>
     
    </form> </br></br></br>
        <hr>
      <h4 class="success-text"><small>PUBLICACIONES</small></h4>
     <?php
     
     $sql = "SELECT * FROM `publicaciones` WHERE usuario_id = '$buscar' order by id_publicacion DESC;";
      
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
              <h6>Publicado el  <?php echo $row['fecha'];?>.</h6>
              <br>
              <a href="includes/borrar.php">Borrar publicación</a>
              <br><br>
             <?php
      } 
          
      }
     
     ?>
     
    <!--   
      <h4 class="success-text"><small>PUBLICACIONES ANTERIORES</small></h4>
      <hr>
      <h6 class="pink-text"><?php echo getTipo_ayuda ($p['tipo_ayuda']);?></h6>
      <h3>Necesitamos alimentos no perecederos</h3>
      <p class="grey-text">(Publicado en <?php echo $p['tipo_panel'];?>)</p>
      <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <h6><span class="glyphicon glyphicon-time"></span> Post May 24, 2017.</h6>
      <br>
      <hr>
        </br></br>
             <hr>
      <h4 class="success-text"><small>COMENTARIOS</small></h4>
      <hr>
         <div class="media mb-1">
        <a class="media-left waves-light">
            <img class="rounded-circle" src="img/sinfoto.png" alt="Generic placeholder image" style="width: 35%;">
        </a>
        <div class="media-body">
            <h4 class="media-heading">John Doe</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi cupiditate temporibus iure soluta. Quasi mollitia maxime nemo quam accusamus possimus, voluptatum expedita assumenda. Earum sit id ullam eum vel delectus!</p>
        </div>
    </div>
    <hr><br>
      <h4>Deja un comentario:</h4>
      <form role="form" method="post" action="includes/publicacion.php">
        <input type="hidden" name="usuario_id"/>
        <div class="form-group">
          <textarea class="form-control" rows="3" name="comentario" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Enviar</button>
      </form>
      <br><br>
      
      <p><span class="badge">0</span> Comentarios:</p><br> --> 
    </div>
  </div>
</div>




          
<!--Footer-->

<?php 


include("includes/footer.php");
?>