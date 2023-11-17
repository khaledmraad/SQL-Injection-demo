<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])){

    $name=$_POST['name'];
    
    $password=$_POST['password'];


    $sql="select * from login where username='$name' and password='$password'";


    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);

    if ($count>=1){

        header("Location:./green.html");

    }
    else{
        echo '<script>
        window.location.href="index.html";
        alert("login failed");
        </script>';
    }
}

?>