<?php

include '../components/head.php';
include '../db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_id = $_POST['item_id'];

    $sql = "DELETE FROM item WHERE item_id='$item_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Item deleted successfully";
    } else {
        echo "Error deleting item: " . $conn->error;
    }
}

$conn->close();
?>

<form method="POST" action="delete_item.php">
    Item ID (to delete): <input type="text" name="item_id"><br>
    <input type="submit" value="Delete Item">
</form>



</main>

<?php

include '../components/footer.php';

?>