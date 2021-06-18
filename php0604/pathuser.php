<?php
// 網頁根目錄下的所有檔案都可以利用的 cookie 設定
setcookie('longer-user','Peter',time()+60*60*24,'/');

// 網頁目錄 /manager 底下的檔案才可以利用的 cookie 設定
setcookie('short-user','Peter',time()+60*60,'/manager/');
?>