<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>My Project</title>
<link rel="stylesheet" href="../public/css/p1.css">
</head>
<body>
    <div class="login1-box">
        <form name="adminvalidation" method="POST">
        <img src="../public/images/admin.png" class="admin">    
            <h2>ADMIN<h2>
            <div class="form_input">
                <input type="text" name="username" id="username" class="form-control" placeholder="User Name">
            </div>
            <div class="form_input">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
            </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login">
            </form>
    </div>
</body>
</html>


<?php
   $username=$_POST['username'];
   $password=$_POST['password'];
   $error="";
   $success="";

   if(isset($_POST['submit']))
   {
    if($username == "admin"){
        if($password == "admin")
        {
            $error = "";
            header("Location:center.php");
            echo '<script>alert("Welcome Admin")</script>';
        }
        else
        {
            $error = "Invalid Passowrod";
            $success = "";
            echo '<script>alert("Invalid Password")</script>';
        }
    }
    else
    {
        $error = "Invalid Username";
        $success = "";
        echo '<script>alert("Invalid Username")</script>';
    }
   }
?>


