<?php

include '../components/head.php';
include '../db_connect.php';
include 'head.php';

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

<div class="container">

    <form method="POST" action="update.php" class='form-group'>
        Copyright ID (to update): <input type="text" class='form-control' name="cp_id"><br>
        New Item ID: <input type="text" class='form-control' name="item_id"><br>
        New Description: <input type="text" class='form-control' name="description"><br>
        New Date of Registration: <input type="date" class='form-control' name="date_of_registration"><br>
        New Nature: <input type="text" class='form-control' name="nature"><br>
        New Business Name: <input type="text" class='form-control' name="Business_name"><br>
        New Certificate Number: <input type="text" class='form-control' name="Certificate_number"><br>
        <input type="submit" value="Update Copyright">
    </form>
</div>


<?php include '../components/footer.php'; ?>