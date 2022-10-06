<?php 

    $category_id = $_GET['id'];

?>
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


    <div class="container">
        <div class="logo">
            <span id="log" style="color: white">eMart</span>
      
        </div>
      
        <div class="right_container">
            
            <div class="bottom">
              <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container-top">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex align-items-center">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                      </li>
                      <a style="color: white;"  class="nav-link dropdown-toggle" href="#" id="category_menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="category_menu">

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
                        <a class="nav-link" href="addcart.php">Cart</a>
                      </li>
                    </ul>


                </div>
              </div>
            </nav>
    
          </div>
      </div>
    </div>
        
        <br>   <br>   <br>   <br>   

        <div class="container_2">

        <span style="color: black; font-weight: bold; font-size: 20pt;">
            <?php echo getCategoryNameById($category_id); ?>
        </span>
        <hr style="border: 2px solid red; color: red; ">
        </div>
  <div class="prod_container">

  <?php
                        

                        $products = getProducts();


                        if ($products->num_rows > 0) {
                          // output data of each row
                          while($row = $products->fetch_assoc()) {
                            if($row['cat_id'] == $category_id){

                                ?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <img src=<?php echo $row['image']?> width="200" height="200"/>
    <h5 class="card-title">Product Name: <?php echo $row['name']?></h5>
    <p class="card-text">Price: <b>৳</b> <?php echo $row['price'] ?></p>
    <a href="products.php?id=<?php echo $row['item_id'] ?>" class="btn btn-primary">View Product</a>
  </div>
</div>

<?php

                            }
                            ?>




                          
                            <?php
                          }
                        } else {
                          ?>
                           <li><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
                  
                        



  



  </div>




  <br><br><br><br><br><br>

  <footer style="margin-top: 500px;text-align:center">
<span id="footer" style="font-color: black;">Delivering Products To Your Home With A Few Clicks</span>

  </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>