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
$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    // if this user name exists and the password matches, then you will log in 
    // and be welcomed to the home page
    if($row['user_name'] === $uname && $row['password'] === $pass) {
        header("Location: home.php");
        echo "Logged In!";
        $_SESSION['id'] = $row['id'];
        $_SESSION['user_name'] = $row['user_name'];
        exit();
    }
    else{
        header("Location: index.php?error=Incorect User Name or Password");
        exit();
    }
}
else {
    header("Location: index.php");
    exit();
}