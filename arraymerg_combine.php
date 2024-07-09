<?php

   $name = ["Abid" , "Lucy" , "Amir"];
   $data = ["Boy" , "Girl" , "Student"];

   $array = array_combine($name , $data);
   echo "<pre>";
   print_r($array);
   echo "</pre>";



?>

<!-- <?php

   // $name = ["Abid" , "Talha" , "Amir" , "Aftab"];
   // $color = ["Red" , "Green" , "Blue" , "Pink"];
   // $city = ["Karachi" , "Lahore" , "Islamabad"];

   // $arrayMerge = array_merge($name , $color , $city);

   // echo "<pre>";
   // print_r($arrayMerge);
   // echo "</pre>";


   $name = ['a' => "Abid" , 'b' => "Talha" , 'c' => "Amir" , 'd' => "Aftab"];
   $color = ['a' => "Red" , 'f' => "Green"];

   $arrayMerge = array_merge($name , $color);
   //$arrayMerge = $name + $color;

   echo "<pre>";
   print_r($arrayMerge);
   echo "</pre>";

?> -->