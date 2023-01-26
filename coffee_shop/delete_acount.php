<?php
session_start();
include "db_conn.php";

//if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
//}

$id = $_SESSION['id'];

// delete user by their id
$sql = "DELETE FROM users WHERE id='$id'";

$result = mysqli_query($conn, $sql);
// sent you back to login page
header("Location: index.php");
exit();