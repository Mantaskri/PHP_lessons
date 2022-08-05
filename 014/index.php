<?php

echo '<pre>';

$mas = [];
$mas['super'] = 'Super cat';
$mas[] = 'Cat';
$mas[7] = 'Dog';
$mas[0] = 'Elephant';
$mas[] = 'Cat';

echo count($mas); //suskaiciuoja kiek yra masyvu

echo '<br>';

print_r($mas); //vietoj $mas irasius range(0, 4) galima sugeneruot bet koki skaiciu masyvu

echo '<br>';

foreach(range(0, 4) as $val) {
    echo "Dabar: $val \n";
}
echo '<br>';
$colors = ['red', 'valio' => 'green', 'blue', 'yellow'];

foreach ($colors as $index => $value) {
    echo 'Reiksme: ' . $index . ' Reiksme: ' . $value . '<br>';
}

$_3x3 = [];
$count = 0;

foreach (range(1, 3) as $_) {

    $_3 = [];
    foreach (range(1, 3) as $_) {
        $_3[] = ++$count;
    }
    $_3x3[] = $_3;
}
print_r($_3x3);

/*foreach (range(0 ,2) as $a) {
    foreach (range(0, 2) as $b) {
        $_3x3[$a][$b] = ++$count;
    }
}
print_r($3x3);
*/