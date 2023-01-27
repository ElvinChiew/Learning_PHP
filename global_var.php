<?php 
function myTest(){
  static $x = 1;
  echo $x;
  $x++;
}

myTest();
myTest();
myTest();
?>