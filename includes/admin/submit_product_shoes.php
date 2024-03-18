<?php include('../../Helpers/ServerConnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('../../Helpers/LINKS.php'); ?>
    <title>Document</title>
  <style>
    .form-check
    {
      
    }
  </style>
</head>
<body style="padding-bottom: 10%;">
    
    <?php if(isset($_POST['SUBMIT']))
    {  ?>

            <?php if ($_POST['SHOES']=="FORMAL") {

            
$Dprice=$_POST['PRICE']*$_POST['DISCOUNT']/100; $dp= $_POST['PRICE']-$Dprice;
                // print_r($_POST);
            
         ?>
        <div class="container d-flex border bg-light  rounded mt-2 " style="width: max-content; box-shadow: 0px 0px 10px #333;">
           <div>
           <h3 class="w-50 m-4">
                <?php  echo $_POST['SHOES'];?>
                <hr>
            </h3>
            
            <div class="d-flex " >
                <div >
                    <img src="<?php echo $_POST['MainPhoto']; ?>" style=" width: 20rem; " alt="">
                </div>
                <div class="m-1 d-inline-grid rounded" style=" border-left: #333 2px solid; width: min-content; height: 26.5rem; overflow: scroll;">
               <?php for($i=0;$i<count($_POST['additionalPhotos']);$i++)
               {
                ?>
                 <img class="border" src="<?php echo $_POST['additionalPhotos'][$i]; ?>" style=" width: 10rem;  " alt="">
                <?php
               } ?>
            </div>
            
                </div>
           </div>
<div class="container mt-5" >
            <h3 class="" style="color: #333; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">

            <?php echo $_POST['PName'] ?>
            <span class=" fs-5"><?php echo $_POST['ID']; ?></span>

                    <hr>
                
            </h3>
            
                <h6 class="mt-4">
                    Main Color : <?php echo $_POST['Maincolor']; ?>~
                </h6>
<div class="d-flex gap-1  rounded-3 border p-3 text-center" style="box-shadow: 0px 0px 5px black;">
<?php if(isset($_POST['color'])) 
{
    for($i=0;$i<count($_POST['color']);$i++)
{
?>
    <h6 class="border rounded-3 p-2 ">
        <?php echo $i+1;?> Child Color <span class="border rounded mt-2 p-2 d-inline-block"> <?php echo $_POST['color'][$i]; ?> </span>
    </h6>
    <?php 
}
}
?>    
</div>
<hr>
<div class="d-flex me-auto ms-auto border rounded text-center" style=" width: max-content;">
        <div class="  mt-2 ">
            <h6>
            <span class="fw-bolder">Size</span> <p style="font-size: 12px;" class=" ">Select The Size are Awailable to website</p>
            </h6>
            <div class=" d-flex m-1 gap-2 my-4 border p-1 rounded" style=" width: fit-content;">

            <form action="add_db_product_shoes.inc.php"  method="post">
            <div class=" form-check rounded  border form-check-inline">
              <div class="m-1">
  <input class="form-check-input " name="size[0]" value="6" type="checkbox" id="inlineCheckbox1"  >
  <label class="form-check-label mx-1" for="inlineCheckbox1">6</label>
  <input class="me-auto ms-auto" style="width: 3.2rem; font-size: small;" name="AVLBL[0]"  type="number"  placeholder="Awailable">

</div>

</div>

<div class=" form-check rounded  border form-check-inline" >
              <div class="m-1">
  <input class="form-check-input " name="size[1]" value="7" type="checkbox" id="inlineCheckbox2" >
  <label class="form-check-label mx-1" for="inlineCheckbox1">7</label>
  <input class="me-auto ms-auto" style="width: 3.2rem; font-size: small;" name="AVLBL[1]"  type="number"  placeholder="Awailable">
  
  </div>
</div>

<div class=" form-check rounded  border form-check-inline">
              <div class="m-1">
  <input class="form-check-input " name="size[2]" value="8" type="checkbox" id="inlineCheckbox3" >
  <label class="form-check-label mx-1" for="inlineCheckbox1">8</label>
  <input class="me-auto ms-auto" style="width: 3.2rem; font-size: small;" name="AVLBL[2]"  type="number"  placeholder="Awailable">
  </div>

</div>

<div class=" form-check rounded  border form-check-inline">
              <div class="m-1">
  <input class="form-check-input" name="size[3]" value="9" type="checkbox" id="inlineCheckbox4"  >
  <label class="form-check-label mx-1" for="inlineCheckbox1">9</label>
  <input class="me-auto ms-auto" style="width: 3.2rem; font-size: small;" name="AVLBL[3]"  type="number"  placeholder="Awailable">

  </div>

</div>

<div class=" form-check rounded  border form-check-inline">
              <div class="m-1">
  <input class="form-check-input " name="size[4]" value="10" type="checkbox" id="inlineCheckbox5" >
  <label class="form-check-label mx-1" for="inlineCheckbox1">10</label>
  <input class="me-auto ms-auto" style="width: 3.2rem; font-size: small;" name="AVLBL[4]"  type="number"  placeholder="Awailable">

  </div>
</div>



<input type="hidden" name="PName" value="<?php echo $_POST['PName']; ?>">
<input type="hidden" name="SHOES" value="<?php echo $_POST['SHOES']; ?>">
<input type="hidden" name="ID" value="<?php echo $_POST['ID']; ?>">
<input type="hidden" name="MainPhoto" value="<?php echo $_POST['MainPhoto']; ?>">
<input type="hidden" name="Maincolor" value="<?php echo $_POST['Maincolor']; ?>">
<input type="hidden" name="PRICE" value="<?php echo $_POST['PRICE']; ?>">
<input type="hidden" name="DISCOUNT" value="<?php echo $_POST['DISCOUNT']; ?>">
<input type="hidden" name="DP" value="<?php echo $dp; ?>">

<?php 
for($i=0;$i<count($_POST['additionalPhotos']);$i++)
{
  ?>
   <input type="hidden" name="additionalPhotos[<?php echo $i; ?>]" value="<?php echo $_POST['additionalPhotos'][$i]; ?>">
   <input type="hidden" name="color[<?php echo $i; ?>]" value="<?php echo $_POST['color'][$i]; ?>">



<?php 
}

?>
</div>



        </div>
  
</div>
<h4 class="text-center mt-2 border border-2 border-warning rounded p-2">
  Price : &#8377; <?php  echo $dp;?>/-
</h4>
<form action="add_db_product_shoes.inc.php" method="post">
<input type="submit" class="float-end mt-4 me-4 px-5 btn btn-warning m-3" name="SUB" value="SUBMIT">
</form>
    




<!-- this one is template  -->
            </div>
        </div>

        <style>
   @keyframes Fade-in {
    0%
    {
      opacity: 0%;
    }
    100%
    {
      opacity: 
      100%;
    }
   }
   body {
   animation: Fade-in 0.5s ease-out forwards ; 
    background-color: #e9edc9 !important;
    }

    
    @keyframes INFO {
      0% { opacity: 0%;  }
   
      75%
      {
        
      }
      100%
      {
        
        opacity: 100%;
        left: 1rem;
        /* bottom: 0rem; */
      }      
    }
    #informations
    {
      animation: INFO 1s 0.5s  ease normal forwards;
    }

    .PARTS
{
  
  transition: all 1s ease ;
}
.PARTS:hover 
{

  width: 40rem !important;    
}

    .triangle-down {
	width: 0;
	height: 0;
  border-top-left-radius:2px ;
  border-top-right-radius:2px ;
  
  border-left: 45px solid transparent;
	border-right: 45px solid transparent;
	border-top: 50px solid #403d39;
}
.IMG
{
  transition: all 1s;
}
.IMG:hover
{
  transform: scale(140%);
}
.CHILD_IMGS img
{
  padding-top: 2%;
        padding-bottom: 5%;
}
.CHILD_IMGS
{
  transition: all 1s;
}
.ShoeChild:hover .CHILD_IMGS
{
      height: 25rem !important;

}
.CHILD_IMGS img{

  padding-top: 1rem;
  transition: all 1s;
}
.CHILD_IMGS img:hover
{
  margin-top: 2rem !important ;
  transform: scale(140%);
}
@media only screen and (max-width: 450px) {
  .PARTS {
  
    /* transform: scale(50%)  !important ;  */
  }
}
#informations ul>li
{
  background-color: transparent !important;
  color: white;
  /* border-radius: 10px;
  border: #555 solid 2px !important; */
  margin: 1px;
  width: max-content;
  padding-right: 2%;  
}
    </style>
    <main>
      <?php 
      $fatchFormals="SELECT *
      FROM shoe_info
      NATURAL JOIN formal_shoes WHERE shoe_info.ID=formal_shoes.ID AND shoe_info.TYPE='FORMAL'";
      $result=$con->query($fatchFormals);
      ?>
    
       <div class="p-1 mt-5 PARTS ms-auto me-auto " style="  border:#335c67 solid 2px ;  box-shadow: 0 0 10px rgba(100, 100, 100, 1); border-radius: 10px; background-color: #403d39; width: 420px;">
                <div class="d-flex" style="width:fit-content ;">

                    <div class=" CARD m-1 "
                        style="  border:#dee2e6 solid 2px; border-radius:10px ; background:white ; height: 25rem; width: 400px;">
                        <div class="ShoeChild" style="cursor: pointer;  width: fit-content; position:absolute;">
                        <div class="CHILD_IMGS" style="overflow: hidden; height: 0px; background: #403d39; border-radius: 2px  ; width: 90px; position:relative; top: -2px;">
                        
                        <!-- for main -->
                        <img src="<?php echo $_POST['MainPhoto']; ?>"  class="d-block CHILDIMG " style="aspect-ratio: 3/5;  margin-inline-start: auto; margin-inline-end: auto;  width: 50px;" alt="">
                     
                        <!-- for Child  -->
                    <?php for($i=0;$i<count($_POST['additionalPhotos']);$i++)
                    {

                        ?>
                    <img src="<?php echo $_POST['additionalPhotos'][$i]; ?>" name="COLORIMG"  class="d-block CHILDIMG " style="aspect-ratio: 3/5;   margin-inline-start: auto; margin-inline-end: auto;  width: 50px;" alt="">
                        <input type="hidden" name="color" value="<?php echo $_POST['color'][$i];?>" class="COLOR">

              <?php  } ?>
                        
                       
                      </div>
                        <div class="triangle-down " style="position: relative; bottom: 2px;"  ></div>

                        <h6 style="position:relative; bottom: 2.5rem; left: 1.9rem; color:#ccd5ae ; font-size: 12px; ">more</h6>
                        </div>
                        <img class="IMG float-end me-5"style="box-shadow:2px 2px 6px black ,inset 2px 2px 6px black; padding:1%; border-radius:10px; positiona: ; left:6rem;  height: fit-content ; width: 13rem; margin-top: 4rem; object-fit:contain; " src="<?php echo $_POST['MainPhoto']; ?>" alt="">
                      </div>

                    <div name="informations" id="informations" style="position: relative;   display: none; left: 1rem; opacity: 0%; height: fit-content; width:fit-content ;"  class=" box1 p-1 m-2">
                        <ul class="list-group rounded-3 " >
                            <li id="ProductInfo " class="border-0 list-group-item">
                            NAME : <span><?php echo $_POST['PName']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            ID : <span><?php echo $_POST['ID']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            COLOR : <span><?php echo $_POST['Maincolor']; ?> </span>
                            </li>
                            <li id="ProductInfo " style="gap: 5px;" class="d-flex border-0 list-group-item">
                            PRICE :
                            <span class="text-decoration-line-through " style="font-size: 10px; margin: 0px; margin-top: 8px; ">
                            
                            <?php echo  $_POST['PRICE']; ?>/-
                            </span>
                            <span> 
                               <span><?php  echo $dp; ?>/-</span>
                            </span>  
                          </li>
                        
                            <!-- <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li> -->
                        </ul>
                       
                    </div>
                </div>
   
                <script>
    let info=document.getElementsByName('informations');
    let Col=document.getElementsByClassName('PARTS');
    for (let i = 0; i < Col.length; i++) {
      // const element = array[i];
    //  console.log( Col[i] );
    Col[i].addEventListener("mouseover", ()=>{
    info[i].style.display="";
    });
    Col[i].addEventListener("mouseout", ()=>{
    info[i].style.display="none";
    }); 
    }
  </script>

<script>
  let Cimg=document.getElementsByClassName("CHILDIMG");
  let Color=document.getElementsByName('color');


  for (let i = 0; i < Cimg.length; i++) {
    // console.log(Cimg[j].parentElement.parentElement.nextElementSibling.src); 
    
    Cimg[i].addEventListener("mouseover",()=>{
      Cimg[i].parentElement.parentElement.nextElementSibling.src=Cimg[i].src;
      // console.log(Cimg[i].nextElementSibling.value);
      Cimg[i].parentElement.parentElement.parentElement.nextElementSibling.children[1].children[1].value=Cimg[i].nextElementSibling.value;
      console.log(Cimg[i].parentElement.parentElement.parentElement.nextElementSibling.children[1].children[1].value)

    });
    
    
    
  }
</script>
<!-- for ENTER COLOR VALUE IN INPUT  -->
<script>
  // let ColorFetchImg=document.getElementsByName('COLORIMG');
  // console.log(ColorFetchImg.length);
  // for (let l = 0; l < ColorFetchImg.length; l++) {
  //   ColorFetchImg[l].addEventListener("click", ()=>{
  //       document.getElementsByName('COLOR')[l].value=Color[l].value;
  //       console.log(document.getElementsByName('COLOR')[l].value);
  //   });
  //   // const element = array[l];
  // }
  // console.log(Color
</script>
<?php 
}}?>
</body>
</html>