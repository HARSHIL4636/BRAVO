   <?php 
   include_once('../Helpers/ServerConnect.php');
   ?>
   <!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <link rel="stylesheet" href="../styles.css">
      <?php 
   include_once('../Helpers/LINKS.php');
   ?>
   </head>
   <body>
   <?php 
   include_once('../Helpers/Navbar.php');
   ?>
   <div class="border  gap-4 d-grid me-auto ms-auto p-4 rounded border-2" style="margin: 2rem; box-shadow: 0px 4px 30px black; width: fit-content;">
   
   <span style=" text-shadow:grey 7px 5px 4px; ">
    Hello <?php echo $_SESSION['email']; ?> !
    </span>
<div class="d-flex gap-5 ">
<a class="btn btn-danger " href="Adds_item.php" style="width:fit-content;"> Add Product <i class="bi bi-file-earmark-plus-fill border border-light px-2 rounded-3"></i> </a>
      <a href="CheckUsers.php" class="btn btn-primary" style="width:fit-content;"> Check Users <i class="bi bi-people border border-light px-2 rounded-3"></i> </a>

</div>
     
   </div>
<?php
include('../FOOTER.php');
include('../Helpers/Footer.php');
?>
   </body>
   </html>