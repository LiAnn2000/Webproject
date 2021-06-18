<?php
// 設定應用程式目錄為當前目錄
define('APP_PATH', __DIR__.'/');
// 開啟除錯模式
define('APP_DEBUG', true);
// 載入框架
define(APP_PATH.'kernel/kernel.php');
//產生實列化物件
(new Kernel())->run();