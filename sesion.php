<?php 
// *****************************************************************************
// Nombre: sesion.php
// Descripción: 
// Autor: AEnima53
// Fecha de creación: 09/2017
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");

if ($_SESSION['usuario_id'] != '') {
    header('Location: perfil.php');
}
if ($_REQUEST["error"]==1){
  $mostrar_error=true;  
} 
?>

<body>

  <!--Main Navigation-->
  <!-- -----Comienzo del Header con barra de navegación-->
<?php 


include("includes/header.php");
?>  
<!-- Fin del Header--> 

        <div class="z-depth-4">       
    <div class="view-sesion intro">
        <div class="full-bg-img flex-center">    
           
       <div class="container login">
   
<!--Section: Live preview-->

     <div style="height: 60px"></div>   
       <!-- <section>  -->


           <div class="sesion" style="width: 28rem;">   
               <div class="card-body">  

                    <!--Header-->
                    <div class="form-header default-color">
                        <h3><i class="fa fa-lock"></i> Iniciar Sesión:</h3>
                    </div>
<?php

if ($mostrar_error){
    echo "<p class='red-text'>Usuario o contraseña incorrecta.</p>"."</br>";
}

?>
                    <!--Body-->
                    <div class="md-form">
                        <form action="includes/login.php" method="post">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-email" class="form-control" name="email">
                        <label for="defaultForm-email">Tu email</label>
                    </div>

                    <div class="md-form">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control" name="contrasenia">
                        <label for="defaultForm-pass">Tu Contraseña</label>
                    </div>

                    <div class="text-center">
                        <button class="btn btn-default">Entrar</button>
                    </div>
                    </form>
                </div>

                <!--Footer-->
                <div class="modal-footer">
                    <div class="options">
                        <p class="grey-text">No eres miembro? <a href="registro_persona.php">Registrate</a></p>
                        <p class="grey-text">Olvidaste tu <a href="#">Contraseña?</a></p>
                    </div>
                </div>

            </div>
    
        <!-- </section> -->
        </div>

        <!--Section: Live preview-->
</div>
    </div>
</div>
</div>
<!--Footer-->

<?php 


include("includes/footer.php");
?>
