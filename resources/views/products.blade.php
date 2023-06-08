<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Planet Shopify | Online Shopping Site for Men</title>
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

    <div class="container" style="margin-top:60px">
        <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Bik Shopping!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
        <hr />
        <!--menu list-->
        <div class="row text-center" id="watch">
            <div class="col-md-3 col-6 py-2">
                <div class="card">
                    <img src="images/KemejaStrip.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Kemeja Strip Allsize</h6>
                        <h6>Price :Rp 115000</h6>
                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="1">
                                    <input id=name type="hidden" name="name" value="Kemeja Strip Allsize">
                                    <input id=price type="hidden" name="price" value="115000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
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
                    <img src="images/DressTunik.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Dress Tunik Allsize</h6>
                        <h6>Price :Rp 75000</h6>
                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="2">
                                    <input id=name type="hidden" name="name" value="Dress Tunik Allsize">
                                    <input id=price type="hidden" name="price" value="75000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
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
                    <img src="images/KemejaPuspa.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Kemeja Puspa Allsize</h6>
                        <h6>Price :Rp 65000</h6>

                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="3">
                                    <input id=name type="hidden" name="name" value="Kemeja Puspa Allsize">
                                    <input id=price type="hidden" name="price" value="65000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
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
                    <img src="images/KaosP&B.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Kaos Pull & Bear Maroon</h6>
                        <h6>Price :Rp 65000</h6>

                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="4">
                                    <input id=name type="hidden" name="name" value="Kaos Pull & Bear Maroon">
                                    <input id=price type="hidden" name="price" value="65000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shirt" style="padding-bottom:65px">
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/Cardigan.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Cardigan rajut Burgundy</h6>
                        <h6>Price :Rp 85000</h6>

                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="5">
                                    <input id=name type="hidden" name="name" value="Cardigan rajut Burgundy">
                                    <input id=price type="hidden" name="price" value="85000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth

                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/JaketSelly.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Jaket Selly Mocca</h6>
                        <h6>Price :Rp 85000</h6>
                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="6">
                                    <input id=name type="hidden" name="name" value="Jaket Selly Mocca">
                                    <input id=price type="hidden" name="price" value="85000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button"
                                    class="btn btn-warning  text-white "style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/BajuNature.jpg" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Kaos Street Nature</h6>
                        <h6>Price :Rp 55000</h6>
                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="7">
                                    <input id=name type="hidden" name="name" value="Kaos Street Nature">
                                    <input id=price type="hidden" name="price" value="55000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
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
                    <img src="images/kaos putih.jpg" alt="" class="img-fluid pb-1" style = "height:220px";>
                    <div class="figure-caption">
                        <h6>Kaos Putih men</h6>
                        <h6>Price :Rp 95000</h6>

                        @auth
                            <form action="/listAdd" method="post">
                                @csrf
                                <div class="form-group">
                                    <input id=email type="hidden" name="email" value={{ auth()->user()->email }}>
                                    <input id=product_id type="hidden" name="product_id" value="8">
                                    <input id=name type="hidden" name="name" value="Kaos Putih men">
                                    <input id=price type="hidden" name="price" value="95000">
                                    <label for="fname">Qty :</label>
                                    <input id=qty type="number" name="qty">
                                    <input id=status type="hidden" name="status" value="Open">
                                </div>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="wishlist">Wishlist</button>
                                <button type="submit" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px" name="addlist" value="cartlist">Add To Cart</button>
                            </form>
                        @else
                            <p><a href="/index#login" role="button" class="btn btn-warning  text-white"
                                    style="margin-bottom:15px">Add To Cart</a>
                            </p>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!--menu list ends-->
    <!-- footer-->
    @include('/footer')
    <!-- footer end-->

    <!-- footer section -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-10 mx-auto text-center">
                    <!-- footer icons -->
                    <div class="footer-contact d-flex flex-column mt-5">
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
                                    target="_blank" rel="noopener noreferrer" style="color:#ffc107">
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
                                    rel="noopener noreferrer" style="color:#ffc107"> biakshopping@gmail.com </a>
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

</html>
