<?php
   $conn = mysqli_connect('localhost', 'Anass', 'aaaaaaaaaa', 'demo');

   // check connection
 if(!$conn){
      echo 'Connection error: ' . mysqli_connect_error(); 
  }
?>