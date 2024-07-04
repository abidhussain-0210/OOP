<?php 
	class employee{
		public $name;
		public $age;
		public $salary;

		function __construct($n , $a, $s)
		{
			$this->name = $n;
			$this->age = $a;
			$this->salary = $s;
		}
		function info()
		{
			echo "<h3>Employee Details</h3>";
			echo "Employee Name "  .$this->name . " <br>";
			echo "Employee Age "  .$this->age . " <br>";
			echo "Employee Salary "  .$this->salary . " <br>";
		}

	}
	class manager extends employee{
		public $travell = 1000;
		public $rent = 2000;
		public $total;

		function info()
		{
			$this->total = $this->salary + $this->travell + $this->rent;
			echo "<h3>Manager Details</h3>";
			echo "Manager Name "  .$this->name . " <br>";
			echo "Manager Age "  .$this->age . " <br>";
			echo "Manager Salary "  .$this->total . " <br>";
		}
	}

	$emp1 = new manager("Abid" , 27 , 15000);
	$emp2 = new employee("Danish" , 29 , 2000);
	$emp1->info();
	$emp2->info();
 ?>

 ________________

 <?php 
	class student
	{
		protected  $name;
		protected  $age;

		function __construct($name , $age)
		{
			$this->name = $name;
			$this->age = $age;
		}
		public function study()
		{
			echo $this->name . " Is Studying His Age Is " . $this->age;
		}
	}
	class monitor extends student{
		public function manageClass()
		{
			echo $this->name . " plz manage the class";
		}
	}

	$obj = new monitor("Ali" , 25);
	$obj->manageClass();
 ?>
 ________________

 <?php
class Person {
    protected $name;
    protected $age;

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

    public function displayInfo() {
        echo "Name: " . $this->name . "<br> Age: " . $this->age . "<br>";
    }
}

class Student extends Person {
    private $studentId;

    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    public function getStudentId() {
        return $this->studentId;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Student ID: " . $this->studentId . "<br>";
    }
}

$student = new Student("Ahmed", 20, "S12345");

echo "<h3>Student Profile:<br></h3>";
$student->displayInfo();
?>
____________

<?php
class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }

    public function displayInfo() {
        echo "Make: " . $this->make . "<br>Model: " . $this->model . "<br>";
    }
}

class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $doors) {
        parent::__construct($make, $model);
        $this->doors = $doors;
    }

    public function getDoors() {
        return $this->doors;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Doors: " . $this->doors . "<br>";
    }
}

$car = new Car("Toyota", "Corolla", 4);

echo "<h3>Car Info:<br></h3>";
$car->displayInfo();
?>

__________________

<?php
class Person {
    protected $name;
    protected $age;

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

    public function displayInfo() {
        echo "Name: " . $this->name . "<br>Age: " . $this->age . "<br>";
    }
}

class Teacher extends Person {
    private $subject;

    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Subject: " . $this->subject;
    }
}

class Student extends Person {
    private $grade;

    public function __construct($name, $age, $grade) {
        parent::__construct($name, $age);
        $this->grade = $grade;
    }

    public function getGrade() {
        return $this->grade;
    }

    public function displayInfo() {
        parent::displayInfo();
        echo "Grade: " . $this->grade . "\n";
    }
}

$teacher = new Teacher("Mr. Ali", 35, "Mathematics");
$student = new Student("Sara", 16, "10th Grade");

echo "<h3>Teacher Info:<br></h3>";
$teacher->displayInfo();

echo "<h3>Student Info:<br></h3>";
$student->displayInfo();
?>

____________

<?php
   class jewellery
{
   protected $cost = 1000;
   
   function Jname($name)
   {
      echo "Name of jewellery is " . $name . "<br>";
   }
}
class necklec extends jewellery
{
   function Jcost($name)
   {
      echo "Cost of " . $name . " is " . $this->cost;

   }
}

$name = new jewellery();
$name->Jname("Necklace");

$necklec = new necklec();
$necklec->Jcost("Necklace");


?>