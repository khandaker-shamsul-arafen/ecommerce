<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message UI</title>
    <link rel="stylesheet" href="css2/style.css"> 
</head>
<body>
<input class="button" style="margin-left: 310px; wdith: 50px; height: 50px;" type="button" value="Back" onclick="history.back()">
    <div class="container">
        <div class="chat">
            <div class="chat-header">
                <div class="profile">
                    <div class="left">
                        <img src="img/arrow.png" class="arrow">
                        <img src="img/pp.png"    class="pp">
                        <h2>Delivery Team</h2>
                        <span>Online</span>
                    </div>
                    <div class="right">
                        <img src="img/more.png" class="icon">

                    </div>                    
                </div>
            </div>
        
    
         <div class="chat-box">
             <?php
 try {
    $conn = new PDO('mysql:host=localhost:3306;dbname=emart;', 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sqlquerystring = "SELECT * FROM messages";
    $returnobj = $conn->query($sqlquerystring);
    if ($returnobj->rowCount() == 0) {
        //no data found
?>
       

        

        <?php
    } else {
        $twoDtable = $returnobj->fetchAll();
        foreach ($twoDtable as $row) {
            //$row is a oneDarray representing each data row
        ?>
            <div class="container" style="padding: 20px; background-color: cyan">
        <?php
       
              echo '<span>'.$row['user_type'].' : </span>'; 
                 echo '<span>'.$row['message'].'</span>'; 
        
                
            ?>
            </div>

            <?php


        }
    }
   
} catch(Exception $e){
    echo 'Message: ' .$e->getMessage();
}
             ?>
         </div>
         <div class="chat-footer">
        
            <form action="database.php" method="post">
                <select name="user_type">
                    <option value="customer">Customer</option>
                     <option value="delivery_team">Delivery Team</option>
                </select>
                <input name="customer_email" placeholder="Insert Customer Email Here If You Are One" style="width: 400px;">
                
               <textarea type="submit" name="umessage" placeholder="Type a message"></textarea>               <input style="margin-left: 20px; width: 100px; height: 100px; border-radius: 30%;" type="submit" value="Send">


            </form> 
    
   
        </div>
    
</body>
</html> 
