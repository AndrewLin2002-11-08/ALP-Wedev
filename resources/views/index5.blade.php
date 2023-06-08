<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bik Shopping | Online Shopping Site for Women</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/a09adcde7e.js" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css" />
</head>

<body style="margin-bottom:200px">
    <!--Header-->
    @include('/header')
    <!--Header ends-->





    <div id="content">
        <div id="bg" class=" ">
            <div class="container" style="padding-top:150px">
                <div class="mx-auto p-5 text-white" id="banner_content" style="border-radius: 0.5rem;">
                    <h1>EXPLORE YOUR STYLE</h1>
                    <p>All the Trends You Need This Season </p>
                    <a href="/products" class="btn btn-warning btn-lg text-white">Shop Now</a>

                </div>
            </div>

        </div>
    </div>
    <!--menu highlights start-->

    <div class="text-center pt-4 h3">
        <h1> Best for Women </h1>
    </div>
    <!--menu highlights start-->

    <!--menu highlights end-->

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
                        <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
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
                        <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
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
                        <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
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
                        <p><a href="/index#login" role="button" class="btn btn-warning  text-white" style="margin-bottom:15px">Add To Cart</a>
                        </p>
                    @endauth

                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="col-sm-12">
                    <nav>
                        <ul class="pagination justify-content-center">
                            <li class="page-item"><a class="page-link" href="/index5">&laquo;</a>
                            <li>
                            <li class="page-item"><a class="page-link" href="/index5">1</a>
                            <li>
                            <li class="page-item"><a class="page-link" href="/index2">2</a>
                            <li>
                            <li class="page-item"><a class="page-link" href="/index3">3</a>
                            <li>
                            <li class="page-item"><a class="page-link" href="/index4">4</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="/index4">&raquo;</a>
                            <li>
                        </ul>
                    </nav>
                    <br>
                </div>
                <!--footer -->
                @include('/footer')
                <!--footer end-->

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
