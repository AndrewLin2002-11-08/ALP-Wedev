<!--Navigation bar start-->
<nav class="navbar fixed-top navbar-expand-sm navbar-dark" style="background-color:rgba(0,0,0,0.5)">

    <a href="/index" class="navbar-brand">
        <!-- <img src="img/Bikshop.png" alt="company logo" /> -->
        <div class="timeline-image"><img class="rounded-circle img-fluid" src="images/Bikshop_logo.png" alt="..."
                style="width: 50px;
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
                <li class="nav-item"><a href="/index5" class="nav-link">Offers</a></li>
                @auth
                    <li class="nav-item"><a href="/wishlist" class="nav-link">Wishlist</a></li>
                    <li class="nav-item"><a href="/cartlist" class="nav-link">Cart</a></li>
                @endauth
            </ul>

            @auth
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbar-drop" data-toggle="dropdown">
                            Welcome back, {{ auth()->user()->email }}
                        </a>
                        <div class="dropdown-menu">
                            <form action="/logout" method="post">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </li>
                </ul>
            @else
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item "><a href="#signup" class="nav-link"data-toggle="modal"><i class="fa fa-user"></i>
                            Sign Up</a></li>
                    <li class="nav-item "><a href="#login" class="nav-link" data-toggle="modal"><i
                                class="fa fa-sign-in"></i> Login</a></li>
                </ul>
            @endauth
        </div>
    </div>
    </div>
</nav>
<!--navigation bar end-->

<!--Login trigger Modal-->
<div class="modal fade" id="login">
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
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password"
                            placeholder="Password" required>
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
                <p class="mr-auto">New User? <a href="#signup" data-toggle="modal" data-dismiss="modal">signup</a>
                </p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                    @csrf
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email"
                            required>
                        <?php if (isset($_GET['error'])) {
                            echo "<span class='text-danger'>" . $_GET['error'] . '</span>';
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="text" class="form-control" name="phone_number" placeholder="Enter phone number"
                            required>
                        <?php if (isset($_GET['error'])) {
                            echo "<span class='text-danger'>" . $_GET['error'] . '</span>';
                        } ?>
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password"
                            placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="validation1">First Name</label>
                            <input type="text" class="form-control" id="validation1" name="first_name"
                                placeholder="First Name" required>
                        </div>
                        <div class="form-group col-md -6">
                            <label for="validation2">Last Name</label>
                            <input type="text" class="form-control" id="validation2" name="last_name"
                                placeholder="Last Name">
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
                <p class="mr-auto">Already Registered?<a href="#login" data-toggle="modal"
                        data-dismiss="modal">Login</a></p>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--Signup trigger model ends-->
<!--Navigation bar end-->
