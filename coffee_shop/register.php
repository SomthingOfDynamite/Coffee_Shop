<?php
session_start();
include "db_conn.php";
// check if everything has been entered,
if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$uname = validate($_POST['uname']);
$pass = validate($_POST['password']);

// if there is no username and password entered
if(empty($uname) && empty($pass)) {
    header ('Location: index.php?error=User Name and Password is required');
    exit();
}
else if(empty($pass)) {
    header('Location: index.php?error=Password is required');
    exit();
}
else if(empty($pass)) {
    header ('Location: index.php?error=User Name is required');
    exit();
}
// search for the username in database
$sql = "SELECT * FROM users WHERE user_name='$uname'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    // if this user name exists then you will get an erorr that you canot create an 
    // acount under this user name 
    if($row['user_name'] === $uname) {
        header('Location: register_page.php?error=User alredy exists');
        exit();
    // not sure if this part of the code is nesesery,
    } else {
        header("Location: home.php");
        $sql = "INSERT INTO users (user_name,password)
VALUES ('$uname', '$pass')";
        echo "Logged In!";
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        exit();
    }
}
// if there is no user under this username you can create the acount and log in
else {
    header("Location: home.php");
    $sql = "INSERT INTO users (user_name,password)
VALUES ('$uname', '$pass')";
        $result = mysqli_query($conn, $sql);
        echo "Logged In!";
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        exit();
}