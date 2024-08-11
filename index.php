<?php

include 'components/head.php';

?>
<main>
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

    <?php
    
    include 'components/footer.php';

    ?>