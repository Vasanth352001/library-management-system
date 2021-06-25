<html>
<head>
	<title>library</title>
	<link rel="stylesheet" type="text/css" href="../public/css/stu.css">
</head>
<body>
	<h2>STUDENT</h2>
	 <div class="side">
	 	<input type="submit" name="homepage" value="Home">
	 	<form method="POST">
	 	<input type="submit" name="deptbookpage" value="DeptBooks">
	 	<input type="submit" name="logoutpage" value="Logout" class="logout" id="logout">
	    </form>
	 </div>
	 <div class="top">
	 	<ul>
	 	<li><a href="#">Instructions</a></li>
	 	<li><a href="#">Contact</a></li>
	    </ul>
	 </div>

    <?php
    if(isset($_POST['deptbookpage']))
    {
        header('Location:studeptbooks.php');
    }
    ?>

	 <div class="otherbook">
	 	<div class="otherbook_content">
	 		<img src="../public/images/close.png" class="issclose" alt="issclose">
	 		<form method="POST">
	 			
	 		</form>
	 	</div>
	 </div>

	 <div class="viewlogout">
	 	<div class="viewlogout_content">
	 		<img src="../public/images/close.png" class="logoutclose" alt="logoutclose">
	 		<form method="POST">
	 		<p>Are sure you want to logout?</p>
				<input type="submit" name="logout" value="Yes">
				<input type="submit" value="No">
			</form>
	 	</div>

	 </div>
	 <?php
    if(isset($_POST['logoutpage']))
    {
        header('Location:p2.php');
    }
    ?>




	 <script>
	 	document.getElementById("iss").addEventListener("click",function()
	 	{
	 		document.querySelector(".otherbook").style.display = "flex";
	 	})

	 	document.querySelector(".issclose").addEventListener("click",function()
	 	{
	 		document.querySelector(".otherbook").style.display = "none";
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


</body>
</html>




