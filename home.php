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


    <div class="container rounded  ">
        <div class="logo">
            <span id="log" style="color: white">eMart</span>
      
        </div>
      
        <div class="right_container rounded">
            
            <div class="bottom">
              <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-top">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex align-items-center">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                      </li>
                      <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="category_menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                      </a>
                      <ul style="white" class="dropdown-menu" aria-labelledby="category_menu">

                        <?php
                        include('connection.php');

                        $categories = getCategories();


                        if ($categories->num_rows > 0) {
                          // output data of each row
                          while($row = $categories->fetch_assoc()) {

                            ?>
                          <li><a class="dropdown-item" href='categories.php?id=<?php echo $row['cat_id']; ?>'><?php echo $row['name'] ?></a></li>
                            <?php
                          }
                        } else {
                          ?>
                           <li><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
                  
                        
                    
                      </ul>
                      <li class="nav-item">
                        <a class="nav-link" href="rating.php">Rate Items</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Chat</a>
                      </li>
        </li>
                      <li class="nav-item dropdown">
                      
                      <!-- ADMIN -->
          <!-- <a class="nav-link dropdown-toggle" href="adminlogin.php" id="navbarDropdown" role="button"  aria-expanded="false">
            ADMIN
          </a> -->
          <a class="nav-link" href="adminlogin.php">ADMIN</a>
          <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
          <li class="nav-item">
                        <a class="nav-link" href="display.php">Manage Items</a>
                      </li>
                        <a class="nav-link" href="order/read.php">Manage Orders</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="delivery/index.php">Manage Deliveries</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="verification/display.php">Verification</a>
                      </li>
          </ul> -->
          <!-- upadat work for chat  -->
                        
          

                     
                    </ul>


                </div>
              </div>
            </nav>
    
          </div>
      </div>
    </div>
        
        <br>
        
</ul>
</div>
     <!-- image slider carousel -->

     <section class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active ">
                      <div class="row p-5 mart-bg-info bg-gradient d-flex align-items-center ">
                          <div class="col-lg-7">
                              <h1>Cool Dude Headphone</h1>
                              <p>
                                This is the best headphone in the world for people who just want to waste time in front of funky world.
                            </p>
                            <h1>$420</h1>

                          </div>
                          <div class="col-lg-5">
                            <img src="images/banner-images/headphone.png" class="d-block w-100" alt="...">

                          </div>
                      </div>



                    
                  </div>
                  <div class="carousel-item">
                    <div class="row p-5 mart-bg-info bg-gradient d-flex align-items-center ">
                        <div class="col-lg-7">
                            <h1>X-Box for your living room
                            </h1>
                            <p>
                              This is the best headphone in the world for people who just want to waste time in front of funky world.
                          </p>
                          <h1>$600</h1>
                          

                        </div>
                        <div class="col-lg-5">
                          <img src="images/banner-images/xbox.png" class="d-block w-100" alt="...">

                        </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row p-5  mart-bg-info bg-gradient d-flex align-items-center ">
                        <div class="col-lg-7">
                            <h1>Mega LCD TV For Sports
                            </h1>
                            <p>
                              This is the best headphone in the world for people who just want to waste time in front of funky world.
                          </p>
                          <h1>$1200</h1>
                          

                        </div>
                        <div class="col-lg-5">
                          <img src="images/banner-images/tv.png" class="d-block w-100" alt="...">

                        </div>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    

          </section>

  <br>

  </div>
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