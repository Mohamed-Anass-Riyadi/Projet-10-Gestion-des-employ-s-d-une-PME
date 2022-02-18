<?php 
    if ( !empty($_POST)) { 
        // post values
        $fname  = $_POST['fname'];
        $lname  = $_POST['lname'];
        $age    = $_POST['age'];
        $gender = $_POST['gender'];
		$person = array($fname, $lname, $age, $gender); 
      
		$file = file_get_contents('people.json');
		$data = json_decode($file, true);
		
		array_push($data, $person);
		file_put_contents("people.json", json_encode($data));
		header("Location: index.php");

    }
?>