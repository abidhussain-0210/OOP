<?php

   $data = ["Apple" , "Mango" , "Banana"  , 20 , "Orange"];

   if (($key = array_search("Mango", $data))) {
      echo "Successfully Found: " . $data[$key];
  } else {
      echo "Not Found";
  }
   // if(array_search(20 , $data)){ //true/false called strict Mode
   //    echo "Successfuly Found";
   // }
   // else{
   //    echo "Not Found";

   // }

   // $data = [
   //    ["A" , "B"],
   //    ["C" , "D" , "E"],
   // ];
   //    if(in_array(["C" , "D" , "E"] , $data)){
   //       echo "Yes";
   //    }
   //    else{
   //       echo "No";
   //    }

   

   // $data = ["Apple" , "Mango" , "Banana"  , 20 , "Orange"];

   // //echo in_array('Mango' , $data);
   // if(in_array(23 , $data)){ //true/false called strict Mode
   //    echo "Successfuly Found";
   // }
   // else{
   //    echo "Not Found";

   // }





?>