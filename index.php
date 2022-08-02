<?php 

$_1 = rand(0, 2);
$_2 = rand(0, 2);
$_3 = rand(0, 2);
$_4 = rand(0, 2);

$two = 0;

if($_1 == 2) {
     $two++;
}
if($_2 == 2) {
  $two++;
}
if($_3 == 2) {
    $two++;
}
if($_4 == 2) {
    $two++;
}

$suma = $_1 + $_2 + $_3 + $_4;

$one = $suma - (2 * $two);

$zero = 4 - $one - $two;

echo "$_1  $_2  $_3  $_4  : 0 yra $zero : 1 yra $one : 2 yra $two";

echo '<br>';

$drambliai = 3;
$raganosiai = 2;
$begemotai = 6;
if ($begemotai > $raganosiai && $begemotai > $drambliai) {echo 'Begemotų yra daugiausiai';
}

// 6 > 2 && 6 > 3
// true && true
//true

$a = 15 > 9 ? 'Jo' : 'Gal';
echo '<br>';
echo $a;

echo '<br>';

$i = null;
var_dump(isset($i));

echo '<br>';

$vienas = null; // jei yra kitokia reiksme negu null, tada naudos ta reiksme, jei null - naudos 8.

$rezultatas = $vienas ?? 8;

echo '<br>';

var_dump($rezultatas);

// patikrinimas vietos su if ir switch

echo '<br>';
echo '<br>';
$p = ['S', 'M', 'L', 'XL'][rand(0, 3)];

echo 'siunta :' . $p . ' atkeliavo i pastomata';

//if budas

/*
if ($p == 'S') {
    echo '<br>Tikrinam S'
}
if ($p == 'S' || $p == 'M') {
    echo '<br>Tikrinam M'
}
if ($p == 'S' || $p == 'M' || $p == 'L') {
    echo '<br>Tikrinam L'
}
if ($p == 'S' || $p == 'M' || $p == 'L' || $p == 'XL') {
    echo '<br>Tikrinam XL'
}
*/

//switch budas

switch($p) {
    case 'S' : echo '<br>Tikrinam S';
    case 'M' : echo '<br>Tikrinam M';
    case 'L' : echo '<br>Tikrinam L';
    case 'XL' : echo '<br>Tikrinam XL';
}