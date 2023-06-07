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
 <div class="container pt-3 text-center">
        <div class="row align-items-center justify-content-center">
            <div class="col-6 col-md-3 py-3 " >
                <a href="/products">
                  <img src="https://i.pinimg.com/236x/b5/d1/1d/b5d11d2dea314987caab6cc20106160b.jpg" class="img-fluid zoom" alt="" style="border-radius:0.5rem" >
                     <div class="h5 pt-3 font-weight-bolder">
                        Clothing
                     </div>
                  </a>
             </div>
            <div class="col-6 col-md-3 py-3">
                <a href="/products2">
                 <img src="https://i.pinimg.com/236x/a3/a1/e3/a3a1e3aa39d6bff4546ba4d3f95d5d99.jpg" class="img-fluid   " alt="" style="border-radius:0.5rem">
                <div class="h5 pt-3 font-weight-bolder">
                    Trousers
                 </div>
             </a>
             </div>
        </div>
    </div>
    <!--menu highlights end-->

    
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
