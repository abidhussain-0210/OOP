<?php 
	include('teacher.php');
	include('student.php');
	use teacher\joindetails as Tdetails;
	use student\joindetails as Sdetails;
	$teacher = new Tdetails\details();
	echo "<br>";
	$student = new Sdetails\details();

	
	// function zero(){
	// 	echo "hi from index";
	// }
	echo "<br><br>";
	Tdetails\zero();
	//_____________________
	// include('teacher.php');	
	// include('student.php');

	// teacher\hello();
	// echo "<br>";	
	// student\hello();	
	//________________________
	// include('teacher.php');
	// include('student.php');
	// use teacher\joindetails as Tdetails;
	// use student\joindetails as Sdetails;
	// $teacher = new Tdetails\details();
	// echo "<br>";
	// $student = new Sdetails\details();
	//__________________________
	// include('teacher.php');
	// include('student.php');

	// $teacher =  new teacher\teacherDetails();
	// echo "<br>";
	// $student =  new student\studentDetails();
	//__________________________
	// include('teacher.php');
	// include('student.php');

	// $teacher = new teacher\joiningDate();
	// $teacher->teacher();
	// echo "<br>";
	// $student = new student\joiningDate();
	// $student->student();








 ?>