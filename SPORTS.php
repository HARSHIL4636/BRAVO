 <!-- virsion 1.1 
      calculation with pricing 
      and modify with PRICE DIV
      add to price and add ids in all pricing 
      
      virsion 1.2 
      i) add al pricing and 
      ii) add loop in pricing in js.

      https://www.youtube.com/watch?v=-aRRH0gZYQw&t=1840s

     -->
 <?php session_start(); 


     $servername="localhost";
     $pass="";
     $username="root";
     $dbname='add_to_cart';
     $con= new mysqli($servername,$username,$pass,$dbname);
    // truncate {
     $TTable="TRUNCATE TABLE add_cart_info";
     if(basename(__FILE__) != 'MAIN_CART.php') {
  $con->query($TTable);
      } 
      // truncate}
    //  echo $_SESSION['email'];
    if(isset($_SESSION['email']))
    { $email=$_SESSION['email'];
    
    $sql = "SELECT * FROM itams WHERE EMAIL='$email'";
                  $result = $con->query($sql);
                  $i=1;
                  $count=$result->num_rows;
                  $_SESSION['COUNTER']=$result->num_rows;
    }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>

     <link rel="stylesheet" href="styles.css" />
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <!-- font  -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@0;1&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Quantico:ital@1&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
         <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cabin:wdth@87.5&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Lexend&family=Titillium+Web:wght@600&display=swap"
         rel="stylesheet">
     <!-- bootstrap bootstrap-icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <!-- bootstrap -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="style.css">
     <style>
     @keyframes slideInLeft {
         0% {
             transform: translateX(-100%);
         }

         100% {
             transform: translateX(0);
         }
     }
     /* for user info */
