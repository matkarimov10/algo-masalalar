<?php
//Koordinata o'qlariga parallel ravishda to'g'ri to'rtburchakning uchta uchi berilgan,
// to’rtinchi uchi koordinatasini aniqlansin.
echo "x1 = ";
$x1 = readline();
echo "y1 = ";
$y1 = readline();
echo "x2 = ";
$x2 = readline();
echo "y2 = ";
$y2 = readline();
echo "x3 = ";
$x3 = readline();
echo "y3 = ";
$y3 = readline();

if ($x1==$x3){
    $x4 = $x2;
}
else{
    $x4=$x3;
}
if ($y1==$y2){
    $y4 = $y3;
}
else {
    $y4 = $y1;
}

echo "x4 = ".$x4.","."y4 = ".$y4;
