
<?php
    include 'config.php';
    include 'employeeManager.php';

    $employeeManager = new EmployeeManager();
    $data = $employeeManager->getAllEmployees();

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
                  
                  
                    <div class="small">Logged in as:</div>🌻cutie<li> <a href="log.php" class="nav-link py-3 "> <i class="fa fa-cog"></i> <small>Settings</small> </a> </li>
                        
                    </ul>
                </div>
            </nav>
        </div>



                    <div class="card ">
                       
                        <div class="card-body table table-bordered" id="card-body">
                            <div class="button">
                            <button id="insert" ><a href="insert.php"> +Insert</a></button>

                            </div>
                            <table class="table" id="worksTable">
                                <thead>
                                    <tr>
                                        
                                        <th >Registration number</th>
                                        <th >First Name</th>
                                        <th >Last Name</th>
                                        <th >Date of birth</th>
                                        <th >Function</th>
                                        <th>Salary</th>
                                        <th >Departement</th>
                                        <th >Photo</th>
                                        <th>Actions</th>

                                    </tr>
                                </thead>
                               
                                    <tbody>
                                                                <?php
                                                foreach($data as $employee){
                                        ?>

                                        <tr>
                                            <td><?= $employee->getRegistrationNumber()?></td>
                                            <td><?= $employee->getFirstName()?></td>
                                            <td><?= $employee->getLastName()?></td>
                                            <td><?= $employee->getBirthDate()?></td>
                                            <td><?= $employee->getFunctionEmployee()?></td>
                                            <td><?= $employee->getSalary()?></td>
                                            <td><?= $employee->getDepartement()?></td>
                                            <td><?= $employee->getPhoto()?></td>

                                        
                                            <td>
                                                <button class="btn btn-secondary " ><a class="text-decoration-none "  href="edit.php?id=<?php echo $employee->getId() ?>">Edit</a></button>
                                                <button class="btn btn-danger"> <a class="text-decoration-none " href="delete.php?id=<?php echo $employee->getId() ?>">delete</a></button>
                                            </td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                               
                               
                            </table>

                        </div>
                    </div>
            
        </div>
    </div>
   
</body>

</html>
