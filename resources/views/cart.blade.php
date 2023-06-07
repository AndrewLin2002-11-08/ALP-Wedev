<?php
require "includes/common.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bik Shopping | Online Shopping Site for Woman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a09adcde7e.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-Zy2C4t4GhB5oyLl5O/ufmRvsCwLOhhsG8NqU4n0e9R7y+Y+De7fVEBkz/4mmSmZE" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
include 'includes/header_menu.php';
?>
<div class="d-flex justify-content-center">
                <div class=" col-md-6  my-5 table-responsive p-5">
                    <table class="table table-striped table-bordered table-hover ">
                    <?php
$sum = 0;
$user_id = $_SESSION['user_id'];
$query = " SELECT products.price AS Price, products.id, products.name AS Name FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) >= 1) {
    ?>
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                <?php
while ($row = mysqli_fetch_array($result)) {
        $sum += $row["Price"];
        $id = $row["id"] . ", ";
        echo "<tr><td>#{$row["id"]}</td><td>{$row["Name"]}</td><td>Rp {$row["Price"]}</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'><i class='fas fa-times text-danger fw-bold'></i></a></td></tr>";
        // echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rp " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
    }
    $id = rtrim($id, ", ");
    echo "<tr><td></td><td>Total</td><td>Rp " . $sum . "</td><td><a href='success.php' class='btn btn-primary btn-warning '>Confirm Order</a></td></tr>";
    ?>
                            </tbody>
                            <?php
} else {
    echo "<div> <img src='images/emptycart.png' class='image-fluid' height='150' width='150'></div><br/>";
    echo "<div class='text-bold  h5'>Add items to the cart first!<div>";

}
?>
                        <?php
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--footer -->
         <?php include 'includes/footer.php'?>
        <!--footer end-->
   <!-- footer section -->
   <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-10 mx-auto text-center">
            <!-- footer icons -->
            <div class="footer-contact d-flex justify-content-around mt-5">
              <!-- single contact -->
              <div class="text-capitalize">
                <p>
                <span class="contact-icon mr-2">
                  <i class="fa-brands fa-instagram"></i>
                </span>
                Instagram : <a href="https://www.instagram.com/biakshopping/" target="_blank" rel="noopener noreferrer" style="color:#ffc107;"> @biakshopping </a></p>
              </div>
              <!-- end of single contact -->
              <!-- single contact -->
              <div class="text-capitalize">
              <p>
                <span class="contact-icon mr-2">
                  <i class="fa-brands fa-whatsapp"></i>
                </span>
                Whatsapp : <a href="https://api.whatsapp.com/send?phone=82197677746&text=Halo%20saya%20ingin%20bertanya%20mengenai%20produk%20anda%20di%20Biak%20Shopping" target="_blank" rel="noopener noreferrer" style="color:#ffc107"> +62-821-9767-7746 </a></p>
              </div>
              <!-- end of single contact -->
              <!-- single contact -->
              <div class="text-capitalize">
                <p>
                <span class="contact-icon mr-2">
                  <i class="fas fa-envelope"></i>
                </span>
                Email : <a href="https://mail.google.com/mail/u/0/#compose" target="_blank" rel="noopener noreferrer" style="color:#ffc107"> biakshopping@gmail.com </a></p>
              </div>
              <!-- end of single contact -->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer section -->

</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
$(document).ready(function() {

if(window.location.href.indexOf('#login') != -1) {
  $('#login').modal('show');
}

});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>
