<?php

session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
  //something was posted
  $user_id = $_SESSION['user_id'];
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];

  if(!empty($current_password) && !empty($new_password))
  {
    //read from database
    $query = "select * from users where user_id = '$user_id' limit 1";
    $result = mysqli_query($con, $query);

    if($result)
    {
      if($result && mysqli_num_rows($result) > 0)
      {
        $user_data = mysqli_fetch_assoc($result);

        if($user_data['password'] === $current_password)
        {
          // update password in the database
          $update_query = "UPDATE users SET password = '$new_password' WHERE user_id = '$user_id'";
          mysqli_query($con, $update_query);

          echo "Password changed successfully!";
        }
        else
        {
          echo "Incorrect current password!";
        }
      }
    }
  }
  else
  {
    echo "Please fill in all fields!";
  }
}

?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Change Password</title>
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
    padding: 10px;
  }
header {
   display: flex;
   justify-content: space-between;
   align-items: left;
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
background-size:158px 150px;
height:600px;
}

#button {
    display: block;
    margin: 0 auto;
}

.container {
    display: flex;
    justify-content: center;
}

#text::placeholder {
    text-align: center;
}

form{
  border: none;
}
</style>
<body>
<header style="text-align:left; font-size:16px">
  <a href="mainpage.php">Home</a>
     </header>
</header>

<div id="box"><br><br><br><br><br><br>
    
  <form method="post">
    <div style="font-size: 14px;margin: 10px;color: red;text-align:center;">Change Password</div>

    <input id="text" type="password" name="current_password" placeholder="Enter your Current Password"><br><br>
    <input id="text" type="password" name="new_password" placeholder="Enter your New Password"><br><br>

    <input id="button" type="submit" value="Submit"><br><br>

    <div class="container">
  
    </div><br><br>
  </form>
</div>
</body>
</html>