@keyframes U_I_S{
    0%
    {
        top: -300px; opacity: 0%;
    }
  75%
{
    top: 50px; opacity: 25%;
}
    100%
    {
        top: 9%; opacity: 100%;
        
    }

}
/* for usser info */
@keyframes U_I_N {
    0%
    {
        top: 9%; opacity: 100%;

    }
    75%
{
    top: 50px; opacity: 50%;
}
100%
{
    top: -300px; opacity:100%;

}

}
     @keyframes STEMP {
         0% {
             /* width:225px;  right: 195px; top: 230px ; height:180px; opacity: 0%; */
             width: 200x;
             right: -120px;
             opacity: 0%;

         }

         75% {
             right: 10px;
             opacity: 35%;
         }

         100% {

             /* width: 320px; */

         }
     }

     .animation {
         /* animation: STEMP 0.2s normal forwards ease-in-out  ; */
     }

     header {
         animation: 1s ease-out 0s 1 slideInLeft;
         background: #666;
         padding: 40px;
     }
     </style>
     <style>
     .BLACK {
         height: 15px;
         width: 15px;
         background-color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE {
         height: 15px;
         width: 15px;
         background-color: white;
         border-radius: 50%;
         display: inline-block;
     }

     .GREY {
         height: 15px;
         width: 15px;
         background-color: GREY;
         border-radius: 50%;
         display: inline-block;
     }

     .GRADIANT {
         height: 15px;
         width: 15px;
         background: rgb(121, 90, 173);
         background: linear-gradient(90deg, rgba(121, 90, 173, 1) 0%, rgba(128, 153, 187, 1) 48%, rgba(97, 144, 67, 1) 100%);
         font-weight: 700;
         color: black;
         border-radius: 50%;
         display: inline-block;
     }

     .NAVY {
         height: 15px;
         width: 15px;
         background: NAVY;
         border-radius: 50%;
         display: inline-block;
     }

     .GREEN_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(142, 235, 28);
         background: linear-gradient(0deg, rgba(142, 235, 28, 1) 0%, rgba(0, 0, 0, 1) 100%);
         border-radius: 50%;
         display: inline-block;
     }

     .WHITE_BLUE {
         height: 15px;
         width: 15px;
         background: rgb(41, 222, 214);
         background: linear-gradient(0deg, rgba(41, 222, 214, 1) 2%, rgba(255, 255, 255, 1) 50%);
         border-radius: 50%;
         display: inline-block;


     }

     .GREEN_BLACK {
         height: 15px;
         background: rgb(142, 222, 41);
         background: linear-gradient(0deg, rgba(142, 222, 41, 1) 13%, rgba(148, 162, 30, 1) 27%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;

     }

     .WHITE_BLACK {
         height: 15px;
         width: 15px;
         background: rgb(255, 255, 255);
         background: linear-gradient(0deg, rgba(255, 255, 255, 1) 13%, rgba(0, 0, 0, 1) 65%);
         border-radius: 50%;
         display: inline-block;
     }

     .GREY_SKYBLUE {
         height: 15px;
         width: 15px;
         border-radius: 50%;
         display: inline-block;


         background: rgb(192, 192, 192);
         background: linear-gradient(0deg, rgba(192, 192, 192, 1) 13%, rgba(112, 200, 245, 1) 65%);
     }

     .MULTI {

         height: 15px;
         width: 15px;
         border-radius: 50%;

         display: inline-block;

         background: rgb(112, 245, 214);
         background: radial-gradient(circle, rgba(112, 245, 214, 1) 0%, rgba(255, 186, 55, 1) 45%, rgba(240, 9, 9, 1) 100%);
     }
     
.letter-image {
	position: absolute;
	top: 20%;
	left: 45%;
	width: 10px;
	height: 10px;
	-webkit-transform: translate(-50%, -50%);
	-moz-transform: translate(-50%, -50%);
	transform: translate(-50%, -50%);
	cursor: pointer;
}

.animated-mail {
	position: absolute;
	height: 150px;
	width: 200px;
	-webkit-transition: .4s;
	-moz-transition: .4s;
	transition: .4s;
	
	.body {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 0 0 100px 200px;
		border-color: transparent transparent #e95f55 transparent;
		z-index: 2;
	}
	
	.top-fold {
		position: absolute;
		top: 50px;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 100px 0 100px;
		-webkit-transform-origin: 50% 0%;
		-webkit-transition: transform .4s .4s, z-index .2s .4s;
		-moz-transform-origin: 50% 0%;
		-moz-transition: transform .4s .4s, z-index .2s .4s;
		transform-origin: 50% 0%;
		transition: transform .4s .4s, z-index .2s .4s;
		border-color: #cf4a43 transparent transparent transparent;
		z-index: 2;
	}
	
	.back-fold {
		position: absolute;
		bottom: 0;
		width: 200px;
		height: 100px;
		background: #cf4a43;
		z-index: 0;
	}
	
	.left-fold {
		position: absolute;
		bottom: 0;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 50px 0 50px 100px;
		border-color: transparent transparent transparent #e15349;
		z-index: 2;
	}
	
	.letter {
		left: 20px;
		bottom: 0px;
		position: absolute;
		width: 160px;
		height: 60px;
		background: white;
		z-index: 1;
		overflow: hidden;
		-webkit-transition: .4s .2s;
		-moz-transition: .4s .2s;
		transition: .4s .2s;
		
		.letter-border {
			height: 10px;
			width: 100%;
      background: repeating-linear-gradient(
        -45deg,
        #cb5a5e,
        #cb5a5e 8px,
        transparent 8px,
        transparent 18px
      );
		}
		
		.letter-title {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 40%;
			background: #cb5a5e;
		}
		.letter-context {
			margin-top: 10px;
			margin-left: 5px;
			height: 10px;
			width: 20%;
			background: #cb5a5e;
		}
		
		.letter-stamp {
			margin-top: 30px;
			margin-left: 120px;
			border-radius: 100%;
			height: 30px;
			width: 30px;
			background: #cb5a5e;
			opacity: 0.3;
		}
	}
}


	.letter-image:hover {
		.animated-mail {
			transform: translateY(50px);
			-webkit-transform: translateY(50px);
			-moz-transform: translateY(50px);
		}
		
		.animated-mail .top-fold {
			transition: transform .4s, z-index .2s;
			transform: rotateX(180deg);
			-webkit-transition: transform .4s, z-index .2s;
			-webkit-transform: rotateX(180deg);
			-moz-transition: transform .4s, z-index .2s;
			-moz-transform: rotateX(180deg);
			z-index: 0;
		}
		
		.animated-mail .letter {
			height: 180px;
		}
		
	} 
    .cta {
  border: none;
  background: none;
  cursor: pointer;
}

.cta span {
  padding-bottom: 7px;
  letter-spacing: 4px;
  font-size: 14px;
  padding-right: 15px;
  text-transform: uppercase;
}

.cta svg {
  transform: translateX(-8px);
  transition: all 0.3s ease;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active svg {
  transform: scale(0.9);
}

.hover-underline-animation {
  position: relative;
  color: white;
  padding-bottom: 5px;
}

.hover-underline-animation:after {
  content: "";
  position: absolute;
  width: 100%;
  transform: scaleX(0);
  height: 2px;
  bottom: 0;
  left: 0;
  background-color: white;
  transform-origin: bottom right;
  transition: transform 0.25s ease-out;
}

.cta:hover .hover-underline-animation:after {
  transform: scaleX(1);
  transform-origin: bottom left;
}
.card1{
  position: relative;
  width: 240px;
  height: 254px;
  background-color: #000;
  display: flex;
  flex-direction: column;
  /* justify-content: end; */
  padding: 12px;
  /* gap: 12px; */
  border-radius: 8px;
  cursor: pointer;
}

.card1::before {
  content: '';
  position: absolute;
  inset: 0;
  left: -5px;
  margin: auto;
  width: 250px;
  height: 264px;
  border-radius: 10px;
  background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );
  z-index: -10;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.card1::after {
  content: "";
  z-index: -1;
  position: absolute;
  inset: 0;
  background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
  transform: translate3d(0, 0, 0) scale(0.95);
  filter: blur(20px);
}

.heading {
  font-size: 20px;
  text-transform: capitalize;
  font-weight: 700;
}

.card1 p:not(.heading) {
  font-size: 14px;
}

.card1 p:last-child {
  color: #e81cff;
  font-weight: 600;
}

.card1:hover::after {
  filter: blur(30px);
}

.card1:hover::before {
  transform: rotate(-90deg) scaleX(1.34) scaleY(0.77);
}



     </style>
 </head>

 <body class="">

    
 <?php 

 include('Helpers/Navbar.php');
 
 ?>
 <!-- main starting -->
     <div id="main">
        
         <div id="header">
             <!-- top image -->
             <div id="carouselExampleControl" class=" w-100 carousel slide container-lg h-50 mt-2 rounded-3"
                 data-bs-ride="carousel">
                 <div class="carousel-inner rounded-3 ">
                     <div class="carousel-item active">
                     <video class="d-block w-100 me-auto ms-auto rounded-3" height="" autoplay muted >
                      <source src="top/SPORTS/TOP1.mp4" class="object-fit-contain" type="video/mp4">
                      <source src="top/SPORTS/TOP1.mp4" class="object-fit-contain" type="video/ogg">
                    </video>
                     </div>
                     <div class="carousel-item">
                         <img src="top\top2.jpg" class="d-block w-100 rounded-3" alt="...">
                     </div>
                 </div>
                 <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl"
                     data-bs-slide="prev">
                     <span class="carousel-c ontrol-prev-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl"
                     data-bs-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="visually-hidden">Next</span>
                 </button>
             </div>
             
             <!-- top image -->
             <?php
$BLACK_PQSF01="SELECT * FROM s_info WHERE COLOR='BLACK'";
$GREY_PQSF01="SELECT * FROM s_info WHERE COLOR='GREY'";
$WHITE_PQSF01="SELECT * FROM s_info WHERE COLOR='WHITE'";
$PQSF01="SELECT * FROM shoe_info WHERE ID='PQSF01'";

$result = $con->query($BLACK_PQSF01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // echo "<h1 class='text-bg-dark'>".$row['ADD']."</h1>";

      
?>














             <!-- 1st row start  -->
             <div class="row R1 align-items-center my-2 container-sm ms-auto me-auto">




















                 <!-- first part -->
                 <div class="col  container card shadow p-3 me-2 ">
                     <div id="carouselExampleCaptions" class="carousel slide  container-fluid">
                         <div class="carousel-indicators">
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                 class="active" aria-current="true" aria-label="Slide 1"></button>
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                 aria-label="Slide 2"></button>
                             <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                 aria-label="Slide 3"></button>
                         </div>
                         <div class="carousel-inner fitst-part rounded-3">
                             <div class="carousel-item  active">
                                 <img src="<?php echo $row['IMG_ADD']; ?>" class="d-block w-100 rounded-3 shadow-lg"
                                     alt="...">
                                 <div
                                     class="carousel-caption d-none d-md-block  mt-5 mb-0 pt-5 position-absolute top-50">
                                     <!-- <h5 class="mt-2"><span style="color:white; background-color:slategray; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">GREY</span> </h5>     -->
                                 </div>
                                 <?php break; }} ?>

                             </div>
                             <?php
              $result = $con->query($GREY_PQSF01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        // echo "<h1 class='text-bg-dark'>".$row['ADD']."</h1>";

      
?>

                             <div class="carousel-item">
                                 <img src="<?php echo $row['IMG_ADD']; break; }} ?>"
                                     class="d-block w-100 h-50 rounded-3" alt="...">
                                 <div
                                     class="carousel-caption d-none d-md-block mt-5 mb-0 pt-5 position-absolute top-50">
                                     <!-- <h5><span style=" color:black; background-color:WHITE; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">WHITE</span> COLOR</h5>     -->
                                 </div>
                             </div>

                             <?php
              $result = $con->query($WHITE_PQSF01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                             <div class="carousel-item ">
                                 <img src="<?php echo $row['IMG_ADD']; break; }} ?>" class="d-block w-100  rounded-3"
                                     alt="...">
                                 <div
                                     class="carousel-caption d-none d-md-block  mt-5 mb-0 pt-5 position-absolute top-50">
                                     <!-- <h5><span style="color:white; background-color:black; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">BLACK</span> COLOR</h5>     -->


                                 </div>
                             </div>
                         </div>
                         <button class="carousel-control-prev ps-3" type="button"
                             data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next pe-3" type="button"
                             data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>
                     </div>

                     <div
                         class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">

                         <?php
              $result = $con->query($PQSF01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                         <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                             <?php echo $row['NAME']; }} ?> </p>
                         <ul class='list-group w-50 ms-auto me-auto    list-group-horizontal '>
                             <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='PQSF01'";

              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                             <li
                                 class="list-group-item btn <?php if($row['COLOR']=="WHITE"){?> bg-dark text-light border<?php } ?> py-0 px-2  mx-2 rounded ">

                                 <span class="<?php echo $row['COLOR']; ?>">
                                 </span>
                                 <?php
//  echo $row['COLOR']; 
?>

                             </li>
                             <?php }} ?>
                         </ul>
                         <h5 class="ms-auto me-auto d-inline-grid">
                             <div class="">
                                 <?php 
              $result = $con->query($PQSF01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                 <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                         class="border rounded-1" style="padding: 0.10rem;"
                                         id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>
                                 <span class="">

                                     <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                             id="realPrice1"><?php echo $row['PRICE']; ?></s></small>

                                     &#8377<span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>
                             </div>
                         </h5>

                         <form action="CART_INFO.php" method="post">
                             <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                             <input type="hidden" name="COLOR" value=''>
                             <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>

                             <input type="hidden" name="price" id="DPSI1" value="<?php echo $dp;  ?>">
                             <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                             <?php  }} ?>



                             <script>
                             let SELECT = new Audio('sounds/SELECT.mp3');
                             let itam = document.getElementsByName("itam_pic");

                             let item = document.getElementsByClassName('carousel-item');
                             console.log(item[2]);
                             let Color_piker = document.getElementsByClassName('list-group-item');
                             console.dir(Color_piker);
                             Color_piker[0].addEventListener("click", DA);  

                             function DA() {

                                 SELECT.play();
                                 item[3].classList.remove("active")
                                 item[4].classList.remove("active")
                                 item[2].className += " active animation ";
                                 item[2].style.animation = "STEMP 0.5s normal forwards ease-in-out";
                                 current_add = item[2].children[0].src;

                                 console.log(current_add);
                                 // itam[0].value=current_add;
                                 // console.log(itam[0].value) 
                                 let QUERY = document.getElementsByName("COLOR");
                                 console.dir(QUERY[0]);
                                 QUERY[0].value = "BLACK";
                                 console.dir(QUERY[0].value);

                             }
                             Color_piker[1].addEventListener("click", () => {
                                 SELECT.play();

                                 item[3].classList.remove("active")
                                 item[2].classList.remove("active")
                                 item[4].style.animation = "STEMP 0.5s normal forwards ease-in-out";
                                 item[4].className += " active ";
                                //  current_add = item[4].children[0].src;
                                 // console.log(current_add);
                                //  itam[0].value = current_add;
                                //  console.log(itam[0].value)
                                //  current_add = item[2].children[0].src;
                                 // console.log(current_add);
                                //  itam[0].value = current_add;
                                //  console.log(itam[0].value)
                                 let QUERY = document.getElementsByName("COLOR");
                                 console.dir(QUERY[0]);
                                 QUERY[0].value = "WHITE";
                                 console.dir(QUERY[0].value);


                             });

                             Color_piker[2].addEventListener("click", () => {
                                 SELECT.play();

                                 item[4].classList.remove("active")
                                 item[2].classList.remove("active")
                                 item[3].className += " active ";

                                 item[3].style.animation = "STEMP 0.5s normal forwards ease-in-out";
                                 //              current_add=item[3].children[0].src;  


                                 // console.log(current_add);
                                 // itam[0].value=current_add;

                                 let QUERY = document.getElementsByName("COLOR");
                                 console.dir(QUERY[0]);
                                 QUERY[0].value = "GREY";
                                 console.dir(QUERY[0].value);

                             });
                             </script>





                             <button type="submit" name="ADD" id='btn1' class="btn btn-warning"> ADD TO CART <i
                                     class="bi bi-cart-plus-fill " id='btncart1'></i></button>
                             <!-- <script>
          
