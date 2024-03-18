<div>

    <?php
  $fetchDATA="SELECT * FROM add_cart_info ";
  $result = $con->query($fetchDATA);
  if ($result->num_rows > 0 ) {
    while($s = $result->fetch_assoc() ){
      $NAME=$s['NAME'];
      $id=$s['ID'];
      $C=$s['COLOR'];
      $type;
      ?>
      
  
<div class="m-0 page-heading ">
  <?php 
  $fethchdata="SELECT * FROM shoe_info WHERE ID='$id' ";
  $r=$con->query($fethchdata);
  if($r->num_rows > 0) {
  while($ro = $r->fetch_assoc()) {

  
  

  ?>
  
  <div class="no-item "> <?php if($ro['TYPE']=="SPORTS"){?><img src="icon/sport icon.png" class="SHUE_ICON" style="position: relative; width: 40px; margin-inline-start: -0.8rem; animation: ICON 2s 0s forwards infinite ;" alt=""> <?php } ?> </div>
  
  <div class="cart" style=' font-family: "Alegreya SC", serif;
  font-weight: 400;
  font-style: normal;'>   <?php $type=$ro['TYPE']; echo $ro['TYPE']; ?>

</div>

  <?php }} ?>
  
  <div class="divider">
  </div>
</div>
<div style="animation: LINE 2s 0s forwards  infinite; border-bottom: 2px black solid ; width: 12rem; position: relative; bottom: 22.5px;">
</div>
    </div>

    <div class="container-fluid  pb-5">
    <?php 
    $ImgFetch="SELECT * FROM img_add WHERE ID='$id' AND COLOR='$C'";
    $Iresult=$con->query($ImgFetch);
    if ($Iresult->num_rows >0)
    {
      while($IAdd=$Iresult->fetch_assoc())
      { 
    
    ?> 
    <img
  class="mt-5 img-fluid "
  src="<?php echo $IAdd['I_ADD']; ?>"
      
  />
<?php }}
else
{
  // if(isset())
  $ImgFetch="SELECT * FROM formal_shoes WHERE  ID='$id'";
  $Iresult=$con->query($ImgFetch);
  if ($Iresult->num_rows >0)
  {
    while($IAdd=$Iresult->fetch_assoc())
    { 
      ?>
      
      <img
  class="mt-5 img-fluid "
  src="<?php echo $IAdd['I_ADD']; ?>" style="aspect-ratio: 3/4; object-fit: contain;">
      <?php
    }}
} ?>

<div class="div">
<div class=" ms-4 fs-6 mt-3 float-start fw-bolder  overflow-hidden Name" style='font-family: "Agdasima", sans-serif;
  font-weight: 400;letter-spacing: 1px;
  font-style: normal;'> <?php echo $s['NAME']; ?> </div>
<div class="ms-3 fw-bolder fs-6" style='font-family: "Agdasima", sans-serif;
  font-weight: 400;letter-spacing: 1px;
  font-style: normal;'> <?php echo $s['ID']; ?></div>
<div class="  " >
  <span><span class="float-end me-1">/-</span><span class="fs-6 float-end" id='PRICE1' ><?php echo $s['PRICE']; ?></span></span>
  </div>
</div>
<div class="bg-warning w-50 border border-dark   me-auto LISTS ms-auto rounded-3 p-1  mt-2" >
<ul class="  list-group list1 border-1 border-dark  me-auto ms-auto list-group-horizontal ms-1 w-25 ms-3" style="">
<?php $COLORPIKER="SELECT * FROM img_color_info WHERE ID='$id'"; $cp=$con->query($COLORPIKER); if($cp->num_rows >0){while($A=$cp->fetch_assoc()) { ?> 
<li class=" bg-warning list-group-item border-0 p-0 " style="" >
<form action="CART_INFO.php" method="post">   
<input type="submit" name="<?php echo $A['COLOR'];?>" class="<?php echo $A['COLOR'];?> btn " value="" id="<?php echo $A['COLOR'];?>">
<!-- <h1>
  <?php
  //  echo $A['COLOR'];
   ?> 
</h1> -->
</form>  
  
   </li>
   <?php 
  
  }} 
  
  $fecthInfoColor="SELECT * FROM img_color_info WHERE ID='$id'";
    $result=$con->query($fecthInfoColor);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
      $COLOR=$row['COLOR'];
      }
    }
?>
</ul>
<script>
let Color_Item=document.getElementsByClassName("list-group-item bg-warning");
// console.log(Color_Item);
let color_length=Color_Item.length;
// console.log(color_length);
for(let j=0;j<color_length;j++)
{
  Color_Item[j].style.cursor="pointer";
  console.log(Color_Item[j]);
  Color_Item[j].addEventListener("mouseover",() => {
   
      
    if(Color_Item[j].children[0].id=="BLACK")
  {
console.log(Color_Item[j].children[0].id);
  }
  })
  

}

</script>
</div>
    </div>
    
<?php }}?>