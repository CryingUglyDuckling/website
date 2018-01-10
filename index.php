<!DOCTYPE html>
<html>
<title>Joytu Khisha</title>
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
	<script src="https://www.w3schools.com/lib/w3.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
a:link {text-decoration: none;}
#certificates .w3-col .w3-card{ margin-bottom: 12px}
body, html {
    height: 100%;
		margin: 0;
		transition: background-color 2s;
}
.sidenav {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 1;
	top: 0;
	left: 0;
	background-color: #111;
	overflow-x: hidden;
	transition: 2s;
	padding-top: 60px;
}

.sidenav p{
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	font-size: 20px;
	color: #818181;
	display: block;
	transition: 1s;
}
.sidenav .w3-row .w3-col h3{
	
	text-decoration: none;
	font-size: 25px;
	color: #818181;
	display: block;
	transition: 1s;
}

.sidenav .w3-container h2,.sidenav .w3-container hr{margin-left:2%;}

.sidenav .w3-row .w3-col h3 span{color:red;}
.sidenav .w3-row,.sidenav .w3-container{padding:2%}
.sidenav p:hover,.sidenav .w3-row .w3-col h3:hover {
	color: #f1f1f1;
}

.sidenav .closebtn {
	position: absolute;
	top: 0;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
}

#main {
	transition: margin-left 2s;
	padding: 16px;
}

@media screen and (max-height: 450px) {
.sidenav {padding-top: 15px;}
.sidenav a {font-size: 18px;}
}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;overflow:auto}
.w3-sidebar::-webkit-scrollbar{display:none}
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

.bg div a {
	position: absolute;
	padding-top: 60px;
	font-size:20px;
	right:20%;
	top:40%;

  }
  .bg div a span{
	position: absolute;
	top:0 ;
	left: 50%;
	width: 30px;
	height: 50px;
	margin-left: -15px;
	border: 2px solid #fff;
	border-radius: 50px;
	box-sizing: border-box;
  }
  .bg div a span::before {
	position: absolute;
	top: 10px;
	left: 50%;
	content: '';
	width: 6px;
	height: 6px;
	margin-left: -3px;
	background-color: #fff;
	border-radius: 100%;
	-webkit-animation: sdb10 2s infinite;
	animation: sdb10 2s infinite;
	box-sizing: border-box;
  }
  @-webkit-keyframes sdb10 {
	0% {
	  -webkit-transform: translate(0, 0);
	  opacity: 0;
	}
	40% {
	  opacity: 1;
	}
	80% {
	  -webkit-transform: translate(0, 20px);
	  opacity: 0;
	}
	100% {
	  opacity: 0;
	}
  }
  @keyframes sdb10 {
	0% {
	  transform: translate(0, 0);
	  opacity: 0;
	}
	40% {
	  opacity: 1;
	}
	80% {
	  transform: translate(0, 20px);
	  opacity: 0;
	}
	100% {
	  opacity: 0;
	}
  }
