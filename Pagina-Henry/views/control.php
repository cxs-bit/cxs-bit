<?php
session_start();
include("db_conexion.php");
if (isset($_POST['user']) && isset($_POST['pass'])) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
$username = validate($_POST['user']);
$password = validate($_POST['pass']);

if (empty($username)) {
    header("Location: index.php?error=User Name is required");
    exit();
} else if (empty($password)) {
    header("Location: index.php?error=Password is required");
    exit();
} else {
    $sql = "SELECT * FROM users WHERE USERNAME='$username' AND PASSWORD='$password' ";
    $result = mysqli_query($conexion,$sql);

    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);
        if ($row['USERNAME'] === $username && $row['PASSWORD'] === $password ) {
            $_SESSION['USERNAME'] = $row['USERNAME'];
            $_SESSION['PASSWORD'] = $row['PASSWORD'];
            $_SESSION['ID'] = $row['ID'];
            header("Location: home.php");
            exit();
        }
    }else{
        header("Location: index.php?error=Username or Password incorrect");
        exit();
    }
}
} else {
    header("Location: index.php");
    exit();
}

