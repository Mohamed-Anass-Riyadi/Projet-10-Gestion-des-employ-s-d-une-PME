<?php
  session_start();
  $errors = array('message'=>'');
	if(!isset($_SESSION["username"])){
    if(isset($_POST["username"], $_POST["password"])){
      $username = $_POST["username"];
      $password = $_POST["password"];

      if($username == "admin" && $password=="admin"){
        $_SESSION['username'] = $username;
        $errors['message'] = "";
        header("Location: index.php");
      } else {
        $errors['message'] = "Username or password is incorrect ";
      }
    }
  } else {
    header("Location: index.php");

  }


  
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- no additional media querie or css is required -->
<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <h2 class="row justify-content-center text-dark" >SIGN-IN</h2>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-block btn btn-dark" value="log in">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>