<?php
echo '<pre>';
echo '<h1>REKURSIJA</h1>';
echo '<br>';

function recursive($num){
    echo "Enter : $num \n";

    if ($num < 5){
        //kvieciam save, padidinsim skaiciu vienu.
        recursive($num + 1);
    }
    echo "Exit: $num \n";
}
$startNum = 1;
recursive($startNum);
echo '<br>';
//visiskai totaliai nesamoningas mayvas:

$mas = [
    5, 
    [4, 2, [
        5, 12
    ], 302 ,[
        31, 21
    ]]
    [4],
    [8, 84, [ 7, [754, [0], [261, [85, 63]]]], 78, 52]
    ];

    print_r($mas);

    function getSum(array|int $val){
        static $sum = 0;
        if (is_int($val)) {
           $sum += $val;
        } else {
            foreach($val as $v) {
                getSum($v);
            }
        }
        return $sum;
    }

    print_r(getSum($mas));

