<?php 
	class human{
		public $name;
		function walk()
		{
			echo $this->name . " Can Walk <br>";
		}
		function talk()
		{ 
			echo $this->name . " Can Talk <br>";
		}
	}
	class male extends human
	{
      function walk(){
			echo $this->name . " Can Walk";
         echo " And " . $this->name . " can speaks<br>";
      }
	}
	class female extends human
	{
		
	}
	$male = new male();
	$male->name = "Abid";
	$male->walk();

	$female = new female();
	$female->name = "Amir";
	$female->talk();
 ?>
 _________________

 <?php

class Shape {
    public function area() {
    }
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
echo "Area of the Circle with radius 5: <strong>" . $circle->area() . " Square Unit </strong><br><br>";

$rectangle = new Rectangle(4, 6);

echo "Area of the Rectangle with width 4 and height 6: <strong>" . $rectangle->area() . " Square Unit </strong>";

?>
____________________

<?php

abstract class Vehicle {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function move();
}

class Car extends Vehicle {
    public function move() {
        echo $this->name . " is driving.<br>";
    }
}

class Bicycle extends Vehicle {
    public function move() {
        echo $this->name . " is cycling.<br>";
    }
}

function moveVehicle(Vehicle $vehicle) {
    $vehicle->move();
}

$car = new Car("Toyota");
$bicycle = new Bicycle("BMX");

moveVehicle($car);
moveVehicle($bicycle);

?>

_______________

<?php

abstract class Person {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function displayRole();
}

class Student extends Person {
    private $grade;

    public function __construct($name, $grade) {
        parent::__construct($name);
        $this->grade = $grade;
    }

    public function displayRole() {
        echo $this->name . " is a student in grade " . $this->grade . "<br>";
    }

    public function study() {
        echo $this->name . " is studying.<br>";
    }
}

class Teacher extends Person {
    private $subject;

    public function __construct($name, $subject) {
        parent::__construct($name);
        $this->subject = $subject;
    }

    public function displayRole() {
        echo $this->name . " is a teacher of " . $this->subject . "<br>";
    }

    public function teach() {
        echo $this->name . " is teaching " . $this->subject . ".<br>";
    }
}

function describeRole(Person $person) {
    $person->displayRole();
}

$student = new Student("Alice", 10);
$teacher = new Teacher("Mr. Smith", "Mathematics");

describeRole($student);
$student->study();

describeRole($teacher);
$teacher->teach();

?>
______

<?php

abstract class MedicalStaff {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function work();
}

class Doctor extends MedicalStaff {
    public function work() {
        echo $this->name . " is diagnosing patients.<br>";
    }
}

class Nurse extends MedicalStaff {
    public function work() {
        echo $this->name . " is assisting patients.<br>";
    }
}

// function describeWork(MedicalStaff $staff) {
//     $staff->work();
// }

$doctor = new Doctor("Dr. Smith");
$doctor->work();
$nurse = new Nurse("Nurse Johnson");
$nurse->work();

// describeWork($doctor);
// describeWork($nurse);

?>