// let img_add=document.getElementsByClassName("carousel-item");

// console.log(item[3].children[0].src);

</script> -->
                         </form>

                     </div>
                 </div>




















                 <!-- second part  -->
                 <div class="col container card shadow p-3 ">
                     <div id="carouselExampleAutoplaying" class="carousel slide container-fluid"
                         data-bs-ride="carousel">
                         <div class="carousel-inner rounded-3">
                             <div class="carousel-item active">
                                 <img src="boo\shue14.jpeg" class="d-block w-100 rounded-3" alt="...">
                                 <div
                                     class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                 </div>
                             </div>
                             <div class="carousel-item rounded-3">
                                 <img src="boo\shue11.jpg" class="d-block w-100 rounded-3 " alt="...">
                                 <div
                                     class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">
                                     <h5 class="mt-5 mb-0 pb-0 rounded-pill text-center">


                                         </span>
                                     </h5>

                                 </div>
                             </div>

                         </div>
                         <button class="carousel-control-prev ps-3" type="button" name="button"
                             data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next pe-3" type="button"
                             data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>
                     </div>


                     <div
                         class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
                         <?php
  $CR01="SELECT * FROM shoe_info WHERE ID='CR01' ";
  $result = $con->query($CR01);
  if ($result->num_rows > 0 ) {
    while($s = $result->fetch_assoc() ){
      
    
  
          ?>
                         <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                             <?php echo $s['NAME']; }} ?> </p>

                         <ul class='list-group ms-5 ps-5 me-auto  w-50  ms-3   list-group-horizontal '>
                             <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='CR01'";
              
              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                             <li
                                 class="list-group-item  text-center btn <?php if($row['COLOR']=="WHITE" || $row['COLOR']=="WHITE_BLUE"   ){echo "bg-dark text-light border"; } ?> py-0 mb-2 px-2  ms-0 mx-2 rounded ">

                                 <span class="<?php echo $row['COLOR']; ?>">
                                 </span>
                                 <br>
                                 <?php
