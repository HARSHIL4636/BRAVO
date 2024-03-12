let sub = document.getElementById('submit');
sub.addEventListener('click', CHACK);
function CHACK(e)
{
    let a =e.currentTarget;
    let b = a.previousElementSibling; 
    let nw = document.getElementById('main');

    console.log(b.value);
     if (b.value == "")
    {
        alert("ENTER EMAIL !");
        document.getElementById("email").placeholder = "ENTER EMAIL !";
        let a = document.getElementById('submit');
       
    }
        
}
let newacc = document.getElementById('newacc');
        newacc.addEventListener('click',Newacc);
        function Newacc(event)
        {
            window.location.href = "newacc.php"; 
        }
