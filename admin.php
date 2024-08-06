<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $action = $_POST['action'];

    if ($action == "add") {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $published_date = $_POST['published_date'];

        $stmt = $conn->prepare("INSERT INTO books (title, author, price, published_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $author, $price, $published_date);

        if ($stmt->execute()) {
            echo "New book added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($action == "delete") {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM books WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Book deleted successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } elseif ($action == "update") {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $price = $_POST['price'];
        $published_date = $_POST['published_date'];

        $stmt = $conn->prepare("UPDATE books SET title = ?, author = ?, price = ?, published_date = ? WHERE id = ?");
        $stmt->bind_param("sssii", $title, $author, $price, $published_date, $id);

        if ($stmt->execute()) {
            echo "Book details updated successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();
?>
