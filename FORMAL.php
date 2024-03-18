<?php 
include('Helpers/ServerConnect.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  transform: scale(130%);
}
@media only screen and (max-width: 450px) {
 
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
    <?php
include('Helpers/LINKS.php');
?>
</head>

<body>
    <?php 
  include('Helpers/Navbar.php');
  ?>
    <main>
      <?php 
      $fatchFormals="SELECT *
      FROM shoe_info
      NATURAL JOIN formal_shoes WHERE shoe_info.ID=formal_shoes.ID AND shoe_info.TYPE='FORMAL'";
      $result=$con->query($fatchFormals);
      ?>
       <div class="row p-4 me-auto ms-auto m-2" style="  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); transition: all 1s; background-color: #faedcd; border-radius:10px;width: 80%;">
       <?php
       if($result->num_rows > 0)
       {
while($row = $result->fetch_assoc())
{
       
       ?> 
       <div class="col pb-4"  >
    
       <div class="p-1 mb-5 PARTS " style="  border:#335c67 solid 2px ;  box-shadow: 0 0 10px rgba(100, 100, 100, 1); border-radius: 10px; background-color: #403d39; width: 420px;">
                <div class="d-flex" style="width:fit-content ;">

                    <div class=" CARD m-1 "
                        style="  border:#dee2e6 solid 2px; border-radius:10px ; background:white ; height: 25rem; width: 400px;">
                        <div class="ShoeChild" style="cursor: pointer;  width: fit-content; position:absolute;">
                        <div class="CHILD_IMGS" style="overflow: hidden; height: 0px; background: #403d39; border-radius: 2px  ; width: 90px; position:relative; top: -2px;">
                        <img src="<?php echo $row['I_ADD'];?>"  class="d-block " style="aspect-ratio: 6/8;  border-radius: 10px;  padding: 4px; margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        
                        <?php 
                        $ID=$row['ID'];
                        $fetchChilds="SELECT * FROM child_formal WHERE ID = '$ID'";
                        $thisresults=$con->query($fetchChilds);
                        if ($thisresults->num_rows > 0)
                          {
                            while($rows= $thisresults->fetch_assoc()) 
                            {

                        ?>
                      
                        <img src="<?php $photo=$rows['I_ADD']; echo $rows['I_ADD']; ?>" name="COLORIMG" onmouseover="SendImg('<?php echo $photo;?>',this);"  class="d-block CHILDIMG " style=" border-radius: 10px; padding: 2px; margin-top:5px; aspect-ratio:  6/8 ;   margin-inline-start: auto; margin-inline-end: auto;  width: 65px;" alt="">
                        <input type="hidden" name="color" value="<?php echo $rows['COLOR'];?>" class="COLOR">
                       
                        <?php }} ?>
                      </div>
                        <div class="triangle-down " onmouseover="playSound();"style="position: relative; bottom: 2px;"  ></div>

                        <h6 style="position:relative; bottom: 2.5rem; left: 1.9rem; color:#ccd5ae ; font-size: 12px; ">more</h6>
                        </div>
                        <img class="IMG float-end me-5"style="border-radius:10px; position:; left:6rem;  height: 12rem ; width: 12rem; margin-top: 6rem; object-fit:contain;" src="<?php echo $row['I_ADD']; ?>" alt="">
                      </div>

                    <div name="informations" id="informations" style="position: relative;   display: none; left: 1rem; opacity: 0%; height: fit-content; width:fit-content ;"  class=" box1 p-1 m-2">
                        <ul class="list-group rounded-3 " >
                            <li id="ProductInfo " class="border-0 list-group-item">
                            NAME : <span><?php echo $row['NAME']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            ID : <span><?php echo $row['ID']; ?></span>
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            COLOR : <span><?php echo $row['COLOR']; ?> </span>
                            </li>
                            <li id="ProductInfo " style="gap: 5px;" class="d-flex border-0 list-group-item">
                            PRICE :
                            <span class="text-decoration-line-through " style="font-size: 10px; margin: 0px; margin-top: 8px; ">
                            
                            <?php echo  $row['PRICE']; ?>/-
                            </span>
                            <span> 
                               <span><?php $Dprice=$row['PRICE']*$row['DISCOUNT']/100;  $dp= $row['PRICE']-$Dprice; echo  $row['PRICE']-$Dprice;  ?>/-</span>
                            </span>  
                          </li>
                        
                            <!-- <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li>
                            <li id="ProductInfo " class="border-0 list-group-item">
                            hello
                            </li> -->
                        </ul>
                        <form action="CART_INFO.php" method="post">
                          <input type="hidden" name="TYPE" value='<?php echo $row['TYPE']; ?>'>
                                 <input type="hidden" name="COLOR" value=''>
                                 <input type="hidden" name="ID" value='<?php echo $row['ID']; ?>'>

                                 <input type="hidden" name="price" id="DPSI1" value="<?php echo $row['PRICE']-$Dprice;; ?>">
                                 <input type="hidden" name="itam" value="<?php echo $row['NAME']; ?>">
                                 
                                 <button type="submit" name="ADD" class=" btn btn-warning ms-3">ADD TO CART <i
                                         class="bi bi-cart-plus-fill"></i></button>
                                </form>

                    </div>
                </div>
            </div>
            
            </div>
            <?php
 } }
           else{
            ?> NO DATA <?php 
           }
            ?>
      

    </main>
    <?php
  include('FOOTER.php');
  ?>

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
  let ChildImg=document.getElementsByClassName('CHILD_IMGS');

console.log( Cimg.length );
  for (let i = 0; i < Cimg.length; i++) {
    // console.log(Cimg[j].parentElement.parentElement.nextElementSibling.src); 
    
    Cimg[i].addEventListener("mouseover",()=>{
        
      Cimg[i].parentElement.parentElement.nextElementSibling.src=Cimg[i].src;
      console.assert(Cimg[i].src)
      document.getElementsByName("COLOR")[0].value=Color[i].value;
      console.log(document.getElementsByName("COLOR")[0]);

    });
    //  console.log(ChildImg[i].children[0]);
    ChildImg[i].children[0].addEventListener('mouseover', ()=>{

// 
console.log();
document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src=document.getElementsByClassName('CHILD_IMGS')[i].children[0].src;
console.log(document.getElementsByClassName('CHILD_IMGS')[i].parentElement.nextElementSibling.src);    
}
    );
  }
</script>

<script>
 function SendImg(e,element)
 {

  let mainSrc=  element.parentElement.parentElement.nextElementSibling;
  mainSrc.src=e;
  // console.log(element.parentElement.parentElement.nextElementSibling.src=);
  console.log(mainSrc);
  
 }
</script>
<script>
  function playSound() {
    var audio = new Audio('sound.mp3');
    audio.play();
  }
</script>
</body>

</html>