<?php
session_start();
$output = NULL;
if(isset($_SESSION['loggedin'])){
  //If the user is logged in load the IT Start page
  header("Location: index.php");
}
?>

<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="login.css" rel="stylesheet" id="custom-login-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2><img src="./images/your_org_logo.png" alt="no image" width="15%">Your IT Oranization: Start Page <br> Login Page <font color="red">v.2</font></h2>
            <div class="hr-style1"><hr></div>
            <p><i>Login for intranet page access</i></p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">

               <form action="ldap.php" method="post">
                  <div class="form-group">
                     <label>User Name</label>
                     <input type="text" name="username" class="form-control" placeholder="User Name">
                  </div>
                  <div class="form-group">
                     <label>Password</label>
                     <input type="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" value="Login" class="btn btn-success">Login</button>
               </form>

            </div>
         </div>
      </div>


  </head>

</html>
