<?php
require_once('db.php');

function auth($username,$pass)
{


        $con=conn();
        $sql = "select * from signup where username = '$username'or '$email' = '$username'";  
        $result = mysqli_query($con, $sql);  
          $row = mysqli_fetch_array($result); 
        if($row==1)
  {
    return true;
  }
  else
  {
    return false;
  }

    }
?>