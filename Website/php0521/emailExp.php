<?php
class EmailFormatException extends Exception {
  function printMessage(){
    echo "例外訊息:" . $this->getMessage(). "\n";
    echo "例外訊息偏码:" . $this->getCode(). "\n";
  }
}
function checkEmail($email){
  if (!strpos($email,"@")) throw new EmailFormatException("E-mail需要包含'@'字元",100);
}
try {
  checkEmail('abc$hello.com');
} catch (EmailFormatException $e){
  $e->printMessage();
}
?>