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
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quantico:ital,wght@1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Lexend&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
</head>
<body class="">
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand bg-light text-dark p-sm-3 rounded-3 text-center" href="index.php">B R A V O</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="main_Ul">
            <?php if(basename(__FILE__)=="FORMAL.php"){ ?>
              <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="CASUAL.php  " style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL </a></li>
                <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
                <?php } elseif(basename(__FILE__)=="CASUAL.php"){?>
                  <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="FORMAL.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL  </a> </li>
                <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
            <?php
                }
                elseif (basename(__FILE__)=="CROCS.php")
               { ?>    
                 <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CASUAL.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-liht" href="FORMAL.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL  </a> </li>
                <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
            <?php }
                elseif (basename(__FILE__)=="SPORTS.php")
                { ?>
                    <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CASUAL.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-liht" href="FORMAL.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">FORMAL  </a> </li>
                <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
            <?php } ?>
            
</ul>
          <?php 
          if(isset($_SESSION['admin']))
          {?>  
            <ul class="navbar-nav  mb-2 mb-lg-0" id="main_Ul">
          <li class='nav-link'><li class="me-2 outline nav-item">
              <div class='text-light d-flex'>
                <!-- <form action="CART.php" method='post'> -->
                <!-- <input type="hidden" name="PName" value='index.php'> -->
                <form action="ITAM_SELECT.html" method="post">
                <button type="submit" name='LOGOUT' class='mt-1 px-3 pe-0 btn  text-light'>ADD ITAMS <span class=''><i class="bi bi-plus mb-5 pb-5 align-text-bottom pe-2"></i> </span>   </button> 
                </form>

              </div>
            </li>  
          </ul>
          <?php }?>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="B R A V O  Shues" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav px-3">
            <?php
            if(!$con)
  {
    
     die("connection faild".$con->connect_error);
  }
  else
  { 
    
  $sql = "SELECT * FROM reg";
  $result = $con->query($sql);
  if(isset($_SESSION['email']) && isset($_SESSION['pass']))
  {
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row['EMAIL']===$_SESSION['email'])
        {
            if($row['PASS']===$_SESSION['pass'])
            { ?>

              <li class=" me-2 outline nav-item d-inline-flex">
                <div class="px-2 container-sm pt-1   ">
                    <a href="Mycart.php" class="">
                        <div class="btn btn-sm">
                            
                        <p class="text-light mb-0">
                            Cart
                          
                
                       <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" >
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      </span>
                    </p>
                    </div>
                        
                    </a>
                </div>
            </li>
            <li class="me-2 outline nav-item">
              <div class='text-light'>
                <form action="CART.php" method='post'>
                <input type="hidden" name="PName" value='index.php'>
                <button type="submit" name='LOGOUT' class='mt-1 px-3 btn btn-sm text-light'>LOGOUT</button>
                </form>

              </div>
            </li>
              <?php }
              else
              {  ?>
               <li class="nav-item outline me-1 text-center h-25">
                  <a href="signAcc.html" class="btn btn-sm p-0">
                  <div class="container-sm text-light">
                  <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span> </p>
                  <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;">  Account </p>
                </div>
                </a>
              </li>
            

              
            <?php   } 
        } 
      }
    }

  }
  
    else
    {  ?>
     <li class="nav-item outline me-1 text-center h-25">
        <a href="signAcc.html" class="btn btn-sm p-0">
        <div class="container-sm text-light">
        <p class="me-2" style="font-size: 0.65rem; display:inline;"><span> hey,sign in </span> </p>
        <p class="mb-0" style="font-weight: 700; font-size: 0.90rem;">  Account </p>
      </div>
      </a>
    </li>


    
  <?php   } 
  }
        ?>
              <li class="outline nav-item dropdown" id="OtherPERENT">
                  <a class="ps-3 nav-link rounded-3 text-light" id="others" href="#">OTHER <i class="bi bi-chevron-down"></i></a>
                  <ul style="" id="OtherOpt" class=" mt-2 dropdown-menu" style='width:5px;'>
      <li class="">
      <a href="" class="pe-0 me-auto ms-auto dropdown-item container w-75 fs-6 p-0 "><span> Contact  </span> <i class="bi bi-microsoft-teams"></i> </a> 
    </li>
    <li>

    </li>
   </ul>
                </li>
                
            </ul>
          </div>
          
        </div>
        
      </nav>
    
     

  <nav id="nav2" class="avbar navbar-light  rounded-pill w-25 me-auto ms-auto p1 mt-1">
        <!-- As a link -->
    <div class="container-fluid text-center p-1">
      <h1 class="ms-auto me-auto  navbar-brand  text-offset-2 text-underline-opacity-25 text-underline-opacity-100-hover"> <?php
       if(basename(__FILE__)=="CASUAL.php")
       {
        echo "CASUAL"; }
        elseif(basename(__FILE__)=="FORMAL.php")
        {
          echo  "FORMAL"; }
        elseif(basename(__FILE__)=="CROCS.php")
        {
          echo "CROCS";
        }
        elseif(basename(__FILE__)=="SPORTS.php")
        {
          echo "SPORTS";
        }
      ?> </h1>
    </div>
  </nav>
  