//  echo $row['COLOR'];
 ?>

                             </li>
                             <?php }} ?>
                         </ul>

                         <script>
                         //          let itam=document.getElementsByName("itam_pic");

                         // let item1 = document.getElementsByClassName('carousel-item');
                         console.log(item[5]);
                         // let Color_piker = document.getElementsByClassName('list-group-item');
                         console.dir(Color_piker);
                         Color_piker[3].addEventListener("click", DAA);

                         function DAA() {
                             SELECT.play();

                             item[6].classList.remove("active");
                             item[5].className += " active ";
                             item[5].style.animation = "STEMP 0.5s normal forwards ease-in-out";

                             let QUERY = document.getElementsByName("COLOR");
                             console.dir(QUERY[1]);
                             QUERY[1].value = "GRADIANT";
                             console.dir(QUERY[1].value);

                         }
                         Color_piker[4].addEventListener("click", () => {
                             SELECT.play();

                             item[5].classList.remove("active")

                             item[6].className += " active ";
                             item[6].style.animation = "STEMP 0.5s normal forwards ease-in-out";



                             let QUERY = document.getElementsByName("COLOR");
                             console.dir(QUERY[1]);
                             QUERY[1].value = "NAVY";
                             console.dir(QUERY[1].value);


                         });

                         //              Color_piker[2].addEventListener("click",()=> { item[4].classList.remove("active")
                         //              item[2].classList.remove("active")
                         //              item[3].className+= " active ";
                         //              current_add=item[3].children[0].src;  
                         //              // console.log(current_add);
                         // itam[0].value=current_add;
                         // console.log(itam[0].value)   });
                         </script>
                         <h5 class="ms-auto me-auto d-inline-grid mt-2">
                             <div class="">
                                 <?php 
                  $CR01="SELECT * FROM shoe_info WHERE ID='CR01'"; 
              $result = $con->query($CR01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                 <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                         class="border rounded-1" style="padding: 0.10rem;"
                                         id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>

                                 <span class="">


                                     <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                             id="realPrice1"><?php echo $row['PRICE']; ?></s></small>
                                     &#8377
                                     <span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp1= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>

                                 </span>
                             </div>
                         </h5>

                         <form action="CART_INFO.php" method="post">
                             <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                             <input type="hidden" name="COLOR" value=''>
                             <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>
                             <input type="hidden" name="price" id="DPSI1" value="<?php echo $Dprice;  ?>">

                             <input type="hidden" name="price" id="DPSI1" value="<?php echo $dp1;  ?>">

                             <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                             <?php  }} ?>



                             <!-- js works -->

                             <button type="submit" name="ADD" class="btn btn-warning">ADD TO CART <i
                                     class="bi bi-cart-plus-fill"></i></button>
                         </form>

                     </div>
                 </div>
















                 <!-- third part -->
                 <div class="col container card shadow p-3 m-2">
                     <div id="carouselExampleFade" class="carousel slide carousel-fade">
                         <div class="carousel-inner rounded-3 container-fluid ">
                             <div class="carousel-item active">
                                 <img src="boo\shue8.jpeg" class="d-block w-100 rounded-3" alt="...">
                                 <div
                                     class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <img src="boo\shue9.jpeg" class="d-block w-100 rounded-3" alt="...">
                                 <div
                                     class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                 </div>
                             </div>
                             <div class="carousel-item">
                                 <img src="boo\shue10.jpeg" class="d-block w-100" alt="...">
                                 <div
                                     class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                 </div>
                             </div>
                         </div>
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                             data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                             data-bs-slide="next">
                             <span class="carousel-control-next-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Next</span>
                         </button>

                     </div>

                     <div
                         class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">

                         <?php 
            $AS01="SELECT * FROM shoe_info WHERE id ='AS01'";
            $result=$con->query($AS01);
            if ($result->num_rows > 0)
            {
              while ($p=$result->fetch_assoc())
              {

              
            
            ?>

                         <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                             <?php echo $p['NAME']; }} ?> </p>
                         <ul class='list-group ms-5 ps-3 me-auto  w-50  ms-3   list-group-horizontal '>

                             <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='AS01'";
              
              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                             <li
                                 class="list-group-item  text-center btn <?php if($row['COLOR']=="WHITE" || $row['COLOR']=="WHITE_BLUE" || $row['COLOR']=="GREEN_BLACK" || $row['COLOR']=="WHITE_BLACK"   ){echo "bg-dark text-light  border"; } ?> py-0 mb-2 px-2  mx-2 rounded ">

                                 <span class="<?php echo $row['COLOR']; ?>">
                                 </span>
                                 <br>
                                 <?php
