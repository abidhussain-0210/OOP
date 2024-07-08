<?php

$color = [
   //  "red", "green", "blue"
   "Name" => "Abid",
   "Age" => 20,
   "City" => "Karachi",
];
echo "<ul>";
foreach ($color as $key => $value) {
    echo "<li>$key  =  $value</li>";
}
echo "</ul>";


?>

<!-- Associative Array -->

<!-- <//?php
      $age = [
         "Abid" => "29",
         "Amir" => 22.6,
         "Ali" => 21,
      ];
      $age["Abid"] = "30";
      
      echo "<pre>";
      var_dump($age);
      //print_r($age);
      echo "<pre>";

      // echo $age["Abid"];
      // echo $age["Amir"];
      // echo $age["Ali"];
   ?> -->

<!-- <//?php

   // $data[0] = "Abid";
   // $data[1] = "Abid";
   // $data[2] = "Abid";
   // $data[3] = "Abid";

   // echo $data[0];
   // echo $data[1];
   // echo $data[2];
   // echo $data[3];
   // echo "<pre>";
   // print_r($data);
   // echo "<pre>";

   $data = ["Abid" , "Amir" , "Ali" , "Anas"];
   for($i = 0; $i<4; $i++){
      echo $data[$i] . "<br>";

   }

?> -->