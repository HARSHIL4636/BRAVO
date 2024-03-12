<!-- try to simplyfy and show through  db  -->



<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quantico:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,500&family=Montserrat:wght@600&family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,500&family=Roboto+Condensed:wght@500&display=swap" rel="stylesheet">
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
    <!-- bootstrap bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<style>
    .STAMP_ANMTN{
    animation: stemp 0.5s normal forwards ease-in-out ;
    

}
.ShoeId
{

    
    position: relative;
    right: 350px; top: -35px ; 

}

@keyframes stemp
{
    0%{
        width:50px;  right: 70px; top: 200px ; height:180px; opacity: 0%;

    }
    50%
    {
        
    }
    100%{
        width:112.5px;  right: 75px; top: 230px ; height:90px; opacity: 100%;
    }
}
.BLACK {
  height: 20px;
  width: 20px;
  background-color: black;
  border-radius: 50%;
  display: inline-block;


}
.WHITE {
  height: 20px;
  width: 20px;
  background-color: white;
  border:BLACK solid 1px;
  border-radius: 50%;
  display: inline-block;


}
.GREY {
  height: 20px;
  width: 20px;
  background-color: GREY;
  border-radius: 50%;
  display: inline-block;
  
  
}

</style>
</head>

<body>

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
 if(!isset($_SESSION['email']))
 {
echo "<script> alert('YOU DO NOT LOGGINED PLZ LOGGIN ;)');
window.location.href='signAcc.html';
</script>";
 }
 else {
     global  $COLOR;
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
      $ID= $_POST['ID'];
$add_in_db="INSERT INTO add_cart_info VALUES('', '$SHOE_ID','$NAME','$EMAIL ','$TYPE','$COLOR')";
$con->query($add_in_db);
  
  ?>
  <header class="container d-block text-center ms-auto me-auto border p-1 pt-0 border-dark rounded-top-0 m-1" style='width:max-content;'>
  <div class="text-light text-center container w-25 rounded bg-dark fs-1" style="font-family: 'Alegreya Sans SC', sans-serif;
 font-family: 'Roboto Condensed', sans-serif;">
            YOUR CART <i class="bi bi-bag-heart-fill"></i>

  </div>
<main class="w-75 mt-1 ms-auto me-auto ">
      <div class="container-xxl  border p-2">
          <div class="container-lg    d-flex w-50 card-img pb-3 shadow w-auto p-2 " >       
            <?php 
            $add="SELECT I_ADD FROM img_add WHERE ID='$ID' AND COLOR='$COLOR' ";
      
            $result = $con->query($add);
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {        
                      
                      ?>   


          <img src="<?php echo $row['I_ADD'];?>" class="img-fluid w-25 shadow rounded img-thumbnail " id='CartPic' alt=""> <?php }}?>
<img src="BRAVO STAMP/BRAVO STEMP.png" class='position-relative STAMP_ANMTN'  style='' alt="">
<form action="MAIN_CART.php" method="post">

</form>                

<ul class="list-group position-relative  " style='right:110px; top: 10px;;'>
              <li class="list-group-item border-0 mb-0 pb-0">

               <?php echo $_POST['itam'];  ?>  
          </li>
          <li class="list-group-item border-0 mt-0 pt-0">
              <small class="ms-1 float-start pb-0"  style="font-size: smaller; " >
      <?php echo $_POST["TYPE"];  ?>
  </small>
  
  <span class='ShoeId bg-light px-2 rounded'>
      <?php    print( $_POST['ID']);?>
      </span>      
              <small style="width: fit-content; font-size: xx-small; font-family: 'Alegreya Sans SC', sans-serif;
              font-family: 'Montserrat', sans-serif;
              font-family: 'Roboto Condensed', sans-serif;" class="ms-2 float-md-start px-2 border border-primary  py-0 rounded">
                  4.1<i class=" bi bi-star-half  " style="font-size: 10px;"></i>  

              </small>
          </li>
          <li class='list-group-item border-0' style='background:none; right:58px; top: 0px; '>
              <h5 class=''>
                  
                  COLOR <br>
                  <?php echo $_POST['price'] ?>
                 
              </h5>

  
</form>

</li>
<li class='list-group-item border-0'>
  <ul class='list-group-horizontal'>


  <li class='list-group-item border-0'>

      <form action="MAIN_CART.php" method="post"></form>
          </li>

  </ul>
</li>
          </ul>
          </div>

      </div>

  </main>
</header>


