<?php

    include 'conn.php';

    if(isset($_POST['give_rating'])){

        $item_id= $_GET['item_id'];    
        $rating = (int)$_POST['rating'];
        
        
        if($rating > 5 or $rating < 1){
            echo " <script>alert('Invalid Rating entered!');</script>";
            echo "<script>window.location.assign('rating.php');</script>";

        }
        
        else{

            $q = "UPDATE `products` SET `rating` = $rating WHERE item_id=$item_id";
            
            echo $con->query($q);
              
 ?>
            <script>
                
                alert('Thanks for rating!!!');
                
            </script>

<?php
            
            echo "<script>window.location.assign('rating.php');</script>";
            
        }
    }
?>

<!DOCTYPE html>
<html>
    
    <head>
        
     <title>Give rating</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    
    <body>
        
        <div class="container">

          <div style="background-color: powderblue;" class="col-lg-4 m-auto">
              
             <input class="btn-success" style="float: left;" type="button" value="Back" onclick="history.back()">
              
             <br><br><br><br>
              
             <h4 class="display-5 text-center">Give Rating our Product(1 to 5)</h4>
              
             <form method="post" enctype="multipart/form-data">

                <br>

                <label> Rating: </label>
                 
                 <input type="text" name="rating" class="form-control"> 
                 
                 <br>

                 <div align="center">
                     
                    <button onclick="location.href='rating.php'" class="btn btn-secondary" type="submit" name="give_rating">Submit</button>
                     
                    <br>
                     
                 </div>
                 
             </form>
              
           </div>
              
         </div>

    </body>
</html>