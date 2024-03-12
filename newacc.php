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
<link href="https://fonts.googleapis.com/css2?family=Oswald&family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- icon  -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<!-- fonts -->

<!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
<!-- <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
</style>
<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="ms-auto me-auto text-center mb-2 mt-2">
                <a class=" bg-dark text-light p-sm-3 btn rounded-3" href="index.html">B R A V O</a>
                </div>
                <form action="" method="post">
                <div class="bg border-3 border border-dark-subtle rounded-3 ms-auto me-auto pt-3" style="width: 25rem; padding-left: 20px; ">
                       <p class="" style="font-size: 2rem; font-family:sans-serif;">
                            Sign in
                       </p>
                            <p class="ms-1 mt-40" style="letter-spacing: 0.07rem; font-weight: 600; font-family: 'Roboto Condensed', sans-serif;">
                            REGISTRATION
                        </p>
                        <div class="input-group flex-nowrap text-center" style="font-family: sans-serif;">
                            <div class="">
                                <form action="newacc.php" method="post" id="form_1">
                                <div class="input-group mb-1" style="width: 22rem;">                                
                            <input type="text" id="firstName" name="FName" oninput="Typing();" class="form-control mt-1"placeholder="FIRST NAME" aria-label="Username" aria-describedby="addon-wrapping" required>
                            <input type="text" name="LName" id="LastName" oninput="Typing();" onchange="Slow()" class="form-control mt-1" placeholder="Last Name">
                                </div>
                            <input type="email" id="email" name="email"  class="form-control" style="width: 22rem;" placeholder="ENTER YOUR EMAIL" aria-label="Email" aria-describedby="addon-wrapping" required>
                            <div class="input-group" id="passDiv">
                            <input type="password" name="pass" id="password" style="width: 19rem;" maxlength="14" class="form-control mt-1 border-end-0" placeholder="PASSWORD" aria-describedby="addon-wrapping" required><span class="btn  h-25 p-2 px-3 mt-1 border-start-0 border" id="openeye" > <i class="bi bi-eye" id="icon" ></i> </span>
                            <!-- <input type="text" class='form-control mt-1 rounded' placeholder='MOBILE NO.'>     -->
                        </div>
                        <form action="newacc.php" method="post" >
                                <div class="input-group mb-1" style="width: 22rem;">         
                               <P class='rounded-3 text-center container w-75 me-auto ms-auto border m-2 PO ' style="" id="OPT">
                                    <span class='' style="font-family: 'Oswald', sans-serif;
