<?php 
// *****************************************************************************
// Nombre: necesito.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");
?>

<body>

  <!--Main Navigation-->
  <!-- -----Comienzo del Header con barra de navegación-->
<?php 
$buscar = $_REQUEST['usuario_id'];
if ($_REQUEST['id']!='') $buscar = $_REQUEST['id'];

$sql = "SELECT imagen, idCategoria FROM usuarios WHERE usuarios.usuario_id = '".$buscar."';";

$rs = mysqli_query($db, $sql);
$r = mysqli_fetch_array($rs);


include("includes/header.php");
?>


<!-- Fin del Header-->   

               
        <article class="info">
            <div class="container text-center black-text wow fadeInUp">
       <div class="container">
        
        <blockquote class="blockquote bq-success">
    <p class="bq-title">Recibí donaciones de manera fácil...</p>
    <p>Registrate y contános sobre tu organización. Informános sobre sus necesidades y comunicate directamente con la gente solidaria. No te olvides de chequear que tienen para ofrecer en la sección:</p><a class="btn btn-success" href="tengo.php" role="button">TENGO</a></div>
        </blockquote></br>
        </div>
            </div>
        </article>
  <!---Fin de la informacion principal-->

 <!---Comienzo de las filas de tarjetas de organizaciones-->

 <div class="container space">
  
       <!-- Inicio de la primera fila de tarjetas -->
  <div class="d-flex justify-content-center">
<div class="row no-gutters">

   <!---Primera columna de la primera fila-->
    <?php
     
     $sql = "SELECT * FROM `publicaciones` WHERE tipo_panel = 'necesito' order by id_publicacion DESC limit 0,6;";
      
      
      $rs2 = mysqli_query($db,$sql);
      if ($rs2){
          while ($row = mysqli_fetch_assoc($rs2)) {
              
              $sql2 = "SELECT imagen, idCategoria FROM usuarios WHERE usuarios.usuario_id = '".$row['usuario_id']."';";
              $rs3 = mysqli_query($db,$sql2);
              $u = mysqli_fetch_array($rs3);
              
             ?>
              <div class="col-sm-12 col-md-6 col-lg-4">
    <!--Card Narrower-->
                    <div class="card card-cascade narrower">
                    
                        <!--Card image-->
                        <div class="overlay hm-white-slight">
                            <?php
    
                                if(file_exists( str_replace('../', '',$u['imagen']) )) {
                                ?>
                            <img class="img-fluid" alt="" src="<?php echo $u['imagen'];?>">
                            <?php } else { ?>
                            <img class="img-fluid" alt="" src="img/sinfoto.png">
                            <?php } ?>
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                    
                        <!--Card content-->
                        <div class="card-body">
                            <h5 class="pink-text"><?php echo getTipo_ayuda ($row['tipo_ayuda']);?></h5>
                            <!--Title-->
                            <h4 class="card-title"><?php echo $row['titulo'];?></h4>
                            <!--Text-->
                            <p class="card-text"><?php echo $row['publicacion'];?></p>
                            <a  href="publicacion.php?id=<?php echo $row['usuario_id'];?>" class="btn btn-unique">Conocélos</a>
                        </div>
                        <!--/.Card content-->
                     </div>
                        </div>
             <?php
      } 
          
      }
     
     ?>
     

<!--ESTA ES LA SEGUNDA FILA DE ORGANIZACIONES-->
       <div class="d-flex justify-content-center"> 
     <div class="row no-gutters entre-fila"> 
         
