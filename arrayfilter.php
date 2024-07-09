<?php

   function even($var){
      if($var % 2 == 0){
         return true;
      }
      else{
         return false;
      }
   }
   function odd($var){
      if($var % 2 != 0){
         return true;
      }
      else{
         return false;
      }
   }


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$evenNumbers = array_filter($numbers , "odd");

echo "<pre>";
print_r($evenNumbers);
echo "</pre>";

// $numbers = ["1" , "Abid" , "" , false , "0"];

// $arrayNew = array_filter($numbers);
// echo "<pre>";
// print_r($arrayNew);
// echo "</pre>";


?>