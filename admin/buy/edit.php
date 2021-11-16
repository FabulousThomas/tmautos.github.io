<?php require_once('../function/logic.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- FONTAWESOME -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" />
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" />
   <link rel="stylesheet" href="../assets/css/admin.css">
   <title>Admin | Edit/Update</title>
</head>

<body>

   <nav>
      <div class="logo">
         <img src="../../assets/img/tmautos.jpeg" alt="user">
      </div>
      <ul>
         <li><i class="fas fa-car text-white"></i><a href="buy.php">Cars Availlabe</a></li>
         <li><a href="../drugs/drug.php">Drugs</a></li>
         <li><a href="#">Blog</a></li>
         <li><a href="#">Contact Me</a></li>
      </ul>
   </nav>

   <header>
      <button id="toggle" class="toggle">
         <i class="fa fa-bars fa-2x"></i>
      </button>

      <h1>Admin</h1>
   </header>

   <div class="container pt-2">
      <h2 class="h-title">Edit / Update</h2>

      <?php foreach($selectCarsById as $sl) { ?>
        <form action="#" class="request-form" method="POST" enctype="multipart/form-data">
         <div class="row justify-content-center">
            <div class="col-md-5 form-container">
               <div class="d-flex">
                  <div class="form-group mr-2">
                     <label for="" class="label">Car Type</label>
                     <input type="text" class="form-control" value="<?php echo $sl['car_type']?>" name="car_type" placeholder="Type">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Car Color</label>
                     <input type="text" class="form-control" value="<?php echo $sl['car_color']?>" name="car_color" placeholder="Color">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group mr-2">
                     <label for="" class="label">Car Name</label>
                     <input type="text" class="form-control" value="<?php echo $sl['car_name']?>" name="car_name" placeholder="Chevrolet, Honda, BMW etc..">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Car Brand</label>
                     <input type="text" class="form-control" value="<?php echo $sl['car_brand']?>" name="car_brand" placeholder="Brand">
                  </div>
               </div>
               <div class="d-flex">
                  <div class="form-group mr-2">
                     <label for="" class="label">Car Price</label>
                     <input type="number" class="form-control" value="<?php echo $sl['car_price']?>" name="car_price" placeholder="Price">
                  </div>
                  <div class="form-group ml-2">
                     <label for="" class="label">Discount Price</label>
                     <input type="number" class="form-control" value="<?php echo $sl['discount']?>" name="discount" placeholder="Discount Price">
                  </div>
               </div>
            </div>

            <div class="col-md-5 form-container">
               <div class="form-group">
                  <label for="" class="label">Upload Image (<small>select multiple</small>)</label>
                  <input type="file" multiple class="form-control ui-timepicker-input"  value="<?php echo $sl['image']?>" name="image">
               </div>
               <div class="form-group">
                  <label for="">Car Discription</label>
                  <textarea name="discription" name="discription" class="form-control" placeholder="Discription" rows="5"><?php echo $sl['discription']?></textarea>
               </div>
               <div class="form-group">
                  <button class="btn btn-dark px-4" name="update_post">Update &rarr;</button>
               </div>

            </div>
         </div>
      </form>
    <?php } ?>
      
   </div>


   <!-- JS -->
   <script src="../assets/js/script.js "></script>
</body>

</html>