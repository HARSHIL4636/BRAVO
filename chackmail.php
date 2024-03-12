




















<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Tektur:wght@500&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
</style>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Tektur:wght@500&display=swap');
</style>
</head>
<body>
</body>
</html>



<?php


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
if(!$con)
{
   die("connection faild".$con->connect_error);
}
else
{ 
  

  
  // $email=$_POST['EMAIL'];
    $sql = "SELECT * FROM reg";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        if($row['EMAIL']===$_POST['email'])
        {
            if($row['PASS']===$_POST['pass'])
            {
            echo "<script> alert('ENTERD EMAIL ARE CORRECT');</script>"; 
            if($_POST['email'] === "patelharshil4636@gmail.com" ||  $_POST['email']==="parthpanchal@gmail.com")
            {
              $_SESSION['admin']=$_POST;
              echo "<div class='bg-secondary w-50  border border-4 border-warning container-md '>
              <h1 class='text-center' >Are you <span class='text-warning text-decoration-underline'>".strtoupper($row['F_NAME'])."  ".strtoupper($row['L_NAME'])." ?</span></h1>
              <h2 class='text-center'> ADD - ".$row['EMAIL']."</h2>
              <form action='Y_N.php' class='text-center m-2' method='post'>
                <input type='submit' class='btn px-4 btn-warning btn-info' name='Y' value='YES' >
                <input type='submit' class='btn px-4 btn-danger' name='N' value='NO' >
            
              </form>
          </div>  ";
          $_SESSION['email']=$row['EMAIL'];
          $_SESSION['pass']=$row['PASS'];
          
            }
            else
            {
              unset($_SESSION['admin']);
            echo "<div class='bg-secondary w-50  border border-4 border-warning container-md '>
                    <h1 class='text-center' >IS THERE UR INFORMATION <span class='text-warning text-decoration-underline'><br> NAME - ".strtoupper($row['F_NAME'])."  ".strtoupper($row['L_NAME'])." </span></h1>
                  <h2 class='text-center'> EMAIL ADD - ".$row['EMAIL']."</h2>
                    <form action='Y_N.php' class='text-center m-2' method='post'>
                      <input type='submit' class='btn px-4 btn-warning btn-info' name='Y' value='YES' >
                      <input type='submit' class='btn px-4 btn-danger' name='N' value='NO' >
                  
                    </form>
                </div>  ";
                
                    $_SESSION['email']=$row['EMAIL'];
                  $_SESSION['pass']=$row['PASS'];
          }
              }
            else
            {
              echo "<script>  alert('INVALID PASSWORD');</script>";
              include('signAcc.html');
            }
          
        }
        // else
        // {

        //   echo "<script> alert('PLEASE CREATE ACCOUNT ');
        //   window.location.href='signAcc.html';            
        //   </script>";    

        
        // }

      }
    
    
    }
    else
    {
      echo "<script> alert('EMAIL ARE NOT SIGNED PLZ CREATE ACCOUNT ');</script>";    
      include("signAcc.html");
    }
}



?>