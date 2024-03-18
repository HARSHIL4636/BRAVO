
<?php include('../Helpers/ServerConnect.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
    <?php include('../Helpers/LINKS.php');  ?>
    <style>
        body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
}

.container1 {
  max-width: 500px;
  margin: 50px auto;
  padding: 20px;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  font-weight: bold;
}

input[type="number"]
{
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 5px;

}
input[type="text"] {
  width: 100%;
  padding: 10px;
  border-radius: 5px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-top: 5px;
}

.button1 {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  width: 100%;
}

button:hover {
  background-color: #45a049;
}
.list-group-item
{
    background-color: transparent !important;
}

    </style>
</head>
<body>
    <?php include('Header.php'); ?>
    
    <h2 class="m-4">ADDS ITEM : </h2>
    <div class="d-flex m-4  ms-auto me-auto" style="width: fit-content;">
        <div class="border border-2 border-dark m-2 p-3 " style="width: fit-content; border-radius: 6px;">
        <button class="btn bg-dark text-light" style="position: relative; left:0rem; bottom:2.2rem;">SHOES</button>
        <form action="#" method="get">
        <ul class="list-group list-group-horizontal gap-3 ">
            <li class="list-group-item border-0 ">
            
            <button  name="SHOES" value="SHOES_FORMAL" class="btn btn-outline-dark"> FORMAL </button>
            </li>
            <li class="list-group-item border-0" >
            <button name="SHOES" value="SHOES_SPORTS" class="btn btn-outline-dark"> SPORTS </button>

            </li>
        </ul>   
        <ul class="list-group list-group-horizontal gap-3 " style="align-content:space-between;">
            <li class="list-group-item border-0 ">
            
            <button name="SHOES" value="SHOES_CASUAL" class="btn btn-outline-dark"> CASUAL </button>
            </li>
            <li class="list-group-item border-0" >
            <button name="SHOES" value="SHOES_CROCS" class="btn btn-outline-dark ms-1"> CROCS </button>

            </li>
        </ul>   
        </div>
        <div class="border border-2 border-dark m-2 p-3 " style="width: fit-content; border-radius: 6px;">
        <button class="btn bg-dark text-light" style="position: relative;  bottom:2.2rem;">CLOTHS</button>
        <ul class="list-group list-group-horizontal gap-3 ">
            <li class="list-group-item border-0 ">
            
            <button name="CLOTHS" value="CLOTH_FORMAL" class="btn btn-outline-dark"> FORMAL </button>
            </li>
            <li class="list-group-item border-0" >
            <button name="CLOTHS" value="CLOTH_SPORTS" class="btn btn-outline-dark"> SPORTS </button>

            </li>
        </ul>   
        <ul class="list-group list-group-horizontal gap-3 " style="align-content:space-between;">
            <li class="list-group-item border-0 ">
            
            <button name="CLOTHS" value="CLOTH_CASUAL" class="btn btn-outline-dark"> CASUAL </button>
            </li>
        </ul>   
        </div>
        </form>

    </div>
    <?php if(isset($_GET['CLOTHS']) || isset($_GET['SHOES']) )
    {
        if(isset($_GET['SHOES']))
        {
            if($_GET['SHOES']=='SHOES_FORMAL')
            {
             ?>


<div class="container1">
  <h2 class="border p-2 border-2 rounded"><?php echo $_GET['SHOES']; ?></h2>
  <form action="../includes/admin/submit_product_shoes.php" method="post">
    <input type="hidden" name="SHOES" value="FORMAL" id="">
    <div class="form-group">
      <label for="productName">Product Name:</label>
      <input type="text" id="productName" name="PName" required>
    </div>
    <div class="form-group">
      <label for="productID">Product ID:</label>
      <input onkeyup="CheckId();"id="PID" type="text"  name="ID" required>
      <i id="Done" class="text-primary bi bi-check-square " style="visibility:hidden;"></i>
      <i id="Cross" class="text-danger bi bi-x-square" style="visibility: hidden;"></i>

    </div>
    
      <div class="form-group">
        <label for="mainPhoto">PRICE</label>
        <input type="number" id="PRICE" name="PRICE" required>
        
      </div>
      <div class="form-group">
        <label for="mainPhoto">DISCOUNT</label>
        <input type="number" id="DISCOUNT" name="DISCOUNT" required>
        
      </div>

    <div class="form-group border p-2">
      <label for="mainPhoto">Main Photo Link:</label>
      <input type="text" id="mainPhoto" name="MainPhoto" required>
      
    <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" id="color" name="Maincolor" required>
    </div>
    </div>
    <hr>
    <div class="form-group">
        <div class="p-2 border rounded m-2"> 
      <label for="additionalPhotos">Additional Photo Links 1:</label>
      <input type="text" id="additionalPhotos1" name="additionalPhotos[0]" required>
      <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" id="color" name="color[0]" required>
    </div>
    </div>
    <div class="p-2 border rounded m-2">
    <label for="additionalPhotos">Additional Photo Links 2</label>
     
    <input type="text" id="additionalPhotos2" name="additionalPhotos[1]">
      <div class="form-group">
      <label for="color">Color:</label>
      <input type="text" id="color" name="color[1]" required>
    </div>
    </div>
    <div class="p-2 border rounded m-2"> 

    <label for="additionalPhotos">Additional Photo Links 2</label>
     
     <input type="text" id="additionalPhotos2" name="additionalPhotos[2]">
       <div class="form-group">
       <label for="color">Color:</label>
       <input type="text" id="color" name="color[2]" required>
     </div>
    </div>
    </div>
    <button class="button1" name="SUBMIT" type="submit">Submit</button>
  </form>
</div>


             <?php 
            }
        }

    } ?>
    <?php include('Footer.php'); ?>
<script>
let PID=document.getElementById('PID');
console.log(PID);
// PID.addEventListener("change", CheckId);
function CheckId()
{
    let PID=document.getElementById('PID').value;
   
    let flag=0;
    <?php $f="SELECT ID FROM shoe_info WHERE TYPE='FORMAL'"; 
    $thisresults=$con->query($f);
    if($thisresults->num_rows>0)
    {?>
 let array=[<?php while($row=$thisresults->fetch_assoc()){ ?>'<?php echo $row["ID"] ?>',<?php } ?>];
<?php
    }
    
    ?>
    for (let i=0; i<=array.length; i++)
    {
      
          for (let j = 0; j < array[i].length; j++) {
              // console.log(array[i][j]);
              if(array[i].length===PID.length)
              {
                // console.log("OK");
              if(array[i][j]===PID[j])
              {
                // console.log(PID);

                flag = true;
                // console.log(flag);
              }
              else
              {
                flag=false;
              }
             
            }
            
          }
       
    //     if(array[i][0]===PID)
    // {
      
    //   document.getElementById('Done').style.visibility='hidden';
    //     document.getElementById('Cross').style.visibility='visible';
  
    //      }else
    // {
    //   console.log("NOT SAME");
    //   document.getElementById('Done').style.visibility='visible';
    //     document.getElementById('Cross').style.visibility='hidden';
    // }
    if(flag==true)
            {
              document.getElementById('Done').style.visibility='hidden';
              document.getElementById('Cross').style.visibility='visible';
            }  
            else
            {
             

              document.getElementById('Done').style.visibility='visible';
              document.getElementById('Cross').style.visibility='hidden';
              
            }
  }
    
}

</script>
</body>
</html>