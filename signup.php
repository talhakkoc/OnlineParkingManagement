<?php
include 'Db.php';
if (isset($_POST['signup'])){
    $username=$_POST['username'];
    $pass=$_POST['pass'];
    $email=$_POST['email'];
    $passrep=$_POST['passrep'];
$dat="INSERT INTO users(username,pass,email,pasrep) VALUES('$username','$pass','$email','$passrep')";

if ($con->query($dat) === TRUE) {
    echo "<script type='text/javascript'>alert('Insert successfully!!')</script>";
    } else {
        echo "Error: " . $dat . "<br>" . $con->error;
    }


}