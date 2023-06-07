
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
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<!-- Navigation bar start -->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">


    <a href="/index" class="navbar-brand">
             <!-- <img src="img/Bikshop.png" alt="company logo" /> -->
             <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/Bikshop_logo.png" alt="..." style="width: 50px;
        height: 50px;"></div>
            </a>


                <div class="container">
                        <a href="/index" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Bik Shopping</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav">
                           <li class="nav-item dropdown">
                               <a href="/products" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                                   Products
                                </a>
                                   <div class="dropdown-menu">
                                       <!-- <a href="products.php#watch" class="dropdown-item">Watches</a> -->
                                       <a href="/products" class="dropdown-item">Clothing</a>
                                       <a href="/products2" class="dropdown-item">Trousers</a>
                                       <!-- <a href="products.php#headphones" class="dropdown-item">Headphones/Speakers</a> -->
                                   </div>

                           </li>
                           <li class="nav-item"><a href="/index" class="nav-link" >Offers</a></li>
                           <li class="nav-item"><a href="/about" class="nav-link" >Wishlist</a></li>
                           <?php
                           if (isset($_SESSION['email'])) {
                            ?>
                           <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                           <?php
                              }
                        ?>
                        </ul>

                        <?php
                    if (isset($_SESSION['email'])) {
                        ?>
                        <ul class="nav navbar-nav ml-auto">
                           <li class="nav-item"><a href="/logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
                           <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                        </ul>
                        <?php
                    } else {
                        ?>
                        <ul class="nav navbar-nav ml-auto">
                           <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> Sign Up</a></li>
                           <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
                        </ul>
                        <?php
                    }
                        ?>
                        </div>
                    </div>
                </div>
            </nav>
        <!--navigation bar end-->
        <!--Login trigger Modal-->
        <div class="modal fade" id="login" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

                <div class="modal-header">
                  <h5 class="modal-title">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="/login" method="post">
                     <div class="form-group">
                         <label for="email">Email address:</label>
                         <input type="email" class="form-control"  name="email_id" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd"  name="password" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label for="checkbox" class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
                  </form>
                  <a href="http://">forgot password ?</a>
                </div>
                <div class="modal-footer">
                  <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >signup</a></p>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>
        <!--Login trigger Model ends-->
        <!--Signup model start-->
        <div class="modal fade" id="signup">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

                <div class="modal-header">
                  <h5 class="modal-title">Sign Up</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="/register" method="post">
                    <div class="form-group">
                         <label for="email">Email address:</label>
                         <input type="email" class="form-control"  name="email_id" placeholder="Enter email" required>
                         <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md -6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="last_name" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>
          <!--Signup trigger model ends-->


