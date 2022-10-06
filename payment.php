<!DOCTYPE html>
<html>
<head>
    <title>Payment Checkout</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/payment.css">
</head>

  <body class="bg-light">

    <div class="container">
    
   
        
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="images/payment-icon.png" alt="" width="72" height="72">
        <h2>Payment Details</h2>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">
              <?php 
                  include('connection.php');

                  echo getCartNumber();


              ?>
            </span>
          </h4>
          <ul class="list-group mb-3">

          <?php
  
      $cart = getCartItems();
      $total = 0;
      //echo var_dump($cart);

      if ($cart->num_rows > 0) {
        // output data of each row
        while($row = $cart->fetch_assoc()) {
     
          ?>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0"><?php echo getProductNameById($row['product_id']);?></h6>
              </div>
              <span class="text-muted"><b>৳</b> <?php echo $row['total'] ?> </span>
            </li>
              
           <?php $total += $row['total']; ?>



          
          <?php
           
           }
        }
?>
           
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
               
              </div>
              
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (BDT)</span>
              
              <strong> <b>৳</b> <?php echo $total?></strong>
            </li>
          </ul>

        
        </div>
          
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form action="buy.php" method="POST" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Enter Your Name: </label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="" required>
                <div class="invalid-feedback">
                  Valid name is required.
                </div>
              </div>
              
            </div>
<!-- Email -->

            <div class="mb-3">
              <label for="email">Email <span class="text-muted"></span></label>
              <input name="customer_email" type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <textarea class="form-control" id="address" name="address" required></textarea>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <label for="firstName">Transaction ID:  </label>
                <input type="text" class="form-control" id="name" name="transactionID" placeholder="Transaction ID" value="" required>
            <hr class="mb-4">
       
            <div>
                <button class="btn btn-primary btn-lg" type="submit" onclick="history.back()">Cancel</button>
                <button name="buyBtn" class="btn btn-success btn-lg" type="submit">Checkout</button>
            </div>
            <input name="total_price" type="hidden" value='<?php echo $total?>'>
          </form>
        </div> 
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2021 Goodies Bazar</p>
      </footer>
  
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
