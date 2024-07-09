<?php

   //$data = ["a" => "Abid","b" => "Amir","c" => "Cat"];
   $data = ["a" => "Abid","b" => "Amir","c" => "Cat","c" => "Cat"];

   //$arrayNew = array_values($data);
   $arrayNew = array_unique($data);

   echo "<pre>";
   print_r($arrayNew);
   echo "</pre>";

?>