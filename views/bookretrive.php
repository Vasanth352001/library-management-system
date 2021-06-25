<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" type="text/css" href="../public/css/bookretrive.css">
</head>
<body>
    <!-- <center> -->
        <form action="" method="POST">
            <div class="home">
                <input type="submit" name="back" value="Home">
            </div>
            <div class="input">
            <select name="book_degree">
                        <option>Select Degree</option>
                        <option>BE</option>
                        <option>ME</option>
                        <option>Others</option>
            </select>
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
                        <option>Others</option>
            </select>

            <select name="book_year">
                        <option>Select Year</option>
                        <option>First Year </option>
                        <option>Second Year </option>
                        <option>Third Year </option>
                        <option>Fourth Year </option>
                        <option>Others </option>
                    </select><br><br>
            <input type="submit" name="search" value="Search" class="search" />
        </div>
        </form>
        <div class="retrive">
        <table>
            <tr>
                <th>Name</th>
                <th>Id</th>
                <th>Degree</th>
                <th>Department</th>
                <th>Year</th>
                <th>Author</th>
                <th>Count</th>
            </tr><br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'library');

if(isset($_POST['search']))
{
    $book_degree = $_POST['book_degree'];
    $book_dept = $_POST['book_dept'];
    $book_year = $_POST['book_year'];

    $query = "SELECT * FROM allbooks WHERE book_degree = '$book_degree' AND book_dept = '$book_dept' AND book_year = '$book_year' ";

    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <from action="" method="POST">
            <tr>
            <th><?php echo $row['book_name'];?></th>
            <th><?php echo $row['book_id'];?></th>
            <th><?php echo $row['book_degree'];?></th>
            <th><?php echo $row['book_dept'];?></th>
            <th><?php echo $row['book_year'];?></th>
            <th><?php echo $row['book_author'];?></th>
            <th><?php echo $row['book_count'];?></th>
            </tr>
        </from>
        <?php
    }
}
?>
</div>
</center>
</table>
</body>
</html>

<?php
if(isset($_POST['back']))
{
    header('Location:center.php');
}
?>