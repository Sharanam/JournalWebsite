<?php
session_start();

    include 'database.php';
    $email = $_POST["Email"];
    $pass = md5($_POST["Password"]);
    $sql=mysqli_query($conn,"SELECT * FROM author where emailID='$email' and password='$pass'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["ID"] = $row['authorID'];
        $_SESSION["Email"]=$row['emailID'];
        $_SESSION["full_name"]=$row['full_name'];
        echo "Logged in";
    }
    else
    {
        echo "Invalid Email ID/Password";
    }

?>