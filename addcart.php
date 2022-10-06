<?php 
include('connection.php');

    if(isset($_POST['cartBtn'])){
      $product_id = $_POST['product_id'];
      $singlePrice = $_POST['singlePrice'];
      $totalPrice = $_POST['totalPrice'];
      $quantity = $_POST['quantity'];
  

  
          
         $var = addToCart($product_id, $singlePrice, $totalPrice, $quantity);
         $msg = $var;
     
    }else{
      $msg = "[ ]";
    }
    
?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emart : Home</title>
   
    <script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="script.js"></script>
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
            Cart:
        </span>
        <hr style="text-align: center; border: 2px solid red; color: red; ">
        <span style="text-align: center; color: red; font-size: 20pt; background-color: white"><?php echo $msg ?></span><br>
        </div>
        <div class="container_4">
         

<table class="table">
<thead>
<tr>
<th scope="col">Index</th>
<th scope="col">Product Name</th>
<th scope="col">Product Quantity</th>
<th scope="col">Single Price</th>
<th scope="col">Total Price</th>
<th scope="col">Operation</th>
</tr>
</thead>

<tbody>

<?php
      $cart = getCartItems();
      $total = 0;
      //echo var_dump($cart);
      $index = 1;
      if ($cart->num_rows > 0) {
        // output data of each row
        while($row = $cart->fetch_assoc()) {
     
          ?>
          <tr>
            <th scope="row"><?php echo $index ?></th>
              <td><?php echo getProductNameById($row['product_id']);?></td>
              <td><?php echo $row['quantity'] ?> </td>
              <td><b>৳</b> <?php echo $row['single_price'] ?> </td>
              <td><b>৳</b> <?php echo $row['total'] ?> </td>
              <td> 
                <a class="btn btn-danger btn-lg" href="deleteCart.php?id=<?php echo $row['cart_id'] ?>"> X </a>
              </td>
              
              <?php $total += $row['total']; ?>



          </tr>
          <?php
           $index += 1;
           }
        }
?>




</tbody>

</table>


      </div>

      <span style="background-color: white; margin-left: 72%; color: black; font-weight: bold; font-size: 30pt;">
            Total: <b>৳</b> <?php echo $total ?>
        </span><br>
<br><br>
        <a href="gift.php" class="btn-success btn-lg" style="position: absolute; right: 47%;" >Finalize Order</a>

  <br><br><br><br><br><br>

  <footer style="margin-top: 500px;text-align:center">
<span id="footer" style="font-color: black;">Delivering Products To Your Home With A Few Clicks</span>

  </footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>