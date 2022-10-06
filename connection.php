<?php

function Connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "emart";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    return $conn;
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
}

function getProducts(){
    $conn = Connect();
    $sql = "SELECT * from products";

    $result = $conn->query($sql);
    
    return $result;
}

function getCategories(){
  $conn = Connect();
  $sql = "SELECT * from categories";

  $result = $conn->query($sql);
  
  return $result;
}

function getCategoryNameById($id){
  $conn = Connect();
  $sql = "SELECT name from categories where cat_id='$id'";

  $result = $conn->query($sql);

  $name = $result->fetch_assoc();
  $name = $name['name'];
  return $name;
}

function getProductNameById($id){
  $conn = Connect();
  $sql = "SELECT name from products where item_id='$id'";

  $result = $conn->query($sql);

  $name = $result->fetch_assoc();
  $name = $name['name'];
  return $name;
}
function deleteCartItem($id){
  $conn = Connect();
  $sql = "DELETE FROM `cart` where `cart_id`='$id'";



  $result = $conn->query($sql);

  if ($result === TRUE) {
    return "cart deleted successfully";
    
    
  } else {
   return "Error: " . $sql . "<br>" . $conn->error;
    
  }

}
function addToCart($product_id, $singlePrice, $totalPrice, $quantity){
  $conn = Connect();
  $sql = "INSERT INTO cart (product_id, quantity, single_price, total, customer_email) VALUES ($product_id, $quantity, $singlePrice, $totalPrice, 'default@gmail.com')";



  $result = $conn->query($sql);

  if ($result === TRUE) {
    return "New record created successfully";
    
    
  } else {
   return "Error: " . $sql . "<br>" . $conn->error;
    
  }
}
function getCartNumber(){
  $conn = Connect();

  $sql = "SELECT * FROM cart";

  $result = $conn->query($sql);
   return mysqli_num_rows($result);

}
function getCartItems(){

  $conn = Connect();
  $sql = "SELECT * from cart";

  $result = $conn->query($sql);

  return $result;


}

function addOrder($order_type, $name, $order_date, $order_address, $status, $total_price, $customer_email, $transaction_id){

  $conn = Connect();
  $sql = "INSERT INTO `order` (`order_type`, `name`, order_date, `order_address`, `status`, `total_price`, `customer_email`, `transactionID`) VALUES ('$order_type', '$name', now(), '$order_address', '$status', $total_price, '$customer_email', '$transaction_id')";
  echo $sql;


  $result = $conn->query($sql);

  if ($result === TRUE) {
   return "New Order created successfully";
    
    
  } else {
   return "Error: " . $sql . "<br>" . $conn->error;
    
  }

}

function clearCart(){
  $conn = Connect();
  $sql = "delete from cart";



  $result = $conn->query($sql);

  if ($result === TRUE) {
    return "Cart cleared";
    
    
  } else {
   return "Error: " . $sql . "<br>" . $conn->error;
    
  }

}

//echo "Connected successfully";
?>