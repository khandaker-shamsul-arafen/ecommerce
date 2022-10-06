<!DOCTYPE html>
<html>
    
    <head>
        
      <title>Rating</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    
    <body>

       <div style="background-color:gray;" class="container">
           
         <div style="background-color: powderblue;" class="col-lg-12 m-auto">
             
           <input class="btn-success" style="float: left;" type="button" value="Back" onclick="window.location.assign('home.php')">

           <br><br>

           <h4 class="display-4 text-center">Rating</h4>

           <br>

           <table class=" table table-striped table-hover table-bordered">

               <tr class="bg-dark text-white text-center">

                 <th> Item Id </th>
                 <th> Name </th>
                 <th> Rating Value </th>
                 <th> Rating </th>

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
                   
                 <td> 
                   <?php
                      $Rating = $res['rating'];
                      for($i = 1; $i <= $Rating; $i++){

                        echo '<span style="font-size:200%;color:orange;">&starf;</span>';

                      }
                   ?>
                 </td>

                 <td> 
                     <button onclick="location.href='give_rating.php?item_id=<?php echo $res['item_id'] ?>'" type="button" class="btn btn-primary">Give Rating
                     </button> 
                 </td> 

               </tr>

               <?php 
                 }
               ?>

           </table>  
             
           <br>

         </div>
           
      </div>

    </body>
    
</html>