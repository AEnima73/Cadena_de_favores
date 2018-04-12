<?php 
include("conexion.php");

?>


<!--Footer-->

<footer class="page-footer purple lighten-1">

    <!--Footer Links-->
    <div class="container-fluid">

        <!--Grid row-->
        <div class="row pt-5 mb-3 text-center d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-2 mb-3">
                <h6 class="title font-bold"><a href="../index.php">Inicio</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
                <h6 class="title font-bold"><a href="../info.php">¿Cómo Funciona?</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
                <h6 class="title font-bold"><a href="#!">Blog</a></h6>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
                <?php 
                if ($_SESSION['usuario_id']==''){ ?>
                <h6 class="title font-bold"><a href="../registro_persona.php">Registrate</a></h6>
                <?php } else { ?>
                <h6 class="title font-bold"><a href="../registro_persona.php">Perfil</a></h6>
                <?php } ?>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-2 mb-3">
                <h6 class="title font-bold"><a href="../contacto.php">Contacto</a></h6>
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="rgba-white-light" style="margin: 0 15%;">

        <!--Grid row-->
        <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">

            <!--Grid column-->
            <div class="col-md-8 col-12 mt-5">
                <p style="line-height: 1.7rem">Este proyecto surgió de la idea de que somos seres inmensamente solidarios, tenemos voluntad, ganas, fé y creemos que el poder para crear un mejor mundo para todos, está en nosotros. Sólo nos falta comunicarnos mejor para alcanzarlo. De eso se trata esta página. No dudes en pedir o colaborar, lo más pequeño para uno, puede ser gigante para otros.</p>

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

        <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

        <!--Grid row-->
        <div class="row pb-3">

            <!--Grid column-->
            <div class="col-md-12">

                <div class="footer-socials mb-5 flex-center">
                    <!--Facebook-->
                    <a class="icons-sm fb-ic" href="https://www.facebook.com"><i class="fa fa-facebook fa-lg white-text mr-md-4"> </i></a>
                    <!--Twitter-->
                    <a class="icons-sm tw-ic" href="https://twitter.com/?lang=es"><i class="fa fa-twitter fa-lg white-text mr-md-4"> </i></a>
                    <!--Google +-->
                    <a class="icons-sm gplus-ic" href="https://plus.google.com/discover"><i class="fa fa-google-plus fa-lg white-text mr-md-4"> </i></a>
                    
                    <!--Instagram-->
                    <a class="icons-sm ins-ic" href="https://www.instagram.com/?hl=es"><i class="fa fa-instagram fa-lg white-text mr-md-4"> </i></a>
                   
                </div>
            </div>
            <!--Grid column-->
        </div>
        <!--Grid row-->

    </div>
    <!--/Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2016 Copyright: <a href="#"> AEnima53.com </a>
        </div>
    </div>
    <!--/Copyright-->

</footer>
<!--/Footer-->

     <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>