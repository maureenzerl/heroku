<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />

    <title>Edu Airline</title>
</head>

<body>
    <nav class="navbar justify-content-center navbar-expand-sm bg-light">
        <div class="container-fluid nav1">
            <a class="navbar-brand" href="#">
                <i class="bi bi-airplane-fill">&nbsp Edu Airline</i>
            </a>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link font" href="#">All flights &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font" href="#">Schedule &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font" href="#">Passengers &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font" href="#">Your orders</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex" role="search">
                <button class="btn btn2" type="submit">
                    <input type="text" placeholder="Search . . ." class="srch">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </form>
            &nbsp;
            &nbsp;
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link font" href="#">Sign in</a>
                </li>
                &nbsp;
                &nbsp;
                <li class="nav-item">
                    <a class="btn btn-light btn1" href="#"> Sign up </a>
                </li>
            </ul>
        </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <h1>Paris</h1>
                                <h3>France</h3>
                                <p>Get the best price before the end of this month.</p>
                                <button class="btn book-btn"><i class="bi bi-cart-check-fill">&nbsp Book Now</i></button>
                                <button class="btn info-btn">Get More Information</button>
                            </div>
                            <div class="col-4">
                                <div class="m-auto img1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <h1>Tokyo</h1>
                                <h3>Japan</h3>
                                <p>Fly to see Japan with special offer just by now.</p>
                                <button class="btn book-btn"><i class="bi bi-cart-check-fill">&nbsp Book Now</i></button>
                                <button class="btn info-btn">Get More Information</button>
                            </div>
                            <div class="col-4">
                                <div class="m-auto img1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-8">
                                <h1>Singapore</h1>
                                <h3>Singapore</h3>
                                <p>Holiday season is coming, book now to get the best deal.</p>
                                <button class="btn book-btn"><i class="bi bi-cart-check-fill">&nbsp Book Now</i></button>
                                <button class="btn info-btn">Get More Information</button>
                            </div>
                            <div class="col-4">
                                <div class="m-auto img1"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class=" carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div>
        <i class="fa-solid fa-angles-down text-center d-block fa-3x" style="color: #6C4AB6;"></i>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex">
                From :
            </div>
            <div class="col-4 d-flex">
                To :
            </div>
            <div class="col-4 d-flex">
                Destination Time :
            </div>
        </div>
        <div class="row">
            <div class="col-4 d-flex justify-content-evenly">
                <select name="Country" id="countryName" class="p-2 flex-fill btn opt">
                    <option value="1">Indonesia</option>
                    <option value="2">Japan</option>
                    <option value="3">Singapore</option>
                    <option value="4">France</option>
                    <option value="5">United States</option>
                    <option value="6">Australia</option>
                </select>
            </div>
            <div class="col-4 d-flex justify-content-evenly">
                <select name="Country" id="countryName" class="p-2 flex-fill btn opt">
                    <option value="1">Indonesia</option>
                    <option value="2">Japan</option>
                    <option value="3">Singapore</option>
                    <option value="4">France</option>
                    <option value="5">United States</option>
                    <option value="6">Australia</option>
                </select>
            </div>
            <div class="col-4 d-flex justify-content-evenly">
                <input type="datetime-local" placeholder="Departure Time : " id="birthdaytime" name="birthdaytime" class="p-2 flex-fill btn opt">
                &nbsp &nbsp &nbsp
                <button class="btn srch2"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card bg-light bg">
            <div class="row">
                <div class="col-3">
                    <img src="photo/France.jpg" class="img-fluid img2" alt="destination1">
                </div>
                <div class="col-6 m-auto text-center div2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <h4 class="text-start">Paris, France</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="text-end">2 - 8 April</h4>
                        </div>
                    </div>
                    <br> <br>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>02:30</p>
                        </div>
                        <div class="col-2">
                            <img src="https://img.icons8.com/ios/50/null/airplane-mode-on--v1.png" class="img-icon" />
                        </div>
                        <div class="col-2">
                            <p>05:00</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>Indonesia</p>
                        </div>
                        <div class="col-2">
                            <p>Direct</p>
                        </div>
                        <div class="col-2">
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 align-items-start">
                            <h5>Rp 15.000.000</h5>
                        </div>
                        <div class="col-5 align-items-start">
                            <i class="fas fa-utensils bg1"></i> &nbsp; &nbsp;
                            <i class="fas fa-shopping-bag bg1"></i>
                            <i></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn book-btn2">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-light bg">
            <div class="row">
                <div class="col-3">
                    <img src="photo/France.jpg" class="img-fluid img2" alt="destination1">
                </div>
                <div class="col-6 m-auto text-center div2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <h4 class="text-start">Paris, France</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="text-end">2 - 8 April</h4>
                        </div>
                    </div>
                    <br> <br>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>02:30</p>
                        </div>
                        <div class="col-2">
                            <img src="https://img.icons8.com/ios/50/null/airplane-mode-on--v1.png" class="img-icon" />
                        </div>
                        <div class="col-2">
                            <p>05:00</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>Indonesia</p>
                        </div>
                        <div class="col-2">
                            <p>Direct</p>
                        </div>
                        <div class="col-2">
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 align-items-start">
                            <h5>Rp 15.000.000</h5>
                        </div>
                        <div class="col-5 align-items-start">
                            <i class="fas fa-utensils bg1"></i> &nbsp; &nbsp;
                            <i class="fas fa-shopping-bag bg1"></i>
                            <i></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn book-btn2">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-light bg">
            <div class="row">
                <div class="col-3">
                    <img src="photo/France.jpg" class="img-fluid img2" alt="destination1">
                </div>
                <div class="col-6 m-auto text-center div2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <h4 class="text-start">Paris, France</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="text-end">2 - 8 April</h4>
                        </div>
                    </div>
                    <br> <br>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>02:30</p>
                        </div>
                        <div class="col-2">
                            <img src="https://img.icons8.com/ios/50/null/airplane-mode-on--v1.png" class="img-icon" />
                        </div>
                        <div class="col-2">
                            <p>05:00</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>Indonesia</p>
                        </div>
                        <div class="col-2">
                            <p>Direct</p>
                        </div>
                        <div class="col-2">
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 align-items-start">
                            <h5>Rp 15.000.000</h5>
                        </div>
                        <div class="col-5 align-items-start">
                            <i class="fas fa-utensils bg1"></i> &nbsp; &nbsp;
                            <i class="fas fa-shopping-bag bg1"></i>
                            <i></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn book-btn2">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-light bg">
            <div class="row">
                <div class="col-3">
                    <img src="photo/France.jpg" class="img-fluid img2" alt="destination1">
                </div>
                <div class="col-6 m-auto text-center div2">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <h4 class="text-start">Paris, France</h4>
                        </div>
                        <div class="col-3">
                            <h4 class="text-end">2 - 8 April</h4>
                        </div>
                    </div>
                    <br> <br>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>02:30</p>
                        </div>
                        <div class="col-2">
                            <img src="https://img.icons8.com/ios/50/null/airplane-mode-on--v1.png" class="img-icon" />
                        </div>
                        <div class="col-2">
                            <p>05:00</p>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-2">
                            <p>Indonesia</p>
                        </div>
                        <div class="col-2">
                            <p>Direct</p>
                        </div>
                        <div class="col-2">
                            <p>France</p>
                        </div>
                    </div>
                </div>
                <div class="col-3 m-auto text-center">
                    <div class="row justify-content-center">
                        <div class="col-6 align-items-start">
                            <h5>Rp 15.000.000</h5>
                        </div>
                        <div class="col-5 align-items-start">
                            <i class="fas fa-utensils bg1"></i> &nbsp; &nbsp;
                            <i class="fas fa-shopping-bag bg1"></i>
                            <i></i>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button class="btn book-btn2">Book Now</button>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </div>

    <div class="card-footer ftr">
        <nav class="navbar navbar-expand">
            <div class="container-fluid">
                <a class="navbar-brand font1" href="#">
                    <i class="bi bi-airplane-fill">&nbsp Edu Airline</i>
                </a>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link font1" href="#">All flights &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font1" href="#">Schedule &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font1" href="#">Passengers &nbsp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font1" href="#">Your orders</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- connection antara project dan database -->
    <?php
    $servername = "localhost";
    $database   = "tugas_sql";
    $username   = "root";
    $password   = "";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>

</body>

</html>