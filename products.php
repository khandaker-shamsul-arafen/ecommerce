<?php 

    $product_id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emart : Home</title>
   
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <link rel="stylesheet" href="home.css">
</head>
<body>


    <div class="container">
        <div class="logo">
            <span id="log" style="color: white">emart</span>
      
        </div>
      
        <div class="right_container">
            
            <div class="bottom">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
        
        <br>   <br>   
        <input class="btn-primary btn-lg" style="margin-left: 310px;" type="button" value="Back" onclick="history.back()">

        <div class="container_3">

        <span style="color: black; font-weight: bold; font-size: 20pt;">
            <?php echo getProductNameById($product_id); ?> 
        </span>
       
        <hr style="border: 2px solid red; color: red; ">
        </div>
  <div class="prodDetails">

  <?php
                        

                        $products = getProducts();


                        if ($products->num_rows > 0) {
                          // output data of each row
                          while($row = $products->fetch_assoc()) {
                            if($row['item_id'] == $product_id){

                                ?>
<div class="card" style="text-align: center; width: 60%;">
  <div class="card-body">
    <img src=<?php echo $row['image']?> width="200" height="200"/>
    <h5 style="color: black"  class="card-title">Product Name: <?php echo $row['name']?></h5>
    <h5  style="color: black" class="card-title">Product Description: </h5><h4 style="color: black;font-weight: normal;"><?php echo $row['description']?> </h4>
    <h5  style="color: black" class="card-text" id=""><b>Price:</b> <b>৳</b> <span id="price"> <?php echo $row['price'] ?></span></h5>
    <h5  style="color: black" class="card-text">
       <b> Category:</b> <?php echo getCategoryNameById($row['cat_id']); ?>
    </h5>
    <h5  style="color: black" class="card-text">Rating: <?php echo $row['rating'] ?> </h5>
    <h5  id="total" style="color: black" class="card-text">Total Price: <?php echo $row['price'] ?> </h5>

    <div class="quantity buttons_added">
        <form action="addcart.php" method="POST">
        <input id="minus" name="minus" type="button" value="-" class="btn-danger btn-lg"><input id="quantity" type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input id="plus" name="plus" type="button" value="+" class="btn-primary btn-lg">
        <input id="singlePrice" name="singlePrice" type="hidden" value=<?php echo $row['price'] ?>>
        <input id="totalPrice" name="totalPrice" type="hidden" value=<?php echo $row['price'] ?>>
        <input name="product_id" type="hidden" value=<?php echo $product_id ?>>
        <button name="cartBtn" type="submit" class="btn btn-success">Add To Cart</button>
        </form>
	
</div>
   
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

<script>

$(document).ready(function() {

  $('#minus').click(function() {
    let q = document.getElementById("quantity");
    if(q.value > 1){
      q.value = parseInt(q.value) - 1;
    console.log(q.value);
    }
    
    let price = parseInt(document.getElementById('price').textContent);
    //console.log(price);
    let total = document.getElementById('total');
    //console.log(total);
    let result = parseInt(document.getElementById('quantity').value);
    console.log(result);
    let res = (result*price);
    total.innerHTML = "Total: <b>৳</b> " + res;
    let totalPrice = document.getElementById('totalPrice');
    totalPrice.value = res;
    console.log(res);

    
  });
  $('#plus').click(function() {
    let q = document.getElementById("quantity");
    q.value = parseInt(q.value) + 1;
    console.log(q.value);

    let price = parseInt(document.getElementById('price').textContent);
    //console.log(price);
    let total = document.getElementById('total');
    //console.log(total);
    let result = parseInt(document.getElementById('quantity').value);
    console.log(result);
    let res = (result*price);
    total.innerHTML = "Total: <b>৳</b> " + res;
    let totalPrice = document.getElementById('totalPrice');
    totalPrice.value = res;
    console.log(res);

  });

});
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>