<!-- top image -->
<div id="carouselExampleControl" class=" w-100 carousel slide container-lg h-50 mt-2 rounded-3" data-bs-ride="carousel">
    <div class="carousel-inner ">
      <div class="carousel-item active">
        <img src="top\Cc1.jpg" class="d-block w-100 rounded-3" alt="...">
      </div>
      <div class="carousel-item">
        <img src="top\Cc2.jpg" class="d-block w-100 rounded-3" alt="...">
      </div>
      <div class="carousel-item">
        <img src="top\Cc3.jpg " class="d-block w-100 rounded-3  " alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- top image -->
  <div class="row align-items-center my-2 container-sm ms-auto me-auto">
    <!-- first part -->
     <div class="col container card shadow p-3 m-2">
           <div id="carouselExampleCaptions" class="carousel slide container-fluid">
         <div class="carousel-indicators mb-0 ">
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
           <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
         </div>
         <div class="carousel-inner rounded-3">
           <div class="carousel-item active my-5 py-5">
             <img src="boo/CROCS/crocs 1.jpg" class="d-block w-100 rounded-3" alt="...">
           </div>
           <div class="carousel-item py-5 my-5 ">
             <img src="boo/CROCS/crocs 1_3.jpg" class="d-block w-100 h-50 rounded-3" alt="...">
           </div>
           <div class="carousel-item py-1">
             <img src="boo/CROCS/crocs 1_2.jpg " class="d-block w-100  rounded-3" alt="...">

           </div>
         </div>
  
         <button class="carousel-control-prev ps-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
       </div>
       
                   
       <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">
          
        <form action="#">
          <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">
            LITERIDE™ 360 CLOG</p>
          <h5 class="ms-auto me-auto d-inline-grid" >
         <div class="">
          <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS1"></span></p>
          <span class="">
          <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice1">1769</s></small>
        
          &#8377<span  class="fs-6" id="DisPrice1" style="font-family: 'Quantico', sans-serif;"></span>
          </span>
        </div>
        </h5>
        <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
      </form>
    
    
    </div>
   </div>
     <!-- second part  -->
     <div class="col container card shadow p-3 m-2">
         <div id="carouselExampleAutoplaying" class="carousel slide container-fluid" data-bs-ride="carousel">
             <div class="carousel-inner rounded-3">
               <div class="carousel-item active my-5 py-5">
                 <img src="boo/CROCS/crocs 2_1.jpg" class="d-block w-100" alt="...">
               </div>
               <div class="carousel-item rounded-3 my-5 py-5">
                 <img src="boo/CROCS/crocs 2_2.jpg" class="d-block w-100  rounded-3 " alt="...">
               </div>
               <div class="carousel-item rounded-3  py-1">
                <img src="boo/CROCS/crocs 2_3.jpg" class="d-block w-100  rounded-3 " alt="...">
              </div>
               
             </div>
             <button class="carousel-control-prev ps-3" type="button" name="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
  
  
           <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">
          
            <form action="#">
              <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">LITERIDE™ CLOG</p>
              <h5 class="ms-auto me-auto d-inline-grid" >
             <div class="">
              <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS2"></span></p>
              <span class="">
              <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice2">1769</s></small>
            
              &#8377<span  class="fs-6" id="DisPrice2" style="font-family: 'Quantico', sans-serif;"></span>
              </span>
            </div>
            </h5>
            <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
          </form>
        
        
        </div>
                   </div>
     
  
     <!-- third part -->
     <div class="col container card shadow p-3 m-2">
       <div id="carouselExampleFade" class="carousel slide carousel-fade">
         <div class="carousel-inner rounded-3 container-fluid ">
           <div class="carousel-item active my-5 py-5">
             <img src="boo/CROCS/crocs 3_1.jpg" class="d-block w-100 rounded-3" alt="...">
           </div>
           <div class="carousel-item my-5 py-5">
             <img src="boo/CROCS/crocs 3_2.jpg" class="d-block w-100 rounded-3" alt="...">
          </div>
           <div class="carousel-item py-1">
             <img src="boo/CROCS/crocs 3_3.jpg" class="d-block w-100 rounded-3" alt="...">
           
           </div>
         </div>
         <button class="carousel-control-prev ms-2" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next me-2  " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="visually-hidden">Next</span>
         </button>
        
         </div>
         
         <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">
          
          <form action="#">
            <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">CLASSIC CLOG</p>
            <h5 class="ms-auto me-auto d-inline-grid" >
           <div class="">
            <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS3"></span></p>
            <span class="">
            <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice3">1769</s></small>
          
            &#8377<span  class="fs-6" id="DisPrice3" style="font-family: 'Quantico', sans-serif;"></span>
            </span>
          </div>
          </h5>
          <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
        </form>
      
      
      </div>
     </div>
   </div>
