<?php 

$result=$con->query("SELECT * FROM add_cart_info");
  if($result->num_rows > 0)
{
  while($row=$result->fetch_assoc())
{
  $COLOR=$row['COLOR'];
  $ID=$row['ID'];
  $CN="SELECT * FROM color_sound WHERE NAME='$COLOR'";
  $CNR=$con->query($CN);
  if($CNR->num_rows > 0)
  {
      while($CNRrow=$CNR->fetch_assoc())
      {
      
?>      <audio autoplay>
<!-- <source src="sounds/CART SOUNDS/COLOR/BLACK.ogg" type="audio/ogg"> -->
<source src="<?php echo $CNRrow['S_ADD'];?>.mp3" type="audio/mpeg">
</audio>
<main>
  <?php    
      
       }
  }
  
}


}

?>
<?php 
?>