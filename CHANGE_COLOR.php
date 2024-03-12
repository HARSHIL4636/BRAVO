<?php

$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);

if (isset($_POST['BLACK']))
{
    $con->query("UPDATE add_cart_info SET COLOR='BLACK'"); 
    // echo "<script> window.href='CART_INFO.php' </script>";
    include("CART_INFO.php");
} 
echo "Blacks: ";


?>