<!-- JAWA screept -->
<script>
    document.addEventListener("DOMContentLoaded", function(){
// make it as accordion for smaller screens
if (window.innerWidth > 992) {

document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

    everyitem.addEventListener('mouseover', function(e){

        let el_link = this.querySelector('a[data-bs-toggle]');

        if(el_link != null){
            let nextEl = el_link.nextElementSibling;
            el_link.classList.add('show');
            nextEl.classList.add('show');
        }

    });
    everyitem.addEventListener('mouseleave', function(e){
        let el_link = this.querySelector('a[data-bs-toggle]');

        if(el_link != null){
            let nextEl = el_link.nextElementSibling;
            el_link.classList.remove('show');
            nextEl.classList.remove('show');
        }


    })
});

}
// end if innerWidth
}); 
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
   let i = Number(1)
  for(i=1;i<=100;i++)
  {
     // DISCOUNTED FINAL price of ITAM
  let b = document.getElementById('DisPrice'+i);
  // REAL PRICE OF PROCDUCT
  let a=document.getElementById('realPrice'+i);
  // PERSANTAGE OF PRICE EMLEMENT SPAN
  let DPS=document.getElementById('DPS'+i);
  let realPrice=a.textContent;
  let Dprice=b.textContent;
  let R=Number(realPrice);
  let D=Number(Dprice);  
  // DISCOUN PERSANTAGE 
  let DP=30;
  let per=R*DP/100;
  console.log(R);
  
  console.log(D);
  
   D=R-per;
  console.log(D);
  b.textContent=D;
  DPS.textContent=DP+'% off'; 
  }
</script>
</body>
</html>