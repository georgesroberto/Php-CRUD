<?php

include '../components/head.php';
include 'head.php';
include '../db_connect.php';

$sql = "SELECT * FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>Item ID</th><th>Client ID</th><th>Name</th><th>Description</th><th>Record Date</th><th>Price</th><th>Availability</th><th>Status</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["item_id"]. "</td><td>" . $row["client_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["description"]. "</td><td>" . $row["record_date"]. "</td><td>" . $row["price"]. "</td><td>" . ($row["availability"] ? "Available" : "Not Available"). "</td><td>" . $row["status"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

include '../components/footer.php';

?>