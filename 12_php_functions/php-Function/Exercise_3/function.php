<?php

function matchNumbers($arr,$n){
    $array = $arr;
    $number = $n;
    $count = 0;
    foreach($array as $value){
        if($value == $number){
            $count++;
        }
    }
    if($count == 0){
        echo 'Not in array';
    }else{
        echo $count;
    }
};
$input = $_POST['array'];
$array = explode(",",$input);
$trimmedArray = array_map('trim',$array);
$number = $_POST['n'];



matchNumbers($trimmedArray,$number);