<body style='background-color:#D4D4D4'>
<?php
echo '<h1>RegEx</h1>';

$s = 'Your favourite tv show episode '.str_repeat('', rand(0,5)). rand(1,999) . ' episode name';

preg_match('/\d/', $s, $m); //RegEx random funkcija

//echo '<pre>';
print_r($s);
echo '<br>';
//https://regex101.com/
echo '---------------------------------------------------------------------------------------------------------------------';
echo '<h1>Ciklai</h1>';
echo '<h3>For:</h3>';
//ciklai:

//1) for:

echo '<pre>'; // duoda stulpeliu, o ne i viena eilute

for($i = 0; $i < 5; $i++) { // $i++ bus po viena skaiciu, $i+=2 bus lyginiai skaiciai
    echo "dabar: $i \n";   // \n duoda kiekviena karta is naujos eilutes
}

echo '<h3>Do while:</h3>';

$x = 0;

do {
    echo "dabar: $x \n";
    $x++;
} while($x < 5);

echo '<h3>while:</h3>';

$y = 0; 

while($y < 5) {
    echo "dabar: $y \n";
    $y++;
}

echo '<h3>ciklas cikle:</h3>';

$a = 0;

do {
    echo "dabar: $a \n";
    $a++;

    $b = 0; 

    while($b < 5) {
    echo "D->: $b \n";
    $b++;

}} while($a < 5);