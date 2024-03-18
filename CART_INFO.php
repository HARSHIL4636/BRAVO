
<?php 
include('CONN.php');

// truncate {
$TTable="TRUNCATE TABLE add_cart_info";
if(basename(__FILE__) != 'CART_INFO.php') {
$con->query($TTable);
 } 
 if(!isset($_SESSION['email']))
{
echo "<script> alert('YOU DO NOT LOGGINED PLZ LOGGIN ;)');
window.location.href='signAcc.html';s
</script>";
}
else {
  if(isset($_POST['BLACK']))
  {
    $con->query("UPDATE add_cart_info SET COLOR='BLACK' ");
  }
  if(isset($_POST['WHITE']))
  { 
    $con->query("UPDATE add_cart_info SET COLOR='WHITE' ");

  }
foreach($_POST AS $key => $value)
{
  // if($key == "GREY")
  // echo $key;
}
  if(isset($_POST['GREY']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='GRAY'");

  }
  if(isset($_POST['GRADIANT']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='GRADIANT'");


  }

  if(isset($_POST['MULTI']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='MULTI'");

  }


  if(isset($_POST['WHITE_BLACK']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='WHITE_BLACK'");

  }

  if(isset($_POST['GREEN_BLACK']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='GREEN_BLACK'");

  }
  if(isset($_POST['WHITE_BLUE']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='WHITE_BLUE'");

  }
  
  if(isset($_POST['NAVY']))
  {
    
    $con->query("UPDATE add_cart_info SET COLOR='NAVY'");

  }
global $type;
global $FC;
global  $COLOR;
$checkRecord="SELECT * FROM add_cart_info";
$CHECK=$con->query($checkRecord);
if($CHECK->num_rows == 0)
{
if(isset($_POST['ID']) && isset($_POST['COLOR']) && isset($_SESSION['email']))
{

$SHOE_ID=$_POST['ID'];  
if ($_POST['COLOR']=="") {
$COLOR="DEFAULT";
//  echo $COLOR;

}
else {
    $COLOR=$_POST['COLOR'];
    
   
}
 $EMAIL = $_SESSION['email'];
 $NAME = $_POST['itam'];
 $TYPE= $_POST['TYPE'];
 $PRICE= $_POST['price'];
 $ID= $_POST['ID'];
 $size=6;
 if($CHECK->num_rows==1 && isset($_POST['six']) || isset($_POST['SEVEN']) || isset($_POST['eight']) || isset($_POST['nine']) || isset($_POST['ten']))
 {
 if(isset($_POST['six']) )
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='6'";
  echo $UpdateSize;
 }
 elseif(isset($_POST['seven']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='7'";
  echo $UpdateSize;
 
}
 elseif(isset($_POST['eight']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='8'";
  echo $UpdateSize;

}
 elseif(isset($_POST['nine']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='9'";
  echo $UpdateSize;

}
 elseif(isset($_POST['ten']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='10'";
  echo $UpdateSize;

}
elseif(!isset($_POST['ten']) && !isset( $_POST['nine'])  && !isset ($_POST['eight']) && !isset($_POST['seven']) && !isset($_POST['six']))
{
$S=6;
}
// else
// {
//   $UpdateSize="UPDATE  add_cart_info SET SIZE='6'";
//   echo $UpdateSize;

// }

if(isset($UpdateSize))
{
$UPDATE=$con->query($UpdateSize);
}
 }
 else
 {
  if(!isset($_POST['ten']) && !isset( $_POST['nine'])  && !isset ($_POST['eight']) && !isset($_POST['seven']) && !isset($_POST['SIX']))
  {
  $S=6;
  }
$add_in_db="INSERT INTO add_cart_info VALUES('', '$SHOE_ID','$NAME','$EMAIL','$TYPE','$COLOR','$size','$PRICE','1')";

$con->query($add_in_db);
 }
}
}
else
{
  if(isset($_POST['six']) )
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='6'";
  $S='6';
  
  
 }
 elseif(isset($_POST['seven']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='7'";
  $S='7';
  
 
}
 elseif(isset($_POST['eight']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='8'";
  
  $S='8';

}
 elseif(isset($_POST['nine']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='9'";
  
  $S='9';

}
 elseif(isset($_POST['ten']))
 {
  $UpdateSize="UPDATE add_cart_info SET SIZE='10'";
  $S='10';
  

}else
{
  $S='6';
}
if(isset($UpdateSize))
{
$UPDATE=$con->query($UpdateSize);

}
}

// ----------------------------------
// for color

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

<!-- bootstrap bootstrap-icons -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <!-- bootstrap -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link rel="stylesheet" href="style.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="CART/cartStyle.css">
 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mukta&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Kalam&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lugrasimo&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans+Pinstripe:ital@0;1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Aboreto&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agdasima:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+SC&display=swap" rel="stylesheet">
<style>
    

.dot {
  display: inline-block;
  width: 4px;
  height: 4px;
  border-radius: 50%;
  background-color: black;
}
.container1
{
  margin-inline-start: -5px;
position: relative;
  top: -3px;
}

.container1 .dot:nth-last-child(1) {
  animation: jumpingAnimation 1s 0.5s ease-in-out backwards infinite;
}
.container1 .dot:nth-last-child(2) {
  animation: jumpingAnimation 1s 0.4s ease-out backwards infinite ;
}
.container1 .dot:nth-last-child(3) {
  animation: jumpingAnimation 1s 0.3s ease-out backwards infinite;
}
.container1 .dot:nth-last-child(4) {
  animation: jumpingAnimation 1s 0.2s ease-out backwards infinite;
}
.container1 .dot:nth-last-child(5) {
  animation: jumpingAnimation 1s 0.1s ease-out backwards infinite;
}
@keyframes jumpingAnimation {
  0 {
    transform: translate3d(0,0,0);
  }
  50% {
    transform: translate3d(0, 3px,0);
  }

  100% {
    transform: translate3d(0, 0, 0);
  }
}
</style>
</head>
<body>
<?php include('SOUND.php'); ?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid  w-100">
      <a class="navbar-brand m-1 m-3 btn btn-light rounded fs-2    p-1 " href="index.php" style="font-family: Newsreader; ">BRAVO</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown" style="margin-left: 67%;">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header class="">
    <?php 
    include('CART/IMG_SEC.php');
    ?>
  </header>
  
<?php
 include('CART/summary.php'); 
?>



<!-- JAVASCREEPT STARTS  -->
<script>
  let flag=0;
var btnn=document.getElementsByClassName('btn-sm');
var values=document.getElementById('VALUE');
for (let index = 0; index < btnn.length; index++) {
  
        if (btnn[index].classList[0]!="text-decoration-line-through") {
  
          // values.textContent=0;
          
            // btnn[index].class
        }
        else
        {

          btnn[index].classList.remove("bg-dark");
            btnn[index].classList.remove("text-light");
            
        }

}

</script>

</script>
<script src="CART/CART.js"></script>
<!-- for + and -  -->
<script>
let Qon=document.getElementById("QON");

let plus=document.getElementById('PLUS');
// console.log(plus);
plus.addEventListener('click', ()=>{

  let values=document.getElementById('VALUE');


  // console.log(values.textContent);
let valueCast=Number(values.textContent);


if(valueCast< <?php print((int)$AWLBL); ?>)
{
// console.log(valueCast);
valueCast++;
// console.log(valueCast);
  values.textContent=valueCast;
  Qon.value = valueCast;

}
else
{
  alert("ONLY "+valueCast+" PRODUCT ARE AWAILABLE!!")
}
let value=document.getElementById('VALUE');
let price=document.getElementById('PRICE1')
let SPrice=document.getElementById('SPRICE');
// console.log(value.textContent);
// console.log(parseInt(SPrice.textContent));
let FPrice=document.getElementById('FPRICE');
// FPRICE.textContent
// console.log(FPrice.textContent);
// CONVERTED IN INTGER
let Price=Number(price.textContent);
let Value=Number(value.textContent);
let Tax=parseInt(SPrice.textContent);
// let Fprice=parseInt(FPrice.textContent);
// console.log(Fprice);

// console.log(Value);
// console.log(Tax);
// console.log(Price);
let FinalPrice=parseInt((Value*Price)+Tax);
// console.log(FinalPrice);
FPrice.textContent = FinalPrice;
Value.className+="value";
});
let minus=document.getElementById('MINUS');
// console.log(minus);
minus.addEventListener('click', ()=>{
  let values=document.getElementById('VALUE');
// console.log(values.textContent);
let valueCast=Number(values.textContent);
let CS = document.getElementsByClassName('bg-dark');
// console.log(CS[0].value); 
if(valueCast>1)
{


// console.log(valueCast);
valueCast--;
// console.log(valueCast);
  values.textContent=valueCast;
}
let value=document.getElementById('VALUE');
let price=document.getElementById('PRICE1')
let SPrice=document.getElementById('SPRICE');
// console.log(value.textContent);
// console.log(parseInt(SPrice.textContent));
let FPrice=document.getElementById('FPRICE');
// FPRICE.textContent
// console.log(FPrice.textContent);
// CONVERTED IN INTGER
let Price=Number(price.textContent);
let Value=Number(value.textContent);
let Tax=parseInt(SPrice.textContent);
// let Fprice=parseInt(FPrice.textContent);
// console.log(Fprice);

// console.log(Value);
// console.log(Tax);
// console.log(Price);
let FinalPrice=parseInt((Value*Price)+Tax);
// console.log(FinalPrice);
FPrice.textContent = FinalPrice;
Value.className+="value";
})

</script>
<script>




</script>
<!-- for COLOR FETCHING  -->

</body>
</html>
  <?php }?>