
let pass = document.getElementById('pass');
let sub = document.getElementById('submit');
sub.addEventListener('click',chackpass)
function chackpass(e)
{
console.log(pass.value);
     if(pass.value === "patel4636")
     {
        location.href="logindex.html";
    }
     else 
     {
        alert('WRONG PASSWORD');
     }
 }