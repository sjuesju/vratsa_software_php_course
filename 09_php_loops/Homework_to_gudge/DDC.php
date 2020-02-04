<?php
$var = 0;
$sumDDS = 0;
if ($var>= 51  && $var <=150)
{
	$firstSum = 50*0.10;
    $var = $var - 50;
    $sum = ($var * 0.15) + $firstSum;
    $sumDDS = $sum * 1.2;
}
elseif($var  >= 151 && $var <= 250)
{
	$firstSum = 50*0.10;
    $var = $var - 50;
    $firstSum = $firstSum + 100*0.15;
    $var = $var - 100;
    $sum = ($var * 0.25) + $firstSum;
    $sumDDS = $sum * 1.2;
}
elseif($var >= 251)
{
	$firstSum = 50*0.10;
    $var = $var - 50;
    $firstSum = $firstSum + 100*0.15;
    $var = $var - 100;
    $firstSum = $firstSum + 100*0.15;
    $var = $var - 100;
    $sum = ($var * 0.35) + $firstSum;
    $sumDDS = $sum * 1.2;
}
else
{
	$var = $var*0.10;
	$sum = $var * 1.2;
	echo "$sum leva";
}
echo "$sumDDS leva";