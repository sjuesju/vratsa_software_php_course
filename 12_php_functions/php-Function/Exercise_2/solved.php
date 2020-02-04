<?php 

function findNumber($arr){
    for ($i = 1; $i < count($arr)-1; $i++){
       if ($arr[0] > $arr[1] AND $arr[0] > $arr[count($arr)-1]){
            echo 0;

            break;
        }
        if ($arr[$i] > $arr[$i - 1] && $arr[$i] > $arr[$i + 1]){
            echo $i;

            break;
    	}
        if ($arr[count($arr)-1] > $arr[count($arr)-2] AND $arr[count($arr)-1] > $arr[0]){
            echo count($arr)-1;
            break;
        }else{
            echo "no such element";
            break;
        }
        
    }
}

$input = $_POST['array'];
$array = explode(",",$input);
$trimmedArray = array_map('trim',$array);

findNumber($trimmedArray);