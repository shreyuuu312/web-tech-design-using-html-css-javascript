<?php

$servername="localhost";
$username="root";
$password="";
$dbname="pl";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$fname=$_POST['fname'];
$sname=$_POST['sname'];
$mail=$_POST['mail'];
$uname=$_POST['usernames'];
$pwd=$_POST['passwords'];
$team=$_POST['team'];
$pp=$_POST['pp'];


$sql = " INSERT INTO users (first, last, mail, team,pp,username, password) VALUES ('$fname','$sname','$mail','$team','$pp','$uname','$pwd') ";

if (mysqli_query($conn, $sql)) {
    header('Location: login.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>