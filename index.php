<?php
require_once("includes/initialize.php");
$content='home.php';
$view = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : '';
$account = 'guest/update.php';
$small_nav = 'theme/small-navbar.php';
switch ($view) {

  case '1' :
        $title="Inicio";  
        $content='home.php';    
    break;
  case 'gallery' :
    $title="Galeria"; 
    $content ='gallery.php';
    break;
  case 'about' :
      $title="Saber Más";  
    $content = 'aboutus.php';   
    break;

   case 'rooms' :
    $title="Habitaciones y Precios";  
    $content ='room_rates.php';    
    break;

  case 'contact' :
      $title="Contactanos";  
    $content ='contact.php';    
    break;

 case 'booking' :
      $title="Book A Room";  
    $content ='bookAroom.php';    
    break;
        
     case 'accomodation' :
      $title="Accomodation";  
      $content='accomodation.php';
    break;  

  case 'largeview' :
      // $title="View";  
    $content ='largeimg.php';
    break;
  default :
      $title="Home";  
    $content ='home.php';   
}

require_once ('theme/template.php');

?>
 