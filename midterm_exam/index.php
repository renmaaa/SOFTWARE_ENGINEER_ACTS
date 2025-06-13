<?php
session_start();
require_once 'core/dbConfig.php';
require_once 'core/models.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
   <h1>Welcome To Our Bookstore!</h1>   
        <?php $getAllBooks = getAllBooks($pdo); ?>
        <div class="books-container">
            <?php if ($getAllBooks): ?>
                <?php foreach ($getAllBooks as $row): ?>
                    <div class="book-card">
                        <h3>Title: <?php echo htmlspecialchars($row['title']); ?></h3>
                        <h3>Author: <?php echo htmlspecialchars($row['author']); ?></h3>
                        <h3>Price: $<?php echo htmlspecialchars($row['price']); ?></h3>
                        <a href="order.php?book_id=<?php echo $row['book_id']; ?>">Order This Book</a>
                        <a href="vieworders.php?book_id=<?php echo $row['book_id']; ?>">View Orders</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No books available at the moment.</p>
            <?php endif; ?>
        </div>
</body>

</html>