//  echo $row['COLOR'];
 ?>

                             </li>
                             <?php }} ?>
                         </ul>
                         <h5 class="ms-auto me-auto d-inline-grid">
                             <div class="">
                                 <?php 
                  $CR01="SELECT * FROM shoe_info WHERE ID='AS01'";
              $result = $con->query($CR01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                 <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                         class="border rounded-1" style="padding: 0.10rem;"
                                         id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>

                                 <span class="">


                                     <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                             id="realPrice1"><?php echo $row['PRICE']; ?></s></small>
                                     &#8377   <span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp2= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>

                             </div>
                         </h5>

                         <form action="CART_INFO.php" method="post">
                             <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                             <input type="hidden" name="COLOR" value=''>
                             <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>
                             <input type="hidden" name="price" id="DPSI1" value="<?php echo $dp2;  ?>">


                             <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                             <?php  }} ?>

<script>
                               Color_piker[5].addEventListener("click", DA);
                              //  Color_piker[0].addEventListener("click", DA);

function DA() {

    SELECT.play();
    item[8].classList.remove("active")
    item[9].classList.remove("active")
    item[7].className += " active animation ";
    item[7].style.animation = "STEMP 0.5s normal forwards ease-in-out";
    // current_add = item[2].children[0].src;

    // console.log(current_add);
    // itam[0].value=current_add;
    // console.log(itam[0].value) 
    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[2]);
    QUERY[2].value = "WHITE_BLUE";
    console.dir(QUERY[2].value);

}
Color_piker[6].addEventListener("click", () => {
    SELECT.play();

    item[7].classList.remove("active")
    item[9].classList.remove("active")
    item[8].style.animation = "STEMP 0.5s normal forwards ease-in-out";
    item[8].className += " active ";
    // current_add = item[4].children[0].src;
    // console.log(current_add);
    // itam[0].value = current_add;
    // console.log(itam[0].value)
    // current_add = item[2].children[0].src;
    // console.log(current_add);
    // itam[0].value = current_add;
    // console.log(itam[0].value)
    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[2]);
    QUERY[2].value = "GREEN_BLACK";
    console.dir(QUERY[2].value);


});

