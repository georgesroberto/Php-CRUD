<?php

include '../components/head.php';
include '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cp_id = $_POST['cp_id'];
    $item_id = $_POST['item_id'];
    $description = $_POST['description'];
    $date_of_registration = $_POST['date_of_registration'];
    $nature = $_POST['nature'];
    $Business_name = $_POST['Business_name'];
    $Certificate_number = $_POST['Certificate_number'];

    $sql = "UPDATE copyrights SET item_id='$item_id', description='$description', date_of_registration='$date_of_registration', nature='$nature', Business_name='$Business_name', Certificate_number='$Certificate_number'
            WHERE cp_id='$cp_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Copyright updated successfully";
    } else {
        echo "Error updating copyright: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="update_copyright.php">
    Copyright ID (to update): <input type="text" name="cp_id"><br>
    New Item ID: <input type="text" name="item_id"><br>
    New Description: <input type="text" name="description"><br>
    New Date of Registration: <input type="date" name="date_of_registration"><br>
    New Nature: <input type="text" name="nature"><br>
    New Business Name: <input type="text" name="Business_name"><br>
    New Certificate Number: <input type="text" name="Certificate_number"><br>
    <input type="submit" value="Update Copyright">
</form>