font-family: 'Poppins', sans-serif; " id="OPT1">SELECT COUNTRY</span> <i id="DownBtn" class="bi bi-arrow-down-square-fill"></i>
                               </P>
                               <div class='container-sm text-center ' style="max-height: 100px;">
                               <ul class="container-sm text-center border h-50 w-75 rounded-3" id="UL" style=" list-style: none; visibility: hidden; overflow-y: auto; scrollbar-gutter: stable; ">
                                <li class="p-2 border border-dark   border-top-0 border-start-0 border-end-0" id="india" style="    cursor: pointer;">
                                    <img src="flag/Flag_of_India.png" style='width:60px; hight:10px;' alt="">
                            </li>
                            <li class="p-2 border border-dark  border-top-0 border-start-0 border-end-0" id="CANADA" style="    cursor: pointer;">
                                    <img src="flag/CANADA.jpg" style='width:60px; hight:10px;' alt="">
                            </li>
                            <li class="p-2 border border-dark  border-top-0 border-start-0 border-end-0" id="USA" style="    cursor: pointer;">
                                    <img src="flag/USA.png" style='width :60px; hight:10px;' alt="">
                            </li>
                               </ul> 
                               <input type="text" class="form-control p-1 w-50 me-auto ms-auto text-center fw-bolder  " style="font-size:12px ;" oninput="Typing();"  placeholder="PINCODE" name="PINCODE" id="PINC">
                               </div>
                                <!-- <select name="CONTRY" class="w-100 p-1 text-center m-1" id="CONNTRY">
                                <option value="INDIA" style="background-image:url (flag/Flag_of_India.png);">INDIA</option>
                                <option value="AUSTRALIA">AUSTRALIA</option>
                                <option value="CANADA">CANADA</option>
                                </select>                -->
                                <!-- <div class='container w-50 border p-2'>
                                    <a href="#" id='CLICKS' class='border border-dark p-2 m-1 ' onClick="document.getElementById('CONNTRY').value='INDIA'"><img src="flag/Flag_of_India.png" style="height: 25px; width:35px;" alt=""> </a> 
                                    <a href="#" id='CLICKS' class='border border-dark p-2 m-1 '  onClick="document.getElementById('CONNTRY').value='CANADA'"><img src="flag/CANADA.jpg" style="height: 25px; width:35px;" alt=""></a>
                                </div>          -->
                            <!-- <input type="text" id="country" name="country" class="form-control mt-1 w-50 fw-bolder" style='' placeholder="" aria-label="Username" aria-describedby="addon-wrapping" required> -->
                            <input type='hidden' name='COUNTRY' value="" id="CID">

                            <input type="text" name="mobile/phone" id="mobile/phone"  placeholder="" class="w-75 form-control mt-1 " placeholder="MOBILE/PHONE" maxvalue="10" oninput="Dail();" >
                                </div>

                                <!-- <a href="tel:+919409910782">CALL</a> -->
                            <div class="mb-3 text-start">
                                
                                <label for="exampleFormControlTextarea1" class="form-label text-secondary">ADDRESS <i class="bi bi-arrow-down"></i></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="Add" id="Address" rows="3"></textarea>
                                </div>
                                
                                <!-- <input type="text" name="" id=""> -->
                            <input type="submit" name="submit" id="submit" class="btn btn-warning mb-2 my-2 " style="font-family: sans-serif; width: 22rem;" value="S U B M I T ">   
                                </form>    
                                
                        </div>
                        </div>
                </form>
                <!-- <script>
                    // let ALL= document.getElementById("PINC");

                </script> -->
                <script>

                    // THE SOUND PART 
                    let dail =new Audio("sounds/NUMEBR DAIL.mp3");
                        var audio = new Audio('sounds/click - Copy.mp3');
             let PIN=document.getElementById("PINC");
                    console.log(PIN.value);

                    let a1=new Audio("sounds/min type.mp3");
                     function Typing()
                     {
                        a1.play();
                     }
                    //  phone number dail 
                     function Dail()
                     {
                        dail.play();
                     }
                </script>
                
                <script>
                    let select_audio = new  Audio('sounds/blip-131856.mp3');
                    let IV = document.querySelectorAll("input[name=FName]");
                    // INPUT.onclick = "PLAYS()";
                    

            
                    console.log(IV);
                   IV.AddEventListener("clcik",PLAYS)
                    function PLAYS()
                    {
                        
                        select_audio.play();

                    }   
                </script>

                <script>
                // FLAG SHOW PART 
                let UL=document.getElementById("UL");
                    let a=document.getElementById("OPT");
                    a.addEventListener("click",SHOW);
                    function SHOW(E)
                    {
                        console.log(UL.style.visibility)
                        if(UL.style.visibility=="hidden")
                        {
                        UL.style.visibility="visible";
                        audio.play();
                    
                                

                        }
                        else
                        {
                            // UL.style.font="0px"
                            UL.style.visibility="hidden"; 
                            // UL.innerHTML="  ";               
                            audio.play();

                        }
                    }
                    let PMOBILE=document.getElementById("mobile/phone");
                    let FORM=document.getElementById("form_1");
                    let INDIA=document.getElementById("india");
                    let CANADA=document.getElementById("CANADA");
                    let USA=document.getElementById("USA");
                    COUNTRYID=document.getElementById("CID");
                    let OPT_P=document.getElementById("OPT1");
                    let DownBtn=document.getElementById("DownBtn");
                    console.log(USA);
                    USA.addEventListener("click",U);
                    function U()
                    {

                        audio.play();
                        COUNTRYID.value="USA";
                        OPT.textContent=COUNTRYID.value;
                        OPT.className+="fw-bolder";
                        DownBtn.remove();
                        console.log(COUNTRYID.value);
                        console.log(COUNTRYID);
                        // FORM.innerHTML+=``; 
                        console.log("OK");
                        PMOBILE.placeholder="+1";

                    }
                    INDIA.addEventListener("click",I)
                    function I()
                    {
                        audio.play();
                        COUNTRYID.value="INDIA";
                        
                        OPT.textContent=COUNTRYID.value;
                        OPT.className+="fw-bolder";
                        DownBtn.remove();
                        PMOBILE.placeholder="+91";
                        console.log(COUNTRYID.value);
                        console.log(COUNTRYID);
                        // FORM.innerHTML+=``; 
                        console.log("OK");
                    }
                    CANADA.addEventListener("click",C)
                    function C()
                    {
                        audio.play();
                        
                        COUNTRYID.value="CANADA";
                        
                        OPT.textContent=COUNTRYID.value;
                        OPT.className+="fw-bolder";
                        DownBtn.remove();
                        PMOBILE.placeholder="+1";
                        console.log(COUNTRYID.value);
                        console.log(COUNTRYID);
                        // FORM.innerHTML+=``; 
                        console.log("OK");
                    }

                </script>
                <script>
