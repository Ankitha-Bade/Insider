<?php
    $con = mysqli_connect('localhost','root','','inside');
    $phoneoremail = $_POST['phoneoremail'];

    $check = mysqli_query($con,"DELETE FROM userdetails WHERE phoneoremail = '$phoneoremail'");

    if($check > 0){
        header("Location:http://localhost/Inside/index.html");
    }
?>