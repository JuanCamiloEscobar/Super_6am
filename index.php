<?php

$nom_producto1='';
$nom_producto2='';
$nom_producto3='';
$nom_producto4='';
$nom_producto5='';
$nom_producto6='';
$nom_producto7='';
$nom_producto8='';
$nom_producto9='';
$nom_producto10='';

$precio1='22000';
$precio2='5000';
$precio3='6000';
$precio4='2500';
$precio5='11000';
$precio6='7500';
$precio7='8000';
$precio8='5000';
$precio9='8000';
$precio10='7000';

$total=$precio1+$precio2+$precio3+$precio4+$precio5+$precio6+$precio7+$precio8+$precio9+$precio10;

echo('el total es:' .$total);
if ($total<=80000) {
    echo('muchas gracias por su compra');
} else {
    echo('valla por mas plata');
}


?>