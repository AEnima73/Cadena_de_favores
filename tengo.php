<?php 
// *****************************************************************************
// Nombre: tengo.php
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
        
        <blockquote class="blockquote bq-pink">
    <p class="bq-title pink-text">Realizá donaciones de manera fácil...</p>
    <p>Registrate, contános sobre vos y cómo podemos contactarte. Mostrános con qué podés colaborar y comunicate directamente con la gente que lo necesita. Podés ver más sobre las organizaciones en:</p><a class="btn btn-unique" href="necesito.php" role="button">NECESITO</a></div>
        </blockquote></br>
        </div>
            </div>
        </article>
  <!---Fin de la informacion principal-->

 <!---Comienzo de las filas de tarjetas de organizaciones-->

 <div class="container space">
 
       <div class="d-flex justify-content-start">
<div class="row no-gutters ">
    <!-- Inicio de la primera fila de tarjetas -->
    <!--Card Narrower-->
    
     <?php
     
     $sql = "SELECT * FROM `publicaciones` WHERE tipo_panel = 'tengo' order by id_publicacion DESC limit 0,6;";
      
      
      $rs2 = mysqli_query($db,$sql);
      if ($rs2){
          while ($row = mysqli_fetch_assoc($rs2)) {
              
              $sql2 = "SELECT imagen, idCategoria FROM usuarios WHERE usuarios.usuario_id = '".$row['usuario_id']."';";
              $rs3 = mysqli_query($db,$sql2);
              $u = mysqli_fetch_array($rs3);
              
             ?>

  <!-- Primer columna de tarjetas -->
    <div class="col-sm-12 col-md-4">
        <div class="card card-cascade narrower">

        <!--Card content-->
            <div class="card-body">
                <h5 class="pink-text"><?php echo getTipo_ayuda ($row['tipo_ayuda']);?></h5>
                <!--Title-->
                <h4 class="card-title"><?php echo $row['titulo'];?></h4>
                <!--Text-->
                <p class="card-text"><?php echo $row['publicacion'];?></p>
                <a href="publicacion.php?id=<?php echo $row['usuario_id'];?>" class="btn btn-success">Contactáte</a>
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
    <div class="row no-gutters ">
    <!-- Primera columna de la segunda fila-->
     <?php
     $sql = "SELECT imagen, idCategoria FROM usuarios WHERE usuarios.usuario_id = '".$buscar."';";
     $sql = "SELECT * FROM `publicaciones` WHERE tipo_panel = 'anecesito' order by id_publicacion DESC;";
      
      $rs2 = mysqli_query($db,$sql);
      if ($rs2){
          while ($row = mysqli_fetch_assoc($rs2)) {
             ?>
        <div class="col-sm-12 col-md-4">
            <div class=" card-cascade narrower card-tengo" style="min-height:400px;">

                <!--Card content-->
                <div class="card-body">
                    <h5 class="pink-text"><i class="fa fa-cutlery"></i> Alimentos y Bebidas</h5>
                    <!--Title-->
                    <h4 class="card-title">Excesos de comida</h4>
                    <!--Text-->
                    <p class="card-text">Tengo un restaurant y lo cierto es que por día sobra producción que al no saber a quién donar termino tirando, la comida está en condiciones de calidad y me gustaría que algún comedor pueda aprovecharlo.</p>
                    <a class="btn btn-success">Contactáte</a>
                </div>
                <!--/.Card content-->
            </div>
        </div>
        
               <?php
      } 
          
      }
     
     ?>
    
        
<!-- /Fin de la Tercera columna de la segunda fila-->
    </div>
        </div> 
<!-- / FIN DE LA SEGUNDA FILA   -->
        </div>
    <!-- ASIDE CON BUSCADOR comienzo  -->
    <aside>
            <div class="col barra">
        <div class=" justify-content-end">
            <!-- Search form -->
                <form class="form-inline" method="get" action="search.php">
                    <i class="fa fa-search" aria-hidden="true"><input class="form-control mr-sm-4" type="text" name="search" placeholder="  Buscar nombre o zona" aria-label="Search"></i>
                </form>
 <!--   </div> -->
    <!-- Collapsible content -->
                <div class="list-group">
                  <a href="#" class="list-group-item active">
                    Categorías
                  </a>
                  <a href="#" class="list-group-item">Alimentos y bebidas</a>
                  <a href="#" class="list-group-item">Artículos deportivos</a>
                  <a href="#" class="list-group-item">Blanquería y colchones</a>
                  <a href="#" class="list-group-item">Indumentaria y calzado</a>
                  <a href="#" class="list-group-item">Insumos médicos y prótesis</a>
                  <a href="#" class="list-group-item">Mano de obra</a>
                  <a href="#" class="list-group-item">Material educativo</a>
                  <a href="#" class="list-group-item">Material de construcción</a>
                  <a href="#" class="list-group-item">Muebles y pequeños electro</a>
                  <a href="#" class="list-group-item">Transporte</a>
                  <a href="#" class="list-group-item">Varios</a>
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
    <!--  /FIN DEL ASIDE con buscador  -->
    <!--Cierre de la segunda fila-->
    </div>
</div>
<!--/Cierre de la segunda row-->
<!--Fin del contenedor de contenido-->
</div>
</div> </div>
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
        <li class="page-item"><a href="tengodos.php" class="page-link">2</a></li>
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
</div>
<!--/Pagination -->

<!--Footer-->

<?php 


include("includes/footer.php");
?>