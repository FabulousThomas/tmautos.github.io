<footer class="footer py-5 mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-4">
            <h4>Send us a message</h4>
            <form action="" method="POST" id="form" enctype="multipart/form-data">
               <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name">
               </div>
               <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email">
               </div>
               <div class="form-group">
                  <input type="tel" name="tel" class="form-control" placeholder="Phone Number">
               </div>
               <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Subject">
               </div>
               <div class="form-group">
                  <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
               </div>
               <button class="btn btn-primary btn-md px-4" name="send_msg">Send &rarr;</button>
            </form>
         </div>

         <div class="col-md-3">
            <h4>Information</h4>
            <div id="links">
               <a href="buy.php">Buy a Car</a>
               <a href="sell.php">Sell a Car</a>
               <a href="about.php">About Us</a>
               <a href="contact.php">Contact</a>
               <a href="#">Terms and Condition</a>
               <a href="#">Best Price Guarantee</a>
               <a href="#">Privacy Policy</a>
            </div>
         </div>

         <div class="col-md-3">
            <h4>Have a Question?</h4>
            <div id="info">
               <i class="fas fa-home"></i>
               <p class="lead font-weight-bold">123 Fake Mountain View, Lagos, Nigeria, West Africa</p>

               <i class="fas fa-phone"></i> <a href="tel:+2348060578499" class="text-white d-block mb-3">+234 806 057 8499</a>

               <i class="fas fa-envelope"></i> <a href="mailto:" class="text-white d-block">tmautos@gmail.com</a>
            </div>

            <div class="pt-4">
               <a href="#"><i class="fab fa-facebook"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-whatsapp"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
         </div>
      </div>
   </div>

   <div class="copy pt-5">
            <p class="text-center">
                copyright 
                &copy;<script>
                    var currentYear = new Date().getFullYear();
                    document.write(currentYear);
                </script>
                <i class="fas fa-car text-white"></i><span class="text-primary">TM Autos</span> | All rights reserved
            </p>
        </div>
</footer>