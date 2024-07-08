<!-- <?php

class demo {
    protected $city = "Lahore";

    public function __get($property) {
        if (property_exists($this, $property)) {
            return "City is " . $this->$property;
        } else {
            return "Undefined";
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
            echo "Updated City is " . $this->$property;
        } else {
            return "Undefined";
        }
    }
}

$demo = new demo();
echo $demo->city; 
echo "<br>";
$demo->city = "Islamabad";

?> -->

________________

<!-- <//?php
   class test{
      private $name = " Abid";
      public function __set($property , $value){
         if(property_exists($this , $property)){
            return $this->$property = $value;
         }
         else{
            echo "Does Not Exists;";

         }
         //echo "$property Can Not Set With $value Value";
      }
      public function __get($property){
         return $this->name;
      }
   }
   $test = new test();
   echo $test->name;
   echo "<br>";
   echo $test->name="Abid Ali";

?> -->

<!-- <//?php

   class demo{
   private $name;
  
   public function __get($property){
      echo "Property '$property' does not exist.";
   }
   public function __set($property , $value){
      if(property_exists($this , $property)){
         $this->$property = $value;
      }else{
         echo "Error: Property '$property' does not exist.";
      }
   }
   
   public function hello(){
      echo $this->name;
   }
}
$demo = new demo();
$demo->name = "Hello";
$demo->hello();


?> -->