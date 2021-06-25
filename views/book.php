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
	<link rel="stylesheet" type="text/css" href="../public/css/book.css">
</head>
<body>
	<form method="POST">
        <div class="regform">
       		<input type="text" name="book_name" placeholder="Book Name">
    		<br><br>
    		<input type="text" name="book_id" placeholder="Book Id">
    		<br><br>
					<select name="book_degree">
						<option value="degree">Select Degree</option>
						<option value="BE">BE</option>
						<option value="ME">ME</option>
					</select>
					<br><br>
					<select name="book_dept">
						<option>Select DepartMent</option>
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
					<br><br>
					<select name="book_year">
						<option>Select Year</option>
						<option>First Year </option>
						<option>Second Year </option>
						<option>Third Year </option>
						<option>Fourth Year </option>
					</select>
					<br><br>
					<input type="text" name="book_author" placeholder="Author">
					<br><br>
					<input type="text" name="book_count" placeholder="Count">
					<br><br>
			<input type="submit" name="submit" placeholder="Submit">
			<input type="submit" name="back" value="Home">
    </div>
    </form>
</body>
</html>


<?php
$book_name = $_POST['book_name'];
$book_id = $_POST['book_id'];
$book_degree = $_POST['book_degree'];
$book_dept = $_POST['book_dept'];
$book_year = $_POST['book_year'];
$book_author = $_POST['book_author'];
$book_count = $_POST['book_count'];


$conn = new mysqli('localhost','root','','library');
$dup = mysqli_query($conn,"SELECT * FROM allbooks WHERE book_id = '$book_id' ");

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
		echo '<script>alert("Duplicate Values Entry!!")</script>';
	}
	else
	{
	$stmt = $conn->prepare("insert into allbooks(book_name,book_id,book_degree,book_dept,book_year,book_author,book_count)
		values(?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssssi",$book_name, $book_id, $book_degree, $book_dept, $book_year, $book_author,$book_count);
		$stmt->execute();
		echo '<script>alert("One Book Is Added")</script>';
		$stmt->close();
		$conn->close();
	}
}
}
?>   
