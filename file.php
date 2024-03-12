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
    animation: STEMP 1s normal forwards ease-in-out;
    

}
.ShoeId
{

    
    position: relative;
    right: 350px; top: -35px ; 

}

@keyframes STEMP
{
    0%{
        width:225px;  right: 75px; top: 230px ; height:180px; opacity: 0%;

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
    //  unset($_SESSION['OK']); 
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
 else
 {
    global $color;
    $SHOES_ID=$_POST['ID'];
   $PRICE=$_POST['price'];
   $NAME=$_POST['itam'];
   $TYPE=$_POST['TYPE'];
   $EMAIL=$_SESSION['email'];
    if(!isset($_SESSION['OK']))
    {
        if(!isset($_POST['COLOR']) || $_POST['COLOR']=="")
        {
            $D_color="SELECT COLOR FROM d_img_add  WHERE ID='$SHOES_ID'";
            $result=$con->query($D_color);
            if($result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
                     $color=$row['COLOR'];
                    // echo $color;
                }
            }
        }
        else
        {
            $color=$_POST['COLOR'];
            // echo $color;
        }
        $add_in_db="INSERT INTO add_cart_info VALUES('', '$SHOES_ID','$NAME','$EMAIL ','$TYPE','$color','1','0')";
        $con->query($add_in_db);
        // echo $color;
        $_SESSION['COLOR']=$color;
        $_SESSION['OK']="OK";
    }
    elseif(isset($_SESSION['OK'])) {
        ?>
        
 <header class="container d-block text-center ms-auto me-auto border p-1 pt-0 border-dark rounded-top-0 m-1" style='width:max-content;'>
     <div class="text-light text-center container w-25 rounded   bg-dark fs-1" style="font-family: 'Alegreya Sans SC', sans-serif;
    font-family: 'Roboto Condensed', sans-serif;">
               YOUR CART <i class="bi bi-bag-heart-fill"></i>

     </div>
 <main class="w-75 mt-1 ms-auto me-auto ">
         <div class="container-xxl  border p-2">
             <div class="container-lg    d-flex w-50 card-img pb-3 shadow w-auto p-2 " >
             
             <?php
               $FetchData="SELECT * FROM add_cart_info";
               $result = $con->query($FetchData); 
               if ($result->num_rows > 0) {
               while ($r = $result->fetch_assoc()) { 
                            
                 $id=$r['ID'];      
             if(!isset($_POST['COLOR']))
             {
             $D_add="SELECT * FROM d_img_add WHERE ID='$id'";
             $result = $con->query($D_add); 
             if ($result->num_rows > 0) {
             while ($row = $result->fetch_assoc()) { 
                            ?>
             <img src="<?php echo $row['S_ADD']; }}}}}?>" class="img-fluid w-25 shadow rounded img-thumbnail " id='CartPic' alt="">
 <img src="BRAVO STAMP/BRAVO STEMP.png" class='position-relative STAMP_ANMTN'  style='' alt="">
<form action="MAIN_CART.php" method="post">

</form>                
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
}

 ?>
<form action="MAIN_CART.php" method="post">
<input type="button" name='OK' value="SUB">

</form> 

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