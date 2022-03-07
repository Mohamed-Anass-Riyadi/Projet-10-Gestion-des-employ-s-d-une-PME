<?php
   include "admin-config.php";
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {  
      $myusername = mysqli_real_escape_string($admin_config,$_POST['username']);
      $mypassword = mysqli_real_escape_string($admin_config,$_POST['password']); 
      $sql = "SELECT id FROM admin_config WHERE userName = '$myusername' and 'passWord' = '$mypassword'";
      $result = mysqli_query($admin_config,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $admin_config = mysqli_num_rows($result);
      
      if($admin_config == 1) {
         $_SESSION['login_user'] = $myusername;
         header("location: index.php");
      }else {
        // ToAdd warning
      }
   }
?>
<html>
   <head>
      <title>admin Login Page</title>
      <link rel="stylesheet" href="logoutStyle.css">
      
   </head>
   <body >



   <form action = "" method = "post">
        <h1><span>log</span> in</h1>
        <input name = "username" placeholder="Username" type="text"/>
        <input name = "password" placeholder="Password" type="password"/>
        <button class="btn">Log in</button>
        
        </div>
      </form>
      
      <footer>
      </footer>









      <!-- <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "padding:3px;"><b>Login</b></div>
            <div style = "margin:30px">
               <form >
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
            </div>
         </div>
      </div> -->
   </body>
</html>