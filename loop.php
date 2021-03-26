<?php

$sum=0;
$i=0;

while(true){
    $i++;
    $sum += $i;
    if ($sum >= 100) break;
}
printf("次数:%d",$i);
printf("统计:%d",$sum);
?>