
document.addEventListener("DOMContentLoaded", function(){
    // make it as accordion for smaller screens
    if (window.innerWidth > 992) {
    
        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){
    
            everyitem.addEventListener('mouseover', function(e){
    
                let el_link = this.querySelector('a[data-bs-toggle]');
    
                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                }
    
            });
            everyitem.addEventListener('mouseleave', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');
    
                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                }
            })
        });
    
    }
    // end if innerWidth
    }); 

    
    
      // // DISCOUNTED FINAL price of ITAM
      // let b = document.getElementById('DisPrice1');
      // // REAL PRICE OF PROCDUCT
      // let a=document.getElementById('realPrice1');
      // // PERSANTAGE OF PRICE EMLEMENT SPAN
      // let DPS=document.getElementById('DPS1');
      // let realPrice=a.textContent;
      // let Dprice=b.textContent;
      // let R=Number(realPrice);
      // let D=Number(Dprice);  
      // // DISCOUN PERSANTAGE 
      // let DP=40;
      // let per=R*DP/100;
      // console.log(R);
      
      // console.log(D);
      
      //  D=R-per;
      // console.log(D);
      // b.textContent=D;
      // DPS.textContent=DP+'% off'; 
      // console.log(DISCOUNTED)
      
    
    
      // for loop
      let i = Number(1)
      for(i=1;i<=100;i++)
      {
      //    // DISCOUNTED FINAL price of ITAM
      // let b = document.getElementById('DisPrice'+i);
      // // REAL PRICE OF PROCDUCT
      // let a=document.getElementById('realPrice'+i);
      // // PERSANTAGE OF PRICE EMLEMENT SPAN
      // let DPS=document.getElementById('DPS'+i);
      // let DPSI=document.getElementById('DPSI'+i);
      // let realPrice=a.textContent;
      // let Dprice=b.textContent;
      // let R=Number(realPrice);
      // let D=Number(Dprice);  
      // // DISCOUN PERSANTAGE 
      // let DP=40;
      // let per=R*DP/100;
      // // console.log(R);
      
      // // console.log(D);
      
      //  D=R-per;
      // // console.log(D);
      // DPSI.value=D;
      // b.textContent=D;
      // DPS.textContent=DP+'% off';
      //   // console.log(DPSI);   
    
      }
    
      let btn=document.getElementById('btn1');
      console.log(btn);
      btn.addEventListener("click", OK);
      function OK(e)
      {
        let btncart=document.getElementById('btncart1');
        consol.log(btncart);
    
      }
    
      
    const audio = new Audio("C:/wamp64/www/bravo shues collection/pop-1.mp3");
    const buttons = document.querySelectorAll("button");
    
    buttons.forEach(button => {
        button.addEventListener("click", () => {
          audio.play();
        });
      });


//  this is a send image add tp php MAIN_CART for thisD
// console.log(document.getElementsByName('COLOR'));