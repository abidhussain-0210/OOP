<?php

   class detail{
      protected function getName(){
         echo "I Am Abid Hussain";
      }
      public function __call($method , $args){
         if(method_exists($this , $method)){
            call_user_func_array([$this , $method] , $args );
         }
         else{
            echo "$method does not exist";
         }
      }
   }

   $detail = new detail();
   $detail->getName();

?>