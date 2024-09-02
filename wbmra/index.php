<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
   <style>
 .rectangular-box {
    display: inline-block;
    color: white;
    text-align: center;
    background-color: black;
    padding: 10px 20px; /* Adjust padding as needed */
    border: 5px solid white; /* Add a border around the box */
    border-radius: 20px; /* Add rounded corners */
  }
.container {
  display: grid;
  grid-template-columns: repeat(12, 1fr);
  grid-gap: 20px;
}

/* Use media queries to apply different styles for different screen sizes */
@media screen and (max-width: 767px) {
  /* Change the layout for smaller screens */
  .container {
    grid-template-columns: repeat(4, 1fr);
  }
  
  /* Hide certain elements that are not necessary on mobile devices */
  .sidebar {
    display: none;
  }
}

/* Use relative units for font sizes */
body {
  font-size: 1em;
}

/* Optimize images */
img {
  max-width: 100%;
  height: auto;
}

 /* Style the modal background */
  .modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgba(0,0,0,0.4);
  }
  
  /* Style the modal content */
  .modal-content {
   background-color: #fefefe;
   margin: 15% auto;
   padding: 2px;
   border: 5px solid #888;
   width: 60%;
  }
  
  /* Style the close button */
  .close {
   color: #aaa;
   float: right;
   font-size: 28px;
   font-weight: bold;
  }
  
  .close:hover,
  .close:focus {
   color: black;
   text-decoration: none;
   cursor: pointer;
  }
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
   background-color:black;
   background-size:170px 190px;
   width:100%;
   height:30%;
   margin:auto;
}
.my-element{
    margin-top:20px;
    margin-down:20px;
}
/* Style the header */
header {
  background-color: none;
  padding: 10px;
  text-align: right;
  font-size: 12px;
  color: black;
}


/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

/* Style the footer */
footer {
  background-color: black;
  padding: 5px;
  text-align: center;
  color: white;
}

img, p {
			display: inline-block;
			vertical-align: middle;
		}
label {
			color: black;
		}
   /* Style for the menu container */
        .menu-container {
            position: fixed;
            top: 0;
            left: -250px; /* Start with the menu hidden */
            width: 250px;
            height: 100%;
            background-color: #333;
            padding-top: 20px;
            transition: left 0.3s;
        }

        /* Style for the links inside the menu */
        .menu-container a {
            display: block;
            color: white;
            padding: 10px;
            text-align: left;
            text-decoration: none;
        }

        /* Style for the button or icon to show/hide the menu */
        #menu-toggle {
            position: fixed;
            top: 20px;
            left: 20px;
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

</style>
</head>
<body>

    <br><br>
    <h1 style="text-align:center;color:white;">Welcome</h1>
<br><br><br>
<div style="background-color: black; text-align: center;">
<img src="img/coa.png" alt="The Ghana Coat of Arm"width="100" height="100"><br><br>
 <div class="rectangular-box">
    <h1><a href="php/index.php">MOBILE REPORTING APP</a></h1>
  </div><br><br>
<img src="img/ges.png" alt="The Ghana Education Service"width="100" height="100">
</div><br>
 <!-- Footer -->
 <footer>
<br><br><br>
    <p> &copy; 2023<br>Project By:<br>
     Ken Boakye & Perez Nyame</p><br>
</footer>    

  
    
  
 </body>     
</html>


