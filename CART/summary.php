<?php
  $fetchDATA="SELECT * FROM add_cart_info ";
  $result = $con->query($fetchDATA);
  if ($result->num_rows > 0 ) {
    while($s = $result->fetch_assoc() ){
      $NAME=$s['NAME'];
      $id=$s['ID'];
      $C=$s['COLOR'];
      ?>
      <div class="SUMMRY w-75  ms-auto me-auto container-lg ">
      <!-- For more features use the AutoHTML plugin window in figma ... --> 
<main class=" position-relative  my-3  summary w-75    overflow-hidden  d-block float-end mt-5">
  <h5 class="fs-3 ms-3  my-3" style="font-family: 'Lugrasimo', cursive;
  font-weight: 500;
  font-style: normal;
"> Your Order<div class="container1  d-inline">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot" style="opacity: 70%;"></div>
  <div class="dot" style="opacity: 50%;"></div>
  <div class="dot" style="opacity: 30%;"></div>

</div></h5>
  <h5 class="mt-3 ms-3"> NAME </h5>
  
  <div class='position-relative    NAME_S start-50'>
  <h4 class=" me-4 text-center NAME   fs-5" style="  letter-spacing: 0.5px; word-spacing: 2px;  font-family: 'Teko', sans-serif;

  
  font-weight: 500;
  font-style: normal;"> <?php   echo $s['NAME']; }} ?> </h4>
  </div>
<h5 class='mt-3 ms-3 size'>Size</h5>  
<div class=" position-relative SLIST me-4 bg ">
<form action="CART_INFO.php" method="post">
<ul class="list-group fs-5 me-3 list-group-horizontal" id="list2">
<?php 
if($C=="DEFAULT" && $type=="FORMAL")
{
  $result=$con->query("SELECT * FROM formal_shoes WHERE ID='$id'");
  if($result->num_rows>0)
{
  while($a=$result->fetch_assoc())
  {
    $FC=$a['COLOR'];
    $C=$a['COLOR'];
  }
}
}
  $sizes="SELECT * FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='6'";
  $SizeResult=$con->query($sizes);
  if($SizeResult->num_rows>0)
  {
    while($size=$SizeResult->fetch_assoc())
{
  $awlbl="SELECT AWLBL FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='6'";
  $AwlblResult=$con->query($awlbl);
  if($AwlblResult->num_rows>0)
  {
    while($Awlbl=$AwlblResult->fetch_assoc())
{
 ?>

<li class="list-group-item border-0 me-1 px-0" id='Slist'>
<input type="submit" value="6" name='six' class=" <?php if($size['SIZE']!=6 ){    echo "text-decoration-line-through";} if($Awlbl['AWLBL']==0){    echo "text-decoration-line-through";}if(isset($S)){if($S=='6'){echo " bg-dark text-light ";}} ?> px-3 py-2  btn-sm btn-outline-dark  border-1  rounded-circle">
</li>
  <?php  break;}} break; }}  ?>
  <?php 
  $sizes="SELECT * FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='7'";
  $SizeResult=$con->query($sizes);
  if($SizeResult->num_rows>0)
  {
    while($size=$SizeResult->fetch_assoc())
{
  $awlbl="SELECT AWLBL FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='7'";
  $AwlblResult=$con->query($awlbl);
  if($AwlblResult->num_rows>0)
  {
    while($Awlbl=$AwlblResult->fetch_assoc())
{
 ?>

  <li class="list-group-item border-0  mx-1 px-0" id='Slist'>
<input type="submit" value="7" name='seven' class=" <?php if($size['SIZE']!=7 ){    echo "text-decoration-line-through";} if($Awlbl['AWLBL']==0){    echo "text-decoration-line-through";}if(isset($S)){if($S=='7'){echo " bg-dark text-light ";}}?> px-3 py-2  btn-sm btn-outline-dark  border-1  rounded-circle">
</li>
  <?php break;}} break; }}  ?>


  <?php 
  $sizes="SELECT * FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='8'";
  $SizeResult=$con->query($sizes);
  if($SizeResult->num_rows>0)
  {
    while($size=$SizeResult->fetch_assoc())
{
  $awlbl="SELECT AWLBL FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='8'";
  $AwlblResult=$con->query($awlbl);
  if($AwlblResult->num_rows>0)
  {
    while($Awlbl=$AwlblResult->fetch_assoc())
{
 ?>
   <li class="list-group-item border-0  me-1 px-0" id='Slist'>
<input type="submit" value="8" name='eight' class=" <?php if($size['SIZE']!=8 ){    echo "text-decoration-line-through";} if($Awlbl['AWLBL']==0){    echo "text-decoration-line-through";}if(isset($S)){if($S=='8'){echo " bg-dark text-light ";}}?> px-3 py-2   btn-sm btn-outline-dark  border-1  rounded-circle">
</li>
  <?php break;}} break; }}  ?>


  <?php 
  $sizes="SELECT * FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='9'";
  $SizeResult=$con->query($sizes);
  if($SizeResult->num_rows>0)
  {
    while($size=$SizeResult->fetch_assoc())
{
  $awlbl="SELECT AWLBL FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='9'";
  $AwlblResult=$con->query($awlbl);
  if($AwlblResult->num_rows>0)
  {
    while($Awlbl=$AwlblResult->fetch_assoc())
{
?> 
   <li class="list-group-item border-0  me-1 px-0" id='Slist'>
<input type="submit" value="9" name='nine' class=" <?php if($size['SIZE']!=9 ){    echo "text-decoration-line-through";} if($Awlbl['AWLBL']==0){    echo "text-decoration-line-through";}if(isset($S)){if($S=='9'){echo " bg-dark text-light ";}} ?> px-3 py-2   btn-sm btn-outline-dark  border-1  rounded-circle">
</li>
  <?php break;}} break; }}  ?>

    <?php 
    $sizes="SELECT * FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='10'";
    $SizeResult=$con->query($sizes);
    if($SizeResult->num_rows>0)
    {
      while($size=$SizeResult->fetch_assoc())
  {
    $awlbl="SELECT AWLBL FROM size_info WHERE ID='$id' AND COLOR='$C' AND SIZE='10'";
    $AwlblResult=$con->query($awlbl);
    if($AwlblResult->num_rows>0)
    {
      while($Awlbl=$AwlblResult->fetch_assoc())
  {
  ?> 
  <li class="list-group-item border-0  me-2 px-0" id='Slist'>
<input type="submit" value="10" name='ten' class=" <?php if($size['SIZE']!=10){    echo "text-decoration-line-through";} if($Awlbl['AWLBL']==0){    echo "text-decoration-line-through";}if(isset($S)){if($S=='10'){echo " bg-dark text-light ";}}?> px-3 py-2   btn-sm btn-outline-dark  border-1  rounded-circle">
</li>
  <?php break;}} break; }}  ?>
  
</ul>
</form>

 <?php
 $CLR;
$CheckCartedSize="SELECT * FROM add_cart_info";
$RECORD=$con->query($CheckCartedSize);
if ($RECORD->num_rows>0)
{
  
while ($R=$RECORD->fetch_assoc()) {
$sizE=$R['SIZE'];
$ID=$R['ID'];
$CLR=$R['COLOR'];
if($type=="FORMAL")
{
  $result=$con->query("SELECT * FROM formal_shoes WHERE ID='$id'");
  if($result->num_rows>0)
{
  while($a=$result->fetch_assoc())
  {
    $FC=$a['COLOR'];
    $CLR=$a['COLOR'];
  }
}
 
}
}
}
$CheckAwlbl="SELECT * FROM size_info WHERE SIZE='$sizE' AND ID='$ID' AND COLOR='$CLR'";
$result=$con->query($CheckAwlbl);
if ($result->num_rows>0)
{
  while($ROW=$result->fetch_assoc())
  {
    
    $AWLBL=$ROW['AWLBL'];
    

  }
}
?>


</div>
  <div class="mt-3 ms-3 fs-5 fw-normal text-uppercase   "> quantity </div>
  <div class="d-flex float-end    QON_S px-2  rounded-3 me-3 fw-bolder">
  <i class="bi bi-dash-square btn fs-4 btn-outline-dark" id="MINUS"></i>
  
  <div class=" mx-2 fs-4  " id='VALUE' > 1 </div>
  
  <i class="bi bi-plus-square fs-4 btn btn-outline-dark " id="PLUS"></i>

</div>

  <div class="ms-3  fs-5  mt-1"> TAX </div>
  <div class="me-0 float-end TAX fw-bolder position-relative me-4"> &#x20b9;<span id='SPRICE'>20/-</span> </div>

  <div class="ms-3 fs-5 mt-2"> TOTAL </div>
  
  <div class="float-end  TOTAL fw-bolder fs-4 position-relative" >&#x20b9;<span id='FPRICE'>99/-</span>/-</div>
  <div class="float-end position-relative fw-bolder" id="COD" style="left: 5rem; ">*CASH ON DELLEVARY</div>
  <div class="d-inline-flex"> 
   <!-- <div class=" " id="PO">  Place Order  </div> -->
<form action="CART/CART.InfoCheck.php" method="post">
<input type="hidden" name="QON" id="QON" value="1">
<input type="submit" id="PO" class="btn ms-5 btn-warning py-1   align-self-center ps-3 pe-5 fs-3 mt-5 text-center  rounded-3 " name="ORDER" value="PLACE ORDER" >
</form>

   <i class="   align-self-center ps-2 pt-1  fs-3 text-dark bi bi-arrow-right"></i>
 
</div> 


</main>

    </div>
</main>

    <?php  ?>