<?php
     }
     else {
        if (isset($_POST['COLOR'])) {
        if ($_POST['COLOR']=="") {
            $COLOR="GREY";
            }
            else {
                $COLOR=$_POST['COLOR'];
               
            }
        }
            else {
                $COLOR="GREY";
               
            }
           
     ?>


    <header class="container d-block text-center ms-auto me-auto border p-1 pt-0 border-dark rounded-top-0 m-1" style='width:max-content;'>
        <div class="text-light text-center container w-25 rounded   bg-dark fs-1" style="font-family: 'Alegreya Sans SC', sans-serif;
       font-family: 'Roboto Condensed', sans-serif;">
                  YOUR CART <i class="bi bi-bag-heart-fill"></i>

        </div>
    <main class="w-75 mt-1 ms-auto me-auto ">
            <div class="container-xxl  border p-2">
                <div class="container-lg    d-flex w-50 card-img  pb-3 shadow w-auto p-2 " >
                
                <?php
                  $FetchData="SELECT * FROM add_cart_info";
                  $result = $con->query($FetchData); 
                  if ($result->num_rows > 0) {
                  while ($r = $result->fetch_assoc()) { 
                               
                    $id=$r['ID'];
                    // echo $r['ID'];   
                    $c=$r['COLOR'];
                    
                  }
                }
                    if(!isset($_POST['COLOR']))
                {
                    $add="SELECT * FROM img_add WHERE ID = '$id'  AND COLOR= '$c'";
                    $result=$con->query($add);
                    if ($result-> num_rows > 0)

                    {
                        while ($row = $result->fetch_assoc())
                        {
                            
                    
                            
                            
                // $D_add="SELECT * FROM d_img_add WHERE ID='$id'";
                // $result = $con->query($D_add); 
                // if ($result->num_rows > 0) {
                // while ($row = $result->fetch_assoc()) { 
                             
                               ?>
                <img src="<?php echo $row['I_ADD']; }} }?>" class="img-fluid w-25 shadow rounded img-thumbnail " id='CartPic' alt="">
    <img src="BRAVO STAMP/BRAVO STEMP.png" class='position-relative STAMP_ANMTN'  style='' alt="">
<form action="MAIN_CART.php" method="post">

   
<?php 
        $FetchData="SELECT * FROM add_cart_info";
        $result = $con->query($FetchData); 
        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { 
                     
?>    
    <ul class="list-group position-relative  " style='right:110px; top: 10px;;'>
                    <li class="list-group-item border-0 mb-0 pb-0">

                     <?php echo $row['NAME'];  ?>  
                </li>
                <li class="list-group-item border-0 mt-0 pt-0">
                    <small class="ms-1 float-start pb-0"  style="font-size: smaller; " >
            <?php echo $row["TYPE"];  ?>
        </small>
        
        <span class='ShoeId bg-light px-2 rounded'>
            <?php    print( $row['ID']); }}?>
            </span>      
                    <small style="width: fit-content; font-size: xx-small; font-family: 'Alegreya Sans SC', sans-serif;
                    font-family: 'Montserrat', sans-serif;
                    font-family: 'Roboto Condensed', sans-serif;" class="ms-2 float-md-start px-2 border border-primary  py-0 rounded">
                        4.1<i class=" bi bi-star-half  " style="font-size: 10px;"></i>  

                    </small>
                </li>
                <li class='list-group-item border-0' style='background:none; right:58px; top: 0px; '>
                    <h5 class=''>
                        
                        COLOR <br>
                        <?php 
                    
                        ?>
                     </h5>


        
</form>

    </li>
    <li class='list-group-item border-0'>
        <ul class='list-group-horizontal'>


        <li class='list-group-item border-0'>


                </li>

        </ul>
    </li>
                </ul>
                </div>

            </div>
    
        </main>
</header>
 

<?php }} ?>
<script>
    let STEMP = new  Audio('sounds/STEMP SOUND.mp3');
    
    STEMP.play(); 
// let CartPi=document.getElementById("CartPic");
// let color =document.getElementsByName('COLOR');
// let C_color = document.getElementsByClassName('COLOR');
// let input = document.getElementsByTagName('input');
//     console.log(input[0]);
//     console.log(CartPic );
//     input[0].value=C_color[0].classList[2];
//     console.log(color.value);
 
//     C_color[0].addEventListener("click",() => {

//         CartPic.src="boo/shue3.jpeg";
//         input[0].value=C_color[0].classList[2];
//     console.log(color.value);
//     input[1].value=CartPic.src;
// });

// C_color[1].addEventListener("click",() => {

//         CartPic.src="boo/shue2.jpeg";
//         input[0].value=C_color[1].classList[2];
//     console.log(color.value);
// input[1].value=CartPic.src;

//     });
//     C_color[2].addEventListener("click",() => {

// CartPic.src="boo/shue1.jpeg";
// input[1].value=CartPic.src;
// input[0].value=C_color[2].classList[2];
//     console.log(color.value);



    
</script>

</body>

</html>