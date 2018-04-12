<?php 
// *****************************************************************************
// Nombre: personas-lista.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");

 if ($_SESSION['usuario_id'] != '') {
        header('Location: perfil.php');
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
        <div class="full-bg-img">
        <div class="row justify-content-center">    
           <div class="registro">
       <div class="container-fluid">
                <h2>Registro</h2></br>
                <p class="nota">¿Tenés una organización? <a href="registro_grupo.php"> Registrate acá</a></p>
 <!--Formulario de registro-->                           
<form method="post" action="includes/register.php" enctype="multipart/form-data">
<input type="hidden" name="enviado" value="si"/>
<input type="hidden" name="tipo_usuario" value="1"/>
        <!--First row-->
    <div class="row">

        <!--First column-->
        <div class="col-md-12">
            <div class="md-form">
                <i class="fa fa-user-circle prefix grey-text"></i>
                <input type="text" name="nombre_de_usuario" class="form-control" required>
                <label for="form41" class="">Nombre de Usuario</label>
            </div>
        </div>
        </div>
        <!--First column-->
    <!--Second row-->
    <div class="row">
        <!--First column-->
        <div class="col-md-12">
            <div class="md-form">
                <i class="fa fa-envelope prefix grey-text"></i>
                <input type="email" name="email" class="form-control validate" required>
                <label for="form81" data-error="no es una direccion valida" data-success="">Ingrese su email</label>
            </div>
        </div>
    </div>
        <!--Second column-->
         <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <i class="fa fa-lock prefix grey-text"></i>
                <input type="password" name="contrasenia" class="form-control validate" required>
                <label for="form82" data-error="incorrecto" data-success="">Ingrese su contraseña</label>
            </div>
        </div>
        </div>
    <!--/.Second row-->

    <!--Third row-->
    <div class="row">
        <!--First column-->
         <div class="col-md-12">
            <div class="md-form">
                 <i class="fa fa-home prefix grey-text"></i>
                <input type="text" name="localidad" class="form-control" required>
                <label for="form51" class="">¿Dónde vive? (Localidad)</label>
            </div>
        </div>
    </div>
        <!--/First column-->
        <!--Second column-->
    <div class="row">
        <div class="col-md-12">
            <div class="md-form">
                <i class="fa fa-phone prefix grey-text"></i>
                <input type="text" name="telefono" class="form-control">
                <label for="form61" class="">Teléfono de Contacto:</label>
            </div>
        </div>
       
    </div>
    <!--/Second row-->


        <!--.Third row-->
    <div class="row">              
        <!--First column-->
             <div class="col-md-12">
                
        <div class="file-field">
        <div class="btn btn-primary btn-sm">
            <span>Buscar archivo</span>
            <input type="file" name="imagen">
        </div>
        <div class="file-path-wrapper">
           <input class="file-path validate" type="text" placeholder="Adjunte una imagen (opcional)">
        </div>
    </div>
             </div>
        </div>    
    
        <!--/First column-->
 <div class="text-center"></br></br>
        <button class="btn btn-success">Registrarse</button>
    </div> </br> </br>
        <!--/Third row-->
</form>

       <!--Formulario de registro--> 
</div>
    </div>
        </div>
    </div>
</div>
            </div>
<!--Footer-->

<?php 


include("includes/footer.php");
?>