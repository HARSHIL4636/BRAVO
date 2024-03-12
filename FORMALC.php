<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <!-- font  -->
    <!-- font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cutive+Mono&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quantico:ital@1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed:wght@100&family=Lexend&family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
    <!-- bootstrap bootstrap-icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      @keyframes slideInLeft {
  0% {
    transform: translateX(-100%);
  }
  100% {
    transform: translateX(0);
  }
}

header {
  animation: 1s ease-out 0s 1 slideInLeft;
  background: #666;
  padding: 40px;
}
</style>
</head>
<body class="">
   <?php include('nav.php');  ?>
  
<!-- main starting -->
<div id="main" >
  <div id="header">
<!-- top image -->
<div id="carouselExampleControl" class=" w-100 carousel slide container-lg h-50 mt-2 rounded-3" data-bs-ride="carousel">
  <div class="carousel-inner rounded-3 ">
    <div class="carousel-item active">
      <img src="boo/formal/F1_1.jpeg" class="d-block w-100 rounded-3" alt="...">
    </div>
    <div class="carousel-item">
      <img src="boo/formal/TOP_F3.jpg" class="d-block w-100 rounded-3" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="prev">
    <span class="carousel-c ontrol-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControl" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- top image -->

<!-- 1st row start  -->
      <div class="row align-items-center my-2 container-sm ms-auto me-auto">
       <!-- first part -->
        <div class="col container card shadow p-3  m-2">
              <div id="carouselExampleCaptions" class="carousel slide  container-fluid">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
              <div class="carousel-item active my-4 py-5">
                <img src="boo/formalc/f1_1.jpg" class="d-block w-100 rounded-3" alt="...">
              
              </div>
              <div class="carousel-item my-4 py-5">
                <img src="boo/formalc/f1_2.jpg" class="d-block w-100 h-50 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block mt-5 mb-0 pt-5 position-absolute top-50">
       
                </div>
                <div class="carousel-item my-4 py-5">
                <img src="boo/formalc/f1_3.jpg" class="d-block w-100 h-50 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block mt-5 mb-0 pt-5 position-absolute top-50">
       
                </div>
              </div>
            </div>

            <button class="carousel-control-prev text ps-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          
          <div class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
            
            <p class="card-text"> BROWN PARTYWARE SHOES</p>
            <h5 class="ms-auto me-auto d-inline-grid" >
           <div class="" >
            <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS1"> </span></p>
            <span class="">
            <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice1">5000</s></small>
          
            &#8377<span  class="fs-6" id="DisPrice1" style="font-family: 'Quantico', sans-serif;"></span>
            </span>
          </div>
          </h5>
          <form action="CART.php" method="post"> 
          <div class="btn-warning btn p-0 px-1">
          <input type="submit" name="ADD" class="btn btn-warning " value="ADD TO CART"> 
          <i class="bi bi-cart-plus-fill "></i>
        </div>
        </form>
        </div>
      </div>
        <!-- second part  -->
        <div class="col container card shadow p-3 ">
            <div id="carouselExampleAutoplaying" class="carousel slide container-fluid" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                  <div class="carousel-item active">
                    <img src="boo/formalc/f2_1.jpg" class="d-block w-100 rounded-3" alt="...">
                  </div>
                  <div class="carousel-item rounded-3">
                    <img src="boo/formalc/f2_2.jpg" class="d-block w-100 rounded-3 " alt="...">
                  </div>
                  <div class="carousel-item rounded-3">
                    <img src="boo/formalc/f2_3.jpg" class="d-block w-100 rounded-3 " alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev ps-3" type="button" name="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>


              <div class=" text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
                <form action="#">
                  <p class="card-text "> BLACK PARTYWARE SHOES </p>
                  <h5 class="ms-auto me-auto d-inline-grid" >
                 <div class="">
                  <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS2"></span></p>
                  <span class="">
                  <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice2">1799</s></small>
                
                  &#8377<span  class="fs-6" id="DisPrice2" style="font-family: 'Quantico', sans-serif;"></span>
                  </span>
                </div>
                </h5>
                <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
              </form>
            
            </div>
                      </div>
        

        <!-- third part -->
        <div class="col container card shadow p-3 m-2">
          <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner rounded-3 container-fluid ">
              <div class="carousel-item active my-5 py-4">
                <img src="boo/formalc/f3_1.jpg" class="d-block w-100 rounded-3" alt="...">
             
              </div>
              <div class="carousel-item my-4 py-4">
                <img src="boo/formalc/f3_2.jpg" class="d-block w-100 rounded-3" alt="...">
             
              </div>
              <div class="carousel-item my-4 py-4">
                <img src="boo/formalc/f3_3.jpg" class="d-block w-100" alt="...">
           
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
           
            </div>
            
            <div class="text-light bg-dark  p-2 pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm ">
          
              <form action="#">
                <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">ROYAL LOFER </p>
                <h5 class="ms-auto me-auto d-inline-grid" >
               <div class="">
                <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS3"></span></p>
                <span class="">
                <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice3">1769</s></small>
              
                &#8377<span  class="fs-6" id="DisPrice3" style="font-family: 'Quantico', sans-serif;"></span>
                </span>
              </div>
              </h5>
              <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
            </form>
          
          
          </div>
        </div>
      </div>
  
