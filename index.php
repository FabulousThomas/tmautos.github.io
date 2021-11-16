<?php require_once("./function/config.php") ?>
<?php require_once('./function/email.php') ?>
<?php require_once('../tmautos.github.io/admin/function/logic.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/faf_logo.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>TM Autos</title>
</head>

<body>
<?php require_once('navbar.php') ?>

    <header class="py-5">
        <div class="container pt-5">
            <div class="py-5"></div>
            <h1 class="text-white display-3 font-weight-bold mb-0 pb-0">TM AUTOS</h1>
            <span class="display-4 font-weight-bold text-white">Best Collection</span
        >
        <p class="text-white">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium
          odit maxime quae minima soluta placeat eius quia rerum exercitationem
          aliquid sit beatae, fugit harum totam vitae voluptas voluptates ipsam
          est? Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Repellendus, magnam.
        </p>
      </div>
      <div class="container pt-3">
        <a href="buy.php" class="btn btn-primary border-left border-right"
          >Buy Now &rarr;</a>
        <!-- <a href="" class="btn btn-outline-danger border-left border-right mx-4">Know more</a> -->
      </div>
    </header>

    <section class="feature-vehicles py-5">
      <h6 class="">what we offer</h6>
      <h1 class="">Featured Cars</h1>
      <div class="container slider-wrapper">
      <?php foreach($selectCars as $sl) {?>
      <div class="col-md-4 col-sm-6 my-3">
        <form action="index.php" method="post" enctype="multipart/form-data">
          <img src="assets/img/<?php echo $sl['image'] ?>" alt="Images" class="img-fluid" />
          <div class="shadow">
            <div class="card-body px-4">
              <div class="d-flex">
              <h4 class="card-title m-0"><?php echo $sl['car_name'] ?></h4>
                <h5 class="price text-primary m-0">$<?php echo $sl['car_price'] ?></h5>
              </div>
              <div class="d-flex">
              <h5 class="name text-secondary m-0"><?php echo $sl['car_brand'] ?></h5>
              <h5 class="m-0"><?php echo $sl['car_color'] ?></h5>
              </div>
              <div class="d-flex">
                <a href="details.html" name="add" class="btn btn-primary mt-1">Buy Now</a>
                <a href="details.html" name="add" class="btn btn-success mt-1">Details</a>
                <input type="hidden" name="product_id" value="$productid" />
              </div>
            </div>
          </div>
        </form>
      </div>
          <?php } ?>
      </div>
    </section>

    <section class="about-us py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="assets/img/car_22.jpg" alt="CAR_22">
          </div>

          <div class="col-md-8">
            <h6>about</h6>
            <h1>TM Autos</h1>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
              </p>
              <p>
              On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
              <a href="buy.php" class="btn btn-primary btn-md">Search for Cars &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <section class="services pb-5">
      <div class="container">
        <h6 class="text-center">services</h6>
            <h1 class="text-center">Our Latest Services</h1>
        <div class="row">
          <div class="col-md-3">
              <i class="fas fa-cog"></i>
              <h5>Car Sales</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
          </div>
          <div class="col-md-3">
              <i class="fas fa-user"></i>
              <h5>Car Purchase</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
          </div>
          <div class="col-md-3">
              <i class="fas fa-car"></i>
              <h5>Car Imports</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
          </div>
          <div class="col-md-3">
              <i class="fas fa-car"></i>
              <h5>Car Export</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
          </div>

          
        </div>
      </div>
    </section>

    <section class="company pb-5">
      <div class="container">
        <!-- <h6 class="text-center">company</h6> -->
            <h1 class="text-center">Company</h1>
        <div class="row justify-content-center align-items-center">
          
          <div class="col-md-5 text-center">
              <img src="assets/img/tm_ceo.JPG" alt="" class="img-fluid">
            <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
            <h5>Ebhodaghe Godwin Samson</h5>
            <h5 class="text-primary">CEO</h5>
          </div>

          <div class="col-md-5 text-center">
              <img src="assets/img/car_1.jpg" alt="" class="img-fluid">
            <p class="text-secondary">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cum odit accusantium sint mollitia. Aperiam veniam labore tenetur aliquid quaerat perspiciatis?</p>
            <h5>Ebhodaghe Godwin Stanley</h5>
            <h5 class="text-primary">SPONSOR</h5>
          </div>
          
        </div>
      </div>
    </section>

    <?php require_once('footer.php') ?>

  <!-- JS -->
  <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!-- SLICK JS -->
  <script
    type="text/javascript"
    src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
  ></script>
    <script src="assets/js/slider.js"></script>
  </body>
</html>