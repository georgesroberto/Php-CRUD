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

    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container">
            <div class="navbar-nav">
                <a class="nav-link" href="/clients/"><strong>Clients</strong></a>
                <a class="nav-link" href="/copyrights/"><strong>Copyrights</strong></a>
                <a class="nav-link" href="/item/"><strong>Items</strong></a>
                <a class="nav-link" href="/users/login.php"><strong>Login</strong></a>
            </div>
        </div>
    </nav>
