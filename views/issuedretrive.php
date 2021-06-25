<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" type="text/css" href="../public/css/issuedretrive.css">
</head>
<body>
    <!-- <center> -->
        <form action="" method="POST">
            <div class="home">
                <input type="submit" name="back" value="Home">
            </div>
            <div class="input">
            <input type="submit" name="search" value="Search">
             <br><br><br><br><br>
        </div>
        </form>
        <div class="retrive">
        <table>
            <tr>
                <th>Gmail</th>
                <th>Student Id</th>
                <th>Book Id</th>
                <th>Issued Date</th>
                <th>Due Date</th>
            </tr><br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'library');

if(isset($_POST['search']))
{
    $query = "SELECT * FROM issued WHERE status1='Issued' AND NOT status2='Return'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <from method="POST">
            <tr>
            <th><?php echo $row['stu_gmail'];?></th>
            <th><?php echo $row['stu_id'];?></th>
            <th><?php echo $row['book_id'];?></th>
            <th><?php echo $row['issued_date'];?></th>
            <th><?php echo $row['due_date'];?></th>
            </tr>
        </from>
        <?php
    }
}

?>

</div>
</center>
</table>
<div class="viewlogout">
    <div class="viewlogout_content">
        <form method="POST">
            <input type="text" name="stu_id" placeholder="Student Id" required="">
            <input type="text" name="book_id" placeholder="Book Id" required="">
            <input type="submit" name="returned" placeholder="Submit" required="">
        </form>
    </div>
</div>
</body>
</html>
 

<?php
$stu_id = $_POST['stu_id'];
$stu_name = $_POST['stu_name'];
$book_id = $_POST['book_id'];
$conn = new mysqli('localhost','root','','library');

if(isset($_POST['returned']))
{
    if($conn->connect_error)
    {
        die('Connection Failed : '.$conn->connect_error);
    }
    else
    {
        $stmt = $conn->prepare("update issued set status2='Return' where stu_id='$stu_id' AND status1='Issued'");
        $stmt->execute();
        $query = $conn->prepare("update allbooks set book_count=book_count+1 where book_id=$book_id");
        $query->execute();
        echo '<script>alert("Book is Returned")</script>';
        $query->close();
        $stmt->close();
        $conn->close();
    }
}
?>  


<?php
if(isset($_POST['back']))
{
    header('Location:center.php');
}
?>


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