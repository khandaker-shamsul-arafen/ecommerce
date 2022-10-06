<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){
        //we will give service

        //empty value check
        if(
            
            !empty($_POST['umessage']) 
        )
        {
           
            $msg=$_POST['umessage'];

            if(isset($_POST['customer_email'])){
                $customer_email = $_POST['customer_email'];
            }else{
                $customer_email = "";
            }

            $user_type = $_POST['user_type'];
            

            
            //tries to communicate with the database & store the data
            try{
                $conn=new PDO('mysql:host=localhost:3306;dbname=emart;','root','');
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

                $sqlquerystring="INSERT INTO `messages` (`message`, `customer_email`, `delivery_team_id`, `user_type`) VALUES('$msg','$customer_email', 1, '$user_type')";
                $conn->exec($sqlquerystring);

                ?>
                <script>location.assign('index.php')</script>
                <?php
            }
            catch(PDOException $ex){
                echo $ex->getMessage();
                ?>

                <!-- <script>location.assign('home.php')</script> -->
            <?php

            }

        }
        


    }
?>