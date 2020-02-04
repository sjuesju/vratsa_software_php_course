<?php
$array = [
    ['arr',1],
    [1, 8, 'demo array'],
    ['true']
];

function printArray($arr)
{
    for ($i = 0; $i < count($arr); $i++) {
        foreach($arr[$i] as $key => $value){
            echo "a[$i][$key] = $value";
            echo "<br>";

            //принтирам ги на  нов ред , защото изглеждат по-добре
        }
    }   
}

printArray($array);
