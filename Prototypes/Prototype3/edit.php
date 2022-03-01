<?php
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $employee = $employeeManager->getEmployee($id);

    }

    if(isset($_POST['update'])){
		$id = $_POST['id'];
		$fname = $_POST['firstname'];
		$lname = $_POST['lastname'];
		$age = $_POST['age'];
  

        $employeeManager->editEmployee($id, $fname, $lname, $age);

        header('Location: index.php');
        
    }
?>


<body>
<div>
        <div>
		<div><h3>Create a User</h3>
        <form method="POST" action="">
			<input type="hidden" id='id' name='id' value=<?php echo $employee->getId() ?>>
			<div>
				<label for="inputfname">First Name</label>
				<input	type="text" 
						required="required" 
						id="inputfname" 
						value=<?php echo $employee->getfname()?> 
						name="firstname" 
						placeholder="First Name"
					>
				<span></span>
			</div>
			
			<div>
				<label for="inputlname">Last Name</label>
				<input	type="text" 
						required="required" 
						id="inputlname" 
						value=<?php echo $employee->getlname()?> 
						name="lastname" 
						placeholder="Last Name"
					>
        		<span></span>
			</div>
			
			<div>
				<label for="inputage">Age</label>
				<input	type="number" 
						required="required" 
						class="form-control" 
						id="inputage" 
						value=<?php echo $employee->getage()?> 
						name="age" 
						placeholder="Age"
					>
				<span></span>
			</div>
				
    
			<div class="form-actions">
					<input name="update" type="submit" value="Update">
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>