<?php

   function compare($array1 , $array2){
      if($array1 === $array2){
         return 0;
      }
      else{
         return ($array1 > $array2) ? 1 : -1;
      }

   }
   function compareValue($array1 , $array2){
      if($array1 === $array2){
         return 0;
      }
      else{
         return ($array1 > $array2) ? 1 : -1;
      }

   }

   $array1 = ["a" => "red","b" => "green","c" => "blue","d" => "yellow"];
   $array2 = ["a" => "red","f" => "green" , "d" => "purple"];
   //$array3 = ["a" => "red" , "b" => "black" , "h" => "yellow"];
   
   //$newArray = array_intersect($array1 , $array2 , $array3); // Match Value
   //$newArray = array_intersect_key($array1 , $array2); // Match keys
   //$newArray = array_intersect_assoc($array1 , $array2); //match values and Keys
   //$newArray = array_uintersect_assoc($array1 , $array2 , "compare"); //match values and Keys with userdefined function
   //Or
   //$newArray = array_intersect_uassoc($array1 , $array2 , "compare"); //match values and Keys with userdefined function
   //$newArray = array_intersect_ukey($array1 , $array2 , "compare"); //match values and Keys with userdefined function
   //$newArray = array_uintersect($array1 , $array2 , "compare"); //match values and Keys with userdefined function
   $newArray = array_uintersect_uassoc($array1 , $array2 , "compare" , "compareValue"); //match values and Keys with userdefined function
   echo "<pre>";
   print_r($newArray);
   echo "</pre>";


?>