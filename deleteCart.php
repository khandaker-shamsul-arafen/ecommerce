<?php
if(isset($_GET['id'])){
    include('connection.php');
     deleteCartItem($_GET['id']);
     echo "<script>window.location.assign('addcart.php');</script>";
}
?>