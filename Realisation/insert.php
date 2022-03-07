
<?php
	include 'employeeManager.php';

    if(!empty($_POST)){
		$employee = new Employee();	
		$employeeManager = new EmployeeManager();

        $employee->setFirstName($_POST['fname']);
        $employee->setLastName($_POST['lname']);
        $employee->setBirthDate($_POST['birthdate']);
        $employee->setRegistrationNumber($_POST['registNumber']);
        $employee->setFunctionEmployee($_POST['functionEmployee']);
        $employee->setSalary($_POST['salary']);
        $employee->setDepartement($_POST['departement']);
        $employee->setPhoto($_POST['photo']);

        

       
       

		$employeeManager->insertEmployee($employee);
     
        header("Location: index.php");

    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    
    
    <title>Employees Manager</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/customStyles.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand  ">
      
        <a class="navbar-brand ps-3" href="index.html"> Employees Manager</a>
       
     
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu sb-sidenav-custom">
                    <div  class="nav">
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-center ">
                        <li class="nav-item"> <a href="index.php" class="nav-link  py-3 "> <i class="fa fa-home"></i> <small>Home</small> </a> </li>
                        <li> <a href="insert.php" class="nav-link py-3 "> <i class="fa fa-dashboard"></i> <small>Dashboard</small> </a> </li>
                    </ul>
                          

                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer sb-sidenav-custom">
                   
                    <ul class="nav nav-pills nav-flush flex-column mb-auto text-start ">
                  
                  
                    <div class="small">Logged in as:</div> <li> <a href="log.php" class="nav-link py-3 "> <i class="fa fa-cog"></i> <small>Settings</small> </a> </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Employees Manager</h1>
                    <div>
                        <!-- <button id="showFormBtn" class="btn-custom  m-3 btn-primary-custom">+ Nouveau</button> -->
                    </div>
                    <div id="formCard" class="card mb-4 ">

                        <div class="card-header">
                            <!-- <div>Employees </div> -->

                        </div>
                        <div class="card-body card-insert">
                            <form id="formSubmit" method="post" class="row g-3">
                                <div class="col-md-12">
                                    <label for="inputTitle" class="form-label">registration Number</label>
                                    <input required type="number" maxlength="4" name="registNumber" class="form-control" id="inputTitle">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputAuthor" class="form-label">First Name</label>
                                    <input required type="text" class="form-control" name="fname"  id="inputAuthor">
                                </div>
                                <div class="col-6">
                                    <label for="inputPrix" class="form-label">Last Name</label>
                                    <input required type="text" name="lname" step=any class="form-control" id="inputPrix">
                                </div>
                                <div class="col-6">
                                    <label for="inputDate" class="form-label">Date of Birth </label>
                                    <input required type="date" name="birthdate" class="form-control" id="inputDate"
                                        placeholder="Apartment, studio, or floor">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLanguage"  class="form-label">Function</label>
                                    <select required name="functionEmployee" id="inputLanguage" class="form-select">
                                        <option value="" disabled selected>choisir...</option>
                                        <option value="Development">Development</option>
                                        <option value="Production">Production</option>
                                        <option value="Marketing">Marketing</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputLanguage" name="functionEmployee" class="form-label">Departement</label>
                                    <select required id="inputLanguage" name="departement" class="form-select">
                                        <option value="" disabled selected>choisir...</option>
                                        <option value="RH">Rh</option>
                                        <option value="labo">labo</option>
                                        <option value="comptable">comptable</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="inputPrix" class="form-label">Salary</label>
                                    <input required type="number" name="salary" placeholder="0.00 MAD" step=any class="form-control" id="inputPrix">
                                </div>

                                <div class="col-6">
                                    <label for="inputPrix" class="form-label">Photo</label>
                                    <input required type="file"  name="photo"  step=any class="form-control" id="inputPrix">
                                </div>
                                <div class="col-12">
                                    <button id="submitButton" type="submit"
                                        class="btn btn-primary-custom"><a  href="index.php"></a> Enregistrer</button>
                                </div>




                                

                                
                                
                            </form>

                        </div>

                        <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; </div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


</body>

</html>
