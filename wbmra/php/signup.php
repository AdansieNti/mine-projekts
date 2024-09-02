<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Signup</title>
</head>
<style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid ;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
                }

	#box{

		background-color: black;
		margin: auto;
		width: 300px;
		padding: 50px;
	}
header {
   display: flex;
   justify-content: space-between;
   align-items: center;
   background-color: black;
   color: #fff;
   padding: 0.5px;
  }
  header a {
   color: #fff;
   text-decoration: none;
   margin-right: 10px;
  }
body{
background-color: black;
background-size:158px 160px;
height:600px;}
input{text-align:center;}
 #button {
    display: block;
    margin: 0 auto;
  }
 .container {
    display: flex;
    justify-content: center;
  }	
#text::placeholder {
    text-align: left;}
form{border: none;}
</style>
<body>
<header style="text-align:left; font-size:16px">
  <a href="mainpage.php">Home</a>
     </header><br><br><br><br>
	

	<div id="box">
		
		<form method="post">
<div style="text-align: center;">
  <img src="../img/img/signup.png" alt="User Icon" width="100" height="100" />
</div>
			<div style="font-size: 20px;margin: 10px;color: red;text-align:center;">Signup</div>

			<input id="text" type="text" name="user_name" placeholder="Enter a Username"><br><br>
			<input id="text" type="password" name="password" placeholder="Enter a Password"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

<br><br>
		</form>
	</div><br><br><br><br>
</body>
</html>