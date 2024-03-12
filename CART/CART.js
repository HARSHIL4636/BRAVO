// FOR SIZE SELECTION ---------------------------------------------------------------------------

let SizeBtn = document.getElementsByClassName('btn-sm');
// let values=document.getElementById('VALUE');

// console.log(SizeBtn);
for (let i = 0; i < SizeBtn.length; i++)
{

     
  // console.log(SizeBtn[i].classList[5])

  if(SizeBtn[i].classList != "text-decoration-line-through")
  {
        // SizeBtn[0].className +=" text-light bg-dark  ";
    
 
    SizeBtn[i].addEventListener("click", ()=>{
     
      
     SizeBtn[0].classList.remove("text-light");
     SizeBtn[0].classList.remove("bg-dark");

     SizeBtn[1].classList.remove("text-light");
     SizeBtn[1].classList.remove("bg-dark");
  
     SizeBtn[2].classList.remove("text-light");
     SizeBtn[2].classList.remove("bg-dark");

     SizeBtn[3].classList.remove("text-light");
     SizeBtn[3].classList.remove("bg-dark");

     SizeBtn[4].classList.remove("text-light");
     SizeBtn[4].classList.remove("bg-dark");
if(SizeBtn[i].classList=="text-light")
{
  SizeBtn[i].className.remove("text-light");
     SizeBtn[i].clas.remove("bg-dark");
}
        SizeBtn[i].className +=" text-light bg-dark  ";
        // console.dir(SizeBtn[i].classList);
        values.textContent=1; 
        

    
    })


  }
}




// for awaiblity

let NoALBL = document.getElementsByClassName('text-decoration-line-through');
for(var i=0; i<NoALBL.length; i++)
{
  NoALBL[i].addEventListener("click", ()=> {

    alert("SIZE NOT AWAILABLE");  

  });
}
// while(document.getElementsByClassName('text-decoration-line-through').length)

// {
//   console.log("OKK");
// }









  // for screen 
// --------------------------------------------------------------------------------------------

  // console.log()
  if(window.screen.width<=420)
  {
    // document.getElementById('COD').className+="  COD  ";
    console.log("HELLLo");

    document.getElementsByClassName('TAX')[0].style.left = "44%";
    document.getElementById('PO').className+="  FS  ";
    document.getElementsByClassName('w-50')[0].className +=' Add420LISTS ';
    document.getElementsByClassName('list-group')[1].className+=" list2 ";
    document.getElementsByClassName('d-inline-flex')[0].classList.remove("mt-5");
    document.getElementsByClassName('d-inline-flex')[0].className+=" mt-1 ";

    document.getElementsByClassName('summary')[0].className += ' _380px ';
    document.getElementsByClassName("bi-arrow-right")[0].style.top="-0.4rem";
    // document.getElementsByClassName('list-group')[1].className+=" list2 ";
   
  }else{
    document.getElementsByClassName('TAX')[0].style.left = "25.7rem";

    document.getElementsByClassName("bi-arrow-right")[0].style.top="1.4rem";

  }
  window.addEventListener("resize", function(event) {
    // console.log(document.body.clientWidth + ' wide by ' + document.body.clientHeight+' high');
    if (document.body.clientWidth<=420)
    {


    document.getElementsByClassName("bi-arrow-right")[0].style.top="-0.4rem";

      document.getElementsByClassName('summary')[0].className += ' _380px ';
      // document.getElementsByClassName('LISTS')[0].className +=" LISTS ";
      document.getElementsByClassName('w-50')[0].className +=' Add420LISTS ';
      document.getElementsByClassName('d-inline-flex')[0].classList.remove("mt-5");

      document.getElementsByClassName('d-inline-flex')[0].className+=" mt-1 ";
      document.getElementsByClassName('TAX')[0].style.left = "44%";
      document.getElementById('PO').className+="  FS  ";
      document.getElementsByClassName('list-group')[1].className+=" list2 ";

    }
    else
    {
      document.getElementsByClassName('w-50')[0].classList.remove('Add420LISTS');
      document.getElementsByClassName('summary')[0].classList.remove('_380px');
      // document.getElementsByClassName('LISTS')[0].classList.remove("LISTS") ;
      document.getElementById('PO').classList.remove("PO");
      document.getElementsByClassName('list-group')[1].classList.remove("list2");
    document.getElementsByClassName('TAX')[0].style.left = "24.7rem";
    document.getElementsByClassName("bi-arrow-right")[0].style.top="1.4rem";



      
    }
    // break;
})





// pricing 

let value=document.getElementById('VALUE');
let price=document.getElementById('PRICE1')
let SPrice=document.getElementById('SPRICE');
// console.log(value.textContent);
// console.log(parseInt(SPrice.textContent));
let FPrice=document.getElementById('FPRICE');
// FPRICE.textContent
// console.log(FPrice.textContent);
// CONVERTED IN INTGER
let Price=Number(price.textContent);
let Value=Number(value.textContent);
let Tax=parseInt(SPrice.textContent);
// let Fprice=parseInt(FPrice.textContent);
// console.log(Fprice);

// console.log(Value);
// console.log(Tax);
// console.log(Price);
let FinalPrice=parseInt((Value*Price)+Tax);
// console.log(FinalPrice);
FPrice.textContent = FinalPrice;
