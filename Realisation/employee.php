<?php
    class Employee {

        private $id;
        private $registrationNumber;
        private $firstName;
        private $lastName;
        private $birthDate;
        private $function;
        private $salary;
        private $departement;
        private $photo;

        


        
        

      

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($value){
            $this->firstName = $value;
        }

        public function getLastName(){
            return $this->lastName;
        }

        public function setLastName($value){
            $this->lastName= $value;
        }

        public function getBirthDate(){
            return $this->birthDate;
        }

        public function setBirthDate($value){
            $this->birthDate= $value;
        }




        public function getRegistrationNumber(){
            return $this->registrationNumber;
        }

        public function setRegistrationNumber($value){
            $this->registrationNumber= $value;
        }



        public function getFunctionEmployee(){
            return $this->functionEmployee;
        }

        public function setFunctionEmployee($value){
            $this->functionEmployee= $value;
        }



        public function getSalary(){
            return $this->salary;
        }

        public function setSalary($value){
            $this->salary= $value;
        }


        public function getDepartement(){
            return $this->departement;
        }

        public function setDepartement($value){
            $this->departement= $value;
        }

        public function getPhoto(){
            return $this->photo;
        }

        public function setPhoto($value){
            $this->photo= $value;
        }




      
    }
?>