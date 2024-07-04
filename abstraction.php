<!-- <?php

abstract class Shape {
    abstract public function calculateArea(); 
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * $this->radius * $this->radius;
    }
}

$circle = new Circle(5);
echo "Area of the circle: " . $circle->calculateArea();

?> -->



<!-- <?php

interface Shape {
    public function calculateArea();
}

class Triangle implements Shape {
    private $a;
    private $b;
    private $c;

    public function __construct($aVal, $bVal, $cVal) {
        $this->a = $aVal;
        $this->b = $bVal;
        $this->c = $cVal;
    }

    public function getSideA() {
        return $this->a;
    }

    public function getSideB() {
        return $this->b;
    }

    public function getSideC() {
        return $this->c;
    }

    public function calculateArea() {
        $a = $this->getSideA();
        $b = $this->getSideB();
        $c = $this->getSideC();

        $p = ($a + $b + $c) / 2;
        $area = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

        return $area;
    }
}

$triangle = new Triangle(2, 2, 2);
echo "Area = " . $triangle->calculateArea();

?> -->


<!-- <?php

interface CommunicationDevice {
    public function makeCall();
    public function sendMessage($message);
}

class MobilePhone implements CommunicationDevice {
    private $phoneNumber;

    public function __construct($phoneNumber) {
        $this->phoneNumber = $phoneNumber;
    }

    public function makeCall() {
        echo "Calling $this->phoneNumber <br>";
    }

    public function sendMessage($message) {
        echo "Sending message to $this->phoneNumber : \"$message\" <br>";
    }
}

$phone = new MobilePhone("1234567890");

$phone->makeCall();
$phone->sendMessage("Hello");

?> -->

<?php

    abstract class parentClass{

        

        abstract function calc($a , $b);
    }
    class child extends parentClass
    {
        public function calc($a , $b)
        {
            echo $a * $b;
        }
    }

    $test = new child();
    $test->cals(2 , 3);


?>

<?php

    abstract class bank
    {
        abstract function id($id);
    }
    class MCB extends bank
    {
        function id($id)
        {
            echo "MCB Bank Id " . $id;
        }
    }
    class meezan extends bank
    {
        function id($id)
        {
            echo "Meezan Bank Id " . $id;
        }
    }


    $mcbBank = new MCB();
    $mcbBank->id(3);
    echo "<br>";
    $meezanBank = new meezan();
    $meezanBank->id(3);


?>

<?php

    abstract class school
    {
        abstract function admission_no($num);
    }

    class abcSchool extends school
    {
        function admionssi_no($num)
        {
            echo "Admission No " . $num;
        }
    }
    class xyzSchool extends school
    {
        function admission_no($num)
        {
            echo "Admission No " . $num;
        }
    }

    $obj = new abcSchool();
    $obj->admission_no(123);

    $obj = new xyzSchool();
    $obj->admission_no(456);

?>