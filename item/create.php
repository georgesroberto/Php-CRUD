<?php

include '../components/head.php';
include 'head.php';
include '../db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];
    $client_id = $_POST['client_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $record_date = $_POST['record_date'];
    $price = $_POST['price'];
    $availability = $_POST['availability'];
    $status = $_POST['status'];

    $sql = "INSERT INTO item (item_id, client_id, name, description, record_date, price, availability, status)
            VALUES ('$item_id', '$client_id', '$name', '$description', '$record_date', '$price', '$availability', '$status')";

    if ($conn->query($sql) === TRUE) {
        echo "New item created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="create_item.php">
    Item ID: <input type="text" name="item_id"><br>
    Client ID: <input type="text" name="client_id"><br>
    Name: <input type="text" name="name"><br>
    Description: <textarea name="description"></textarea><br>
    Record Date: <input type="date" name="record_date"><br>
    Price: <input type="text" name="price"><br>
    Availability: <input type="checkbox" name="availability" value="1"><br>
    Status: <input type="text" name="status"><br>
    <input type="submit" value="Create Item">
</form>



</main>

<?php

include '../components/footer.php';

?>