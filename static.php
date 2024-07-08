<?php

   class abc{
      public static $name = "Abid Hussain";
      public static function show()
      {
         echo self::$name;
      }
   }
      
      class xyz extends abc
      {
         public static function show()
         {
            echo parent::$name;
            
         }
      }
      // public function __construct($n)
      // {
      //    echo self::$name=$n;
      // }
      
   
   //abc::show();
   //echo abc::$name;
   $obj = new xyz();
   $obj->show();


?>