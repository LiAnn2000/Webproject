<?php
  $t = true;
  $f = false;
  echo "\$t 值 : $t 數字 : (int)$t "."\n";
  echo "\$f 值 : $f 數字 : (int)$f "."\n";

  $x[0] = "Hello"."\n";
  echo $x[0];

  $pi = 3.141592;
   echo "\$pi 轉成整數 : ".(int)$pi."\n";
   $input = "3.141592pi";
   echo "pi 轉成浮點數 : ".(float)$input."\n";

   $pi = 3.141592;
  settype($pi, "integer")."\n";
  echo "\$pi 轉成整數: ".$pi;
  $piString = "3.141592circle";
  echo "是否有轉成功".settype($piString, "float")."\n";
  echo "\$piString 是: ".$piString."\n";
?>
