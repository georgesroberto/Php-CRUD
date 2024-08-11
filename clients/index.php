<?php

include '../components/head.php';
include '../db_connect.php';
include 'head.php';


$sql = "SELECT * FROM clients";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <main>
    <div class='container'>
    <table class='table table-bordered table-striped'>
        <tr>
            <th>Client ID</th>
            <th>Client Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Location</th>
            <th>User ID</th>
        </tr>
    ";
    while($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>" . $row["client_id"]. "</td>
            <td>" . $row["client_name"]. "</td>
            <td>" . $row["Contact"]. "</td>
            <td>" . $row["email"]. "</td>
            <td>" . $row["location"]. "</td>
            <td>" . $row["user_id"]. "</td>
        </tr>";
    }
    echo "</table></div></main>";
} else {
    echo "0 results";
}

$conn->close();
include '../components/footer.php';
?>