<!-- Primer columna de la segunda fila-->
   <?php
     $sql = "SELECT imagen, idCategoria FROM usuarios WHERE usuarios.usuario_id = '".$buscar."';";
     $sql = "SELECT * FROM `publicaciones` WHERE tipo_panel = 'anecesito' order by id_publicacion DESC;";
      
      $rs2 = mysqli_query($db,$sql);
      if ($rs2){
          while ($row = mysqli_fetch_assoc($rs2)) {
             ?>
              <div class="col-sm-12 col-md-6 col-lg-4">
    <!--Card Narrower-->
                    <div class="card necesito card-cascade narrower">
                    
                        <!--Card image-->
                        <div class="overlay hm-white-slight">
                            <?php
    
                                if(file_exists( str_replace('../', '', $row['imagen']) )) {
                                ?>
                            <img class="img-fluid" alt="" src="<?php echo $row['imagen'];?>">
                            <?php } else { ?>
                            <img class="img-fluid" alt="" src="img/sinfoto.png">
                            <?php } ?>
                            <a>
                                <div class="mask"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                    
                        <!--Card content-->
                        <div class="card-body">
                            <h5 class="purple-text"><?php echo getTipo_ayuda ($row['tipo_ayuda']);?></h5>
                            <!--Title-->
                            <h4 class="card-title"><?php echo $row['titulo'];?></h4>
                            <!--Text-->
                            <p class="card-text"><?php echo $row['publicacion'];?></p>
                            <a  href="publicacion.php?id=<?php echo $row['usuario_id'];?>" class="btn btn-unique">Conocélos</a>
                        </div>
                        <!--/.Card content-->
                     </div>
                        </div>
             <?php
      } 
          
      }
     
     ?>
    <!--/Fin de la tercer columna de la segunda fila-->
		<!--Cierre de la ultima row-->
</div>
  </div>
 <!--/Cierre de la ultima row-->
   </div> 
<!--/Fin del contenedor de contenido-->
<!-- ASIDE CON BUSCADOR comienzo  -->
<aside>
	<div class="col barra">
<div class=" justify-content-end">

    <!-- Search form -->
        <form class="form-inline" method="get" action="search.php">
         <i class="fa fa-search"><input class="form-control mr-sm-4" type="text" name="search" placeholder="  Buscar nombre o zona" aria-label="Search"></i>
        </form>
   
            <!-- Collapsible content -->
        <div class="list-group">
          <a href="#" class="list-group-item active">
            Categorías
          </a>
          <a href="#" class="list-group-item">Animales</a>
          <a href="#" class="list-group-item">Arte,cultura y bibliotecas</a>
          <a href="#" class="list-group-item">Asociaciones y comunidades</a>
          <a href="#" class="list-group-item">Discapacidad</a>
          <a href="#" class="list-group-item">Catástrofes</a>
          <a href="#" class="list-group-item">Ciencia e investigación</a>
          <a href="#" class="list-group-item">Deporte y recreación</a>
          <a href="#" class="list-group-item">Educación</a>
          <a href="#" class="list-group-item">Género</a>
          <a href="#" class="list-group-item">Jubilación y mayores</a>
          <a href="#" class="list-group-item">Niñez y juventud</a>
          <a href="#" class="list-group-item">Salud y medicina</a>
          <a href="#" class="list-group-item">Voluntariado</a>
        </div>
        </br>
        </br>
        </br>
        <?php 
                if ($_SESSION['usuario_id']==''){ ?>
        <a class="btn purple-gradient btn-rounded btn-lg" href="../sesion.php">Publicar</a>
        <?php } else { ?>
        <a class="btn purple-gradient btn-rounded btn-lg" href="../perfil.php">Publicar</a>
        <?php } ?>
  </div>
    	</div>
 </aside>
<!--/Fin del aside de categorias-->
<!--Cierre de la segunda fila-->
</div>
	</div>
	<!--/Cierre de la segunda row-->
	<!--Fin del contenedor de contenido-->
</div></div></br></br>
<!--Pagination -->
<div class="container-flex space">
<nav class="my-4">
    <ul class="pagination pagination-circle pg-blue mb-0">

        <!--First-->
        <li class="page-item disabled"><a class="page-link">Primero</a></li>

        <!--Arrow left-->
        <li class="page-item disabled">
            <a class="page-link" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Anterior</span>
            </a>
        </li>

        <!--Numbers-->
        <li class="page-item active"><a class="page-link">1</a></li>
        <li class="page-item"><a href="necesitodos.php" class="page-link">2</a></li>
        <li class="page-item"><a class="page-link">3</a></li>
        <li class="page-item"><a class="page-link">4</a></li>
        <li class="page-item"><a class="page-link">5</a></li>

        <!--Arrow right-->
        <li class="page-item">
            <a class="page-link" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Siguiente</span>
            </a>
        </li>

        <!--First-->
        <li class="page-item"><a class="page-link">Último</a></li>

    </ul>
</nav>
</div></div>
<!--/Pagination -->

<!--Footer-->

<?php 


include("includes/footer.php");
?>