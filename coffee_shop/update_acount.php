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

$curent_uname = $_SESSION['user_name'];
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
$sql = "SELECT * FROM users WHERE user_name='$curent_uname'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) === 1) {
    $id = $_SESSION['id'];
    // update user name and password
    $sql = "UPDATE users SET user_name= '$uname', password='$pass' WHERE id='$id' ";
    $result = mysqli_query($conn, $sql);
    
    // update username (no need to update id)
    $_SESSION['user_name'] = $uname;
    header("Location: home_page.php");
    exit();
}
else {
    header("Location: index.php");
    exit();
}