<?php 
// *****************************************************************************
// Nombre: info.php
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


include("includes/header.php");
?>  
<!-- Fin del Header-->

<div class="container lista-info">
<h1 class="green-text">Aquí encontrará todo lo que necesita saber acerca de la página</h1></br>
<h4 class="text-center lime-text">Preguntas frecuentes e información relevante.</h4></br>
       <!--Accordion wrapper-->
<div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingOne">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <h5 class="mb-0">
                    ¿Cómo empiezo? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="card-body">
                Tanto para donar, colaborar siendo voluntario o recibir una donación, se debe registrar como usuario. Completando un sencillo formulario dividido según se trate de una organización (comedor, asociación civil, deportiva, comunidad) o de un usuario particular. Esto es importante para poder ser contactado por los demás usuarios en caso de interés de donación o recepción del mismo. Los datos son de caracter privado y no está obligado a dar más información que la solicitada en el formulario. En el caso de los usuarios particulares en "¿Dónde vive?" solo debe colocar la localidad, esto es útil para tener un relevamiento de la zona donde se encuentra para la entrega.  
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingTwo">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <h5 class="mb-0">
                    ¿Quiénes pueden donar? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="card-body">
               Cualquier usuario registrado puede donar haciendo contacto directo con la organización de su interés. La información de cada una está publicada en sus correspondientes perfiles. O bien, puede realizar una publicación en nuestro panel de "Tengo" donde da conocimiento de lo que desea donar y otros usuarios al verlo pueden comunicarse con usted para convenir sobre el mismo. No existe un límite de publicaciones, pero es necesario mantener actualizados sus datos de contacto para tener una comunicación efectiva. El registro y publicación es gratuito para todos los usuarios. 
            </div>
        </div>
    </div>
    <!-- Accordion card -->
    
    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingThree">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <h5 class="mb-0">
                    ¿Qué puedo donar? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="card-body">
                Se puede donar lo que la organización solicite, o al momento de la publicación en "Tengo" lo que desea donar seleccionando dentro de las categorias de tipo de donación allí detalladas. Algunos de los mismos pueden ser alimentos, indumentaria, calzado, material educativo o deportivo, colchones, blanquería, elementos ortopédicos, artículos de limpieza y cocina, muebles o electrodomésticos (siempre y cuando no se pida remuneración por los mismos). Otro tipo de donación permitida es el voluntariado o mano de obra, explicado a continuación. 
            </div>
        </div>
    </div>
    <!-- Accordion card -->
<!--  //  </div>  -->
<!--/.Accordion wrapper-->

 <!--Accordion wrapper-->
<!--  //  <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true"> //-->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingFour">
            <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <h5 class="mb-0">
                    ¿Qué es el voluntariado o mano de obra? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="card-body">
                Si usted no cuenta con lo material para donar o quiere dar más que lo material, no se preocupe, está permitido y muy valorado el voluntariado. El mismo consiste en la ayuda manual, terapeútica, técnica o profesional hacia los que más lo necesitan. Dentro de este pueden ser trabajos de mano de obra como albañileria, carpinteria, pintura, jardineria, mantenimiento, etc. De indole profesional como el diseño, la docencia, fotografía, psicología, asistencia social, deportiva o cultural, enfermería o medicina, gastronomía, veterinaria, entre otras. Sientase libre de participar, siempre hay algo que se puede aportar y por la que estarán muy agradecidos. 
            </div>
        </div>
    </div>
    <!-- Accordion card -->

    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingFive">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <h5 class="mb-0">
                    ¿Que no se puede donar o no está permitido? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingFive">
            <div class="card-body">
               No está permitido bajo ningún contexto el intercambio o solicitud de dinero, joyas u otros objetos de valor monetario, tampoco la permuta (la metodología "trueque" queda a voluntad de las partes). Ningún usuario está obligado a mantener el contacto permanente con otro usuario y en cualquier momento puede desistir de la comunicación, aunque se apela y ruega el <strong>compromiso</strong> de lo acordado con los usuarios. No se permite la entrega de material defectuoso, roto, o en mal estado. La voluntad debe ser real y cumplir con normas de calidad. En el caso de suceder alguno de los mencionados o de una reiteración de quejas, el administrador puede evaluar la cancelación de la cuenta del usuario involucrado. 
            </div>
        </div>
    </div>
    <!-- Accordion card -->
    
    <!-- Accordion card -->
    <div class="card">

        <!-- Card header -->
        <div class="card-header" role="tab" id="headingSix">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                <h5 class="mb-0">
                    ¿Cómo publico y se contactan conmigo? <i class="fa fa-angle-down rotate-icon"></i>
                </h5>
            </a>
        </div>

        <!-- Card body -->
        <div id="collapseSix" class="collapse" role="tabpanel" aria-labelledby="headingSix">
            <div class="card-body">
                Debe elegir entre "Tengo" o "Necesito", según si quiere realizar la donación o recibirla. Allí se encuentran todas las publicaciones ordenadas por fecha, siendo las más recientes las primeras. Seleccione el botón publicar y eliga entre una de las categorías de tipo de donación, se le pedirá una breve descripción del mismo y un título para entender mejor de qué se trata. Al publicar, el mismo quedará visible en el panel donde otros usuarios podrán verlo y comunicarse con usted a través de los datos de contacto que relleno en su registro. No olvide actualizar sus datos y revisar su casilla de correo electrónico para acordar las entregas. 
            </div>
        </div>
    </div>
    <!-- Accordion card -->
</div></br>
<!--/.Accordion wrapper-->

        <blockquote class="blockquote">
          <p class="mb-0 teal-text"><u>Nota</u>:Puede suceder en algunos casos que una organización receptora de donaciones tenga, por exceso de material o misma voluntad, la posibilidad de ser la que done. O, en contraposición, uno de los donantes sea esta vez el que necesita pedir ayuda. Esto está permitido y se debe proceder de la misma manera aclarada arriba, con su nombre de usuario u organización, en el panel correspondiente.</p>
        </blockquote></br>

        <p class="text-right">Si te quedó alguna duda o sugerencia, <a href="contacto.php">escribínos...</a></p>
        </br>
     </br>
     </br>
     </div>
     
<!--Footer-->

<?php 


include("includes/footer.php");
?>