<?php

require_once './include/dbconnect.php';
try {
    global $conn;
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // User Details
    $stmt = $conn->prepare("INSERT INTO menulist (pmenu_id, menu_name, menu_link, menu_content, updatedOn) VALUES (:pmenu_id, :page_title, :page_url, :page_content, :updated)");

    $stmt->bindParam(':pmenu_id', $_POST['pmenu_id']);
    $stmt->bindParam(':page_title', $_POST['pagetitle']);
    $stmt->bindParam(':page_url', $_POST['pageurl']);
    $stmt->bindParam(':page_content', $_POST['content']);
    $stmt->bindParam(':updated', date("Y-m-d h:i:sa"));

    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        header("Location: addpage.php");
    } else {
        header("Location: addpage.php?err=1");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
