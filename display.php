
<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>

</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <input class="btn-primary btn-lg" style="float: right;" type="button" value="Back" onclick="history.back()">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Item Id </th>
 <th> Name </th>
 <th> Description </th>
 <th> Price </th>
 <th> Image </th>
 <th> Cat Id </th>
 <th> Rating </th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from products ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['item_id'];  ?> </td>
 <td> <?php echo $res['name'];  ?> </td>
 <td> <?php echo $res['description'];  ?> </td>
 <td> <?php echo $res['price'];  ?> </td>
 <td>  <img src=<?php echo $res['image']; ?> width=200px height=200px> </td>
 <td> <?php echo $res['cat_id'];  ?> </td>
  <td> <?php echo $res['rating'];  ?> </td>


 <td> <a class="btn-danger btn" href="delete.php?item_id=<?php echo $res['item_id']; ?>" class="text-white"> Delete </a>  </td>
 <td> <a class="btn-primary btn" href="update.php?item_id=<?php echo $res['item_id']; ?>" class="text-white"> Update </a> </td>

 </tr>

 <?php 
 }
 ?>
 
 </table>  
 <div class="text-center">
 <a class="btn-primary btn-lg " href="insert.php">Insert Item</a>
</div>

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>