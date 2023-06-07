
<h2 name="id" id="id">{{ $id }}</h2>
<?php
$con=mysqli_connect("localhost","root","","ecommerce");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
session_start();
// if (isset($_GET['id']) && is_numeric($_GET['id'])) {
//     $item_id = $_GET['id'];
//     $user_id = $_SESSION['user_id'];
//     $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
//     mysqli_query($con, $query) or die(mysqli_error($con));
//     header('location: products.php');
// }

if ({{ $id }}&& is_numeric({{ $id }})) {
    $item_id = {{ $id }};
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_products(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?>
