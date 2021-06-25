<?php
if(isset($_POST['back']))
{
	header('Location:center.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
	</title>
	<style>
.viewiss
{
	background:rgba(0,0,0,0.6);
	width:100%;
	height: 100%;
	position: absolute;
	top: 0;
	display: flex;
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

.viewiss .viewiss_content input[type=text],input[type=datetime-local],input[type=submit],input[type="Gmail"],select
{
	width:300px;
	height: 30px;
	margin-left: 50px;
	margin-top: 20px;
	text-align: center;
}

	</style>
</head>
<body>
	<div class="viewiss">
	 	<div class="viewiss_content">
	 		<form method="POST">
	 			<input type="Gmail" name="stu_gmail" placeholder="Student Gmail" required>
	 			<input type="text" name="stu_id" placeholder="Student Id" required>
	 			<input type="text" name="book_id" placeholder="Book Id" required>
	 			<input type="text" name="phnno" placeholder="Phone No" required>
	 			<input type="datetime-local" name="issued_date" required>
			    <input type="datetime-local" name="due_date" required>
			    <select name="status1">
			    	<option>Issued</option>
			    </select>
			    <input type="submit" name="newissued" placeholder="Submit" required>
	 		</form>
	 		<form method="POST">
	 			<input type="submit" name="back" value="Home">
	 		</form>
	 	</div>
	 </div>
</body>
</html>

<?php
$stu_gmail = $_POST['stu_gmail'];
$stu_id = $_POST['stu_id'];
$book_id = $_POST['book_id'];
$phnno=$_POST['phnno'];
$issued_date = $_POST['issued_date'];
$due_date = $_POST['due_date'];
$status1 = $_POST['status1'];
$conn = new mysqli('localhost','root','','library');
$dup = mysqli_query($conn,"SELECT * FROM issued WHERE stu_id='$stu_id' AND book_id='$book_id' AND status2='Return'");


if(isset($_POST['newissued'])) 
{
    if($conn->connect_error)
    {
	     die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
	    if(mysqli_num_rows($dup)>0)
	    {
		    echo '<script>alert("Duplicate unavailable")</script>';
	    }
	    else
	    { 

	        if($book_id>=1)
	        {
	    	   $stmt = $conn->prepare("insert into issued(stu_gmail,stu_id,book_id,phnno,issued_date,due_date,status1)
		        values(?, ?, ?, ?, ?, ?, ?)");
		        $stmt->bind_param("sssssss",$stu_gmail, $stu_id, $book_id, $phnno, $issued_date, $due_date, $status1);
		        $stmt->execute();
		        $query = $conn->prepare("update allbooks set book_count=book_count-1 where book_id=$book_id");
		        $query->execute();
		        echo '<script>alert("Issued")</script>';
		        $query->close();
		        $stmt->close();
		        $conn->close();
	        }
	        else
	        {
	    	    echo '<script>alert("Book is not Available")</script>';
	    	    $book_count=0;
	        }
	    }
    }
}
?>   