Color_piker[7].addEventListener("click", () => {
    SELECT.play();

    item[7].classList.remove("active")
    item[8].classList.remove("active")
    item[9].className += " active ";

    item[9].style.animation = "STEMP 0.5s normal forwards ease-in-out";
    //              current_add=item[3].children[0].src;  


    // console.log(current_add);
    // itam[0].value=current_add;

    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[2]);
    QUERY[2].value = "WHITE_BLACK";
    console.dir(QUERY[2].value);

});

</script>


                             <button type="submit" name="ADD" class="btn btn-warning ms-auto me-auto">ADD TO CART <i
                                     class="bi bi-cart-plus-fill"></i></button>
                         </form>
                     </div>
</div>
                 </div>

                 <!-- 2nd row -->








                 <div class="row align-items-center my-2 container-sm ms-auto me-auto">



















                     <!-- 4th part -->
                     <div class="col container card shadow p-3 m-2">
                         <div id="carouselExampleCaptions2" class="carousel slide container-fluid">

                             <div class="carousel-inner rounded-3">
                                 <div class="carousel-item active ">
                                     <img src="boo\shue15.jpeg" class="d-block w-100 rounded-3" alt="...">
                                     <div
                                         class="carousel-caption d-none d-md-block  mt-4 mb-0 pt-5 position-absolute top-50">
                                     </div>
                                 </div>
                             </div>

                         </div>

                         <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
                             <?php 
            $CR7 = " SELECT * FROM shoe_info WHERE ID ='CR7'";
             $result = $con->query($CR7);
             if ($result->num_rows >0){
              while ($row = $result->fetch_assoc()){

             
            ?>

                             <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                                 <?php echo $row['NAME']; }} ?> </p>

                             <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='CR7'";

              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                             <li
                                 class="list-group-item btn <?php if($row['COLOR']=="WHITE" || $row['COLOR']=="GREY_SKYBLUE" ){?> bg-dark text-light border <?php } ?>me-auto ms-auto  w-25 py-0 px-2  mx-2  rounded ">

                                 <span class="<?php echo $row['COLOR']; ?>">
                                 </span>
                                 <?php
