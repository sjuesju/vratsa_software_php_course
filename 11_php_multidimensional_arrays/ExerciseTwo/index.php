<?php
//ExerciseTwo - table one
$nRow = 4;
$mCol = 5;
$sum = 1;
$array = [];
echo '<table border=1>';
echo '<tr>';
echo '</tr>';
for ($i = 0; $i < $nRow; $i++) {
    echo "<tr>";
    $array[$i] = [];
    for ($j = 0; $j < $mCol; $j++) {
        echo '<td>';
        echo  $array[$i][$j] = $sum += 2;
        echo '</td>';    
    }
    echo "</tr>";
    $sum = $sum * 2;
}
echo '</table>';

echo "<br/>";

//ExerciseTwo - table two
$nRow = 5;
$mCol = 4;
$start = 1;
$array = [];

echo '<table border=1>';
echo '<tr>';
echo '</tr>';
for ($i = 0; $i < $nRow; $i++)
{
    echo "<tr>";
    $array[$i] = [];
    for ($j = 0; $j < $mCol; $j++) 
    {
        if($j == 0)
        {
            echo "<td>";
            echo $start;
            echo "</td>";
        }
        else
        {
        echo '<td>';
        echo  $array[$i][$j] = $start += 15;
        echo '</td>';
        }
        
        
    }
    $start = $start -= 42;
    echo "</tr>";  
}
echo '</table>';


echo "<br/>";

//ExerciseTwo - table three - Знам не е оптимизирана,мога и по - добре , но я направих в 11:45..haha 
$nRow = 4;
$mCol = 4;
$start = 1;
$array = [];
$lastIndex = 1;
$last = 1;
$lastOdd = 1;
echo '<table border=1>';
echo '<tr>';
echo '</tr>';
for ($i = 1; $i <= $nRow; $i++)
{
    echo "<tr>";
    $array[$i] = [];
    for ($j = 1; $j <= $mCol; $j++) 
    {
        if($i % 2 == 1)
        {
            if($j == 1)
            {
                echo "<td>";
                echo $lastOdd;
                echo "</td>";
             }
            else
            {
                echo '<td>';
                 echo $array[$i][$j] = $lastOdd += 1;
                 $last = $lastOdd + 4;
                 echo '</td>';
             }
        }
        else
        {
            if($j == 1)
            {
                echo "<td>";
                echo $last;
                echo "</td>";
             }
            else
            {
                echo '<td>';
                 echo $array[$i][$j] = $last -= 1;
                 $lastOdd = $last + 4;
                 echo '</td>';
             }
        }
        
        
    }
    
    echo "</tr>";  
}
echo '</table>';


echo "<br/>";

//Exercise 2 - table four
$nRow = 5;
$mCol = 5;
$start = 25;
$middle = 25;
$array = [];

echo '<table border=1>';
echo '<tr>';
echo '</tr>';
for ($i = 0; $i < $nRow; $i++)
{
    echo "<tr>";
    $array[$i] = [];
    for ($j = 0; $j < $mCol; $j++) 
    {
        if($j == 0)
        {
            echo "<td>";
            echo $start;
            echo "</td>";
        }
        else
        {
        echo '<td>';
        echo  $array[$i][$j] = $start -= 5;
        echo '</td>';
        }
        
        
    }
    $start = $middle -= 1;
    echo "</tr>";  
}
echo '</table>';


echo "<br/>";