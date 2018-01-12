<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
		<title>
		</title>
	</head>
	<body>
		<?php
		include('Student.php');

		$students = array();
		
		//first student initialized
		$first = new Student();
		$first->surname = "Doe";
		$first->first_name = "John";
		$first->add_email('home','john@doe.com');
		$first->add_email('work','jdoe@mcdonalds.com');
		$first->add_grade(65);
		$first->add_grade(75);
		$first->add_grade(55);
		$students['j123'] = $first;
	
		//second student initialized
		$second = new Student();
		$second->surname = "Einstein";
		$second->first_name = "Albert";
		$second->add_email('home','albert@braniacs.com');
		$second->add_email('work1','a_einstein@bcit.ca');
		$second->add_email('work2','albert@physics.mit.edu');
		$second->add_grade(95);
		$second->add_grade(80);
		$second->add_grade(50);
		$students['a456'] = $second;
		
		
		//first student initialized
		$third = new Student();
		$third->surname = "You";
		$third->first_name = "Alex";
		$third->add_email('home','iiiiiiivv54321@gmail.com');
		$third->add_grade(100);
		$third->add_grade(100);
		$third->add_grade(100);
		$students['a999'] = $third;
		
		//sorts based on name
		ksort($students);
		
		//prints student info
		foreach($students as $student)
			echo $student->toString();
		?>
	</body>
</html>