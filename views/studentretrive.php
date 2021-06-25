<?php
if(isset($_POST['back']))
{
    header('Location:center.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>View Students</title>
    <link rel="stylesheet" type="text/css" href="../public/css/studentretrive.css">
</head>
<body>
        <form action="" method="POST">
            <div class="home">
                <input type="submit" name="back" value="Home">
            </div>
            <div class="input">
            <select name="stu_dept">
                        <option value="department">Select DepartMent</option>
                        <option value="it">IT</option>
                        <option value="cse">CSE</option>
                        <option value="ece">ECE</option>
                        <option value="eee">EEE</option>
                        <option value="mech">MECH</option>
                        <option value="civil">CIVIL</option>
                        <option value="b.tech">BIO-TECH</option>
                        <option value="b.medi">BIO-MEDICAL</option>
                        <option value="food">FOOD-TECH</option>
            </select>

            <select name="stu_year">
                        <option>Select Year</option>
                        <option>2018-2022 </option>
                        <option>2019-2023 </option>
                        <option>2020-2024 </option>
                        <option>2021-2025 </option>
                    </select>
                    <br>
            <input type="submit" name="search" value="Search">
             <br><br><br><br><br>
        </div>
        </form>
        <div class="retrive">
        <table>
            <tr>
                <th>Name</th>
                <th>Roll No</th>
                <th>Department</th>
                <th>Year</th>
                <th>Address</th>
                <th>DOB</th>
            </tr><br>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,'library');

if(isset($_POST['search']))
{
    $stu_dept = $_POST['stu_dept'];
    $stu_year = $_POST['stu_year'];

    $query = "SELECT * FROM allstudents WHERE stu_dept = '$stu_dept' AND stu_year = '$stu_year' ";

    $query_run = mysqli_query($connection,$query);

    while($row = mysqli_fetch_array($query_run))
    {
        ?>
        <from action="" method="POST">
            <tr>
            <th><?php echo $row['stu_name'];?></th>
            <th><?php echo $row['stu_rollno'];?></th>
            <th><?php echo $row['stu_dept'];?></th>
            <th><?php echo $row['stu_year'];?></th>
            <th><?php echo $row['stu_address'];?></th>
            <th><?php echo $row['stu_dob'];?></th>
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

