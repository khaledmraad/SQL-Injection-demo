
<?php
session_start();

include("connection.php");

if (isset($_POST['submit'])){

    $username=$_POST['new_user_name'];

    $email=$_POST['new_user_email'];

    $password=$_POST['new_user_pass'];



    $sql="insert into login values('$username','$email','$password')";

   
    
    $test=$conn->query($sql);

    echo '<script>
        window.location.href="index.html";
        alert("signup done");
        </script>';


           
}

?>