<?php

$i = 300;
while ($i <= 1000){
  copy('./original.jpg', "./output/copy_$i.jpg");  
  $i++;
}



