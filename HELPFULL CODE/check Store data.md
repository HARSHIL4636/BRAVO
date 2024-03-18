 <?php for($i=0;$i<count($_POST['color']);$i++)
{

// echo $_POST['color'][$i]."<br>";
for($j=0;$j<count($_POST['size']);$j++)
     {
        $color=$_POST['color'][$i];
        $size=$_POST['size'][$j];
        $AVLBL=$_POST['AVLBL'][$j];

        $con->query("INSERT INTO size_info VALUES('','$id','$color','$size','$AVLBL')");
        // echo $_POST['color'][$i]."  ".$_POST['size'][$j]."<br>";
        
        // print_r($_POST['AVLBL']); 
    }
}
?>