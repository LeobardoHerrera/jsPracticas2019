<?php 
function menuOp($letra){
    switch ($letra) {
      case 'A':
            $menu1="class='activo'";
            return $menu1;
        break;
      case 'B':
            $menu2="class='activo'";
            return $menu2;
        break;
      case 'C':
            $menu3="class='activo'";
            return $menu3;
        break;
    }       
}
 ?>