<?php 
include('ServerConnect.php');
$results=$con->query("SELECT * FROM shoes_cart");
if ($results->num_rows > 0)
{
    while ($row = $results->fetch_assoc())
    {
        
    }
}
?>