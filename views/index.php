<?php
$pagina = 'principal';

if(isset($_GET['i'])){
  $pagina = addslashes($_GET['i']);
}

/*Carregar header.php*/
include 'views/header.php';

switch ($pagina) {
  case 'principal':
    include 'views/principal.php';
    break;
  
  case 'congresso2022':
    include 'views/congresso2022.php';
    break;

  case 'itq':
    include 'views/itq.php';
    break;

  default:
    include 'views/principal.php';
    break;
}

include 'views/footer.php';