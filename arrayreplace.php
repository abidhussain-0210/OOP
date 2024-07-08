<?php

   $array1 = array("a" => array("red") , "b" => array("green" , "pink"));
   $array2 = array("a" => array("yellow") , "b" => array("blue"));

   $new = array_replace_recursive($array1 , $array2);
   echo "<pre>";
   print_r($new);
   echo "</pre>";


   // $fruit = ["Apple" , "Mango" , "Banana" , "Orange"];
   // $veg = ["Potato" , "Carrot"];

   // // $fruit = ["Apple" ,'a' => "Mango" , "Banana" , "Orange"];
   // // $color = ["red" , 'a' => "green" , "blue"];

   // $new = array_replace($fruit , $veg);
   // echo "<pre>";
   // print_r($new);
   // echo "</pre>";

?>