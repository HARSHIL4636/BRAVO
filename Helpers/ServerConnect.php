<?php

session_start(); 
$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);
// truncate {
$TTable="TRUNCATE TABLE add_cart_info";
// echo $_SERVER['SCRIPT_FILENAME']; 
$con->query($TTable);
 

?>