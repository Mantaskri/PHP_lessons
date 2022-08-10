<?php

/*echo '<pre>';

echo "startas\n";

//magic konstanta (parodo absoliutu kelia):
echo __DIR__ . '/inc.php';
//include - gali det kiek nori kartu ir tai atvaizduos include_once leis atvaizduot tik viena karta
include_once 'inc.php'; 
include_once 'inc.php';
include 'inc.php';
include 'inc.php';
//require meta fatal error, jei kazkas negerai irasyta(siuometinis naudojamas budas)
require 'inc.php';
echo "\npabaiga\n";
*/
//print_r($data) - atspausdina failo turini
//$data = file_get_contents(_DIR_ . ****.***)(bet kokio formato) nuskaito failo turini ir ji atvaizduoja
header ('Content-Type:image/jpg');
$data = file_get_contents(__DIR__.'/minions.jpg');
echo $data;