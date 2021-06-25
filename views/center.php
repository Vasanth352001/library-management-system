<?php
if(isset($_POST['issuedhistory']))
{
	header('Location:issuedhistory.php');
}
?>

<?php
if(isset($_POST['issu']))
{
	header('Location:newissued.php');
}
?>

<?php
if(isset($_POST['ret']))
{
	header('Location:issuedretrive.php');
}
?>

<?php
if(isset($_POST['logout']))
{
	header('Location:p1.php');
}
?>

<?php
if(isset($_POST['login']))
{
	header('Location:center.php');
}
?>


<?php
if(isset($_POST['viewstudents']))
{
	header('Location:studentretrive.php');
}
?>

<?php
if(isset($_POST['viewsms']))
{
	header('Location:sendretrive.php');
}
?>

<?php
if(isset($_POST['viewissued']))
{
	header('Location:issuedretrive.php');
}
?>

<?php
if(isset($_POST['addstudents']))
{
	header('Location:student.php');
}
?>

<?php
if(isset($_POST['viewbooks']))
{
	header('Location:bookretrive.php');
}
?>

<?php
if(isset($_POST['addbooks']))
{
	header('Location:book.php');
}
?>


<html>
<head>
	<title>library</title>
	<link rel="stylesheet" type="text/css" href="../public/css/center.css">
<style>
body
{
background:gray;
background-repeat: no-repeat;
background-size: cover;
font-family: sans-serif; 
 }

	.issret
{
	background:rgba(0,0,0,0.6);
	width:100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.issret_content
{
	height:150px;
	width: 550px;
	background:white;
	padding:20px;
	margin-left: 200px;
	margin-top: 50px;
	border-radius: 5px;
	position: relative;
	cursor: pointer;

}

.issret .issret_content img
{
	position: absolute;
	width:30px;
    height:30px;
    border-radius:100%;
    position:absolute;
    margin-top: -30px;
    left:calc(100% - 20px);
    background:#fff;
    cursor: pointer;
}

.issret .issret_content p{
	color:black;
	font-size: 20px;
	margin-left: 50px;
}

.issret .issret_content input[type=submit]{
	width:150px;
	height:40px;
	color:black;
	margin-left: 80px;
	margin-top: 40px;
	font-size: 20px;
	color:black;
	text-align: center;
}

.issret .issret_content input[type=submit]:hover{
	border-color: yellow;
	background-color: green;
}




.viewiss
{
	background:rgba(0,0,0,0.6);
	width:100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: none;
	justify-content: center;
	align-items: center;
}

.viewiss_content
{
	height:550px;
	width: 400px;
	background:white;
	padding:20px;
	margin-left: 200px;
	border-radius: 5px;
	position: relative;
	cursor: pointer;

}

.viewiss .viewiss_content img
{
	position: absolute;
	width:30px;
    height:30px;
    border-radius:100%;
    position:absolute;
    margin-top: -30px;
    left:calc(100% - 20px);
    background:#fff;
    cursor: pointer;
}

.viewiss .viewiss_content input[type=text],input[type=datetime-local],input[type=submit],input[type="Gmail"]
{
	width:300px;
	height: 30px;
	margin-left: 50px;
	margin-top: 30px;
	text-align: center;
}
 
</style>
</head>
<body>
	 <div class="side">
	 	<header>ADMIN</header>
	 	<input type="submit" name="viewstudents" value="Students" class="student" id="student">
	 	<input type="submit" name="viewbooks" value="Books" class="book" id="book">
		<input type="submit" name="viewissuedbooks" value="Issued Books" class="iss" id="iss">
		<!-- <form method="POST">
		<input type="submit" name="issuedhistory" value="Issued History" class="isshis" id="isshis">
		</form> -->
	 	<input type="submit" name="submit" value="Logout" class="logout" id="logout">
	 </div>
	 <div class="top">
	 	
	 </div>

	 <div class="viewstudent">
	 	<div class="viewstudent_content">
	 		<img src="../public/images/close.png" class="studentclose" alt="studentclose">
	 		<form method="POST">
				<input type="submit" name="addstudents" value="Add Students">
				<input type="submit" name="viewstudents" value="View Students">
			</form>
	 	</div>
	 </div>


	 <div class="viewbook">
	 	<div class="viewbook_content">
	 		<img src="../public/images/close.png" class="bookclose" alt="bookclose">
	 		<form method="POST">
				<input type="submit" name="addbooks" value="Add Books">
				<input type="submit" name="viewbooks" value="View Books">
			</form>
	 	</div>
	 </div>	

	 <div class="issret">
	 	<div class="issret_content">
	 		<img src="../public/images/close.png" class="issretclose" alt="issretclose">
	 		<form method="POST">
				<input type="submit" name="issu" value="New Issued" class="newiss" id="newiss">
				<input type="submit" name="ret" value="Return" class="retu" id="retu">
			</form>
	 	</div>

	 </div>
	 
	 <div class="viewlogout">
	 	<div class="viewlogout_content">
	 		<img src="../public/images/close.png" class="logoutclose" alt="logoutclose">
	 		<form method="POST">
	 		<p>Are sure you want to logout?</p>
				<a href="p1.php">
				   <input type="submit" name="logout" value="Yes">
			    </a>
				   <input type="submit" name="login" value="No">
			</form>
	 	</div>

	 </div>

</body>
</html>

<script>
	 	document.getElementById("student").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewstudent").style.display = "flex";
	 	})

	 	document.querySelector(".studentclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewstudent").style.display = "none";
	 	})
	 </script>


	 <script>
	 	document.getElementById("book").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewbook").style.display = "flex";
	 	})

	 	document.querySelector(".bookclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewbook").style.display = "none";
	 	})
	 </script>

	 <script>
	 	document.getElementById("iss").addEventListener("click",function()
	 	{
	 		document.querySelector(".issret").style.display = "flex";
	 	})

	 	document.querySelector(".issretclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".issret").style.display = "none";
	 	})
	 </script>

	 <script>
	 	document.getElementById("newiss").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewiss").style.display = "flex";
	 	})

	 	document.querySelector(".issclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewiss").style.display = "none";
	 	})
	 </script>

	 <script>
	 	document.getElementById("logout").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewlogout").style.display = "flex";
	 	})

	 	document.querySelector(".logoutclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".viewlogout").style.display = "none";
	 	})
	 </script>


<?php
$stu_id = $_POST['stu_id'];
$book_id = $_POST['book_id'];
$phnno=$_POST['phnno'];
$status2 = $_POST['status2'];

$conn = new mysqli('localhost','root','','library');

if(isset($_POST['returned']))
{
    if($conn->connect_error)
    {
	     die('Connection Failed : '.$conn->connect_error);
    }
	else
	{
	    $sql = mysqli_query($conn,"insert into issued(status2)
		VALUES($status2) where stu_id='$stu_id' AND book_id='$book_id' AND phnno='$phnno'");
		$stmt->bind_param("s",$status2);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}
}
?>  
