<?php
function buyCoffee(...$cost){
    $total = 0;
    foreach ($cost as $i){
        $total += $i;
    }
    $cup=$total/50;
    return $cup;
}

$peter=buyCoffee(300,210,50,40);
printf("peter 买了 %d 杯咖啡 !", $peter);
$marry=buyCoffee(200);
printf("marry 买了 %d 杯咖啡 !", $marry);
?>