//                     let a = document.getElementById("CONNTRY");
//                     console.log(a.value);
//                     function changeval()
// {

// if(document.getElementById('CONNTRY').value =='INDIA')
// document.getElementById('CONNTRY').value='INDIA'
// else if(document.getElementById('CONNTRY').value =='AUSTRALIA')
// document.getElementById('CONNTRY').value='AUSTRALIA'

// }
                </script>
                <script>
                    let xx=document.getElementById('openeye');
                    let x = document.getElementById('password');
                    let passDiv =document.getElementById('passDiv');
                    let xxx = document.getElementById('icon');
                    xx.addEventListener('click',open);
                    function open()
                    {
                        if (x.type === "password") {
    x.type = "text";
 
    xxx.className="bi bi-eye-slash";
 
  } else {
    xxx.className='bi bi-eye'
    x.type = "password";
  }
                    }
                //     function open(e)
                    
                // {
                       
                    //     x.type='text';
                    //    x.textContent=x.value;
                    //     
                    //     xx.remove();
                    //     
                        
                   
                    //     let xxs=document.getElementById('closeeye');
                    
                    // xxs.addEventListener('click',close);
                    // function close()
                    // {
                    //     x.type='password';
                        
                    //     console.log(x.type)
                    //     xxs.remove();
                    //     passDiv.innerHTML+=`<span class="btn  h-25 p-2 px-3 mt-1 border-start-0 border" id="closeeye"> <i class="bi bi-eye" ></i> </span>`
                    // }
                
                    // }
                 
                

                </script>
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
    if(isset($_POST['submit']))
    {

        $FName=$_POST['FName'];
        $LName=$_POST['LName'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $add=$_POST['Add'];
        $Contact_no=$_POST['mobile/phone'];
        $_SESSION['email']=$_POST['email']; 
        $_SESSION['pass']=$pass;
        $COUNTRY=$_POST["COUNTRY"];
        if ($_POST["COUNTRY"]=="INDIA") {
            $Contact_no="+91".$Contact_no;
            
            # code...
        }
        elseif($_POST["COUNTRY"]=="CANADA" || $_POST["COUNTRY"]=="USA")
        {
            $Contact_no="+1".$Contact_no;

        }
        $sql="INSERT INTO `reg` VALUES ('$FName','$LName','$email','$pass','$add','$Contact_no','$COUNTRY')";
        if (mysqli_query($con, $sql)) {
            echo $_SESSION['email'];
            echo "SIGNIN SUCCESS!"; 
            echo "<script>window.history.go(-3);    </script>";
            
            // echo "<script>window.location.href='index.php';</script>";
         } else {

            echo "<script> alert('enter a another data') </script>";
            
        }
       
    }

}
?>
