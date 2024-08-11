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

<form method="POST" action="create_copyright.php">
    Copyright ID: <input type="text" name="cp_id"><br>
    Item ID: <input type="text" name="item_id"><br>
    Description: <input type="text" name="description"><br>
    Date of Registration: <input type="date" name="date_of_registration"><br>
    Nature: <input type="text" name="nature"><br>
    Business Name: <input type="text" name="Business_name"><br>
    Certificate Number: <input type="text" name="Certificate_number"><br>
    <input type="submit" value="Create Copyright">
</form>


</main>

<?php

include '../components/footer.php';

?>