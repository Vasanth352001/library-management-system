<?php
if(isset($_POST['back']))
{
	header('Location:center.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Students</title>
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/student.css"> -->
	<style>
		       *{
			padding:0;
			margin:0;
			font-family: sans-serif;
			background:gray;
		}

		.regform{
			width:500px;
			height:600px;
			margin-top: 30px;
			background-color:black;
			margin-left: 30%;
			align-items: center;
			
		}

		.insert{
			position: fixed;
			z-index: -1;
			right: 0;
			bottom: 8;
		}

		.regform input[type="text"], input[type="email"]
		{
			width:400px;
			height:40px;
			margin-left: 50px;
			margin-top: 20px;
			text-align: center;
			border-radius: 10px;
			font-size: 18px;
			background-color: skyblue;
		}

		select{
			width:400px;
			height:40px;
			margin-left: 50px;
			margin-top: 20px;
			font-size: 18px;
			border-radius: 10px;
			background-color: skyblue;
		}

		.regform input[type="address"]
		{
			width:400px;
			height:100px;
			margin-left: 50px;
			margin-top: 20px;
			text-align: center;
			border-radius: 10px;
			font-size: 18px;
			background-color: skyblue;
		}

		.regform input[type="date"],input[type="count"]
		{
			width:400px;
			height:40px;
			margin-left: 50px;
			margin-top: 20px;
			text-align: center;
			border-radius: 10px;
			font-size: 18px;
			background-color: skyblue;
		}

		.regform input[type="submit"]
		{
			width:150px;
			height:40px;
			margin-left: 70px;
			margin-top: 10px;
			border-radius: 10px;
			font-size: 18px;
		}

		.regform input[type="submit"]:hover{
			background-color: red;
			border-style: groove;
			border-color: yellow;
		}
	</style>
</head>
<body>
	<form method="POST">
        <div class="regform">
       		<input type="text" name="stu_name" placeholder="Student Name">
    		<br>
    		<input type="text" name="stu_rollno" placeholder="Roll No">
					<br>
					<select name="stu_dept">
						<option value="department">Select DepartMent</option>
						<option>IT</option>
						<option>CSE</option>
						<option>ECE</option>
						<option>EEE</option>
						<option>MECH</option>
						<option>CIVIL</option>
						<option>BIO-TECH</option>
						<option>BIO-MEDICAL</option>
						<option>FOOD-TECH</option>
					</select>
					<br>
					<select name="stu_year">
						<option>Select Year</option>
						<option>2018-2022 </option>
						<option>2019-2023 </option>
						<option>2020-2024 </option>
						<option>2021-2025 </option>
						<option>2022-2026 </option>
					</select>
					<br>
			<input type="address" name="stu_address" placeholder="Student Addres">
			<br>
			<input type="date" name="stu_dob" placeholder="Student DOB">
			<br>
			<input type="count" name="book_limit" value="5">
			<br><br>
			<input type="submit" name="submit" placeholder="Submit">
			<input type="submit" name="back" value="Home">
    	</form>
    </div>
    	 
</body>
</html>


<?php
$stu_name = $_POST['stu_name'];
$stu_rollno = $_POST['stu_rollno'];
$stu_dept = $_POST['stu_dept'];
$stu_year = $_POST['stu_year'];
$stu_address = $_POST['stu_address'];
$stu_dob = $_POST['stu_dob'];
$book_limit = $_POST['book_limit'];
$conn = new mysqli('localhost','root','','library');
$dup = mysqli_query($conn,"SELECT * FROM allstudents WHERE stu_rollno = '$stu_rollno' ");

if(isset($_POST['submit']))
{
  if($conn->connect_error)
  {
	die('Connection Failed : '.$conn->connect_error);
	echo '<script>alert("Error")</script>';
  }
else
{
	if(mysqli_num_rows($dup)>0)
	{
		echo '<script>alert("Duplicate Value is Entry")</script>';
	}
	else
	{
	$stmt = $conn->prepare("insert into allstudents(stu_name,stu_rollno,stu_dept,stu_year,stu_address,stu_dob,book_limit)
		values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi",$stu_name, $stu_rollno, $stu_dept, $stu_year, $stu_address, $stu_dob, $book_limit);
		$stmt->execute();
		echo '<script>alert("One Student is Added")</script>';
		$stmt->close();
		$conn->close();
	}
}
}
?>   


