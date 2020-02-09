<?php

session_start();
require_once './include/dbconnect.php';

try {
    global $conn;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // User Details
    $stmt = $conn->prepare("SELECT * FROM user_admin WHERE user_login = '" . $_POST['username'] . "' and user_pass = '" . $_POST['password'] . "'");
    $stmt->execute();

    $_SESSION['_user'] = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($stmt->rowCount() > 0) {
        header("Location: dashboard.php");
    } else {
        header("Location: index.php?err=1");
    }
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>