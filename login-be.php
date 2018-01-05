<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="pl";

$conn = mysqli_connect($servername, $username, $password, $dbname);


$sql = "SELECT first,last,mail,team,pp,username, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        if(strcmp($row["username"],$_POST["username"])==0)
        {
            if(strcmp($row["password"],$_POST["password"])==0)
        {
                
                $_SESSION["propic"]=$row['pp']; 
                $_SESSION["fname"]=$row['first'];
                $_SESSION["lname"]=$row['last'];
                $_SESSION["mail"]=$row['mail'];
$_SESSION["team"]=$row['team'];
               
                header('Location: homepage2.php');
        }
            else {
     header('Location: login.html');
}
    }
} 
}
    else {
    echo "Wrong Username or Password";
}

mysqli_close($conn);
?>