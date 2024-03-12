<?php
session_start();
IF(isset($_POST['SUBMIT']))
{
    if($_SESSION['I_ADD']==="SPORTS")
    {
        // echo "helllo world";
        $servername="localhost";
        $pass="";
        $username="root";
        $dbname='add_to_cart';
        $con= new mysqli($servername,$username,$pass,$dbname);
          // truncate {
     $TTable="TRUNCATE TABLE add_cart_info";
     if(basename(__FILE__) != 'MAIN_CART.php') {
  $con->query($TTable);
      } 
      // truncate}
        // $sql = "SELECT * FROM add_s_s_d";
        // $result = $con->query($sql);
        if(!$con)
        {
            die("connection faild".$con->connect_error);
        }
        else
        {
            for($i=1;$i<=6;$i++)
            {
            $itam_N=$_POST["ITAM".$i];
            $PRICE=$_POST["PRICE_I".$i];
            $IMGADD=$_POST["IMG_I".$i];
            // echo "$IMGADD";
            $sql="INSERT INTO `add_s_s_d`  VALUES ('$itam_N','$PRICE','$IMGADD')";
            
            }
            if (mysqli_query($con, $sql)) {
                echo "CREATE OK";
         } else {
            echo "<script> alert('NOT ADDED') </script>";
         }  
        }
    }

}




?>