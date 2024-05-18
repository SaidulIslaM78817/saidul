<?php 

require_once('../Models/Logindb.php');
require_once('../Controllers/LoginCheck.php');
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>



 <div id="form">

 	<form method="post" action="Login.php">
 		
 		<h1> Login</h1><br>
 		
 		<i class="fa-solid fa-envelope"></i>
 		<input  type="text" name="user" placeholder="Enter Email/Username" required><br><br>
 		<i class="fa-solid fa-lock"></i>
 		<input  type="Password" name="pass" placeholder="Enter Password" required><br><br>
 		
 		
 		 <a href="Views/Employe.php"><button type="submit" id="btn" name = "submit">Login</button></a>



 	</form>
 </div>
 </body>
 </html>