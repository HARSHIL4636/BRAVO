<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main m-2">
        <?php
    // echo "hello";
     if(isset($_POST['SPOSTS']))
     {
        $_SESSION['I_ADD']="SPORTS";
        
        ?>
        <div class='border border-dark p-2  border-2'>
        <form action="ITAMS_ADDIN_DB.php" method="post">

        <div class="row me-auto ms-auto container text-center">
 
    <h4 class="text-start m-1 mb-2">
        FIRST COLLUMN : 
    </h4>
    <div class="col">
        <input type="text" name="ITAM1" class='m-2' placeholder='ITAM NAME' id="" required>
        <br>
        <input type="number" class='m-2' name="PRICE_I1" id="" placeholder='PRICE' required>
        <br>
        <label for="file">UPLOAD IMAGE </label>
        <input type="file" class='m-2' id="file" name="IMG_I1" required>
    </div>
        <div class="col">
            <input type="text" name="ITAM2" class='m-2' placeholder='ITAM NAME' id="" required>
            <br>
            <input type="number" class='m-2' name="PRICE_I2" id="" placeholder='PRICE' required>
            <br>
            <label for="file">UPLOAD IMAGE </label>
            <input type="file" class='m-2' id="file" name="IMG_I2" required>
        </div>
</div>
<div class="row me-auto ms-auto container m-3 text-center">
 
    <h4 class="text-start m-1 mb-2">
        SECOND COLLUMN : 
    </h4>

    <div class="col">
        <input type="text" name="ITAM3" class='m-2' placeholder='ITAM NAME' id="" required>
        <br>
        <input type="number" class='m-2' name="PRICE_I3" id="" placeholder='PRICE' required>
        <br>
        <label for="file">UPLOAD IMAGE </label>
        <input type="file" class='m-2' id="file" name="IMG_I3"required>
    </div>
        <div class="col">
            <input type="text" name="ITAM4" class='m-2' placeholder='ITAM NAME' id="" required>
            <br>
            <input type="number" class='m-2' name="PRICE_I4" id="" placeholder='PRICE' required>
            <br>
            <label for="file">UPLOAD IMAGE </label>
            <input type="file" class='m-2' id="file" name="IMG_I4"required>
        </div>
</div>
<div class="row me-auto ms-auto container text-center ">
 
    <h4 class="text-start m-1 mb-2">
        THIRD COLLUMN : 
    </h4> 

    <div class="col">
        <input type="text" name="ITAM5" class='m-2' placeholder='ITAM NAME' id="" required>
        <br>
        <input type="number" class='m-2' name="PRICE_I5" id="" placeholder='PRICE' required>
        <br>
        <label for="file">UPLOAD IMAGE </label>
        <input type="file" class='m-2' id="file" name="IMG_I5"  required>
    </div>
        <div class="col">
            <input type="text" name="ITAM6" class='m-2' placeholder='ITAM NAME' id="" required>
            <br>
            <input type="number" class='m-2' name="PRICE_I6" id="" placeholder='PRICE' required>
            <br>
            <label for="file">UPLOAD IMAGE </label>
            <input type="file" class='m-2' id="file" name="IMG_I6" required>
        </div>

    </div>
    <div class='text-center'>
    <button type="submit" name="SUBMIT" class="btn btn-sm btn-warning ms-auto me-auto">SUBMIT</button>
    </div>
     </form>
<?php
     } 
     
    ?>
    </div>
</body>

</html>