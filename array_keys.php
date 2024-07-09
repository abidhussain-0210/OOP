<?php

   //$data = ["Cat" , "Lion" , "Cow" , "Dog"];
   $data = ['a' => "Cat" , 'b' => "Lion" , 'c' => "Cow" , 'd' => "Dog"];

   //$arrayNew = array_keys($data);
   //$arrayNew = array_key_first($data);
   //$arrayNew = array_key_last($data);
   if($arrayNew = key_exists("a" , $data)){
      echo "<pre>";
      print_r($arrayNew);
      echo "</pre>";
   }
   else{
      echo "Does Not Exist";
   }

?>