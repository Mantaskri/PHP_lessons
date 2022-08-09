<?php

echo "<pre>";
function fun($v) {
    return "labas, $v ka tu? \n";
}

$kibiras = fun('Jonai'); //funkcija visada kazka grazina, jei mes nieko nematom, tada finkcija grazina null

echo ($kibiras);

$kibiras = fun('Teta Zose');

echo ($kibiras);

function moreFun($f, ...$kazkas) {
    print_r($kazkas);
};

