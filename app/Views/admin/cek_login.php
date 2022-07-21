<?php
include "koneksi.php";
session_start();
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
   
    $sql = "SELECT * FROM admin WHERE username='$username' AND pass='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) 
      {
             
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        
       header("location:index.php");
    }else{
      
      header("location:login.php");
    }
    
}
?>