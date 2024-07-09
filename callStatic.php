<?php

   class Demo{
      private static function Hello($name){
         echo "Hi $name..!!";
      }
      public static function __callStatic($method , $args){
         if(method_exists(__class__ , $method)){
            call_user_func_array([__class__ , $method] , $args);
         }
         else{
            echo "This Method '$method' Does Not Exist";
         }
      }
   }

   Demo::Hello("Abid Hussain");
?>