<!-- 2nd row -->

      <div class="row align-items-center my-2 container-sm ms-auto me-auto">
  <!-- 4th part -->
         <div class="col container card shadow p-3 m-2">
               <div id="carouselExampleCaptions2" class="carousel slide container-fluid">
             <div class="carousel-indicators">
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
               <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
             </div>
             <div class="carousel-inner rounded-3">
               <div class="carousel-item active my-4 py-4">
                 <img src="boo/formal/F4_1.jpeg" class="d-block w-100 rounded-3" alt="...">
               </div>
               <!-- <div class="carousel-inner rounded-3" -->
                <div class="carousel-item my-4 py-4 ">
                 <img src="boo/formal/F4_2.jpeg" class="d-block w-100 rounded-3" alt="...">
               </div>
             <!-- </div> -->
               <!-- <div class="carousel-inner rounded-3" -->
             <div class="carousel-item my-4 py-4 ">
                 <img src="boo/formal/F4_3.jpeg" class="d-block w-100 rounded-3" alt="...">
               </div>
                <!-- </div> -->
              </div>
             
 
             <button class="carousel-control-prev ps-3" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleCaptions2" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
           </div>
           
           <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
            <form action="#">
              <p class="card-text "> CLASSIC LOFFER</p>
              <h5 class="ms-auto me-auto d-inline-grid" >
             <div class="">
              <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS4"></span></p>
              <span class="">
              <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice4">2499</s></small>
            
              &#8377<span  class="fs-6" id="DisPrice4" style="font-family: 'Quantico', sans-serif;"></span>
              </span>
            </div>
            </h5>
            <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
          </form>
          
        </div>
       </div>
         <!-- 5th part -->
         <div class="col container card shadow p-3 m-2">
             <div id="carouselExampleAutoplaying2" class="carousel container-fluid slide  " data-bs-ride="carousel">
                 <div class="carousel-inner rounded-3">
                   <div class="carousel-item active my-4 py-4">
                     <img src="boo/formalc/f5_1.jpg" class="d-block w-100" alt="...">
                    
                   </div>
                   <div class="carousel-item my-4 py-4 rounded-3">
                     <img src="boo/formalc/f5_2.jpg" class="d-block w-100  rounded-3 " alt="...">
                     
                   </div>
                   <div class="carousel-item my-4 py-4 rounded-3">
                     <img src="boo/formalc/f5_3.jpg" class="d-block w-100  rounded-3 " alt="...">
                    
                   </div>
                   
                 </div>
                 <button class="carousel-control-prev ps-3" type="button" name="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Previous</span>
                 </button>
                 <button class="carousel-control-next pe-3" type="button" data-bs-target="#carouselExampleAutoplaying2" data-bs-slide="next">
                   <span class="carousel-control-next-icon" aria-hidden="true"></span>
                   <span class="visually-hidden">Next</span>
                 </button>
               </div>
 
               <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
                <form action="#">
                  <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">CLASSIC 69</p>
                  <h5 class="ms-auto me-auto d-inline-grid">
                 <div class="">
                  <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS5"></span></p>
                  <span class="">
                  <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice5">2689</s></small>
                
                  &#8377<span  class="fs-6" id="DisPrice5" style="font-family: 'Quantico', sans-serif;"></span>
                  </span>
                </div>
                </h5>
                <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
              </form>
            
            
            </div>
                       </div>
         
 
         <!-- 6th part   -->
         <div class="col container card shadow p-3 m-2">
           <div id="carouselExampleFade2" class="carousel slide carousel-fade">
             <div class="carousel-inner rounded-3 container-fluid ">
               <div class="carousel-item active my-4 py-4">
                 <img src="boo/formalc/f6_1.jpg" class="d-block w-100 rounded-3 " alt="...">
                
               </div>
               <div class="carousel-item my-4 py-4">
                 <img src="boo/formalc/f6_2.jpg" class="d-block w-100 rounded-3" alt="...">

               </div>
               <div class="carousel-item my-4 py-4">
                 <img src="boo/formalc/f6_3.jpg" class="d-block w-100 rounded-3" alt="...">
               </div>
              
             </div>
             <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Previous</span>
             </button>
             <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade2" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
             </button>
     
             <div class="text-light bg-dark  pb-1 rounded-3 w-75  me-auto ms-auto text-center mt-1  container-sm">
          
              <form action="#">
                <p class="card-text" style="font-family: 'Dosis', sans-serif; letter-spacing: 0.07rem;">LETHER LOFFER</p>
                <h5 class="ms-auto me-auto d-inline-grid" >
               <div class="">
                <p class="m-0 me-5 mb-1  text-end " style="font-size: xx-small;"><span class="border rounded-1" style="padding: 0.10rem;" id="DPS6"></span></p>
                <span class="">
                <small class="fs-6"  style="font-family: 'Quantico', sans-serif;">&#8377<s id="realPrice6">1769</s></small>
              
                &#8377<span  class="fs-6" id="DisPrice6" style="font-family: 'Quantico', sans-serif;"></span>
                </span>
              </div>
              </h5>
              <button type="submit" class="btn btn-warning">ADD TO CART <i class="bi bi-cart-plus-fill"></i></button>
            </form>
          
          
          </div>

        </div>
