<?php

$i = 1;
while ($i <= 300){
  copy('./original.jpg', "./output/copy_$i.jpg");  
  $i++;
}



