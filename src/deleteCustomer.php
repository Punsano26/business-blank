<?php

if (isset($_GET['CustomerID'])) {
    require '../connect.php';

    $query = "DELETE FROM customer WHERE CustomerID = :CustomerID";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':CustomerID', $_GET['CustomerID']);

    if ($stmt->execute()) {
        $mess = "Customer Deleted!!!";
        header('location:index.php');
    } else {
        $mess = "Failed Delete!!!";
    }

    echo $mess;
    $conn = null;

}



?>

