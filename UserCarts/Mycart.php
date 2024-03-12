<?php
session_start(); 
$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);
// truncate {
$TTable="TRUNCATE TABLE add_cart_info";
// echo $_SERVER['SCRIPT_FILENAME']; 
$con->query($TTable);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <?php include('../Helpers/LINKS.php'); 
    include('../Helpers/LinkFiles.php');?>
    <link rel="stylesheet" href="../styles.css">

    <style>
        
        /* Basic styling for demonstration purposes */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .cart-container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-card {
            position: relative;
            display: flex;
            align-items: center;
            padding: 15px;
            border-radius: 10px;

            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            margin-bottom: 20px;
        }
        .product-img {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            margin-right: 20px;
            transition: all 0.3s ease;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product-img:hover {
            
            transform: scale(1.2);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .product-info {
            flex: 1;
            position: relative;
        }
        .product-name {
            font-size: 20px;
            color: #333;
            text-shadow: 1px 4px 10px rgba(0, 0, 0, 1);
            margin-bottom: 5px;
        }
        .product-price {
            font-size: 16px;
            color: #555;
            margin-bottom: 5px;
        }
        .delivery-info {
            position: absolute;
            top: 5px;
            right: 5px;
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .remove-btn {
            /* color: #ff0000; */
            color: #ff0f0ff7;

            cursor: pointer;
            transition: color 0.3s ease;
        }
       
        .title {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .total-price {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            text-align: right;
        }
        
        @media (max-width: 768px) {
            .cart-container {
                width: 90%;
            }
        }
    </style>
</head>
<body style="background-color: #e9edc9;">
    <?php 
    include('../Helpers/Navbar.php');
    ?>
    <div class="cart-container" style="background-color: #faedcd;">
        <h2 class="title">Your Cart</h2> 
        <!-- Example carted item -->
<?php 

$fetchDatas="SELECT * FROM all_carts WHERE EMAIL='$email'";
$result= $con->query($fetchDatas);
if ($result->num_rows > 0)
{
    
    while($row = mysqli_fetch_array($result))
    {
$color=$row['ITEM_COLOR'];
$id= $row['ITEM_ID'];
        $img_add="SELECT * FROM img_add WHERE COLOR='$color' AND ID='$id'";
        $results=$con->query($img_add);
        if ($results->num_rows > 0)
        {
            while($rows = mysqli_fetch_array($results))
            {
?>
            <form action="Product_info.php" method="get">
            <input type="hidden" name="COLOR" value="<?php echo $color; ?>">
            <input type="hidden" name="FName" value="<?php echo $row['F_NAME']; ?>">                
            <input type="hidden" name="LName" value="<?php echo $row['L_NAME']; ?>">                
            <input type="hidden" name="ADD" value="<?php echo $row['ADD']; ?>">
            <input type="hidden" name="COUNTRY" value="<?php echo $row['COUNTRY']; ?>">               
            <input type="hidden" name="CONTACT" value="<?php echo $row['CONTACT']; ?>">
            <input type="hidden" name="IID" value="<?php echo $row['ITEM_ID']; ?>">
            <input type="hidden" name="IName" value="<?php echo $row['ITEM_NAME']; ?>">
            <input type="hidden" name="TYPE" value="<?php echo $row['TYPE']; ?>">
            <input type="hidden" name="QON" value="<?php echo $row['QON']; ?>">
            <input type="hidden" name="PRICE" value="<?php echo $row['ITEM_NAME']; ?>">
            <input type="hidden" name="SIZE" value="<?php echo $row['SIZE']; ?>">
            <input type="hidden" name="IMG" value="<?php echo $rows['I_ADD']; ?>">



            <div class="product-card" style="background-color: #ccd5ae;">
            <img src="../<?php echo $rows['I_ADD'];?>" style=" height:fit-content; object-fit: contain; " alt="Product Image" class="product-img">
            <div class="product-info">
                <div class="product-name" style="width: fit-content;"><?php echo $row['ITEM_NAME']; ?></div>
                <div class="product-price fw-bolder" style="width: fit-content;">&#8377;<span class="Item_price"><?php echo $row['PRICE'];?></span>/-</div>
                <h6 class="d-grid  rounded px-1" style="font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;">
                    Size: <?php echo $row['SIZE'];?>
                </h6>
                <h6 >
                    Color : <span style="color: <?php echo $color;?>;"><?php echo $color;?></span>
                </h6>
                <div class="delivery-info" style="width: fit-content;">Delivered in 2 days</div>
                
                <input name="RemoveBtn" class="remove-btn px-2 rounded " style="width: fit-content; background: #ffdede ; border:#ff0f0ff7 solid  1px;" type="submit" value="Remove">
<br>
                <input type="submit" class="mt-2 btn   border border-dark py-0 px-2 SubmitBtn" style="color:#a98467; font-family: Verdana, Geneva, Tahoma, sans-serif; background: #f0ead2;"  name="Modify" value="Check Or Modify">

            </div>

        </div>
        </form> 

    <?php 
    }
}
    }
?>
        
         
        <!-- You can add more carted items dynamically based on user's cart -->
        <div class="total-price">Total: &#8377;<span id="Total"></span>/-</div>
  <?php  }
  else
  {
    ?>
    <div>
        <h1 class="text-center border rounded me-auto ms-auto p-3" style="width: fit-content;">
            !NO Cart Added.
        </h1>
        <?php if(isset($_GET['Explore'])) 
        {
            include("../Subview/Formal.php");
        }
        else
        {?>
        <form action="Mycart.php" method="get">
        <button name="Explore" class="btn btn-dark"> EXPLORE MORE </button>
        </form>    
    </div>
    <?php
        }
  }
?>
    </div>
<?php  

include('../FOOTER.php');
?>
    <script>
        // for price total Fatching 
        let Total=0;
let TotalElement = document.getElementById('Total');
    let price=document.getElementsByClassName('Item_price');
    for (var i = 0; i < price.length; i++) {
        
        Total+=parseInt(price[i].innerText);
        
        
    }
    console.count(Total);
    TotalElement.innerHTML=Total;

        // Function to remove item from cart
        // function removeItem(element) {
        //     var product = element.closest('.product-card');
        //     product.parentNode.removeChild(product);
        //     // Update total price if needed
        //     updateTotalPrice();
        // }

    </script>
    <script>
        let SubmitBtn = document.getElementsByClassName("SubmitBtn")
        // console.log(SubmitBtn);
        console.log(SubmitBtn[0]); 
        for (let i = 0; i <=SubmitBtn.length; i++) {
            console.log(SubmitBtn[i]);

            SubmitBtn[i].addEventListener("mouseover",()=>{

SubmitBtn[i].style.color="#f0ead2";

SubmitBtn[i].style.backgroundColor="#a98467";


});
SubmitBtn[i].addEventListener("mouseout",()=>{
SubmitBtn[i].style.color="#a98467";

SubmitBtn[i].style.backgroundColor="#f0ead2";

});
        
        

        let RemoverBtn = document.getElementsByClassName('remove-btn');
        RemoverBtn[i].addEventListener("mouseover",()=>{
            
                RemoverBtn[i].style.color="white";

                RemoverBtn[i].style.backgroundColor="red";
            
        })
        RemoverBtn[i].addEventListener("mouseout",()=>{
                RemoverBtn[i].style.color="red";

                RemoverBtn[i].style.backgroundColor="#ffdede";

            })
        }
    </script>
    
    <script src="../Helpers/Nav.js"></script>
</body>
</html>
