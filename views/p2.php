<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
<title>My Project</title>
<link rel="stylesheet" href="../public/css/p2.css">
</head>
<body>
	
    <div class="login2-box">
		<img src="../public/images/student.png" class="student">
		<form method="POST">
	        <h2>STUDENT<h2>
	    	<div class="form_input">
                <input type="text" name="stu_id" id="stu_id" class="form-control" placeholder="User Name" required>
            </div>
            <div class="form_input">
                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
            </div>
                <input type="submit" name="submit" value="LOGIN" class="btn-login">
            </form>
	</div>
</body>
</html>
 

<?php
   $conn = new mysqli('localhost','root','','library') or die('Connection Failed');
   if(isset($_POST['submit']))
   {
       $stu_rollno=$_POST['stu_id'];
       $password=$_POST['password'];
       $query="select * from allstudents where stu_rollno='$stu_rollno'";
       $result=mysqli_query($conn,$query);
       $count=mysqli_num_rows($result);
        if($count>0 && $password == "students")
        {
            echo '<script>alert("Welcome Student")</script>';
            header("Location:stu.php");
        }
        else
        {
            echo '<script>alert("Invalid Username & Password")</script>';
        }
    }
?>
