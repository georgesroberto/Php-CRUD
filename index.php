<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Gray background */
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #343a40; /* Dark footer */
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <?php 
        
                // Database connection
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

                

    ?>
  <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="m-0">Smart Art and Design Studio</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-link text-white" href="add.html">Add New Book</a>
                <a class="nav-link text-white" href="update.html">Update Book Details</a>
                <a class="nav-link text-white" href="delete.html">Delete Book</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">

        <h2 class="mb-3">Book List</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Price</th>
                    <th>Published Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                $sql = "SELECT id, title, author, price, published_date FROM books";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['id']}</td>
                                <td>{$row['title']}</td>
                                <td>{$row['author']}</td>
                                <td>{$row['price']}</td>
                                <td>{$row['published_date']}</td>
                                 <td>
                                    <a href='update.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' class='text-center'>No books found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>


    <footer class="footer">
        &copy; 2024 Smart Art and Design Studio. All rights reserved.
    </footer>
    <!-- Bootstrap JS and dependencies (Optional for Bootstrap functionalities) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
