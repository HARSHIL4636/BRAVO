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
    <!-- icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
  .third_box
    {

        background-color: black;
        color: white;
        padding: 3px;
        border: 2px black solid;
    }
    .sec_box
    {
        padding: 3px;
        border: 2px black solid;
    }
    .first_box
    {
        border: 2px black solid;
        padding: 3px;
    }
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand bg-light text-dark p-sm-3 rounded-3 text-center" href="index.php">B R A V O</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="main_Ul">
              <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" id="SNEAKERS" href="CROCS.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CROCS</a></li>   
              <li class="ms-1 nav-link rounded-3 "><a class="btn btn-outline-light" href="CASUAL.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL </a></li>
              <li class="ms-1 nav-link rounded-3"><a class="btn btn-outline-light" href="SPORTS.php" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
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
      <h1 class="ms-auto me-auto  navbar-brand  text-offset-2 text-underline-opacity-25 text-underline-opacity-100-hover"></h1>
    </div>
  </nav>
  <!-- <script>
    let OtherOpt= document.getElementById("OtherOpt");
    let OtherPERENT =document.getElementById('OtherPERENT');
    let others = document.getElementById("others");
    others.addEventListener("mouseover", SHOW);
    function SHOW() {
      if (OtherOpt.style.visibility=="hidden")
    {
      OtherOpt.innerHTML=``;
      OtherOpt.style.visibility="visible";  
    }
      else
     {
      OtherOpt.innerHTML="";

       OtherOpt.style.visibility="hidden";
     }

    }
    OtherOpt.addEventListener("mouseout",DONTSHOW);
    function DONTSHOW()
    { 
      OtherOpt.style.visibility="hidden";  


    }
  </script> -->
</body>
</html>