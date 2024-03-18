<?php include('../Helpers/ServerConnect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('../Helpers/LINKS.php'); ?>
    <style>
        .user-info {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition:all 0.5s ;

}

.user-info p {
    margin: 10px 0;
}

.user-info strong {
    font-weight: bold;
}
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    
    padding: 0 20px;
}



.main-content {
    background-color: #fff;
    padding: 20px;
    margin-top: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.user-info:hover
{
    background-color:#eae0d5 !important;
    color: #0a0908 !important;
}

.user-info:hover button
{
    border: 1px solid #0a0908;
    background-color:#eae0d5 !important;
    color: #0a0908 !important;
}
body
{
    transition: all 1s;
}
body:has(.main-content:hover)
{
    background-color:#0a0908 !important;
    color: # !important;
}
.main-content:has(.user-info:hover)
{
    box-shadow: 20px 20px 60px #eae0d5;
}
.main-content
{
    box-shadow: 20px 10px 60px #0a0908;

}
    </style>
</head>
<body class="body" style="background-color:#fdf0d5;">
    <?php
     include('Header.php');
     $AllData=$con->query("SELECT * FROM reg");

?>

    
    <div class="m-5">
    <div class="container main-content" style="background-color: #fed9b7;">
        <h2 class="d-flex">User Information </h2> <span class="px-3 fw-bolder text-light" style="position: relative; left: 20%; font-size:x-small; bottom:3.5rem; background: #000000; padding: 1%; border-radius:100%;">
            <?php echo $AllData->num_rows; ?>
        </span>   
        <?php 
        if ($AllData->num_rows > 0) {
            while ($row = $AllData->fetch_assoc()) {
        ?>
         <div class="user-info m-2 " style="background-color:#0a0908; color: #eae0d5;">
            <p><strong><i class="bi bi-person"></i> Username:</strong> <?php echo $row['F_NAME']." ".$row['L_NAME']; ?></p>
            <p><strong><i class="bi bi-geo-alt-fill"></i> Address:</strong> <?php echo $row['ADD'].",".$row['COUNTRY']; ?></p>
            <p><strong><i class="bi bi-envelope-at"></i> Email:</strong> <?php echo $row['EMAIL']; ?></p>
            <p><strong><i class="bi bi-telephone"></i> Contact No.:</strong> <?php echo $row['CONTACT_NO']; ?></p>
      <button class="btn text-light  mt-2 " style="">Orders</button>
        </div>
        <?php  
            }
        }
        ?>
       
    </div>
    </div>

  <?php 
  include('Footer.php');
  ?>
    <script>
        // Example using Anime.js library for animations
anime({
    targets: '.main-content',
    translateY: [-50, 0],
    opacity: [0, 1],
    duration: 1000,
    easing: 'easeInOutQuad'
});

    </script>

</body>
</html>