<?php 
// *****************************************************************************
// Nombre: index.php
// Descripción: 
// Autor: 
// Fecha de creación: 
// Fecha de modificacion: 99/99/9999 Autor: xxx  Modificación: xxxxxxxx
//******************************************************************************

include("includes/top.php");
?>

<body>

  <!--Main Navigation-->
<header>

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar top-nav-collapse">
        <img src="img/logotipo.png">
        <a class="navbar-brand logo" href="index.php"><strong>Cadena De Favores</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="info.php">¿Cómo funciona?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                
                
                </ul>
                      <ul class="nav navbar-nav navbar-left">    
                    <span class="usuario">
                        <li>
                    <?php 
                        if ($_SESSION['usuario_id']==''){ ?>
                       <a href="../registro_persona.php">Registrate | </a>   <a  href="../sesion.php"><i class="fa fa-user"></i> Iniciar Sesión</a>
                    <?php } else { ?>
                    <li class="saludo">Bienvenido, <?php echo $_SESSION['nombre_de_usuario'];?> ! </li><a href="../perfil.php"><i class="fa fa-user"></i>   Perfil  | </a>  <a href="includes/logout.php?cerrar=1"> Cerrar Sesión</a> 
                    <?php } ?>
           
                    </li>
                </ul>
            
        </div>
    </nav>

    <div class="view intro hm-purple-light" style="">
        <div class="full-bg-img flex-center">
            <div class="container text-center white-text wow fadeInUp">
       <div class="container">
        
        <section class="section">

    <!--Section heading-->
    <h2 class="section-heading h1 pt-4"><strong>Comunicá. Contactá. Acerquémonos.</strong></h2></br>

    <!--Section description-->
    <h4 class="section-description">"Cuando ayudás, podés cambiar el mundo." Juntos podemos mucho más. Sumate a la red solidaria.</h4>
    </br>
    </br>

    <!--Grid row-->
    <div class="d-flex justify-content-around">

        <!--Grid column-->
        <div class="col-lg-5 col-md-5 col-sm-12 mb-r">

            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-2">

                <img src="img/necesito.png" class="img-fluid" alt="gente">

                <a>
                    <div class="mask"></div>
                </a>
            </div>

            <!--Excerpt-->
            <div class="card-body">
                <a href="registro_grupo.php" class="pink-text"><h5><i class="fa fa-group" aria-hidden="true"><strong></i>Organizaciones</h5></a>
                <h3>RECIBÍ</h3>
                <p class="instruccion">¿Precisás algún tipo de donación, ayuda o voluntariado para tu agrupación?</p></strong></br>
                <a class="btn btn-indigo btn-lg" href="necesito.php" ><i class="fa fa-clone left"></i> NECESITO</a>
            </div>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-5 col-md-5 col-sm-12 mb-r">

            <!--Featured image-->
            <div class="view overlay hm-white-slight z-depth-2">

                <img src="img/dar.jpg" class="img-fluid" alt="ayuda humanitaria">

                <a>
                    <div class="mask"></div>
                </a>
            </div>

            <!--Excerpt-->
            <div class="card-body">
                <a href="registro_persona.php" class="blue-text"><h5><i class="fa fa-child" aria-hidden="true"><strong></i>Público</h5></a>
                <h3>DONÁ</h3>
                <p class="instruccion">¿Tenés algo que no necesitas y querés darlo, o simplemente querés ayudar a alguien más?.</p></strong></br>
                <a class="btn btn-indigo btn-lg" href="tengo.php" ><i class="fa fa-clone left"></i> TENGO</a>
            </div>

        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->

</section>
<!--/Projects section v.1-->

</div>
</div>
</div>
</div>
</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <p align="justify">Si alguna vez te encontraste con la posibilidad de ayudar a alguien más pero no tuviste suficiente información sobre quiénes podrían necesitarlo con más urgencia, o los lugares más cercanos a tu ubicación.</br>
                O, por el contrario, quisiste pedir ayuda y no supiste a quién, o dónde publicarlo... ¡Estás en el lugar correcto!</br> 
                Motivado por la solidaridad y el deseo de acercar a las personas, se creo este espacio, libre y gratuito para todos los que quieran sumarse.</br>
                Podés crear una cuenta con la información de tu organización, o crear un pérfil personal con datos de contacto para comunicarte con los demás usuarios.</br>
                Recordá que la ayuda no es necesariamente material, las labores voluntarias son hoy en día nuestro mayor recurso. En esta cadena todo acto de colaboración es valorable.</br> 
                Sean bienvenidos a la participación colectiva. </p>

            </div>
        </div>
    </div>

</main>
<!--Main Layout-->
</div>
<!--Footer-->

<?php 


include("includes/footer.php");
?>