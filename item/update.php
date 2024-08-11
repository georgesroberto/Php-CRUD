<?php

include '../components/head.php';
include '../db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    $client_id = $_POST['client_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $record_date = $_POST['record_date'];
    $price = $_POST['price'];
    $availability = isset($_POST['availability']) ? 1 : 0;
    $status = $_POST['status'];

    $sql = "UPDATE item SET client_id='$client_id', name='$name', description='$description', record_date='$record_date', price='$price', availability='$availability', status='$status'
            WHERE item_id='$item_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Item updated successfully";
    } else {
        echo "Error updating item: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="update_item.php">
    Item ID (to update): <input type="text" name="item_id"><br>
    New Client ID: <input type="text" name="client_id"><br>
    New Name: <input type="text" name="name"><br>
    New Description: <textarea name="description"></textarea><br>
    New Record Date: <input type="date" name="record_date"><br>
    New Price
