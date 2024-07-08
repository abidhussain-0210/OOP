<?php

   function our_autoload($class)
   {
      require $class . '.php';
   }

   spl_autoload_register('our_autoload');

   $obj1 = new test1();
   $obj2 = new test1();
   $obj3 = new test3();

?>