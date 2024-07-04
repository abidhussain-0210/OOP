<?php

class User {
    private $username;
    private $email;

    public function __construct($username,$email) {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }


}

$username = "john_doe";
$email = "john.doe@example.com";

$user = new User($username,$email);

echo "Username: " . $user->getUsername() . "<br>";
echo "Email: " . $user->getEmail() . "<br>";


?>
---------------------

<?php

class Product {
    private $name;
    private $price;
    private $quantity;

    public function __construct($name, $price, $quantity) {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function decreaseQuantity($amount) {
        if ($amount > 0 && $amount <= $this->quantity) {
            $this->quantity -= $amount;
            return true;
        }
        return false; 
    }

}

$productName = "Smartphone";
$productPrice = 599.99;
$productQuantity = 10;

$product = new Product($productName, $productPrice, $productQuantity);

echo "Product: " . $product->getName() . "\n";
echo "Price: $" . $product->getPrice() . "\n";
echo "Available Quantity: " . $product->getQuantity() . "\n";

$purchaseQuantity = 3;
if ($product->decreaseQuantity($purchaseQuantity)) {
    echo "Purchase successful! Updated Quantity: " . $product->getQuantity() . "\n";
} else {
    echo "Purchase failed due to insufficient quantity.\n";
}

?>
 _____________


 <?php
    class Person {
        private $name;
        private $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function getName() {
            return $this->name;
        }

        public function getAge() {
            return $this->age;
        }

        public function setName($name) {
            $this->name = $name;
        }

        public function setAge($age) {
            $this->age = $age;
        }
    }

    $person = new Person("Abid", 25);

    echo "Name: " . $person->getName() . "\n";
    echo "Age: " . $person->getAge() . "\n";

    $person->setName("Hussain");
    $person->setAge(30);

    echo "Updated Name: " . $person->getName() . "\n";
    echo "Updated Age: " . $person->getAge() . "\n";
?>


_____________________

<?php  
    class person  
        {  
            public $name;  
            public $age;  
            function __construct($n, $a)  
            {  
                $this->name=$n;  
                $this->age=$a;  
            }  
            public function setAge($ag)  
            {  
                $this->ag=$ag;  
            }  
            
            public function display()  
            {  
                echo  "welcome ".$this->name."<br/>";  
            
                return $this->age - $this->ag;  
            }  
        
        }  
    
    $person=new person("sonoo",28);  
    
    $person->setAge(1);  
    
    echo "You are ".$person->display()." years old";  
   
?>
__________________

<?php

    class circle{

        private $radius;

        public function __construct($radius)
        {
            $this->radius = $radius;
        }

        public function getRadius()
        {
            return $this->radius;
        }
        public function getArea()
        {
            return $this->area = pi() * ($this->radius * $this->radius);
        }
        public function getCircum()
        {
            return $this->circum = 2 * pi() * $this->radius;
        }


    }
    
    $circle = new circle(5);

    echo "Radius" . $circle->getRadius();
    
    echo "Area" . $circle->getArea();

    echo "Circumference" . $circle->getCircum();


?>
