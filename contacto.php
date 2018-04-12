<?php 
// *****************************************************************************
// Nombre: contacto.php
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
<h1 class="green-text">No dudes en contactarnos</h1></br>
<h4 class="text-center lime-text">Estamos ansiosos por despejar tus dudas y escuchar tus sugerencias.</h4></br></br>

<!-- Contextual button for informational alert messages -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#modalContactForm">
    Contactános
</button>
<!-- Contextual button for informational alert messages -->
 <!--Modal: Contact form-->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title"><i class="fa fa-pencil"></i> Contacto</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                <div class="modal-body mb-0">
                    <div class="md-form form-sm">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" id="form19" class="form-control">
                        <label for="form19">Tu nombre</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-lock prefix"></i>
                        <input type="password" id="form20" class="form-control">
                        <label for="form20">Tu email</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" id="form21" class="form-control">
                        <label for="form21">Asunto</label>
                    </div>
    
                    <div class="md-form form-sm">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form8" class="md-textarea mb-0"></textarea>
                        <label for="form8">Su mensaje</label>
                    </div>
    
                    <div class="text-center mt-1-half">
                        <button class="btn btn-info mb-2">Enviar <i class="fa fa-send ml-1"></i></button>
                    </div>
    
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div></div>
    </br> </br></br></br></br>
    <!--Modal: Contact form-->
    
                                                
          
<!--Footer-->

<?php 


include("includes/footer.php");
?>