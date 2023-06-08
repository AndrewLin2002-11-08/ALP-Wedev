<?php
session_start();
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
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body style="margin-bottom:200px">
    <!--Header-->
    @include('/header')

    <!--Header ends-->

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
                        <th>Item Name</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wishlists as $wishlist)
                        <tr>
                            <th>{{ $wishlist->name }}</th>
                            <th>{{ $wishlist->price }}</th>
                            <th>{{ $wishlist->qty }}</th>
                            <th>{{ $wishlist->jlh }}</th>
                            <th>
                                <form action="/wishlistDel" method="post">
                                    @csrf
                                    <input id=id type="hidden" name="id" value="{{ $wishlist->id }}">
                                    <button type="submit" role="button" class="btn btn-warning  text-white"
                                        style="margin-bottom:15px" name="delete"
                                        onclick="return confirm('are you sure?')">Delete</button>
                                </form>
                                <form action="/wishlistToCart" method="post">
                                    @csrf
                                    <input id=id type="hidden" name="id" value="{{ $wishlist->id }}">
                                    <input id=email type="hidden" name="email" value="{{ auth()->user()->email }}">
                                    <input id=product_id type="hidden" name="product_id"
                                        value="{{ $wishlist->product_id }}">
                                    <input id=name type="hidden" name="name" value="{{ $wishlist->name }}">
                                    <input id=price type="hidden" name="price" value="{{ $wishlist->price }}">
                                    <input id=price type="hidden" name="qty" value="{{ $wishlist->qty }}">
                                    <input id=status type="hidden" name="status" value="{{ $wishlist->status }}">
                                    <button type="submit" role="button" class="btn btn-warning  text-white"
                                        style="margin-bottom:15px" name="movetocart"
                                        onclick="return confirm('are you sure?')">move to cart</button>
                                </form>

                            </th>
                        </tr>
                    @endforeach
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
    @include('/footer')
    <!--footer end-->

    <!-- end of footer section -->


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
    });
    $(document).ready(function() {

        if (window.location.href.indexOf('#login') != -1) {
            $('#login').modal('show');
        }

    });
</script>
<?php if (isset($_GET['error'])) {
    $z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>
<?php if (isset($_GET['errorl'])) {
    $z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";
} ?>

</html>
