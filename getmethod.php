<!-- <?php

   class test{
      private $text = "Hello I Am Abid Hussain";
      public function __get($property){
         if($property == 'text'){
           echo "Can't Access This Private Or Protected Property From OutSide The Class. ($property)";
         }
         else{
            echo "This Property Is Undefined In The Class . ($property)";
         }
      }
      
   }
   $test = new test();
   $test->text;

?> -->
________

<!-- <?php

class test{
      private $name ="Abid";
      public function getName(){
         return $this->name;
      }
      public function __get($property){
         if($property == 'name'){
            echo "Cant Access This Property . ($property)";
         }
         else{
            echo "This Is Undefined . ($property)";
         }

      }
   }
 
$test = new test();
echo $test->getName();


?> -->
_____________

<!-- <?php

   class test{
      private $data = ["name" => "Abid Hussain" , "Age" => 26 , "City" => "Karachi"];
      public function __get($property){
            if(array_key_exists($property , $this->data)){
               return $this->data[$property];
            }
            else{
               return "This ($property) Is Not Defined In The Array.";
            }
         }
      }
    
   $test = new test();
   echo $test->name . "<br>";
   echo $test->Age . "<br>";
   echo $test->City;


?> -->
______

<!-- <?php
class demo{
   protected $name = "Abid Hussain";

   public function __get($property){
      if(isset($this->$property)){
         return $this->$property;
      }
      else{
         return "This Property ($property) Is Undefined In The Class";

      }
   }
}
$demo = new demo();
echo $demo->name;
//echo $demo->naame;


?> -->