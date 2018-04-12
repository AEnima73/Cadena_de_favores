<?php
define('DB_HOST','localhost');
define('DB_USER','aenima53');
define('DB_PASS','');
define('DB_NAME','mydb');

// La extensión mysqli (mysql improved) permite acceder a la funcionalidad proporcionada por MySQL 4.1 y posterior.
// Utilicemos SIEMPRE mysqli ya que será la extension que mantendrá soporte hasta PHP 7 inclusive. 
// La extension mysql_connect y relacionadas queda obsoletas en PHP 5.5
$db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$db) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
	// echo "Conexion OK a: " . DB_NAME;

}


if (!function_exists('getCategoria')){
function getCategoria($id){
    switch ($id){
        case 1: return "<i class='fa fa-paw'></i> Animales"; break;
        case 2: return "<i class='fa fa-institution'></i> Arte, Cultura y Bibliotecas"; break;
        case 3: return "<i class='fa fa-group'></i> Asociaciones y Comunidades"; break;
        case 4: return "<i class='fa fa-bolt'></i> Catástrofes"; break;
        case 5: return "<i class='fa fa-flask'></i> Ciencia e Investigación"; break;
        case 6: return "<i class='fa fa-futbol-o'></i> Deporte y Recreación"; break;
        case 7: return "<i class='fa fa-wheelchair'></i> Discapacidad"; break;
        case 8: return "<i class='fa fa-graduation-cap'></i> Educación"; break;
        case 9: return "<i class='fa fa-female'></i> Género"; break;
        case 10: return "<i class='fa fa-blind'></i> Jubilación y Mayores"; break;
        case 11: return "<i class='fa fa-child'></i> Niñez y Juventud"; break;
        case 12: return "<i class='fa fa-stethoscope'></i> Salud y Medicina"; break;
        case 13: return "<i class='fa fa-wrench'></i> Voluntariado"; 
    }
}}


if (!function_exists('getTipo_ayuda')){
function getTipo_ayuda($id){
    switch ($id){
        case 1: return "<i class='fa fa-cutlery'></i> Alimentos y bebidas"; break;
        case 2: return "<i class='fa fa-futbol-o'></i> Artículos deportivos"; break;
        case 3: return "<i class='fa fa-bath'></i> Artículos de limpieza e higiene"; break;
        case 4: return "<i class='fa fa-bed'></i> Blanquería y colchones"; break;
        case 5: return "<i class='fa fa-shopping-bag'></i> Indumentaria y calzado"; break;
        case 6: return "<i class='fa fa-plus-square'></i> Insumos médicos y prótesis"; break;
        case 7: return "<i class='fa fa-wrench'></i> Mano de obra"; break;
        case 8: return "<i class='fa fa-graduation-cap'></i> Material educativo"; break;
        case 9: return "<i class='fa fa-graduation-building-o'></i> Material de construcción"; break;
        case 10: return "<i class='fa fa-plug'></i> Muebles y electrodomésticos"; break;
        case 11: return "<i class='fa fa-truck'></i> Transporte"; break;
        case 12: return "<i class='fa fa-heart-o'></i> Varios"; break;
        case 13: return "<i class='fa fa-hand-stop-o'></i> Voluntariado";
        
    }
}}
?>