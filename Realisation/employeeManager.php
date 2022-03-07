<?php
    include 'employee.php';

    class EmployeeManager {

        private $Connection = null;

        private function getConnection(){
            if(is_null($this->Connection)){
                $this->Connection = mysqli_connect('localhost', 'Anass', 'aaaaaaaaaa', 'realisation');

                if(!$this->Connection){
                    $message = 'Connection Error: ' .mysqli_connect_error();
                    throw new Exception($message);
                }
            }
            return $this->Connection;
        }

        public function getAllEmployees(){
            $sqlGetData = 'SELECT id,registrationNumber, firstName, lastName, birthday, functionEmployee ,salary,departement,photo  FROM employees ';
            $result = mysqli_query($this->getConnection() ,$sqlGetData);
            $employeesList = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $employees = array();
            foreach($employeesList as $employee_list){
                $employee = new Employee();
                $employee->setId($employee_list['id']);
                $employee->setRegistrationNumber($employee_list['registrationNumber']);
                $employee->setFirstName($employee_list['firstName']);
                $employee->setLastName($employee_list['lastName']);
                $employee->setBirthDate($employee_list['birthday']);
                $employee->setFunctionEmployee($employee_list['functionEmployee']);
                $employee->setSalary($employee_list['salary']);
                $employee->setDepartement($employee_list['departement']);
                $employee->setPhoto($employee_list['photo']);

                array_push($employees, $employee);
            }

            return $employees;
        }


        public function insertEmployee($employee){
            $registrationNumber = $employee->getRegistrationNumber();
            $firstName = $employee->getFirstName();
            $lastName = $employee->getLastName();
            $birthDate = $employee->getBirthDate();
            $functionEmployee= $employee->getFunctionEmployee();
            $salary=$employee->getSalary();
            $departement = $employee->getDepartement();
            $photo = $employee->getPhoto();
            
           

                 // sql insert query
        $sqlInsertQuery = "INSERT INTO employees (
                                    registrationNumber,
                                    firstName, 
                                    lastName, 
                                    birthday ,
                                    functionEmployee ,
                                    salary,
                                    departement,
                                    photo) 
                            VALUES(
                                    '$registrationNumber', 
                                    '$firstName',
                                    '$lastName',
                                    '$birthDate',
                                    '$functionEmployee',
                                    '$salary',
                                    '$departement',
                                    '$photo'
                                    )";

                                   
        mysqli_query($this->getConnection(), $sqlInsertQuery);
        }


        

// Edit function.
        public function editEmployee($id,
                                    $registrationNumber,
                                    $firstName,
                                    $lastName,
                                    $birthDate,
                                    $functionEmployee,
                                    $salary,
                                    $departement,
                                    $photo){
     
            // Update query
            $sqlUpdateQuery = "UPDATE employees SET 
                         registrationNumber='$registrationNumber',
                         firstName='$firstName', 
                         lastName='$lastName', 
                         birthday='$birthDate' ,
                         functionEmployee ='$functionEmployee',
                         salary='$salary',
                         departement='$departement',
                         photo='$photo'
                         WHERE id=$id";
     
             // Make query 
             mysqli_query($this->getConnection(), $sqlUpdateQuery);

             if(mysqli_error($this->getConnection())){
                 $msg = 'Erreur' . mysqli_errno($this->getConnection());
                 throw new Exception($msg);
             }
       
        }

        public function getEmployee($id){
            $sqlGetQuery = "SELECT * FROM employees WHERE id= $id";
        
            // get result
            $result = mysqli_query($this->getConnection(), $sqlGetQuery);
        
            // fetch to array
            $employee_data = mysqli_fetch_assoc($result);

            $employee = new Employee();
            $employee->setId($employee_data['id']);
            $employee->setRegistrationNumber($employee_data['registrationNumber']);
            $employee->setFirstName($employee_data['firstName']);
            $employee->setLastName($employee_data['lastName']);
            $employee->setBirthDate($employee_data['birthday']);
            $employee->setFunctionEmployee($employee_data['functionEmployee']);
            $employee->setSalary($employee_data['salary']);
            $employee->setDepartement($employee_data['departement']);
            $employee->setPhoto($employee_data['photo']);

            return $employee;
        }




        public function delete($id){
            $sql = "DELETE FROM employees WHERE id= '$id'";
            mysqli_query($this->getConnection(), $sql);
        }


        


    }


    
?>