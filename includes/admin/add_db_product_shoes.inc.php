<?php
include('../../Helpers/ServerConnect.php');



if(isset($_POST['SHOES']) && $_POST['SUB'] && $_POST['SHOES']=="FORMAL")
{
    print_r($_POST); 
    // echo "no ID COLOR  SIZE AVLBL<br>";
    $id=$_POST['ID'];
    $FLAG;
// FOR IMG INFORMATION 
    if(isset($_POST['PName']) && isset($_POST['ID']) && isset($_POST['PRICE'])  && isset($_POST['DISCOUNT'])  )
    {
        
        $NAME=$_POST['PName'];
        $MCOLOR=$_POST['Maincolor'];
        $MPhoto=$_POST['MainPhoto'];
        $PRICE=$_POST['PRICE'];
        $DISCOUNT=$_POST['DISCOUNT'];
        $TYPE=$_POST['SHOES'];
        
        $con->query("INSERT INTO shoe_info VALUES('$NAME','$id','$PRICE','$TYPE',$DISCOUNT,'SHOES')");

        $con->query("INSERT INTO formal_shoes VALUES('$NAME','$id','$MCOLOR','$MPhoto','')");     
    }




    // FOR SIZE STORE 
    
    for($i=0;$i<count($_POST['color']);$i++)
{

// echo $_POST['color'][$i]."<br>";
for($j=0;$j<count($_POST['size']);$j++)
     {
        $color=$_POST['color'][$i];
        $size=$_POST['size'][$j];
        $AVLBL=$_POST['AVLBL'][$j];
        $result=$con->query("SELECT *   FROM size_info WHERE COLOR='$color' AND size='$size' AND AWLBL='$AVLBL'");
        if($result->num_rows ==0)
        {
            $con->query("INSERT INTO size_info VALUES('','$id','$color','$size','$AVLBL')");

        }
       
    }

}

// FOR MAIN PHOTO STORE
for($i=0;$i<count($_POST['additionalPhotos']);$i++)
{
    $color=$_POST['color'][$i];
    $childPhoto=$_POST['additionalPhotos'][$i];
    $con->query("INSERT INTO child_formal VALUES ('$id','$color','$childPhoto','')");

}

}

?>