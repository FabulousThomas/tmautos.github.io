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
    <title>TM Autos | About Us</title>
</head>

<body>
    <!-- NAVIGATION SECTION -->
    <?php require_once('navbar.php') ?>

    <header>
        <div class="container pt-5">
            <div class="py-5"></div>
            <h1 class="text-white display-3 font-weight-bold mb-0 pb-0">TM AUTOS</h1>
            <span class="display-4 font-weight-bold text-white">Best Collection</span>
        </div>
    </header>

    <section class="contact py-5">
        <div class="container">
            <h2 class="text-center pb-4">Contact Us Today</h2>
            <div class="row">
                <div class="col-md-5 pt-4">
                    <div id="info">
                        <div>
                            <p class="m-0"><i class="fas fa-home"></i> Address</p>
                            <p class="lead font-weight-bold">
                                123 Fake Mountain View, Lagos, Nigeria, West Africa
                            </p>
                        </div>

                        <div>
                            <p class="m-0"><i class="fas fa-phone"></i> Phone</p>
                            <a href="tel:+2348060578499" class="text-dark d-block">+234 806 057 8499</a>
                        </div>

                        <div>
                            <p class="m-0"><i class="fas fa-envelope"></i> Email</p>
                            <a href="mailto:" class="text-dark d-block">tmautos@gmail.com</a>
                        </div>

                        <div class="">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="p-5 form-container">

                        <form action="#" class="request-form">
                            <div class="form-group">
                                <label for="" class="label">full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name" />
                            </div>
                            <div class="form-group">
                                <label for="" class="label">email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                            </div>
                            <div class="form-group">
                                <label for="" class="label">phone number</label>
                                <input type="tel" name="tel" class="form-control" placeholder="Phone Number" />
                            </div>
                            <div class="form-group">
                                <label for="" class="label">message</label>
                                <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
                            </div>
                            <button class="btn btn-primary btn-md form-control">
                         Send Message &rarr;
                       </button>

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div id="map"></div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require_once('footer.php') ?>

    <!-- JS -->
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <!-- SLICK JS -->
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="assets/js/map.js"></script>
    <script type="text/javascript" async defer src="https://maps.googleapis.com/maps/api/js?sensor=falsekey=AIzaSyDUx9NjO-_oTyW3IDOXPWH0N5vX7TdU0-Y&callback=initMap">
    </script>
</body>

</html>