<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Cart</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Your Cart</h2>

<?php
if(isset($_SESSION['cart'])) {
    foreach($_SESSION['cart'] as $id) {
        $result = mysqli_query($conn, "SELECT * FROM books WHERE id=$id");
        $row = mysqli_fetch_assoc($result);

        echo "<p>".$row['title']." - ₹".$row['price']."</p>";
    }
} else {
    echo "Cart is empty";
}
?>

</body>
</html>
