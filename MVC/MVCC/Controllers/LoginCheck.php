<?php
require_once('../Models/db.php');
require_once('../Models/Logindb.php');

    session_start();
    $con=conn();
    if(isset($_SESSION['username'])){
        header("Location:../Views/Employe.php");
    }

    $login = false;
    
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        echo $password;
        $sql = "select * from signup where username = '$username'or email = '$username'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        
        if($row){  
            echo $count;

            if(password_verify($password, $row["password"])){
                $login=true;
                session_start();

                $sql = "select username from signup where username = '$username'or email = '$username'";     
                $r = mysqli_fetch_array(mysqli_query($conn, $sql), MYSQLI_ASSOC);  

                $_SESSION['username']= $r['username'];
                $_SESSION['login'] = true;
                header("Location:../Views/Signup.php");
            }
        }  
        else{  
            echo  '<script>
                        
                        alert("Login failed. Invalid username or password!!")
                        window.location.href = "../Views/Login.php";
                    </script>';
        }     
    }
    ?>