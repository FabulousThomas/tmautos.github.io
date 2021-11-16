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
   <title>Admin | Buy Cars</title>
</head>

<body>

   <nav>
      <div class="logo">
         <img src="../../assets/img/tmautos.jpeg" alt="user">
      </div>
      <ul>
         <li><a href="buy.php"><i class="fas fa-car fa-1x text-white"></i> Cars Availlabe</a></li>
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
      <a href="post.php" class="btn btn-md btn-dark">Add New Car</a>
      <h2 class="h-title">Cars Availlabe</h2>

      <div class="table-container">
         <table>
            <thead>
               <tr>
                  <th>S/N</th>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Discount</th>
                  <th>Brand</th>
                  <th>Type</th>
                  <th>Color</th>
                  <th>Picture</th>
                  <th colspan="2">Action</th>
               </tr>
            </thead>

            <tbody>
               <!-- <?php foreach ($selectCars as $sl) { ?> -->
               <tr>
                  <td><?php echo $sl['id']?></td>
                  <td><?php echo $sl['car_name']?></td>
                  <td><?php echo $sl['car_price']?></td>
                  <td><?php echo $sl['discount']?></td>
                  <td><?php echo $sl['car_brand']?></td>
                  <td><?php echo $sl['car_type']?></td>
                  <td><?php echo $sl['car_color']?></td>
                  <td>
                     <img src="../buy/img/<?php echo $sl['image']; ?>" alt="IMAGE">
                  </td>
                  <td>
                  <td>
                     <a href="edit.php?id=<?php echo $sl['id']; ?>" class="edit">Edit</a>
                  </td>
                  <td>
                     <form method="POST">
                        <input type="text" hidden name="id" value="<?php echo $sl['id']; ?>">
                        <button type="submit" class="delete" name="delete_post">Delete</button>
                     </form>
                  </td>
                  </td>
               </tr>
               <!-- <?php } ?> -->
            </tbody>
         </table>
      </div>
   </div>


   <!-- JS -->
   <script src="../assets/js/script.js"></script>
</body>

</html>