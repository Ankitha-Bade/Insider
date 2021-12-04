<?php
    $con = mysqli_connect('localhost','root','','inside');
    $phoneoremail = $_POST['phoneoremail'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE userdetails SET password = '$password' WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/Inside/mainpage.html");
    }
?>