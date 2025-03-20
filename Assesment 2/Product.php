<?php
$server_NAME = 'localhost';
$user_name = 'root';
$user_password = '';
$dbName = 'bcar1';

$con = mysqli_connect($server_NAME, $user_name, $user_password, $dbName);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

$qur = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_1'";
$qur2 = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_2'";
$qur3 = "SELECT * FROM `proinfo` WHERE `ProID`='Pro_3'";
$exc = mysqli_query($con, $qur);
$exc2 = mysqli_query($con, $qur2);
$exc3 = mysqli_query($con, $qur3);
$detPro = mysqli_fetch_assoc($exc);
$detPro2 = mysqli_fetch_assoc($exc2);
$detPro3 = mysqli_fetch_assoc($exc3);

if (!$exc) {
    die("Query failed: " . $con->error);
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Product Details</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Amazon.in</a>
        <div class="dropdown mr-3">
            <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                All
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Home</a>
                <a class="dropdown-item" href="#">Category</a>
                <a class="dropdown-item" href="#">Contact</a>
            </div>
        </div>
        <div class="ml-auto">
            <a class="btn btn-success" href="#">Login</a>
            <a class="btn btn-primary" href="#">Sign Up</a>
        </div>
    </nav>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <form class="form-inline mx-auto" style="margin-top: -60px;">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="https://www.iqoo.com/in"><img height="400pt" width="400pt" class="d-block w-100" src="Snap.jpg" alt="First slide" ></a>
    </div>
    <div class="carousel-item">
        <a href="https://www.mi.com/in/product/redmi-note-13-pro-plus-5g/?srsltid=AfmBOop-5v15_xaIdnsGd7LnsyPe4v0vGq6VErHuvgi2_ikmNwe5_Kxl"><img height="400pt" width="400pt" class="d-block w-100" src="Snap2.jpeg" alt="Second slide"></a>
    </div>
    <div class="carousel-item">
        <a href="https://rog.asus.com/laptops/rog-strix/rog-strix-g16-2025/"><img height="400pt" width="400pt" class="d-block w-100" src="Snap3.webp" alt="Third slide"></a>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


    <!-- <div class="container-fluid p-0">
        <img src="Snap.jpg" class="img-fluid" alt="Forum Banner" style="width:2000px; height: 300px;">
    </div> -->
    <div class="container mt-5">
        <h1>Product Details</h1>

        <div class="row">

            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detPro['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detPro['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detPro['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detPro2['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detPro2['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detPro2['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $detPro3['ProImg'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $detPro3['ProTitle'] ?></h5>
                        <p class="card-text"><?= $detPro3['ProDes'] ?></p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

        </div>


    </div>
<center><footer>Copyright Disclaimer 2017</footer></center>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>

<?php
$con->close();
?>