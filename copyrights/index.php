<?php

include '../components/head.php';
include '../db_connect.php';
include 'head.php';


$sql = "SELECT * FROM copyrights";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<main>
    <div class='container'>
    <table class='table table-bordered table-striped'><tr><th class='table table-head'>Item ID</th><th class='table table-head'>Description</th><th class='table table-head'>Date of Registration</th><th class='table table-head'>Nature</th><th class='table table-head'>Business Name</th><th class='table table-head'>Certificate Number</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["item_id"]. "</td><td>" . $row["description"]. "</td><td>" . $row["date_of_registration"]. "</td><td>" . $row["nature"]. "</td><td>" . $row["Business_name"]. "</td><td>" . $row["Certificate_number"]. "</td></tr>";
    }
    echo "</table></div></main>";
} else {
    echo "0 results";
}

$conn->close();


include '../components/footer.php';

?>