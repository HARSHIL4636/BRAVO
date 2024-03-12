<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
    .third_box
    {

        background-color: black;
        color: white;
        padding: 3px;
        border: 2px black solid;
    }
    .sec_box
    {
        padding: 3px;
        border: 2px black solid;
    }
    .first_box
    {
        border: 2px black solid;
        padding: 3px;
    }
    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
    
    
</style>
</head>
<body style="background-image: url(bg.jpg);background-repeat: no-repeat; background-position: 100rem;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand bg-light text-dark  p-sm-3  rounded-3 text-center" href="index.html">B R A V O</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ps-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
              <li class="nav-item dropdown outline">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> SHOES </a>
                 <ul class="dropdown-menu text-center mt-1">
                  <li><a class="dropdown-item fs-5" href="SPORTS.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
                 <li><a class="dropdown-item fs-5" href="CASUAL.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL </a></li>
                 <li><a class="dropdown-item fs-5" href="#" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL </a></li>
                 <li><a class="dropdown-item fs-5" href="#" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SNEAKERS </a></li>
                 </ul>
             </li>
             <li class="nav-item ms-2 outline">
               <a href="#" id="cloth" class="nav-link dropdown-toggle"> CLOTHING </a>
               <ul class="dropdown-menu text-center mt-1">
                <li><a class="dropdown-item fs-5" href="SPORTS C.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> SPORTS </a></li>
                <li><a class="dropdown-item fs-5" href="CASUAL C.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> CASUAL </a></li>
                <li><a class="dropdown-item fs-5" href="FORMAL C.html" style="font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;"> FORMAL </a></li>
                
                </ul>
            </li>
            </ul>   
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="B R A V O  Shoes" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
            <ul class="navbar-nav px-2">
              <li class=" me-2 outline nav-item d-inline-flex">
                <div class="px-2 container-sm pt-1  ">
                    <a href="#" class="">
                        <div class="btn btn-sm">
                            
                        <p class="text-light mb-0">
                            Cart
                          
                
                       <span>
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16" >
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                      </svg>
                      </span>
                    </p>
                    </div>
                        
                    </a>
                </div>
            </li>
              <li class="nav-item">
              
              <a class="nav-link bg-secondary text-light rounded-1" href="https://www.instagram.com/magnet_shoes_pb/">INSTAGRAM</a>
              </li>
            
            
            </ul>
          </div>
        </div>
      </nav>
      <div class="bg row align-items-center my-2 container-sm ms-auto me-auto">
        
        <div class="col">
              <div id="carouselExampleCaptions" class="carousel slide container-fluid">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded-3">
              <div class="carousel-item active">
                <img src="boo\shue1.jpeg" class="d-block w-100 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><span style="color:white; background-color:slategray; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">GREY</span> COLOR</h5>    
        <p> Premium Qulity Soft Fabric.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue2.jpeg" class="d-block w-100 h-50 rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5><span style="color:black; background-color:WHITE; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">WHITE</span> COLOR</h5>    
        <p> Premium Qulity Soft Fabric.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="boo\shue3.jpeg" class="d-block w-100  rounded-3" alt="...">
                <div class="carousel-caption d-none d-md-block">
                            <h5><span style="color:white; background-color:black; padding:5px;padding-top: 0px; padding-bottom: 0; border-radius: 5px;">BLACK</span> COLOR</h5>    
                  <p> Premium Qulity Soft Fabric.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
      </div>
        <!-- second image  -->
        <div class="col container">
            <div id="carouselExampleFade" class="carousel slide carousel-fade container-fluid" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3 ">
                  <div class="carousel-item active">
                    <video class="d-block w-75 me-auto ms-auto rounded-3" height="" autoplay muted >
                      <source src="pathu.mp4" class="object-fit-contain" type="video/mp4">
                      <source src="pathu.ogg" class="object-fit-contain" type="video/ogg">
                    Your browser does not support the video tag.
                    </video>
                    <!-- <img src="C:\Users\admin\Downloads\boo\shue6.jpeg" class="d-block w-100" alt="..."> -->
                 
                </div>
                  <div class="carousel-item">
                    <video class="d-block w-75 me-auto ms-auto rounded-3" height="" autoplay muted >
                      <source src="bhavo.mp4" class="object-fit-contain" type="video/mp4">
                      <source src="bhavo.ogg" class="object-fit-contain" type="video/ogg">
                    </video>
                    <div class="carousel-caption d-none d-md-block">
                      <h5 class="">
                      <span style="background-color: black;" class="p-2 text-white rounded-3 py-0"> BLACK </span>
                     </h5>
                     <P class="">
                       <span class="p-2 text-white rounded-3 ">
                  
                       IMPORTANT SNEAKERS SHOES 
                       </span>
                     </P>
                     </div>
                  </div>
                </div>
                <button class="carousel-control-prev ps-0 ms-5" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
                  <span class="visually-hidden" >Previous</span>                </button>
                <button class="carousel-control-next pe-0 me-5" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

        <!-- third part -->
        <div class="col">
         <div id="carouselExampleAutoplaying" class="carousel slide container-fluid" data-bs-ride="carousel">
  <div class="carousel-inner rounded-3">
    <div class="carousel-item active">
      <img src="boo\shue8.jpeg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="">
        <span style="background-color: white;" class="p-2 text-dark rounded-3 py-0"> BLACK 
        <span class="bg-info ms-2 px-2 py-0 rounded-3 pt-0 fs-6 text-dark" > BLUE </span>
        </span>
       </h5>
       <P class="">
         <span class="p-2 text-white rounded-3">
         IMPORTANT SPOTS SHOES 
         </span>
       </P>
       </div>
    </div>
    <div class="carousel-item">
      <img src="boo\shue9.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="boo\shue10.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>
      </div>
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>.
      <script>
  
const a = document.getElementsByClassName("nav-link dropdown-toggle");
document.getElementById("cloth").style=("color:white;");
        console.log(a[0]);
        a[0].style="color:white;"

</script>
<script src="https://kit.fontawesome.com/d3ab018104.js" crossorigin="anonymous"></script>
</body>
</html>

<?php ?>