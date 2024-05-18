<?php
  require_once('db.php');

  $con=conn();
  $sql="select * from signup";
  $result=mysqli_query($con,$sql);
  $row=mysqli_num_rows($result);
  if($row==1)
  {
    return true;
  }
  else
  {
    return false;
  }
?>