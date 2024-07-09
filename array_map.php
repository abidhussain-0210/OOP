<?php

   // function Square($n){
   //    return $n * $n;
   // }
   // function demo($a , $b){
   //    return "$a = $b";
   // }

   function demo1($n){
      return strtoupper($n);
   }
   // $array1 = [1 , 2 , 3 , 4 , 5];
   // $array2 = ["Lemon" , "Banana" , "Guava" , "Carrot" , "Apple"];
    $array2 = ["a" => "Lemon" , "b" => "Banana" , "c" => "Guava" , "d" => "Carrot" , "e" => "Apple"];


   $arrayNew = array_map("demo1" , $array2);
   //$arrayNew = array_map(null , $array1 , $array2);

   echo "<pre>";
   print_r($arrayNew);
   echo "</pre>";






?>