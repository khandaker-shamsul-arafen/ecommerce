<?php

if(isset($_POST['buyBtn'])){
    $order_type = "personal";
    $name = $_POST['name'];
    
    date_default_timezone_set('Asia/Dhaka');
    $order_date = date('m/d/Y h:i:s a', time());

    $order_address = $_POST['address'];
    $status = "Not Payed";
    $total_price = $_POST['total_price'];
    $customer_email = $_POST['customer_email'];
    $transaction_id = $_POST['transactionID'];


    include('connection.php');


    echo addOrder($order_type, $name, $order_date, $order_address, $status, $total_price, $customer_email, $transaction_id);
    echo clearCart();
    echo "<script>alert('Payment done and order placed successfully!');</script>";
   echo "<script>window.location.assign('home.php');</script>";




}else{
    echo "ERROR";
}

?>
