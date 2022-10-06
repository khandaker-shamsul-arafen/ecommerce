<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eMart : Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <link rel="stylesheet" href="home.css">
</head>
<body>
    <!-- Admin panel -->
     <!-- Navbar create start -->
     <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#"><img src="images/logo.png" alt=""></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">eMart</a>
                  </li>
                  <!-- <li class="nav-item">
                    <a class="nav-link" href="#shoes">Shoes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#backpack">Backpack</a>
                  </li> -->
                  <li class="nav-item">
                    <a class="nav-link left-space" href="adminlogin.php">Log out</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
          <br><br><br>

          <!-- admin panel option  -->
<section class = "mb-5 mt-5 ms-5 me-5 " >
    <div class="list-group">
  

        <a href="order/read.php" class="list-group-item list-group-item-action list-group-item-success ms-5">Manage Orders</a>
        <a href="display.php" class="list-group-item list-group-item-action list-group-item-success ms-5">Manage Items</a>
        <a href="delivery/index.php" class="list-group-item list-group-item-action list-group-item-success ms-5">Manage Deliveries</a>
        <a href="verification/display" class="list-group-item list-group-item-action list-group-item-success ms-5">Verification</a>
        
    </div>
</section>
          
          




 
  <footer class="mt-5 text-center">
  <section style="height: 300px;" class="container panda-bg-info d-flex justify-content-center d-flex align-items-center rounded-3" id="subscribe">
            <div>
                <h1>LET'S STAY IN TOUCH</h1>
                <p>Get updates on sales, specials and more</p>
            </div>
        </section>
        <p><small>©2025. eMart. All rights reserved. Dhaka, Bangladesh.</small></p>

    </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>