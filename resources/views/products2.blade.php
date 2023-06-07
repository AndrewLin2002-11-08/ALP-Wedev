<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Women</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a09adcde7e.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--header -->
    @include('/header')
    <!--header ends -->


    <div class="container" style="margin-top:65px">
        <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Bik Shopping!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="watch" style="padding-bottom:55px">
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/Jogger.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Celana Jogger Jeans</h6>
                        <h6>Price :Rp 160000</h6>
                        @auth
                            <form action="/wishlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="9">
                                    <input id=name type="hidden" name="name" value="Celana Jogger Jeans">
                                    <input id=price type="hidden" name="price" value="160000">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                            </form>
                            <form action="/cartlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="9">
                                    <input id=name type="hidden" name="name" value="Celana Jogger Jeans">
                                    <input id=price type="hidden" name="price" value="160000">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To
                                    Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/CelanaP&B.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Celana Pull & Bear</h6>
                        <h6>Price :Rp 180000</h6>
                        @auth
                            <form action="/wishlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="10">
                                    <input id=name type="hidden" name="name" value="Celana Pull & Bear">
                                    <input id=price type="hidden" name="price" value="180000">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                            </form>
                            <form action="/cartlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="10">
                                    <input id=name type="hidden" name="name" value="Celana Pull & Bear">
                                    <input id=price type="hidden" name="price" value="180000">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addcart">Add To
                                    Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/Alexa jeans.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Alexa Jeans</h6>
                        <h6>Price :Rp 180000</h6>

                        @auth
                            <form action="/wishlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="11">
                                    <input id=name type="hidden" name="name" value="Alexa Jeans">
                                    <input id=price type="hidden" name="price" value="180000">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                            </form>
                            <form action="/cartlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="11">
                                    <input id=name type="hidden" name="name" value="Alexa Jeans">
                                    <input id=price type="hidden" name="price" value="180000">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                    Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/Boyfriend jeans white.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>boyfriend jeans white</h6>
                        <h6>Price :Rp 150000</h6>

                        @auth
                            <form action="/wishlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="12">
                                    <input id=name type="hidden" name="name" value="boyfriend jeans white">
                                    <input id=price type="hidden" name="price" value="150000">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                            </form>
                            <form action="/cartlistAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="12">
                                    <input id=name type="hidden" name="name" value="boyfriend jeans white">
                                    <input id=price type="hidden" name="price" value="150000">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                    Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth

                    </div>
                </div>
            </div>
            <div class="row text-center" id="watch">
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/Stice pants.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Stice pants</h6>
                            <h6>Price :Rp 85000</h6>
                            @auth
                                <form action="/wishlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="13">
                                        <input id=name type="hidden" name="name" value="Stice pants">
                                        <input id=price type="hidden" name="price" value="85000">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                                </form>
                                <form action="/cartlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="13">
                                        <input id=name type="hidden" name="name" value="Stice pants">
                                        <input id=price type="hidden" name="price" value="85000">
                                        <input id=status type="hidden" name="status" value="Open">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</button>
                                </form>
                            @else
                                <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</a>
                                </p>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/Highwaist line.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Highwaist line</h6>
                            <h6>Price :Rp 150000</h6>
                            @auth
                                <form action="/wishlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="14">
                                        <input id=name type="hidden" name="name" value="Dress Tunik Allsize">
                                        <input id=price type="hidden" name="price" value="150000">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white">Wishlist</button>
                                </form>
                                <form action="/cartlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="14">
                                        <input id=name type="hidden" name="name" value="Dress Tunik Allsize">
                                        <input id=price type="hidden" name="price" value="150000">
                                        <input id=status type="hidden" name="status" value="Open">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</button>
                                </form>
                            @else
                                <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</a>
                                </p>
                            @endauth
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/Sport legging black.jpg" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Sport legging black</h6>
                            <h6>Price :Rp 95000</h6>

                            @auth
                                <form action="/wishlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="15">
                                        <input id=name type="hidden" name="name" value="Sport legging black">
                                        <input id=price type="hidden" name="price" value="95000">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white"
                                        name="wishlist">Wishlist</button>
                                </form>
                                <form action="/cartlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="15">
                                        <input id=name type="hidden" name="name" value="Sport legging black">
                                        <input id=price type="hidden" name="price" value="95000">
                                        <input id=status type="hidden" name="status" value="Open">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</button>
                                </form>
                            @else
                                <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</a>
                                </p>
                            @endauth

                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-2">
                    <div class="card">
                        <img src="images/CulloteJeans.jpg" alt="" class="img-fluid pb-1"
                            style="height:220px">
                        <div class="figure-caption">
                            <h6>Celana Cullote Jeans</h6>
                            <h6>Price :Rp 110000</h6>

                            @auth
                                <form action="/wishlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="16">
                                        <input id=name type="hidden" name="name" value="Kaos Putih men">
                                        <input id=price type="hidden" name="price" value="95000">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white"
                                        name="wishlist">Wishlist</button>
                                </form>
                                <form action="/cartlistAdd" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                        <input id=product_id type="hidden" name="product_id" value="16">
                                        <input id=name type="hidden" name="name" value="Kaos Putih men">
                                        <input id=price type="hidden" name="price" value="95000">
                                        <input id=status type="hidden" name="status" value="Open">
                                    </div>
                                    <button type="submit" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</button>
                                </form>
                            @else
                                <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To
                                        Cart</a>
                                </p>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end -->



    <!--menu list ends-->
    <!-- footer-->
    @include('/footer')
    <!--footer ends-->

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
                                Instagram : <a href="https://www.instagram.com/biakshopping/" target="_blank"
                                    rel="noopener noreferrer" style="color:#ffc107;"> @biakshopping </a>
                            </p>
                        </div>
                        <!-- end of single contact -->
                        <!-- single contact -->
                        <div class="text-capitalize">
                            <p>
                                <span class="contact-icon mr-2">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </span>
                                Whatsapp : <a
                                    href="https://api.whatsapp.com/send?phone=82197677746&text=Halo%20saya%20ingin%20bertanya%20mengenai%20produk%20anda%20di%20Biak%20Shopping"
                                    target="_blank" rel="noopener noreferrer" style="color:#ffc107;">
                                    +62-821-9767-7746 </a>
                            </p>
                        </div>
                        <!-- end of single contact -->
                        <!-- single contact -->
                        <div class="text-capitalize">
                            <p>
                                <span class="contact-icon mr-2">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                Email : <a href="https://mail.google.com/mail/u/0/#compose" target="_blank"
                                    rel="noopener noreferrer" style="color:#ffc107;"> biakshopping@gmail.com </a>
                            </p>
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
    $(document).ready(function() {
        $('[data-toggle="popover"]').popover();
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
