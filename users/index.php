<?php

include '../components/head.php';
include '../db_connect.php';


$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>User ID</th><th>User Name</th><th>Contact</th><th>Email</th><th>Date of Birth</th><th>Location</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"]. "</td><td>" . $row["user_name"]. "</td><td>" . $row["Contact"]. "</td><td>" . $row["email"]. "</td><td>" . $row["date_of_birth"]. "</td><td>" . $row["location"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();

include '../components/footer.php';

?>
