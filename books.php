<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Available Books</h2>

<div class="book-container">
<?php
$result = mysqli_query($conn, "SELECT * FROM books");

while($row = mysqli_fetch_assoc($result)) {
?>
    <div class="book">
        <h3><?php echo $row['title']; ?></h3>
        <p>Author: <?php echo $row['author']; ?></p>
        <p>Price: ₹<?php echo $row['price']; ?></p>

        <form action="add_to_cart.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <button type="submit">Add to Cart</button>
        </form>
    </div>
<?php } ?>
</div>

</body>
</html>