//  echo $row['COLOR']; 
?>

                             </li>
                             <?php }} ?>
                             </ul>
                             <h5 class="ms-auto me-auto d-inline-grid">
                                 <div class="">
                                     <?php 
                  $CR7="SELECT * FROM shoe_info WHERE ID='CR7'";
              $result = $con->query($CR7);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                     <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                             class="border rounded-1" style="padding: 0.10rem;"
                                             id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>

                                     <span class="">


                                         <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                                 id="realPrice1"><?php echo $row['PRICE']; ?></s></small>
                                         &#8377   <span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp3= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>


                                     </span>
                                 </div>
                             </h5>

                             <form action="CART_INFO.php" method="post">
                                 <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                                 <input type="hidden" name="COLOR" value=''>
                                 <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>
                                 <input type="hidden" name="price" id="DPSI1"   value="<?php echo $dp3;  ?>">


                                 <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                                 <?php  }} ?>




                                 <button type="submit" name="ADD" class="btn btn-warning ms-auto me-auto">ADD TO CART <i
                                         class="bi bi-cart-plus-fill"></i></button>
                             </form>

                         </div>
                     </div>


















                     <!-- 5th part -->
                     <div class="col container card shadow p-3 ">
                         <div id="carouselExampleAutoplaying2" class="carousel container-fluid slide  "
                             data-bs-ride="carousel">
                             <div class="carousel-inner rounded-3">
                                 <div class="carousel-item active">
                                     <img src="boo\shue16.jpg" class="d-block w-100" alt="...">
                                     <div
                                         class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                     </div>
                                 </div>
                                 <div class="carousel-item rounded-3">
                                     <img src="boo\shue17.jpg" class="d-block w-100  rounded-3 " alt="...">
                                     <div
                                         class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                     </div>
                                 </div>

                             </div>
                             <button class="carousel-control-prev ps-3" type="button" name="button"
                                 data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                             </button>
                             <button class="carousel-control-next pe-3" type="button"
                                 data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                             </button>
                         </div>

                         <div
                             class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
                             <?php 
            $SP01="SELECT * FROM shoe_info WHERE id ='SP01'";
            $result=$con->query($SP01);
            if ($result->num_rows > 0)
            {
              while ($p=$result->fetch_assoc())
              {

              
            
            ?>

                             <p class="card-text text-center ms-2" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                                 <?php echo $p['NAME']; }} ?> </p>

                             <ul class='list-group   w-25 me-auto ms-auto    list-group-horizontal '>
                                 <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='SP01'";

              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                                 <li
                                     class="list-group-item btn  <?php if($row['COLOR']=="WHITE" || $row['COLOR']=="MULTI" ){?> bg-dark text-light border<?php } ?> py-0 px-2 ms-0  mx-2   rounded ">

                                     <span class="<?php echo $row['COLOR']; ?>">
                                     </span>
                                     <?php
//  echo $row['COLOR']; 
?>

                                 </li>
                                 <?php }} ?>
                             </ul>

                             <h5 class="ms-auto me-auto d-inline-grid">
                                 <div class="">
                                     <?php 
              $result = $con->query($SP01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                     <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                             class="border rounded-1" style="padding: 0.10rem;"
                                             id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>
                                     <span class="">

                                         <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                                 id="realPrice1"><?php echo $row['PRICE']; ?></s></small>

                                         &#8377 <span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp4= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>

                                 </div>
                             </h5>

                             <form action="CART_INFO.php" method="post">
                                 <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                                 <input type="hidden" name="COLOR" value=''>
                                 <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>

                                 <input type="hidden" name="price" id="DPSI1" value="<?php echo $dp4; ?>">
                                 <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                                 <?php  }} ?>

                             
                                 <button type="submit" name="ADD" id='btn1' class="btn btn-warning"> ADD TO CART <i
                                         class="bi bi-cart-plus-fill " id='btncart1'></i></button>

                             </form>
<script>
   Color_piker[9].addEventListener("click", DAA);

function DAA() {
    SELECT.play();

    item[12].classList.remove("active");
    item[11].className += " active ";
    item[11].style.animation = "STEMP 0.5s normal forwards ease-in-out";

    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[4]);
    QUERY[4].value = "MULTI";
    console.dir(QUERY[4].value);

}
Color_piker[10].addEventListener("click", () => {
    SELECT.play();

    item[11].classList.remove("active")

    item[12].className += " active ";
    item[12].style.animation = "STEMP 0.5s normal forwards ease-in-out";



    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[4]);
    QUERY[4].value = "NAVY";
    console.dir(QUERY[4].value);


});

