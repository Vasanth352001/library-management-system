<?php
if(isset($_POST['admin']))
{
	header('Location:p1.php');
}
?>

<?php
if(isset($_POST['student']))
{
	header('Location:p2.php');
}
?>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Intro</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="../public/css/front.css"> -->
	<link rel="stylesheet" href="/assets/dcode.css">
	<link rel="shortcut icon" type="image/x-icon" href="/assets/favicon.ico">
	<style>
		body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background-color:black; 
	background-size: cover;
	margin:0px auto;
}

.front{
	width:70%;
	height:60px;
	margin: 0px auto;
	background: #000;
	background-color:yellow;
	margin-top:40px;
	opacity: 0.4;
}

.front h1{
	text-align: center;
	margin-top:30px;
	font-size: 50px;
	color:red;
}

.wrapper,.display,#time{
	display:grid;
	height:100%;
	place-items:center;
}

.wrapper{
	height:100px;
	width:360px;
	cursor:default;
	background:red;
	border-radius:10px;
	position:absolute;
	margin-left: 37%;
	margin-top: 100px;
	background:linear-gradient(135deg,#14ffe9,#ffeb3b,#ff00e0);
	animation: animate 1.5s linear infinite;
}

.wrapper .display,
.wrapper span{
	top:50%;
	left:50%;
	transform: translate(-50%, -50%);
}

.wrapper .display{
	
	background:#1b1b1b;
	height:85px;
	width:345px;
	margin-left:180px;
	margin-top: 49.5px;
}

.wrapper .display #time{
	line-height: 85px;
	font-size: 50px;
	font-weight: 600;
	letter-spacing: 1px;
	background:linear-gradient(135deg,#14ffe9,#ffeb3b,#ff00e0);
    -webkit-background-clip :text;
    -webkit-text-fill-color:transparent;
    animation: animate 1.5s linear infinite;
}
@keyframes animate {
    100%{
    	filter:hue-rotate(360deg);
    }
}

.wrapper span{
	height:100%;
	width:100%;
	background:inherit;
}

.wrapper span:first-child{
	filter:blur(10px);
}

.wrapper span:last-child{
	filter:blur(20px);
}

.btn-login1
{
    border:none;
    outline:none;
    height:40px;
    background:#fb2525;
    color:#fff;
    font-size:16px;
    width:200px;
    margin-top:25%;
    margin-left:11%;
    border-radius: 20px;
}

.btn-login1:hover{
    cursor:pointer;
    background-color: green;
}

.final img{
	width:160px;
    height:160px;
    border-radius:100%;
    position:absolute;
    margin-top: 150px;
    margin-left: -34%;
    left:calc(50% - 50px);
}

.f1 img{
	width:150px;
    height:150px;
    border-radius:100%;
    position:absolute;
    margin-top: -225px;
    margin-left: 29%;
    left:calc(50% - 50px);
} 

.btn-login2
{
    border:none;
    outline:none;
    height:40px;
    background:#fb2525;
    color:#fff;
    font-size:16px;
    width:200px;
    position: absolute;;
    margin-top:-50px;
    margin-left:74%;
    border-radius: 20px;
}

.btn-login2:hover{
    cursor:pointer;
    background-color: green;
}


::-webkit-file-upload-button{
    color:white;
    background: #206a5d;
    padding:20px;
    border:none;
    border-radius: 50px;
    box-shadow: 1px 0 1px 1px #6b4559;
    outline: none;
}

::-webkit-file-upload-button:hover{
    background-color: red;
}

.form
		{
			margin: 80px 0px 20px;
			padding: 0px 50px;
		}
		.form .grid
		{
			margin-top: 50px;
			display: flex;
			justify-content: space-around;
		}
		.form .grid .form-element
		{
			width: 400px;
			height: 400px;
			box-shadow: 0px 0px 20px 5px rgba(100,100,100,0.1);
		}
		.form .grid .form-element input
		{
			display: none;
		}
		.form .grid .form-element img
		{
			width: 100%;
			height: 100%;
			object-fit: cover;
		}
		.form .grid .form-element div
		{
			position: relative;
			height: 40px;
			margin-top: -40px;
			background: rgba(0, 0, 0, 0.5);
			text-align: center;
			line-height: 40px;
			font-size: 13px;
			color: #f5f5f5;
			font-weight: 600;
			cursor: pointer;
		}
		.form .grid .form-element div span
		{
			font-size: 40px;
		}
	</style>
</head>
<body>
	<div class="wrapper">
		<div class="display">
			<div id="time">12:00:00 PM</div>
		</div>
		<span></span>
		<span></span>
	</div>
	<script>
		setInterval(()=>
		{
		const time=document.querySelector("#time");
		let date = new Date();
		let hours = date.getHours();
		let minutes = date.getMinutes();
		let seconds = date.getSeconds();
		let day_night = "AM";
		if(hours > 13)
		{
			day_night="PM";
			hours = hours - 12;
		}
		if(hours < 10)
		{
			hours = "0" + hours;
		}
		if(minutes < 10)
		{
			minutes = "0" + minutes;
		}
		if(seconds < 10)
		{
			seconds = "0" + seconds;
		}
		time.textContent = hours + ":" + minutes + ":" + seconds + " " + day_night;
	});
	</script>
	<div class="final">
		<img src="../public/images/admin.png" class="admin">
		<form method="POST">
		<input type="submit" name="admin" value="Admin" class="btn-login1">
			<div class="f1">
				<img src="../public/images/student.png" class="student">
			</div>
			<input type="submit" name="student" value="Student" class="btn-login2">
	</div>

	<div class="form">
		<div class="grid">
			<div class="form-element">
				<input type="file" name="" id="file-1" accept="image/*">
				<label for="file-1" id="file-1-preview">
					<img src="../public/images/dummy.jpg" class="dummy">
					<div>
						<span>+</span>
					</div>
				</label>
			</div>
			<div class="form-element">
				<input type="file" name="" id="file-2" accept="image/*">
				<label for="file-2" id="file-2-preview">
					<img src="../public/images/dummy.jpg" class="dummy">
					<div>
						<span>+</span>
					</div>
				</label>
			</div>
			<div class="form-element">
				<input type="file" name="" id="file-3" accept="image/*">
				<label for="file-3" id="file-3-preview">
					<img src="../public/images/dummy.jpg" class="dummy">
					<div>
						<span>+</span>
					</div>
				</label>
			</div>
	<script>
		function previewBeforeUpload(id)
		{
			document.querySelector("#"+id).addEventListener("change",function(e)
			{
				if(e.target.files.length==0)
				{
					return;
				}
				let file = e.target.files[0];
				let url = URL.createObjectURL(file);
				document.querySelector("#"+id+"-preview div").innerText = file.name;
				document.querySelector("#"+id+"-preview img").src = url;
			});
		}
		previewBeforeUpload("file-1");
		previewBeforeUpload("file-2");
		previewBeforeUpload("file-3");
	</script>
		</div>
	</div>
	</form>
	
</body>
</html>




