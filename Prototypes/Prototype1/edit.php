


<html lang="en">
<body>
<div>
        <div>
		<div><h3>Edit a User</h3>
        <form method="POST" action="">
			<div>
				<label for="inputFName">First Name</label>
				<input type="text" required id="inputFName" value=<?= $editPerson[1]?> name="fname" placeholder="First Name">
				<span></span>
			</div   >
			
			<div>
				<label for="inputLName">Last Name</label>
				<input type="text" required id="inputLName" value=<?= $editPerson[2] ?> name="lname" placeholder="Last Name">
        		<span></span>
			</div>
			
			<div>
				<label for="inputAge">Age</label>
				<input type="number" required class="form-control" value=<?= $editPerson[3] ?> id="inputAge" name="age" placeholder="Age">
				<span></span>
			</div>
    
			<div class="form-actions">
					<button type="submit">Edit</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>