<?php
    class Employee {
        private $id;
        private $fname;
        private $lname;
        private $age;

        public function getId(){
            return $this->id;
        }
        public function setId($value){
            $this->id = $value;
        }

        public function getfname(){
            return $this->fname;
        }

        public function setfname($value){
            $this->fname = $value;
        }

        public function getlname(){
            return $this->lname;
        }

        public function setlname($value){
            $this->lname= $value;
        }



        public function getage(){
            return $this->age;
        }

        public function setage($value){
            $this->age = $value;
        }
    }
?>