<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">


    <a href="/index" class="navbar-brand">
             <!-- <img src="img/Bikshop.png" alt="company logo" /> -->
             <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/Bikshop_logo.png" alt="..." style="width: 50px;
        height: 50px;"></div>
            </a>


                <div class="container">
                        <a href="/index" class="navbar-brand" style="font-family: 'Delius Swash Caps'">Bik Shopping</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="mynavbar">
                        <ul class="nav navbar-nav">
                           <li class="nav-item dropdown">
                               <a href="" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                                   Products
                                </a>
                                   <div class="dropdown-menu">
                                       <!-- <a href="products.php#watch" class="dropdown-item">Watches</a> -->
                                       <a href="/products" class="dropdown-item">Clothing</a>
                                       <a href="/products2" class="dropdown-item">Trousers</a>
                                       <!-- <a href="products.php#headphones" class="dropdown-item">Headphones/Speakers</a> -->
                                   </div>

                           </li>
                           <li class="nav-item"><a href="/index" class="nav-link" >Offers</a></li>
                           <li class="nav-item"><a href="/about" class="nav-link" >Wishlist</a></li>
                           <?php
                           if (isset($_SESSION['email'])) {
                            ?>
                           <li class="nav-item"><a href="/cart" class="nav-link">Cart</a></li>
                           <?php
                              }
                        ?>
                        </ul>

                        <?php
                    if (isset($_SESSION['email'])) {
                        ?>
                        <ul class="nav navbar-nav ml-auto">
                           <li class="nav-item"><a href="logout_script.php" class="nav-link"><i class="fa fa-sign-out"></i>Logout</a></li>
                           <li class="nav-item"><a  class="nav-link " data-placement="bottom" data-toggle="popover" data-trigger="hover" data-content="<?php echo $_SESSION['email'] ?>"><i class="fa fa-user-circle "></i></a></li>
                        </ul>
                        <?php
                    } else {
                        ?>
                        <ul class="nav navbar-nav ml-auto">
                           <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal" ><i class="fa fa-user"></i> Sign Up</a></li>
                           <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i class="fa fa-sign-in"></i> Login</a></li>
                        </ul>
                        <?php
                    }
                        ?>
                        </div>
                    </div>
                </div>
            </nav>
        <!--navigation bar end-->
        <!--Login trigger Modal-->
        <div class="modal fade" id="login" >
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content"style="background-color:rgba(255,255,255,0.95)">

                <div class="modal-header">
                  <h5 class="modal-title">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="login_script.php" method="post">
                     <div class="form-group">
                         <label for="email">Email address:</label>
                         <input type="email" class="form-control"  name="lemail" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd"  name="lpassword" placeholder="Password" required>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input">
                        <label for="checkbox" class="form-check-label">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-secondary btn-block" name="Submit">Login</button>
                  </form>
                  <a href="http://">forgot password ?</a>
                </div>
                <div class="modal-footer">
                  <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal" >signup</a></p>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>
        <!--Login trigger Model ends-->
        <!--Signup model start-->
        <div class="modal fade" id="signup">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" style="background-color:rgba(255,255,255,0.95)">

                <div class="modal-header">
                  <h5 class="modal-title">Sign Up</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
                  <form action="signup_script.php" method="post">
                    <div class="form-group">
                         <label for="email">Email address:</label>
                         <input type="email" class="form-control"  name="eMail" placeholder="Enter email" required>
                         <?php if(isset($_GET['error'])){ echo "<span class='text-danger'>".$_GET['error']."</span>" ;}  ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password" placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="firstName" placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md -6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="lastName" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" required>
                        <label for="checkbox" class="form-check-label">Agree terms and Condition</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="Submit">Sign Up</button>
                  </form>
                </div>
                <div class="modal-footer">
                  <p class="mr-auto">Already Registered?<a href="#login"  data-toggle="modal" data-dismiss="modal">Login</a></p>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close</button>
                </div>
              </div>
            </div>
          </div>
          <!--Signup trigger model ends-->
<?php
?>
<div class="d-flex justify-content-center">
                <div class=" col-md-6  my-5 table-responsive p-5">
                    <table class="table table-striped table-bordered table-hover ">
                    <?php
$sum = 0;
//$query = " SELECT products.price AS Price, products.id, products.name AS Name FROM users_products JOIN products ON users_products.item_id = products.id WHERE users_products.user_id='$user_id' and status='Added To Cart'";
//$result = mysqli_query($con, $query);
//if (mysqli_num_rows($result) >= 1) {
    ?>
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        <tbody>
                                <?php
//while ($row = mysqli_fetch_array($result)) {
        //$sum += $row["Price"];
        //$id = $row["id"] . ", ";
        //echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rp " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
    //}
    //$id = rtrim($id, ", ");
    //echo "<tr><td></td><td>Total</td><td>Rp " . $sum . "</td><td><a href='success.php' class='btn btn-primary'>Confirm to chart</a></td></tr>";
    ?>
                            </tbody>
                            <?php

    echo "<div> <img src='images/wishlist.png' class='image-fluid' height='150' width='150'></div><br/>";
    echo "<div class='text-bold  h5'>Add your wishlist first!<div>";


?>
                        <?php
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--footer -->
        <footer class="footer">
            <div class="container text-center"><span class="text-muted"><b>Copyright&copy;Planet Shopify | All Rights Reserved | Contact Us: +91 90000 00000</b></span></div>
        </footer>
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