</style>
<body class="w3-black">

	<!-- Icon Bar (Sidebar - hidden on small screens) -->
	<nav id="myNavbar" class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
		<!-- Avatar image in top left corner -->
		<img src="images/face.jpeg" style="width:100%">
		
		<a href="#home" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-home w3-xxlarge"></i>
			<p>HOME</p>
		</a>
		<a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-user w3-xxlarge"></i>
			<p>ABOUT</p>
		</a>    
		<a href="#projects" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-microchip w3-xxlarge"></i>
			<p>Project</p>
		</a>
		<a href="#skills" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-terminal w3-xxlarge"></i>
			<p>Technical Skills</p>
		</a>
		<a href="#certificates" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-certificate w3-xxlarge"></i>
			<p>Certificates</p>
		</a>
		<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
			<i class="fa fa-envelope w3-xxlarge"></i>
			<p>CONTACT</p>
		</a>
		
		<!-- <button id="openNav" class="w3-bar-item w3-button w3-xlarge w3-padding-large w3-hover-black" onclick="w3_open()">&#9776;</button> -->
	</nav>

	<!-- Navbar on small screens (Hidden on medium and large screens) -->
	<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
		<div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
			<a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
			<a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
			<a href="#projects" class="w3-bar-item w3-button" style="width:25% !important">PROJECTS</a>
			<a href="#skills" class="w3-bar-item w3-button" style="width:25% !important">SKILLS</a>
			<a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
		</div>
	</div>

	<!-- Page Content -->
	<div class="bg  w3-black w3-xxxlarge w3-hide-small" id="home">  
		<div style="top:75%; position:relative;left:13%">
			Hi<br>
			I'm Joytu Khisha<br>
			<a> <span></span> Scroll</a>
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
		<div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
			<h2 class="w3-text-light-grey">Joytu Khisha</h2>
			<hr style="width:200px" class="w3-opacity">
			<p>
				If you meet hundred people today and ask them how was your life till now? Ninety people will say it was not easy.
				If you ask them if they are happy now. Most people will say they are not. Few will say it was hard but they are happy now.
				They had to go through alot to come to this point. 80% of the worlds population are not happy.
				Rest of the 20% are happy right now but will hardly accept life was easy. Only 5% will say life was easy for them and they are happy now.
				I am among those 5%. I believe I was born with a silver spoon in my mouth. God almighty gave me more than I deserve.       
			</p>
			<p>
				One day one of my friend was very upset I asked him why? He said his father would not buy him an Iphone. I said 'but you already have a functional samsung which was quite costly.
				Why would you need an Iphone.' He said all of his friends have Iphones. That time I was using a symphony which was around six thousand (taka obviously). I never felt the need to buy a better phone
				let alone an IPhone. Then I realized something. I name this story  
			</P>
			<h4 class="w3-center" style="color:red">The silver spoon</h4>
			<p>
				When a person is born God gives two things to the person. One, He puts a spoon in the mouth and two, he gives every person a special power.
				With that power the person can change the material of the spoon. It can be made of silver, wood, gold, or anything.
				Moreover you can change the material of the spoon anytime of your life. 
				Even if you are old if you had a wooden spoon through out your life you can change that spoon to silver anytime you want.
				The spoon can be silver only if you believe it to be.
			</p>
			<p>
				I never felt the need of Iphone or Macbook. I was happy with what I had. Before I continue more of the story I need to tell you something about myself.
				I am a CSE graduate have sufficient knowledge on the subject. I like the idea of earning money through freelancing. I made few games, websites, apps. 
				While planning to release an app on playstore I had to run a survey and analyze the app market. I found Iphone apps make 4times the playstore apps inspite of the number of apps in apple's appstore
				being one-fourth of Google's Playstore. I realized Iphone users pay more than android users. I ask myself why should I limit my app to Google's playstore? 
				I decided to make the app for both playstore and appstore. While Developing for the apple I found out two things. One you have to use MACBOOK to make the app. 
				Two, Its better to buy Iphone for testing the app. Moreover you can make both Iphone apps and andoind apps on MACBOOK but you can not legally do both in other laptops.
				I asked my father to buy me an IPHONE and a MACBOOK. Father said why do you need another mobile and another laptop. Be satisfied with what you already have.
				Then I looked at my spoon. I asked myself is it still a silver one?.....    
			</P>
			<p style="color:red">
				...... YES it is.
			</p>
					

			<button   class="w3-button w3-light-grey w3-padding-large w3-section">
				<a href="Joytu_Khisha_Resume.pdf" download>
					<i class="fa fa-download"></i> Download Resume
				</a>
			</button>
			
			<!-- Grid for pricing tables -->
			
			
			
		<!-- End About Section -->
		</div>
		<!-- Portfolio Section -->
		<div class="w3-padding-32 w3-content" id="projects">
			<h2 class="w3-text-light-grey">Researches and Projects</h2>
			<hr style="width:400px" class="w3-opacity">
			<div class="w3-content w3-justify w3-text-grey " id="about">
				<p>
					There are differences between researchs and projects. Sometimes a project may not be a research. For example making a website can not be a researh.
					As we know the result of it. Creating a website like facebook is a project. Where as accurate face detection in a picture uploaded in facebook is a research.
					Result of research is unknown. where as project invloves mostly assembly. A research is always a project but a project may not always be a research.
					Below here are some of my projects and researches. Right now I wont be sharing the technical stuffs. Detailed documentation will be uploaded in my website as soon as possible.
					Feel free to contact me regarding algorithms, pseudocodes and workflow diagrams.

				</p>
				<p>
					To be honest most of my researches are still incomplete. 
				</p>
				<h4 class=" w3-text-light-grey">Terms and conditions agreement </h4>
				<hr style="width:400px" class="w3-opacity">
				<p style="color:red; padding:20px">
					By clicking any thumnail to view Project details below you agree that you will not be stealing any of my ideas. Haha just Kidding. You can steal any project you like.
					Most of my projects are based on engineering implementaion. So getting the idea will not help you to implement it unless you have good engineering support. I am happy to collaborate if someone is interested to work with me. Just Dont steal The <span style="color:white">LUNASPHERE</span> project.
					I hold that project very close to my heart.
				</p>
			</div>
			<!-- Grid for projects -->
			<div class="w3-grayscale">      
				<div class="w3-half ">
					<div class="w3-half w3-row-padding">
						<!-- p1 -->
						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p1a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p1')">Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Dress Mirror</p>
							</div>
						</div>					

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p2a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p2')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Lunasphere</p>
							</div>
						</div>

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p3a.png" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p3')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Vibgyor</p>
							</div>
						</div>
		
					</div>
					<div class="w3-half w3-row-padding"><!--2nd column-->
						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p4a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p4')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Jumpman</p>
							</div>
						</div>			
						
						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p5a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p5')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Spider-bot</p>
							</div>
						</div>

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p6a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p6')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Remote Controlled Car</p>
							</div>
						</div>
						
					</div>					
				</div>
				<div class="w3-half "><!-- 3r and 4th column-->
					<div class="w3-half w3-row-padding"><!--3rd colum-->
						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p7a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p7')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Posture Detection</p>
							</div>
						</div>

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p8a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p8')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Watershed Model</p>
							</div>
						</div>

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p9a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p9')" >Details</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Speech Responsive Robot</p>
							</div>
						</div>
					</div>
					<div class="w3-half w3-row-padding "><!--4th column-->
						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p10a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p10')" >No Access</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Right Skillvaluation</p>
							</div>
						</div>

						<div class="w3-card-4 w3-display-container w3-center w3-hover-opacity w3-margin-bottom" style="width:100%">
							<img src="pro/p11a.jpg" alt="Avatar"style="width:100%;height:150px;object-fit:contain;">
							<div class="w3-display-middle w3-display-hover w3-xxlarge">
								<button class="w3-button w3-black" onclick="openProject('p11')" >No Access</button>
							</div>
							<div class="w3-padding-16 "style="background: #221;">
								<p>Speech Processing With event relevancy</p>
							</div>
						</div>				
						
					</div>					
				</div>			
			</div>
			<!-- End projeect grid -->
			<!--Project details-->
			<div id="projectDetails">
				<div id="p1" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p1')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h1>Title: Dress Mirror </h1>
							<h3>Base:<span> Software and Hardware</span></h3>
							<h3>Status:<span> Incomplete, On halt</span></h3>
							<h3>Difficulty:<span> 100%</span></h3>
							<h3>Idea base:<span> 20%</span></h3>
							<h3>Implementation base:<span> 100%</span></h3>
							<h3>Research base:<span> 50%</span></h3>
						</div>
						<div class="w3-col  l6">
						<!-- <video width="100%" controls class="w3-padding">
							<source src="2(1).mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video> -->
						<img src="pro/p1b.jpg"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							The idea is to display a person wearing the dresses of his/her choosing on a computer screen.
							The dress will be responsive according to the posture of human.
							It was based on augmented reality.  
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							It was not my idea. One of my talented younger sister Tahmina Sultana was participating in a compettiion named
							Woman in DIgital. She presented the idea named dress mirror. People can choose the dress from the screen and they see themselves on that dress.
							Tahomina approached me. It was a good idea but was very very hard to implement. Why was it hard I will describe later on. That time I was working with OPENCV. So I took the challenge.
							It had lots of potential. It helps alot in women's privacy in dressing rooms. This technology could have made dressing rooms obsolete.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							We had a working prototype but could not manage to secure fund. To be honest I had doubts of its success. Tahomina approached companies like Yellow, Aarong.
							Yellow were interested for the technology. But to make it successful we needed a minimum investment of 10 lakhs just for trial and error. I will just give you an idea why was it not successful.
							The present games use heavy graphics yet very few can make it close to real despite of having high quality graphics card.
							We are not only simulating 3d cloths and folds along with light and shade We also have to detect the right posture. Only two companies in the world came close to implementing what we targeted.
							Not only that making 3d design of the dresses were quite costly. Inspite of all the challengs we managed to build a working prototype and also a business model which would require 10lakhs with 50% success rate.
							So you can guess what happened.
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p1a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col w3-padding  l6">
							<img src="pro/p1b.jpg"style="width:100%" class="w3-padding">
							</div>
						</div>
					</div>
				</div>
				<!-- p2 -->
				<div id="p2" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p2')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title: Lunasphere </h2>
							<h3>Base:<span>Software Game </span></h3>
							<h3>Status:<span> On Halt</span></h3>
							<h3>Difficulty:<span>60% </span></h3>
							<h3>Idea base:<span>60% </span></h3>
							<h3>Implementation base:<span>60% </span></h3>
							<h3>Research base:<span> 0%</span></h3>
						</div>
						<div class="w3-col  l6">
							<video width="100%" controls class="w3-padding">
								<source src="vid/p2.mp4" type="video/mp4">
								<source src="mov_bbb.ogg" type="video/ogg">
								Your browser does not support HTML5 video.
							</video>
							<!-- <img src="pro/pa.jpg"style="width:100%" class="w3-padding"> -->
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
								This is a simple cross Platformer game. The story is about the love story of a firefly and an apple. Where firefly loses energy in sunlight and apple loses its energy without sunlight.
								The game contains many obstacles where firefly and apple have to solve together to be united in each others arm.

						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							Its another fail story. It was made for Imagine cup. Unfortunately when it was made the competition category for games were called off.
							I was so upset I did not complete the game. Because that was my last chance to participate in Imagine cup.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							In this verse fireflies eat apple for survival. But the main character of the game a firefly fell in Love with an apple and all the fireflies were against it. 
							They can never be together cos there can not be a place where light and dark both exist at the same time. But prophecy says in the lunas mountain a firefly can gain power 
							to withstand light. Then firefly and apple set their journey to Lunas mountain but the journey wont be easy because no one ever made it alive.
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p2a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div>
					</div>
				</div>
				<!-- p3 -->
				<div id="p3" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p3')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title: Thousand Shades of moon </h2>
							<h3>Base:<span> Software Website </span></h3>
							<h3>Status:<span> Complete </span></h3>
							<h3>Difficulty:<span> 70% </span></h3>
							<h3>Idea base:<span> 20%</span></h3>
							<h3>Implementation base:<span> 50%</span></h3>
							<h3>Research base:<span> 10%</span></h3>
						</div>
						<div class="w3-col  l6">
						<!-- <video width="100%" controls class="w3-padding">
							<source src="2(1).mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video> -->
						<img src="pro/p3a.png"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
								Its a website base project. It was based on html canvas. User had to dodge a ball using mouse.
								It had no commercial use. It was a course project. I decided to complicate things and submit a hard project.
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							It was inspired from Agor.io and slither.io. 
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							I did not use any library to make the website. Pure HTML5, CSS3 and javascript and jquery were used.
							As I said before it was a course project. I wanted to show off my canvas skills to secure good marks.
						</p>
						<!-- <h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p2a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div> -->
					</div>
				</div>
				<!-- p4 -->
				<div id="p4" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p4')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title: Jump-man PC </h2>
							<h3>Base:<span> Software </span></h3>
							<h3>Status:<span> Complete</span></h3>
							<h3>Difficulty:<span> 40%</span></h3>
							<h3>Idea base:<span> 10%</span></h3>
							<h3>Implementation base:<span> 30%</span></h3>
							<h3>Research base:<span> 0%</span></h3>
						</div>
						<div class="w3-col  l6">
						<video width="100%" controls class="w3-padding">
							<source src="vid/p4.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video>
						
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							It was a PC based game. Its very simple where a person has to jump to score more. Kind of like a flappy bird.
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							I liked c++ very much. As it had more control and its the fastest among all programming languages. I wanted to make a game using cpp.
							That time unreal was not stable and was used for 3d. I wanted to make a 2d game. So I used allegro to built a simple pc game.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							Programming in cpp with raw coding and library having no better interface like present popular game engines were hard.
							I was ready to built my own engine for 2d game with cpp library. Then unreal released their 2d game sync. Life is hard.
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p4a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div>
					</div>
				</div>
				<!-- p5 -->
				<div id="p5" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p5')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title:  Spider Bot</h2>
							<h3>Base:<span> Hardware</span></h3>
							<h3>Status:<span> Easy 40%</span></h3>
							<h3>Difficulty:<span> complete</span></h3>
							<h3>Idea base:<span> 30%</span></h3>
							<h3>Implementation base:<span> 40%</span></h3>
							<h3>Research base:<span> 20%</span></h3>
						</div>
						<div class="w3-col  l6">
						<video width="100%" controls class="w3-padding">
							<source src="vid/p5.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video>
						
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							It was a spider bot controlled by bluetooth through selfmade Mobile app.	
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							Making remote controlled car using bluetooth was so common so I decided to make a spider instead of a car.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							It was built using arduino, app was created using android studio. 
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p5a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div>
					</div>
				</div>
				<!-- p6 -->
				<div id="p6" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p6')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title:  Remote Controlled car</h2>
							<h3>Base:<span> Hardware</span></h3>
							<h3>Status:<span> Complete</span></h3>
							<h3>Difficulty:<span> 70%</span></h3>
							<h3>Idea base:<span> 20%</span></h3>
							<h3>Implementation base:<span> 70%</span></h3>
							<h3>Research base:<span> 20%</span></h3>
						</div>
						<div class="w3-col  l6">
						<video width="100%" controls class="w3-padding">
							<source src="vid/p6a.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video>				
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							Remote controlled car using arduino and bluetooth, android app.
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							Creating remote controlled car was really enjoying.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							I made so many remote controlled car. I dont even remember the numbers. the gallery will hold only the cars that I kept log of.
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p6a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col w3-padding l6">
								<video width="100%" controls class="w3-padding">
									<source src="vid/p6.mp4" type="video/mp4">
									<source src="mov_bbb.ogg" type="video/ogg">
									Your browser does not support HTML5 video.
								</video>	
							</div>
						</div>
					</div>
				</div>
				<!-- p7 -->
				<div id="p7" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p7')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title:  Posture Detection</h2>
							<h3>Base:<span> Software</span></h3>
							<h3>Status:<span> Incomplete</span></h3>
							<h3>Difficulty:<span> Very hard 100%</span></h3>
							<h3>Idea base:<span> 50%</span></h3>
							<h3>Implementation base:<span> 80%</span></h3>
							<h3>Research base:<span> 100%</span></h3>
						</div>
						<div class="w3-col w3-padding l6">
							<!-- <video width="100%" controls class="w3-padding">
								<source src="2(1).mp4" type="video/mp4">
								<source src="mov_bbb.ogg" type="video/ogg">
								Your browser does not support HTML5 video.
							</video> -->
							<img src="pro/p7a.jpg"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
						The project gives us the estimated result of the human posture in three dimensional system from two dimensional color images with the help of multiple image processing techniques. 
						The input image has some specific criteria for being suitable candidate. The image should only contain single human with distinguishable face feature. 
						The position and size of the face is estimated from haar cascade technique. 
						The result provides us a stickman in 3d space. The estimated position of the body parts of the human are calculated using a conditional tree. 
						This technology is open for research and it can be used to understand the action of human.
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							Most of the available researches used machine learning algorithms to train their system for human posture detection. 
							One specific research used infrared camera to detect human posture. As human emits infrared light the camera 
							Their study used Markov Model for human posture detection. This technology is expensive. 
							The accuracy rate is comparatively high respect to other techniques but the process is very costly and time consuming. 
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
						This technology opens doors to enormous possibility. Lots of expensive sensors are used for motion tracking. 
						With this technology we can reduce those expenses by using only cameras. People make animation cartoon models and create their movement. 
						If we can bridge this technology with animation. Animators do not have to make their cartoons move in computer, anyone can do that using cameras. 
						In movies we use green background for CGI. 
						We can use any background screen other than skin color screen to detect human posture using this technology
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p7a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">
								<img src="pro/p7b.jpg"style="width:100%" class="w3-padding">
							</div>
						</div>
					</div>
				</div>
				<!-- p8 -->
				<div id="p8" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p8')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title: Watershed Model For Cluster Detection</h2>
							<h3>Base:<span> Software</span></h3>
							<h3>Status:<span> Complete</span></h3>
							<h3>Difficulty:<span> 80%</span></h3>
							<h3>Idea base:<span> 90%</span></h3>
							<h3>Implementation base:<span> 80%</span></h3>
							<h3>Research base:<span> 100%</span></h3>
						</div>
						<div class="w3-col  l6">
						<!-- <video width="100%" controls class="w3-padding">
							<source src="2(1).mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video> -->
						<img src="pro/p8d.jpg"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
						In this project we present an algorithm for cluster detection using modified Watershed model. 
						The key idea is to differentiate the areas and select their regions using modified watershed model. 
						Points included in those area are then differentiated according to their respective area. 
						Presented modified watershed model for cluster detection works better than the K-means Algorithm for cluster detection. 
						The presented algorithm is also computationally inexpensive compared to the K-means, Agglomerative Hierarchical Clustering and DBSCAN algorithms. The Clustering results can be considered as good as the results of DBSCAN and sometimes the result obtained by the provided modified watershed model Clustering is better than the DBSCAN results. The presented algorithm also somewhat solves the conflicts faced by the DBSCAN in case of varying density. This paper also presents a way to reduce high dimensional data to low dimensional data with automatic association analysis. This algorithm can reduce high dimensional data to even a single dimension. Using this algorithm the conflicts faced in multidimensional clustering by different algorithms such as DBSCSN is solved. 
						This Dimensionality reduction with automatic association algorithm was then applied to the Watershed model to detect cluster in Homicide Data and finding out murder prone zones and suggest a person with murder avoiding areas.
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
						Clustering data has been a challenge in data mining field for a very long time. Many problems were faced during the establishment of clustering algorithm. Popular algorithms like K-means, DBSCAN, Agglomerative Hierarchical Clustering are used abundantly for cluster detection with somewhat modifications [5]. Major researches on efficient initialization of K-means were also available [6]. But algorithms which are used abundantly in image processing has hardly been used for data mining. In this project we present a modified watershed model for cluster detection. 
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
						Watershed model is mainly used for image processing for region detection. We modified the given watershed model for data clustering. In watershed model the key challenge is to find the most distinct points. This requirement is fulfilled by many techniques. Some renowned researches on watershed apply distance transform to achieve the expected result. Another way to achieve the result is through special filtering. We fulfilled this challenge applying multivariate Gaussian filter on the obtained image plot from the cluster dataset. A brief introduction on Watershed model is given followed by our modified algorithm
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p8a.jpg"style="width:100%" class="w3-padding">
								<img src="pro/p8b.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col w3-padding l6">
								<img src="pro/p8c.jpg"style="width:100%" class="w3-padding">
								<img src="pro/p8d.jpg"style="width:100%" class="w3-padding">
							</div>
						</div>
					</div>
				</div>
				<!-- p9 -->
				<div id="p9" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p9')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title: Speech Responsive robot </h2>
							<h3>Base:<span> Hardware and Software</span></h3>
							<h3>Status:<span> Complete</span></h3>
							<h3>Difficulty:<span> Hard 90%</span></h3>
							<h3>Idea base:<span> 40%</span></h3>
							<h3>Implementation base:<span> 80%</span></h3>
							<h3>Research base:<span> 80%</span></h3>
						</div>
						<div class="w3-col  l6">
						<video width="100%" controls class="w3-padding">
							<source src="vid/p9.mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video>
						
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
						In this paper we present a robot with mechanical gripper which has the capability of transporting limited sized objects from one place to another with pick-up and drop capabilities. The robot’s responses are based on speech recognition of verbal commands. In our project we have used Google speech recognition module in order to understand verbal commands. 
						We also categorized the objects into six specific categories according to the amount of gripping force required to lift the objects. The categories are divided according to object stiffness. An android application was used to communicate with the robot through Bluetooth communication. 
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
						The application decodes the human speech into an array of characters which are transmitted to the robot using Bluetooth technology. 
						The robot uses microcontroller which decodes the messages into executable functions. In this project we have designed the robot such that it understands only fifteen distinct verbal commands and ignores others.
						Being a speech responsive mobile robot it can be effectively used to move objects from one place to another by people with disability or handicap.
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							First, human speech command is picked up through an android application that uses Google speech recognition to convert the verbal command into an array of characters. 
							This array of characters is sent to the microcontroller on the robot using a Bluetooth module. The microcontroller receives the data, and processes it into an executable function. There are 15 functions that we have already defined for the robot to execute, such as moving forward or backward, picking up and dropping objects with only the force required, and so on. If the verbal command matches one of these predefined functions, that function is performed by the robot. If it does not match any of the functions preprogrammed, the robot does not perform any action.
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p9a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col w3-padding l6">
								<img src="pro/p9b.jpg"style="width:100%" class="w3-padding">
							</div>
						</div>
					</div>
				</div>
				<!-- p10 -->
				<div id="p" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title:  </h2>
							<h3>Base:<span> </span></h3>
							<h3>Status:<span> </span></h3>
							<h3>Difficulty:<span> </span></h3>
							<h3>Idea base:<span> </span></h3>
							<h3>Implementation base:<span> </span></h3>
							<h3>Research base:<span> </span></h3>
						</div>
						<div class="w3-col  l6">
						<!-- <video width="100%" controls class="w3-padding">
							<source src="2(1).mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video> -->
						<img src="pro/pa.jpg"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p2a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div>
					</div>
				</div>
				<!-- p11 -->
				<div id="p" class="sidenav">
					<a href="javascript:void(0)" class="closebtn" onclick="closeProject('p')">&times;</a>
					<div class="w3-row">
						<div class="w3-col w3-padding l6">
							<h2>Title:  </h2>
							<h3>Base:<span> </span></h3>
							<h3>Status:<span> </span></h3>
							<h3>Difficulty:<span> </span></h3>
							<h3>Idea base:<span> </span></h3>
							<h3>Implementation base:<span> </span></h3>
							<h3>Research base:<span> </span></h3>
						</div>
						<div class="w3-col  l6">
						<!-- <video width="100%" controls class="w3-padding">
							<source src="2(1).mp4" type="video/mp4">
							<source src="mov_bbb.ogg" type="video/ogg">
							Your browser does not support HTML5 video.
						</video> -->
						<img src="pro/pa.jpg"style="width:100%" class="w3-padding">
						</div>
					</div>
					<div class="w3-container">
						<h2>Abstract</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Inspiration</h2>
						<hr style="width:200px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Behind the camera</h2>
						<hr style="width:300px" class="w3-opacity">
						<p>
							
						</p>
						<h2>Photo Gallery</h2>
						<hr style="width:200px" class="w3-opacity">
						<div class="w3-row">
							<div class="w3-col w3-padding l6">
								<img src="pro/p2a.jpg"style="width:100%" class="w3-padding">
							</div>
							<div class="w3-col  l6">

							</div>
						</div>
					</div>
				</div>
			</div>
							
		<!-- End Portfolio Section -->
		<!-- Skill div -->
		<div id='skills'>
			<h2 class="w3-padding-24 w3-text-light-grey ">Technical Skills</h2>
			<hr style="width:300px" class="w3-opacity">
			<div class="w3-content w3-justify w3-text-grey" >
				<p>
					Your Skills are only good as much as you practice. The following skills were based on when I was designing my website.
					It could increase or decrease  depending upon the subject I practice. 
				</p>
			</div>

			<div id="lang">
				<h3 class=" w3-text-light-grey">Programming </h3>
				<hr style="width:200px" class="w3-opacity">

				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">C</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:60%;">Use this subject</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">C++</div>		
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:70%;">Have proficient Knowledge on this subject</div>
					</div>	
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">C#</div>			
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:60%;">Use this subject</div>
					</div>
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Python</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:50%;">Have basic concept</div>
					</div>
				</div>

				<div class="w3-container w3-margin-bottom">
				<div class="w3-container w3-padding-small"style="float:left">Java</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:60%;">Use this subject</div>
					</div>			
				</div>

				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">PHP</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:60%;">Use This subject</div>
					</div>			
				</div>
				<div class="w3-container w3-margin-bottom">
				<div class="w3-container w3-padding-small"style="float:left">Javascript</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:85%;">Skilled on this subject (Prefer to work on this)</div>
					</div>
				</div>

				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Sql & NOSql</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:73%;">Have proficient Knowlege on the subject </div>
					</div>
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">MATLAB</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:70%;">Have proficient Knowlege on the subject</div>
					</div>
				</div>
			</div>
			<br>
			<div id="softtech">
				<h3 class=" w3-text-light-grey">Software and technologies </h3>
				<hr style="width:300px" class="w3-opacity">
				<div class="w3-container w3-margin-bottom">
				
					<div class="w3-container w3-padding-small"style="float:left">MS Office Suite</div>
					<div class="w3-white "style="width:80%;float:right">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:70%;">Have proficient Knowlege on the subject. 70%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Arduino and PIC</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:93%;">Skilled on this subject. 93%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Photoshop</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:70%;">Have proficient Knowlege on the subject. 70%</div>
					</div>			
				</div>

				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Illustrator</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:73%;">Have proficient Knowlege on the subject. 73%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
						<div class="w3-container w3-padding-small"style="float:left">Blender</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:40%;">Basic concept (Learning). 40% </div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Unity3d</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:80%;">Have proficient Knowlege on the subject. 80%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Processing</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:75%;">Have proficient Knowlege on the subject. 75%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">OpenCV</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:50%;">Basic Concept Out of practice. 50%</div>
					</div>
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Raspberry Pi</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:56%;">Basic Concept Out of practice. 56%</div>
					</div>	
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">Proteus and PCB </div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:70%;">Use this subject. 70%</div>
					</div>
					
				</div>
				<div class="w3-container w3-margin-bottom">
					<div class="w3-container w3-padding-small"style="float:left">MEAN Stack</div>
					<div class="w3-white w3-right"style="width:80%;">
						<div class=" w3-dark-grey w3-center w3-padding" style="width:40%;">Basic Concept (learning) 40%</div>
					</div>
					
				</div>
			</div>
			
		</div>
		<!-- end of skill div -->
		<!-- Certificates gallery -->
		<div id="certificates" class='w3-row'>
			<h2 class="w3-text-light-grey">Certificates</h2>
			<hr style="width:200px" class="w3-opacity">
			
			<p class="w3-content w3-justify w3-text-grey w3-padding-32">
				Dont Be overwhelmed. All these certificates are just participation certification. 
				I participated in many workshops and competitions but did not secure any significant position.
				In one or two competitions we came close to semifinals but never secured 1st position.
			</p>
			<div class='w3-col l4 w3-row-padding'>			
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c1.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c1').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Robo Fight 2015</p>
				</div>
				<div id="c1" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c1').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Robo Fight 2015</h2>
						</div>
						<img  src='cer/c1.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c2 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c2.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c2').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">ICCIT Project Showcase</p>
				</div>
				<div id="c2" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c2').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>ICCIT Project Showcase</h2>
						</div>
						<img  src='cer/c2.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c3 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c3.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c3').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">MATLAB Workshop</p>
				</div>
				<div id="c3" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c3').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>MATLAB workshop</h2>
						</div>
						<img  src='cer/c3.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>

				<!-- c4 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c4.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c4').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Programming contest</p>
				</div>
				<div id="c4" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c4').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Robotour And Programming contest</h2>
						</div>
						<img  src='cer/c4.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c5 -->
			</div>
			<div class='w3-col l4 w3-row-padding'>
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c5.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c5').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">BUET Planetrix</p>
				</div>
				<div id="c5" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c5').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>BUET Planetrix</h2>
						</div>
						<img  src='cer/c5.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c6 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c6.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c6').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">ICCIT 2015</p>
				</div>
				<div id="c6" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c6').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>ICCIT 2015</h2>
						</div>
						<img  src='cer/c6.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c7 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c7.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c7').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Linux Workshop</p>
				</div>
				<div id="c7" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c7').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Linux Workshopt</h2>
						</div>
						<img  src='cer/c7.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c8 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c8.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c8').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Mechatronics Workshop</p>
				</div>
				<div id="c8" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c8').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Mechatronics workshop</h2>
						</div>
						<img  src='cer/c4.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>

			</div>
			<div class='w3-col l4 w3-row-padding'>
				<!-- c9 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c9.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c9').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Electronic App Design Workshop</p>
				</div>
				<div id="c9" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c9').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Electronic App Design Workshop</h2>
						</div>
						<img  src='cer/c9.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				<!-- c10 -->
				<div class="w3-card-4 w3-display-container w3-center w3-grayscale-max w3-hover-opacity " >
					<img src="cer/c10.jpg" alt="Avatar"style="width:100%">
					<div class="w3-display-middle w3-display-hover w3-xxlarge w3-button w3-black" onclick="document.getElementById('c10').style.display='block'">Details</div>				
					<p class="w3-padding-24"style="background: #222;">Power Energy Hackathon</p>
				</div>
				<div id="c10" class="w3-modal w3-margin-bottom" style="display:none;">
					<div class="w3-modal-content w3-animate-zoom">
						<div class="w3-container w3-black">
							<span onclick="document.getElementById('c10').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
							<h2>Power Energy Hackathon</h2>
						</div>
						<img  src='cer/c10.jpg' style="width:100%; bottom:5%">
						<div class="w3-container w3-black w3-margin-bottom"></div>
					</div>
				</div>
				
				
				
			</div>		
		</div>
		
		<!-- Contact Section -->
		<div class="w3-padding-64 w3-content w3-text-grey" id="contact">
			<h2 class="w3-text-light-grey">Contact Me</h2>
			<hr style="width:200px" class="w3-opacity">

			<div class="w3-section">
				<p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Uttara, Dhaka</p>
				<p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: +8801681839089</p>
				<p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: joytukhisha@gmail.com</p>
			</div><br>
			<p>Lets get in touch. Send me a message:</p>

			<form action="/action_page.php" target="_blank">
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
				<p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
				<p>
					<button class="w3-button w3-light-grey w3-padding-large" type="submit">
						<i class="fa fa-paper-plane"></i> SEND MESSAGE
					</button>
				</p>
			</form>
		<!-- End Contact Section -->
		</div>

		
			<!-- Footer -->
		<footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
			<i class="fa fa-facebook-official w3-hover-opacity"></i>
			<i class="fa fa-instagram w3-hover-opacity"></i>
			<i class="fa fa-snapchat w3-hover-opacity"></i>
			<i class="fa fa-pinterest-p w3-hover-opacity"></i>
			<i class="fa fa-twitter w3-hover-opacity"></i>
			<i class="fa fa-linkedin w3-hover-opacity"></i>
			<p class="w3-medium">Osthirized By <a href="https://www.joytukhisha99.com"  class="w3-hover-text-red">Joytu Khisha</a></p>
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

function openProject(id) {
    document.getElementById(id).style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeProject(id) {
    document.getElementById(id).style.width = "0";
    document.getElementById("main").style.marginLeft= "120px";
    document.body.style.backgroundColor = "white";
}
function openCert(id) {
    document.getElementById(id).style.width = "100%";
    document.getElementById("main").style.marginLeft = "100%";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

</script>
