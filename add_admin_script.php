<?php

if(isset($_POST['submit']))
{
    $username=$_POST['username'];
    $password = $_POST['password'];
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    $link = mysqli_connect("localhost:3307", "root", "", "student_database");
     
    // Check connection
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }



    $pwd_hash = password_hash($password, PASSWORD_DEFAULT);
    // Attempt insert query execution
    $sql = "INSERT INTO admin (username,password) VALUES ('$username','$pwd_hash')";
    if(mysqli_query($link, $sql)){
        echo "admin added successfully.";
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
    // Close connection
    mysqli_close($link);
} 

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>

    <form method="post">
        <input type="text" name="username" placeholder="username">
        <input type="password" name="password" placeholder="password">
        <input type="submit" name="submit">
    </form>

</body>
</html>