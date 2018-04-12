<?php 
include("conexion.php");

?>

<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar top-nav-collapse">
        <img src="img/logotipo.png">
        <a class="navbar-brand logo" href="../index.php"><strong>Cadena De Favores</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../info.php">¿Cómo funciona?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../contacto.php">Contacto</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Publicaciones</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="../necesito.php">Necesito</a>
                    <a class="dropdown-item" href="../tengo.php">Tengo</a>
                </div>
            </li>
            </ul>

                  <ul class="nav navbar-nav navbar-right">    
                <span class="usuario"><li>
                <?php 
                if ($_SESSION['usuario_id']==''){ ?>
                <a href="../registro_persona.php">Registrate | </a>   <a  href="../sesion.php"><i class="fa fa-user"></i> Iniciar Sesión</a>
                <?php } else { ?>
                <li class="saludo"> Bienvenido, <?php echo $_SESSION['nombre_de_usuario'];?> !  </li><a href="../perfil.php"><i class="fa fa-user"></i>   Perfil  | </a>  <a href="includes/logout.php?cerrar=1"> Cerrar Sesión</a> 
                <?php } ?>
          
            </li>
           </ul>
        </div>
    </nav>
 </header>   