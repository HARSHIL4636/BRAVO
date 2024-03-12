<?php 
if(isset($_POST['QON']))
{
    $_SESSION['QON']=$_POST['QON'];
    $qon=$_POST['QON'];
    $con->query("UPDATE add_cart_info SET QON='$qon'");
}
$fetchCart="SELECT * FROM add_cart_info";
$result=$con->query($fetchCart);
if ($result->num_rows > 0)
{
    while ($row = $result->fetch_assoc())
    {
        
        $item=array(
            "EMAIL" => $row["EMAIL"],
            "NAME"=>$row["NAME"],
            "ID"=>$row["ID"],
            "TYPE"=>$row["TYPE"],
            "COLOR"=>$row["COLOR"],
            "SIZE"=>$row["SIZE"],
            "PRICE"=>$row["PRICE"],
            "QON"=>$row['QON'],
        );
    }
}
$email=$item['EMAIL'];
$fetchUserInfo="SELECT * FROM reg WHERE EMAIL='$email'";
$r=$con->query($fetchUserInfo);

if ($r->num_rows > 0)
{
    while ($row = $r->fetch_assoc())
    {
        // echo $row['EMAIL'];
        $users=array(
            "F_NAME"=>$row["F_NAME"],
            "L_NAME"=>$row["L_NAME"],
            "ADDRESS"=>$row["ADD"],
            "CONTECT"=> $row["CONTACT_NO"],
            "COUNTRY"=>$row["COUNTRY"]
        );
    }
}

// echo "<br>";
// print_r($users);
$UNAME=$users["F_NAME"];
$ULName=$users["L_NAME"];
$Uadd=$users["ADDRESS"];
$Ucontry=$users["COUNTRY"];
$Ucontect=$users["CONTECT"];
$IID=$item["ID"];
$INAME=$item["NAME"];
$ITYPE=$item["TYPE"];
$IColor=$item["COLOR"];
$ISize=$item["SIZE"];
$IQon=$item["QON"];
$IPrice=$item["PRICE"];



?>