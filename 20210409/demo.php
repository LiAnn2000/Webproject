<?php
include "paints.php";

$tshirt = new Clothes("白衬衫",1000);
printf("衣服名字 %s\n",$tshirt->getName());
printf("衣服价钱: %d",$tshirt->getPrize());
printf("衣服清洗方式: %s \n",$tshirt->doWash());

$cowpaint = new Paint("鬼洗",3000,100,30);
printf("裤子名称: %s\n",$cowpaint->getName());
printf("裤子价钱: %d 元\n",$cowpaint->getPrize());
printf("裤子长度: %d CM\n",$cowpaint->getLength());
printf("裤子腰围: %d 寸\n",$cowpaint->getWaist());
printf("裤子清洗方式: %s",$cowpaint->doWash());

?>