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

    $sql = "INSERT INTO copyrights (cp_id, item_id, description, date_of_registration, nature, Business_name, Certificate_number)
            VALUES ('$cp_id', '$item_id', '$description', '$date_of_registration', '$nature', '$Business_name', '$Certificate_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New copyright created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<div class="container">

<form method="POST" action="create_copyright.php" class='form-group'>
    Copyright ID: <input type="text" class='form-control' name="cp_id"><br>
    Item ID: <input type="text" class='form-control' name="item_id"><br>
    Description: <input type="text" class='form-control' name="description"><br>
    Date of Registration: <input type="date" class='form-control' name="date_of_registration"><br>
    Nature: <input type="text" class='form-control' name="nature"><br>
    Business Name: <input type="text" class='form-control' name="Business_name"><br>
    Certificate Number: <input type="text" class='form-control' name="Certificate_number"><br>
    <input type="submit" value="Create Copyright">
</form>

</div>
</main>

<?php

include '../components/footer.php';

?>