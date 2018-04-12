<?php
include('includes/top.php');
?>
<body>
<?php 


include("includes/header.php");
?>  
        <div class="container lista-info">
        <h1 class="green-text">Resultados de búsqueda:</h1></br>




<ul>

<?php

if (isset($_GET['search'])) {
                $usersearch = $_GET['search'];
                        
                            $dbuser = "SELECT * FROM `usuarios` WHERE nombre_de_usuario LIKE '%$usersearch%' ;";
                           
                            $dbrs = mysqli_query($db,$dbuser);
                            $r = mysqli_fetch_array($dbrs);
                            $nombre = $r['nombre_de_usuario'];
                            $sql = "SELECT * FROM `usuarios` WHERE nombre_de_usuario = '$nombre' ;";
                            // echo $sql;
                            $rs2 = mysqli_query($db,$sql);
                            if ($rs2){
                                while ($row = mysqli_fetch_assoc($rs2)) {
                                    echo "<li>"."<a class='resultado' href='publicacion.php?usuario_id=". $row['usuario_id']."'> ". $row['nombre_de_usuario'] ." </a>"."</li>";
                            } 
                                
                            } else {
                                echo "no hay resultados.";
                            }
                        }
?>
     <?php
               if ($rs3['localidad']!='') { ?>
        <h4 class="text-center lime-text">Por zona de: <?php echo $row['localidad']; }?></h4></br></br>                
                    
  <?php  
  
    if (isset($_GET['search'])) {
                $usersearch = $_GET['search'];
                        
                            $dbuser2 = "SELECT * FROM `usuarios` WHERE localidad LIKE '%$usersearch%' ;";
                           
                            $dbrs2 = mysqli_query($db,$dbuser2);
                            $r2 = mysqli_fetch_array($dbrs2);
                            $nombre = $r2['nombre_de_usuario'];
                            $localidad = $r2['localidad'];
                            $imagen = $r2['imagen'];
                            $sql2 = "SELECT * FROM `usuarios` WHERE nombre_de_usuario = '$nombre' ;";
                            // echo $sql;
                            $rs3 = mysqli_query($db,$sql2);
                            if ($rs3){
                                while ($row = mysqli_fetch_assoc($rs3)) {
                                    echo "<li>". "<a class='resultado' href='publicacion.php?usuario_id=". $row['usuario_id']."'> ". $row['nombre_de_usuario']." </a>"."</li>";
                            }
                                
                            } else {
                                echo "no hay resultados.";
                            }
                        }
                    
?>

</ul>
</br> </br></br>
</div>



<?php 


include("includes/footer.php");
?>
















