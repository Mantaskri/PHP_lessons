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