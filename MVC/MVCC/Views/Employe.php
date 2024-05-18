<?php


require_once('../Models/Employedb.php');
require_once('../Models/db.php');


 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" type="text/css" href="Employe.css">
	<title>Emp</title>
	<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}
</style>
</head>
<body>
	
	<div class="W3-bar-block w3-green" style="width: 50%;">
		<div class="w3-bar-item"><h1>List of Employe</h1></div>
	</div>
	<a href="Signup.php"><button> Add User </button></a>
	<br>
<div class="w3-container my-4">
	<table class="table">
		 <thead>

  <tr>
    <th>Id</th>
    <th>Username</th>
  <th>Email</th>
  <th>Operation</th>
  
  </tr>
    </thead>
    <tbody>
      <?php
        
        $sql = "select * from signup";
        $result = $con->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <tr>
        <th>$row[id]</th>
        <td>$row[username]</td>
        <td>$row[email]</td>
        
        <td>
                  <a href='edit.php?id=$row[id]'><button>Edit</button></a>
                  <a href='delete.php?id=$row[id]'><button>Delete</button></a>
                </td>
      </tr>
      ";
        }
      ?>
  
</table>
</div>

</body>
</html>