</script>

                         </div>
                     </div>























                     <!-- 6th part   -->
                     <div class="col container card shadow p-3 m-2">
                         <div id="carouselExampleFade2" class="carousel slide carousel-fade">
                             <div class="carousel-inner rounded-3 container-fluid ">
                                 <div class="carousel-item active">
                                     <img src="boo\shue19.jpg" class="d-block w-100 rounded-3 " alt="...">
                                     <div
                                         class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">


                                     </div>
                                 </div>
                                 <div class="carousel-item">
                                     <img src="boo\shue18.jpg" class="d-block w-100 rounded-3" alt="...">
                                     <div
                                         class="carousel-caption position-absolute  top-50 mt-5 mb-0 pt-5 pb-lg-0 d-none d-md-block">

                                     </div>
                                 </div>

                             </div>
                             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2"
                                 data-bs-slide="prev">
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Previous</span>
                             </button>
                             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2"
                                 data-bs-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="visually-hidden">Next</span>
                             </button>

                             <div
                                 class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">

                                 <?php 
            $SLE01="SELECT * FROM shoe_info WHERE id ='SLE01'";
            $result=$con->query($SLE01);
            if ($result->num_rows > 0)
            {
              while ($p=$result->fetch_assoc())
              {

              
            
            ?>

                             <p class="card-text text-center ms-3" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
                                 <?php echo $p['NAME']; }} ?> </p>

                             <ul class='list-group   w-25 me-auto ms-auto    list-group-horizontal '>
                                 <?php
              $IMG_COLOR="SELECT COLOR FROM img_color_info WHERE ID='SLE01'";

              $result = $con->query($IMG_COLOR);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {    
            ?>
                                 <li
                                     class="list-group-item btn  <?php if($row['COLOR']=="WHITE" || $row['COLOR']=="MULTI" ){?> bg-dark text-light border<?php } ?> py-0 px-2 ms-0  mx-2   rounded ">

                                     <span class="<?php echo $row['COLOR']; ?>">
                                     </span>
                                     <?php
//  echo $row['COLOR']; 
?>

                                 </li>
                                 <?php }} ?>
                             </ul>

                             <h5 class="ms-auto me-auto d-inline-grid">
                                 <div class="">
                                     <?php 
              $result = $con->query($SLE01);
//   if(isset($_SESSION['email']) && isset($_SESSION['pass']))
//   {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {           
            ?>
                                     <p class="m-0 me-5  mb-1 mt-3  text-end " style="font-size: x-small;"><span
                                             class="border rounded-1" style="padding: 0.10rem;"
                                             id="DPS1"><?php echo $row['DISCOUNT']."% off "; ?></span></p>
                                     <span class="">

                                         <small class="fs-6" style="font-family: 'Quantico', sans-serif;">&#8377<s
                                                 id="realPrice1"><?php echo $row['PRICE']; ?></s></small>

                                         &#8377 <span class="fs-6" id="DisPrice1"
                                         style="font-family: 'Quantico', sans-serif;"><?php  $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp5= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice; ?></span>
                                     <s id="realPrice1"></s>
                                 </span>
                                         <s id="realPrice1"></s>
                                     </span>
                                 </div>
                             </h5>

                             <form action="CART_INFO.php" method="post">
                                 <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                                 <input type="hidden" name="COLOR" value=''>
                                 <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>

                                 <input type="hidden" name="price" id="DPSI1" value="<?php echo $dp5;  ?>">
                                 <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                                 <?php  }} ?>

                             
                                 <button type="submit" name="ADD" id='btn1' class="btn btn-warning"> ADD TO CART <i
                                         class="bi bi-cart-plus-fill " id='btncart1'></i></button>

                             </form>
                             </div>















                             <script>
   Color_piker[11].addEventListener("click", DAA);

function DAA() {
    SELECT.play();

    item[14].classList.remove("active");
    item[13].className += " active ";
    item[13].style.animation = "STEMP 0.5s normal forwards ease-in-out";

    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[5]);
    QUERY[5].value = "GREY";
    console.dir(QUERY[5].value);

}
Color_piker[12].addEventListener("click", () => {
    SELECT.play();

    item[13].classList.remove("active")

    item[14].className += " active ";
    item[14].style.animation = "STEMP 0.5s normal forwards ease-in-out";



    let QUERY = document.getElementsByName("COLOR");
    console.dir(QUERY[5]);
    QUERY[5].value = "BLACK";
    console.dir(QUERY[5].value);


});

</script>

                         </div>
                     </div>
                 </div>
             </div>

             <?php include("FOOTER.php") ?>
           
             <!-- <script src="SPORTS_SELECTION.js"></script> -->

             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                 integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                 crossorigin="anonymous"></script>
<!-- for user info  -->
<script>
    let profile=document.getElementById("PROFILE");
// console.log(profile);
let UserInfo=document.getElementById("USER_INFO");
profile.addEventListener("click",()=>{
console.dir();
if (profile.children[1].classList[4]=="d-none")
{
profile.children[1].classList.remove("d-none");
UserInfo.classList.remove("d-none");
// animation: name duration timing-function delay iteration-count direction fill-mode;
UserInfo.style.animation="U_I_S 1s normal forwards ease-in-out";
}
else
{
profile.children[1].className +=" d-none "; 
UserInfo.style.animation="U_I_N 1s normal forwards ease-in-out";
// UserInfo.className+=" d-none "; 

}


}
);
</script>


<!-- for audio -->
<script>
let waterDrop=new Audio("sounds/water drop.mp3");

// waterDrop.play();
// let aa=waterDrop.audio;
// let flag=0;
let MenuBar=document.getElementsByClassName('cta');
for(i=0;i<MenuBar.length;i++)
{
MenuBar[i].addEventListener("mouseover",()=>{
   waterDrop.play();
});
}

</script>
<!-- <script src="Helpers/SOUNDS.js"></script> -->
 </body>
 </html>