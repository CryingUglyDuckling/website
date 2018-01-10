<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>a
	<![endif]-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixItUp({
  				selectors: {
    			  target: '.portfolio',
    			  filter: '.filter'	
    		  },
    		  load: {
      		  filter: '.app'  
      		}     
				});								
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
	});	
	</script>
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
body, html {
    height: 100%;
    margin: 0;
}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

.bg {
    /* The image used */
    background-image: url("images/face1.jpeg");

    /* Full height */
    height: 100%; 

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav id="myNavbar" class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="images/face1.jpeg" style="width:100%">
  
  <a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>    
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>PHOTOS</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
  <button id="openNav" class="w3-bar-item w3-button w3-xlarge w3-padding-large w3-hover-black" onclick="w3_open()">&#9776;</button>
</nav>
<div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display:none" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Close &times;</button>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
</div>
<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="bg w3-center w3-black w3-jumbo w3-hide-small" id="home">  
  <div style="top:30%; position:relative">
    Hi<br>
    I'm Joytu Khisha<br>    
  </div>
</div>
<div id="portfoliolist">
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">				
					<img src="img/portfolios/logo/5.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Bird Document</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
            </div>	
</div>
<div class="container">

		<ul id="filters" class="clearfix">
			<li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li>
			<li><span class="filter" data-filter=".app">App</span></li>
			<li><span class="filter" data-filter=".card">Card</span></li>
			<li><span class="filter" data-filter=".icon">Icon</span></li>
			<li><span class="filter" data-filter=".logo">Logo</span></li>
			<li><span class="filter" data-filter=".web">Web</span></li>
		</ul>

		<div id="portfoliolist">
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">				
					<img src="img/portfolios/logo/5.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Bird Document</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				

			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/app/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Visual Infography</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>		
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/web/4.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Sonor's Design</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Typography Company</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
						
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">
					<img src="img/portfolios/app/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Weatherette</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/4.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">BMF</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/5.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Techlion</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">KittyPic</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																							
			
			<div class="portfolio app" data-cat="app">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/app/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Graph Plotting</a>
							<span class="text-category">APP</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>														
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">QR Quick Response</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/6.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Mobi Sock</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/7.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Village Community Church</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>													
			
			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/icon/4.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Domino's Pizza</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>							

			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/web/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Backend Admin</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																								

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/icon/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Instagram</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/web/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Student Guide</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">
					<img src="img/portfolios/icon/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Scoccer</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																																																																

			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/icon/5.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">3D Map</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>			
			
			<div class="portfolio web" data-cat="web">
				<div class="portfolio-wrapper">						
					<img src="img/portfolios/web/1.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Note</a>
							<span class="text-category">Web design</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>									
			
			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Native Designers</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/4.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Bookworm</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																												
			
			<div class="portfolio icon" data-cat="icon">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/icon/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Sandwich</a>
							<span class="text-category">Icon</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>																								
			
			<div class="portfolio card" data-cat="card">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/card/3.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Reality</a>
							<span class="text-category">Business card</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>	

			<div class="portfolio logo" data-cat="logo">
				<div class="portfolio-wrapper">			
					<img src="img/portfolios/logo/2.jpg" alt="" />
					<div class="label">
						<div class="label-text">
							<a class="text-title">Speciallisterne</a>
							<span class="text-category">Logo</span>
						</div>
						<div class="label-bg"></div>
					</div>
				</div>
			</div>				
										
			
		</div>
		
	</div>
<div class="w3-padding-large" id="main">  
  <!-- Header/Home -->
  <!-- <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">I'm</span> John Doe.</h1>
    <p>Photographer and Web Designer.</p>
    <img src="images/face1.jpeg" alt="boy" class="w3-image" width="992" height="1108">
  </header> -->

  <!-- About Section -->
  
  <!-- Tets portfolio -->
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>

</html>
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>