</div>
</div>

<footer class='ms-auto me-auto'>
  <div class='row align-items-center  ms-auto me-auto bg-dark text-light w-100' >
    <div class="col text-center">
      <span class='fs-3 text-center' style="font-family: 'Bebas Neue', sans-serif; ">B R A V O</span>
    </div>
    <div class="col text-center" >
      <span class='fs-3 text-center'>Connect With Bravo</span>
      <ul class="list-group  ms-5 ps-5 text-start"style="list-style-type:none">
        <li>
        <a href="" class="thl">instagram</a>
        </li>
      </ul>
    </div>
    <div class="col text-center">
     <span class='fs-3'>Halper</span>
    </div>
  </div>

</footer>
       
<script>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

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
     // DISCOUNTED FINAL price of ITAM
  let b = document.getElementById('DisPrice'+i);
  // REAL PRICE OF PROCDUCT
  let a=document.getElementById('realPrice'+i);
  // PERSANTAGE OF PRICE EMLEMENT SPAN
  let DPS=document.getElementById('DPS'+i);
  let realPrice=a.textContent;
  let Dprice=b.textContent;
  let R=Number(realPrice);
  let D=Number(Dprice);  
  // DISCOUN PERSANTAGE 
  let DP=50;
  let per=R*DP/100;
  console.log(R);
  
  console.log(D);
  
   D=R-per;
  console.log(D);
  b.textContent=D;
  DPS.textContent=DP+'% off'; 
  }
</script>
</body>
</html>