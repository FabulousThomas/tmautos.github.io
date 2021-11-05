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
    <title>TM Autos | Sell a Car</title>
</head>

<body>
    <!-- NAVIGATION SECTION -->
    <?php require_once('navbar.php') ?>

    <header class="py-5">
        <div class="container pt-5">
            <div class="py-5"></div>
            <h1 class="text-white display-3 font-weight-bold mb-0 pb-0">TM AUTOS</h1>
            <span class="display-4 font-weight-bold text-white">Best Collection<span>
        </div>
    </header>

    <section class="sell-vehicles py-5">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 form-container">

                    <form action="#" class="request-form">
                        <h4 class="text-center text-primary py-3"><i class="fas fa-car text-white"></i>TM Autos</h4>
                        <div class="form-group">
                            <label for="" class="label">Seller Name</label>
                            <input type="text" class="form-control" placeholder="Full Name">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Email Address</label>
                            <input type="text" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Home Address</label>
                            <input type="text" class="form-control ui-timepicker-input" id="home_address" placeholder="Address" autocomplete="off">
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="" class="label">Car Type</label>
                                <input type="text" class="form-control" id="car_type" placeholder="Type">
                            </div>
                            <div class="form-group ml-2">
                                <label for="" class="label">Car Color</label>
                                <input type="text" class="form-control" id="car_color" placeholder="Color">
                            </div>
                        </div>
                        <div class="d-flex">
                            <div class="form-group mr-2">
                                <label for="" class="label">Car Name</label>
                                <input type="text" class="form-control" id="car_name" placeholder="Chevrolet, Honda, BMW etc..">
                            </div>
                            <div class="form-group ml-2">
                                <label for="" class="label">Price</label>
                                <input type="text" class="form-control" id="price" placeholder="Price">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="label">Upload Image (<small>select multiple</small>)</label>
                            <input type="file" multiple class="form-control ui-timepicker-input" id="file" placeholder="Time" autocomplete="off">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Submit &rarr;" class="btn btn-primary px-4">
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <h2 class="mt-5 text-dark text-center">Better Ways to Sell Your Car</h2>
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <i class="fas fa-user"></i>
                            <p class="text-enter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex doloribus excepturi odit omnis maxime accusantium, aut et expedita hic.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-car"></i>
                            <p class="text-enter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex doloribus excepturi odit omnis maxime accusantium, aut et expedita hic.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fas fa-shopping-cart"></i>
                            <p class="text-enter">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex doloribus excepturi odit omnis maxime accusantium, aut et expedita hic.</p>
                        </div>
                    </div>
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
        <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>