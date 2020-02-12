<?php

$arreglo = [
    'KeyStr1' => 'lado',
    0 => 'ledo',
    'KeyStr2' => 'lido',
    1 => 'lodo',
    2 => 'ludo'
];

foreach($arreglo as $newArray=>$a){
    echo $arreglo[$newArray].' ';
}   

$aa=array_reverse($arreglo);

foreach($aa as $aea ){
    echo $aea.' ';
}

?>
