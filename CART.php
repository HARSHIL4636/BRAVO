<?php
session_start();


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

$flag=0;
if($_SERVER['REQUEST_METHOD']=="POST")
{
    
    if(isset($_POST['ADD']))
    {
        if(isset($_SESSION['email']) && isset($_SESSION['pass']))
        {
        
// if(isset($_SESSION['cart']))
// {   
   
    $email=$_SESSION['email'];
    $sql = "SELECT * FROM itams WHERE EMAIL='$email'";
    $result = $con->query($sql);


    // $myarray=array_column($_SESSION['cart'],'itam');
    // if($flag==1)
    // {
    //     echo "<script>alert('CART ARE ALLREADY ADDED'); 
    //     window.location.href='SPORTS.php';
    //     </script> ";
    // }
    // else
    // {
    // $count=count($_SESSION['cart']);
    // $_SESSION['cart'][$count]=array('price'=>$_POST['price'],'itam'=>$_POST['itam'],'qon'=>1,'itam_pic'=>$_POST['itam_pic']);
    if(!$con)
    {
        die("connection faild".$con->connect_error);
    }
    else
    {
        $email=$_SESSION['email'];
        $sql = "SELECT * FROM itams WHERE EMAIL='$email'";
        
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc())
            {
                if($row['ITAM']==$_POST['itam'] && $row['EMAIL']==$_SESSION['email'])
                {
                        $flag = 1;

                }
                else
                {
                    $flag=0;
                }
            }
            
          }

        if($flag==0)
        {
            $ITAM=$_POST['itam'];
            
              $price=$_POST['price'];
              $qon=1;
                $itm_pic=$_POST['itam_pic'];
                // echo $ITAM.$email.$price.$qon.$itm_pic;

             $sql="INSERT INTO `itams` VALUES ('$email','$ITAM','$price','$qon','$itm_pic')";
             if (mysqli_query($con, $sql))
             {
                
                echo "<script>
                var audio = new Audio('C:\wamp64\www\bravo shues collection\pop-1.mp3');
                audio.play();
               
                alert('CART ARE ADDED'); 
                window.location.href='SPORTS.php';
                </script> ";    
             } 
             else 
             {
                
                 echo "<script> alert('ITAM NOT in databse ADDED') </script>";
             }
            }
            else
            {
                echo "<script> alert('ITAM ARE ALLREADY ADDED')
                window.location.href='SPORTS.php';
                </script>";

               

            }

    //     //  }
    //      if($flag==1)
    // {
    //     echo "<script>alert('CART ARE ALLREADY ADDED'); 
    //     window.location.href='SPORTS.php';
    //     </script> ";
    // }

     

    // print_r($_SESSION['cart']);
    }   
        // else
        // {
            // $_SESSION['cart'][0]=array('price'=>$_POST['price'],'itam'=>$_POST['itam'],'qon'=>1,'itam_pic'=>$_POST['itam_pic']);
            // echo "<script>alert('CART ARE ADDED'); 
            // window.location.href='SPORTS.php';
            // </script> ";
                
        

        //  }
        
        echo "<script>window.location.href='';</script>";


    }
    else{

        echo"<script>alert('ACCOUNT NOT LOGINED PLEASE MAKE SURE TO LOGIN......!'); 
        window.location.href='signAcc.html';
        </script>";
    }
    }

  // for remove 

    if(isset($_POST['remove']))
    {   
        $email=$_SESSION['email'];
                  $sql = "SELECT * FROM itams WHERE EMAIL='$email'";
                  $result = $con->query($sql);
                  $i=1;
                  if ($result->num_rows > 0)
                   {
                  // output data of each row
                  while($row = $result->fetch_assoc())
                  {
        
            if($row['ITAM']==$_POST['itam'] && $_SESSION['email']=$row['EMAIL'])
            {

                if(!$con)
                      {
                          die("connection faild".$con->connect_error);
                      }
                    else
                      {

                        $itam=$_POST['itam'];
                        $sql="DELETE FROM `itams` WHERE ITAM='$itam' && EMAIL='$email'";
                        if (mysqli_query($con, $sql)) {
                        //   echo "<script> alert('ITAM DELETED IN TABLE') </script>";
                          // echo $_SESSION['email'];
                            // unset($_SESSION['cart'][$key]);
                            // $_SESSION['cart']=array_values($_SESSION['cart']);
                            echo"
                        <script> alert('ITAM REMOVED')
                        window.location.href='Mycart.php';
                        </script>
                        ";
                       } else {
                          echo "<script> alert('NPT DELETED IN TABLE') </script>";
                       }

                      }


                // print_r($key);
           
        }
        }
    
    }
    }

    // for LOGOUT
    if(isset($_POST['LOGOUT']))
    {
        unset($_SESSION['email']);
        unset($_SESSION['pass']);   
        unset($_SESSION['cart']);
        unset($_SESSION['admin']);
        $page=$_POST['PName'];

        echo 
        "
            <script>
             alert('LOGOUTED'); 
            window.history.go(-1);
             </script>
        ";
    }
}
  

    
    



?>