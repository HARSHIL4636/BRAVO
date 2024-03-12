<?php 
include('ServerConnect.php');

?>
                
<?php
$email=$_SESSION['email']; 
$size=$_GET['SIZE'];
// echo $size;
if(isset($_GET['RemoveBtn']))
        {
            
// echo $email;
$fetchCARTS="SELECT * FROM all_carts WHERE EMAIL='$email' AND SIZE='$size'";
$result=$con->query($fetchCARTS);
if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {   
        
        if($row["ITEM_ID"] == $_GET['IID'] && $row['ITEM_COLOR']==$_GET['COLOR'] && $row['SIZE']==$_GET['SIZE'] )
        {
            $id=$row['ITEM_ID'];
            $color=$row['ITEM_COLOR'];
         
            $RemoveData="DELETE FROM all_carts WHERE ITEM_ID = '$id' AND ITEM_COLOR = '$color' AND SIZE = '$size' ";
            $con->query($RemoveData);
            echo "<script> alert('Cart Deleted.');
            </script>";
            echo "<script> window.history.go(-1);</script>";
            ?>
          
           
            <?php
        }
    
    }
}

        }

?>

        