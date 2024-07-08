<?php 
	namespace Zone;
	class DateTime{
		function __construct(){
			echo "Hello";
		}
	}
	$obj = new DateTime();
	echo "<br>";
	$obj1 = new \DateTime();
	echo $obj1->format('Y-m-d H:i:s');
	// namespace teacher\joindetails;
	// class details{
	// 	function __construct(){
	// 		//echo "Teacher XYZ";
	// 	$test = new \student\joindetails\details();

	// 	}
	// }

	// function zero(){
	// 	echo "hi from teacher";
	// }
	//___________________
	// namespace teacher;
	// function hello(){
	// 	echo "Hello Teacher";
	// }
	//__________________________
	// namespace teacher\joindetails;
	// class details{
	// 	function __construct(){
	// 		echo "Teacher XYZ";
	// 	}
	// }
	//_________________
	// namespace teacher;
	// class teacherDetails{
	// 	function __construct(){
	// 		echo "Teacher Name Is ABC";
	// 	}
	// }
	//_________________
	// namespace teacher;
	// class joiningDate{
	// 	function teacher(){
	// 		echo "Teacher : 20-12-2020";
	// 	}
	// }
	//____________________________
 ?>