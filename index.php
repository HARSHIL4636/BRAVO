<?php session_start(); 
 $servername="localhost";
  $pass="";
  $username="root";
  $dbname='add_to_cart';
  $con= new mysqli($servername,$username,$pass,$dbname);
    // truncate {
      $TTable="TRUNCATE TABLE add_cart_info";
      if(basename(__FILE__) != 'MAIN_CART.php') {
   $con->query($TTable);
       } 
       // truncate}
?>

<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
include('Helpers/LINKS.php');
?>
    <style>

    @media all and (min-width: 992px) {
	.navbar .nav-item .dropdown-menu{ display: none; }
	.navbar .nav-item:hover .nav-link{  }
	.navbar .nav-item:hover .dropdown-menu{ display: block; }
	.navbar .nav-item .dropdown-menu{ margin-top:0; }
}	
    
      body
{
      background-color: #D2E2C5 !important;
      
}

    
.btn1 {
 width: 130px;
 height: 40px;
 font-size: 1.1em;
 cursor: pointer;
 background-color: whitesmoke;
 color: black !important;
 border: none;
 border-radius: 5px;
 transition: all .4s;
}

.btn1:hover {
 border-radius: 5px;
 transform: translateY(-10px);
 box-shadow: 0 7px 0 -2px #f85959,
  0 15px 0 -4px #39a2db,
  0 16px 10px -3px #39a2db;
}

.btn1:active {
 transition: all 0.2s;
 transform: translateY(-5px);
 box-shadow: 0 2px 0 -2px #f85959,
  0 8px 0 -4px #39a2db,
  0 12px 10px -3px #39a2db;
}
   
</style>
<?php
    include('Helpers/LinkFiles.php');
    ?>
</head>
<body>

   <?php include('Helpers/Navbar.php'); ?>
      <div class="bg row align-items-center my-2 container-fluid ms-auto me-auto">  
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
      <?php 
      include('Footer.php');
      include('Helpers/Footer.php');

?>
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
    
    </body>
</html>
