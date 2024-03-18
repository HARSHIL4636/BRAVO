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
              if(array[i][j]==PID[j])
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