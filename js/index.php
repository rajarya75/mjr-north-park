<!DOCTYPE html>
<?php 
//error_reporting(E_ALL ^ E_NOTICE); 
session_start();
?>
<?php header("Access-Control-Allow-Origin: *"); ?>

<html>
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T8ZV5FJW');</script>
<!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="facebook-domain-verification" content="wagzs0kjjd5qx28v8wxfx7u2453rs5" />
	
	<!--meta name="description" content="ASP Consultants">
	<meta name="author" content="Saru"--> 
	<title>MJR-North Park</title>
	
	<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
	
	<!-- CSS only -->
	<!-- CSS only -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css"> 
<style>
@media only screen and (min-width: 992px) {
  .navbar .navbar-nav .nav-item .nav-link {
    padding-right: 20px;
	padding-top:0px;
	padding-bottom:0px;
	text-align:center;
  }
  .navbar .navbar-nav .nav-item:not(:last-child) .nav-link {
   
	border-right: 1px solid gray;
  }
}
.navbar-nav{
	padding-left:30px;
}
#navbarNav {
	padding-left:300px;
	
}
html, body {
  max-width: 100%;
  overflow-x: hidden;
}
.logo {
 position: fixed;
 display: inline;
 top:5px;
}
.table td, .table th {
	padding:5px;
}
ul, li {
	line-height:32px;
}

@media (max-width: 500px) {
	#navbarNav {
		padding-top:25px;
		padding-left:5px;
		
	}
}
// zoom css start
@-webkit-keyframes zoom {
  from {
    -webkit-transform: scale(1, 1);
  }
  to {
    -webkit-transform: scale(1.03, 1.03);
  }
}

@keyframes zoom {
  from {
    transform: scale(1, 1);
  }
  to {
    transform: scale(1.03, 1.03);
  }
}

.carousel-inner .carousel-item div > img {
  -webkit-animation: zoom 10s;
  animation: zoom 10s;
}
// zoom css end

.buttoncolor {
    color: #fff;
    background-color: #1fae58;
    border-color: #fff;
}		
</style>	
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '422753480325668');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=422753480325668&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T8ZV5FJW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<section style="padding-bottom:0px;">
<nav class="navbar navbar-nav fixed-top navbar-expand-lg navbar-expand-md navbar-light bg-lignt" style="background-color:#fff; height:90px;">
<div class="container-fluid">
	<div class="pull-left logo-wrapper">
  <a class="navbar-brand logo" href="index.php" style="padding-right:10px;">
    <img data-event-category="header" data-event-action="click" data-event-name="logo" src="images/logo.svg" width="250px"  alt="" loading="lazy">
  </a>
	</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="border-color:#a78132 !important; color:#000 !important;">
    <span class="navbar-toggler-icon" style="color:#000;"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav  ml-auto navfont ">
      <li class="nav-item active">
        <a class="nav-link navfont" href="#">&nbsp; <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link navfont" href="#overview">Overview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link navfont" href="#configuration">Configuration</a>
      </li>	  
      <li class="nav-item">
        <a class="nav-link navfont" href="#highlights">Highlights</a>
      </li>		  
      <li class="nav-item">
        <a class="nav-link navfont" href="#gallery">Gallery</a>
      </li>		  
      <li class="nav-item">
        <a class="nav-link navfont" href="#amenities">Amenities</a>
      </li>
      <!--li class="nav-item">
        <a class="nav-link navfont" href="#plan">Master Plan</a>
      </li-->	  	 	  
      <li class="nav-item">
        <a class="nav-link navfont" href="#location">Location</a>
      </li>	  
      <!--li class="nav-item">
        <a class="nav-link navfont" href="#about">About</a>
      </li-->	  	  	 
    </ul> 	
		<span class="navbar-text" style="float:right;">
		 <img src="images/group_logo.png" style="width:50px;">
		</span>		
  </div>  

</div>  
</nav>
</section>


<section id="home" class="slider-section">
<div class="container-fluid">
<div class="row justify-content-center" style="padding-top:50px;"><Br><Br>
<div class="col-lg-11 col-md-11 col-sm-12">	
<!--div class="sticky-top position-absolute text-center" style="top:135px; color:#c3945d; background-color:rgba(0, 0, 0, 0.3); padding:5px;">
<img src="assets/images/offer.png" width="150px;">
</div-->	
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>

  </ol>
  <div class="carousel-inner" style="position:relative !important; margin-top:60px;">	
<!--div class="sticky-top position-absolute text-center" style="top:5px; color:#c3945d; background-color:rgba(0, 0, 0, 0.3); padding:5px;">
<img src="assets/images/promo.png" width="150px;">
</div-->
    <div class="carousel-item  active">
		<div class="d-none d-lg-block d-md-block d-sm-none d-xs-none">
		  <img class="w-100" src="images/banner1.jpg" alt="First slide">
		</div>
		<div class="d-lg-none d-md-none d-sm-block d-xs-block">	
		  <img class="w-100 zoomimg" src="images/banner1-m.jpg" alt="First slide">
		</div>  
		  <!--div class="carousel-caption" style="background: rgba(000, 54, 54, 0.4); bottom:0px;">
			<h2 STYLE="COLOR:#FFF">Studio, 2 BHK & 3 BHK</h2>
		  </div-->	  
    </div>	  
    <div class="carousel-item ">
		<div class="d-none d-lg-block d-md-block d-sm-none d-xs-none">
		  <img class="w-100" src="images/banner2.jpg" alt="First slide">
		</div>
		<div class="d-lg-none d-md-none d-sm-block d-xs-block">	
		  <img class="w-100 zoomimg" src="images/banner2-m.jpg" alt="First slide">
		</div>  
		  <!--div class="carousel-caption" style="background: rgba(000, 54, 54, 0.4); bottom:0px;">
			<h2 STYLE="COLOR:#FFF">Studio, 2 BHK & 3 BHK</h2>
		  </div-->	  
    </div>		
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>	

	<div class="row  justify-content-center">
	<div class="col-lg-12 col-md-12 text-center" style="background-color:#fff;">
		<!--h2 style="padding-top:10px;color:#000; font-size:1.5em !important; font-weight:600; margin-bottom:-20px;" class="ml2"> <BR>1 BHK, 2 BHK & 3 BHK</h2><br-->
		<!--small style="color:#fff; font-size:1.2rem;"> &#8741;&nbsp; Market price - 8500 / sq.ft | Festive price - 7900 /sq.ft (save upto Rs. 20 Lacs.)&nbsp; &#8741;</small><br-->
		<!--div class="d-none d-lg-block d-md-block d-sm-none d-xs-none"><small  style="color:#000; font-size:1.4rem;font-weight:500;"> &#8741;&nbsp; Starting from &#8377;  32.5 Lakhs* &nbsp; &#8741;</small><br></div-->
		<!--div class="d-lg-none d-md-none d-sm-block d-xs-block" ><small style="color:#000; font-size:1.4rem;font-weight:500;"> &#8741;&nbsp; Starting from &#8377;  32.5 Lakhs* </small><br></div-->
		<!--small style="color:#000; font-size:1.4rem;"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp; <b>Bagalur, North Bengaluru.</b></small><Br-->
		<!--small style="color:#fff; font-size:1.4rem; font-weight:500;">&nbsp;RO Received, Immediate Registration</small-->
		
	</div>	
	</div>
	<!--div class="row  justify-content-center">
	<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
		<div class="alert alert-success blink"><blink>Exclusive offer (Price Including Registration, Club Membership & Maintenance for 2 yrs)</blink></div>
		<div class="ml2 text-secondary" style="font-size:1.5em;">Off Bannergatta Road</div>
	</div>
	</div-->
</div>	
</section>
<br><Br>

<section class="sectiongap" id="overview" style="padding-top:0px !important; background-image:url('images/sectionback.jpg');">
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 text-center">
		<img src="images/about.png" class="img-fluid" style="width:100%; ">
	</div>
	
	<div class="col-lg-6 col-md-6 col-sm-12" style="padding:25px;"><Br>
		<!--p class="fonttangerine-big">Vaswani Exquisite – A piece of sky, in the palm of your hand</p><Br>
		<p>This is what life at the top looks like. The morning sun streams into your bedroom. Brunch by the lake, right on your balcony. Swathes of green, as far as the eye can see. Clouds in your coffee. You got to the top by sheer dint of your hard work. Now, set your standards sky-high for the home you deserve.</p>
		<p>Vaswani Exquisite is your place in the sky. It’s your answer to living right in the middle of the city’s action but elevated above it all. It’s Zen in an apartment!</p><br-->
		<p class="fonttangerine-big">Welcome to a <b>LIFE OF DISTINCTION</b></p><Br>
		<p>
		Welcome to <b>MJR North Park</b>, , where every moment is an elevated living experience. A realm where the evening stars illuminate your doorstep, the clouds become cherished neighbours and the city’s pulse effortlessly blends with the song of nature. With sprawling sky gardens and state-of-the-art amenities creating a breathtaking sky community nestled in the heart of Bagalur, MJR North Park offers you more than just a dream home - it’s the perfect opportunity to elevate your lifestyle, offering more than you ever imagined possible. 
		</p>
		
		<!--p>When you live in Vaswani Exquisite, unmatched luxury meets uncompromising connectivity. Located on ITPL Main Road in Whitefield, these spectacular apartments offer world-class amenities for an ultra-fine living experience with proximity to the best schools, hospitals, metro stations, shopping malls  and offices all within a 5-minute walking distance.</p-->
	</div>
</div>
</div>
</section>

<section class="sectiongap1 d-none d-lg-block d-md-block d-sm-none d-xs-none" style="padding-top:0px !important; background-image:url('images/sectionback1.jpg');">
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12" style="padding:25px; line-height:2em;"><br>
	<p class="fonttangerine-big">Exceptional homes for an elevated life</p><Br>
	<p>
	With one tower and two blocks gracefully standing, <b>MJR North Park</b>  offers 354 meticulously crafted living spaces. From cosy studio apartments to spacious 2 and 3 BHK homes, each unit caters to every facet of your lifestyle.
	</p>
	<!--p>	
		Quiet spaces in your apartment complex clubhouse that are conducive to work. Away from the clatter of cutlery or the screams of squabbling siblings. You can choose to work all day from home, or just take the odd conference call, without any of the familiar interruptions that technology or people can bring!<br><Br>

		<span style="font-weight:600;">Vaswani HomeworX</span> will make your life better in so many ways, but here are the top three:<br>

		<span style="font-weight:600;">Save Space</span>  – HomeworX saves you the trouble (and the space!) of setting up a home office. You can just pop down to the work-friendly clubhouse to finish a bit of work or take a meeting.<br>
		<span style="font-weight:600;">Be Close</span>  – You can do a spot of work late in the evening, reassured by the knowledge that the kids are just minutes away. Pop back home for dinner, tuck them into bed, and get back to work if you need to. <br>
		<span style="font-weight:600;">Work Smart</span>  – Away from the worries of the home – and yet within hollering distance – HomeworX will allow you to focus on your work, and get it done much faster. Double the work, in half the time!<Br><br>
		Enjoy the luxury of uninterrupted modern workspaces from the convenience of your very own community with Vaswani HomeworX		
	
	</p-->
	</div>
	<div class="col-lg-6 col-md-6 col-sm-12 text-center">
		<img src="images/about-2.png" class="img-fluid" style="width:100%;">
	</div>	
</div>
</div>
</section>

<section class="sectiongap1 d-lg-none d-md-none d-sm-block d-xs-block" style="background-color:#F5F5F5;">
<div class="container">
<div class="row">
	<div class="col-lg-6 col-md-6 col-sm-12 text-center">
		<img src="images/about-2.png" class="img-fluid" style="width:100%;">
	</div>	
	<div class="col-lg-6 col-md-6 col-sm-12" style="padding:25px; line-height:2em;"><br>
	<p class="fonttangerine-big">Exceptional homes for an elevated life</p><Br>
	<p>
	With one tower and two blocks gracefully standing, <b>MJR North Park</b>  offers 354 meticulously crafted living spaces. From cosy studio apartments to spacious 2 and 3 BHK homes, each unit caters to every facet of your lifestyle.
	</p>
	<!--p class="fonttangerine-big">Vaswani HomeworX – The New Age Clubhouse. </p-->
	<!--p>	
		Quiet spaces in your apartment complex clubhouse that are conducive to work. Away from the clatter of cutlery or the screams of squabbling siblings. You can choose to work all day from home, or just take the odd conference call, without any of the familiar interruptions that technology or people can bring!<br><Br>

		<span style="font-weight:600;">Vaswani HomeworX</span> will make your life better in so many ways, but here are the top three:<br>

		<span style="font-weight:600;">Save Space</span>  – HomeworX saves you the trouble (and the space!) of setting up a home office. You can just pop down to the work-friendly clubhouse to finish a bit of work or take a meeting.<br>
		<span style="font-weight:600;">Be Close</span>  – You can do a spot of work late in the evening, reassured by the knowledge that the kids are just minutes away. Pop back home for dinner, tuck them into bed, and get back to work if you need to. <br>
		<span style="font-weight:600;">Work Smart</span>  – Away from the worries of the home – and yet within hollering distance – HomeworX will allow you to focus on your work, and get it done much faster. Double the work, in half the time!<Br><br>
		Enjoy the luxury of uninterrupted modern workspaces from the convenience of your very own community with Vaswani HomeworX		
	
	</p-->
	</div>

</div>
</div>
</section>



<section class="sectiongap" id="configuration" style="background: url('images/conf-bg.jpg') center; background-size: cover; background-attachment: fixed; width:100%;"><br>
<div class="container">
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 text-center align-middle" style="background: rgba(000, 54, 54, 0.0); height:100px; line-height:0px!important; padding-top:25px;">
		<h2 class="headertext" style="text-align:left;color:#fff;font-size:30px"> PROJECT CONFIGURATION</h2>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 text-center align-middle" style="background: rgba(000, 54, 54, 0.0); height:80px; line-height:0px!important; padding-top:25px;">
		<table class="table table-dark" style="text-align: left; margin: auto; width: 100%; color:#fff; background: rgba(000, 54, 54, 0.1);border-style: inset; font-size:1.3rem;" border="0">
			<thead class="compact">
				<tr>
					<th style="padding-left:20px;">
						<h5>Type&nbsp;&nbsp;</h5>
					</th>
					<th class="">
						<h5>Area(Sq.Ft.)</h5>
					</th>					
					<th class="text-right" style="padding-right:30px;">
						<h5>Price</h5>
					</th>
				</tr>
			</thead>	
			<tbody>			
			   <tr>
					<td scope="row" style="padding-left:20px;">1 BHK</td>
					<td>430 - 480</td>					
					<td class="text-right">
						<button type="button" class="buttoncolor" data-toggle="modal" data-target="#price" style="padding: 15px !important; background-color: #17a2b8; color:#fff; border : 3px;">Ask Price</button>
					</td>
				</tr>			
			   <tr>
					<td scope="row" style="padding-left:20px;">2 BHK</td>
					<td>1050-1100</td>					
					<td class="text-right">
						<button type="button" class="buttoncolor" data-toggle="modal" data-target="#price" style="padding: 15px !important; background-color: #17a2b8; color:#fff; border : 3px;">Ask Price</button>
					</td>
				</tr>
			   <tr>
					<td scope="row" style="padding-left:20px;">2.5 BHK</td>
					<td>1340</td>					
					<td class="text-right">
						<button type="button" class="buttoncolor" data-toggle="modal" data-target="#price" style="padding: 15px !important; background-color: #17a2b8; color:#fff; border : 3px;">Ask Price</button>
					</td>
				</tr>				
			</tbody>			
		</table>
	</div>	<br><br><Br>&nbsp;

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center d-flex justify-content-center" style="margin-top:160px;"> 
	<div class="text-center d-flex justify-content-center">	
	</div>
	</div>
					
</div>

</div>
</section>

<section class="sectiongap" id="highlights"><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<h2 class="wow slideInDown headertext">PROJECT HIGHLIGHTS</h2>
		<div class="linebreak img-fluid text-center" style="display:relative;"></div>
		<h2>NORTH BENGALURU: An address of the future!</h2>
		</div>	
	</div><Br><Br>
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center headertext centered-thing ">
			<div class="card" style="width: 100%; border:0px; ">
			<div  class="btn btn-info"><h2>JOB MAGNET OF THE FUTURE</h2></div>
			  <div class="card-body text-left">
			  <p class="card-text">
				North Bengaluru is poised to
				add 3,50,000 new jobs by 2025,
				capturing a significant portion of
				overall office absorption, driving
				demand for residential units.
			  </p>
			  </div>
			</div>
		</div>	
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center headertext centered-thing">
			<div class="card" style="width: 100%;  border:0px;">
			<div  class="btn btn-info"><h2>BUSINESS BOOM ON THE HORIZON</h2></div>
			  <div class="card-body text-left">
			  <p class="card-text">
				It’s a thriving ecosystem with
				research and development,
				aerospace, automobile, and
				pharmaceutical industries
				employing over 5,00,000
				personnel, solidifying North
				Bengaluru's status as a
				burgeoning business hub.
			  </div>
			</div>
		</div>		
	</div>	
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center headertext centered-thing ">
			<div class="card" style="width: 100%;  border:0px;">
			<div  class="btn btn-info"><h2>ENHANCED CONNECTIVITY FUELING GROWTH</h2></div>
			  <div class="card-body text-left">
			  <p class="card-text">
				Prime location at the intersection
				of major industrial corridors with
				upcoming infrastructure projects
				like Metro Rail Phase 2B and
				Peripheral Ring Road, will bolster
				connectivity to other IT hubs,
				facilitating seamless movement
				of goods and people.
			  </p>
			  </div>
			</div>
		</div>	
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center headertext centered-thing">
			<div class="card" style="width: 100%;  border:0px;">
			<div  class="btn btn-info"><h2>AIRPORT EXPANSION AND DEVELOPMENT</h2></div>
			  <div class="card-body text-left">
			  <p class="card-text">
				Kempegowda International
				Airport's Terminal 2 expansion
				doubling passenger capacity to
				5-6 crore per annum will attract
				more companies and residents
				to North Bengaluru, driving
				economic growth and real
				estate demand.
			  </div>
			</div>
		</div>		
	</div>	
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center headertext centered-thing ">
			<div class="card" style="width: 100%;  border:0px;">
			<div  class="btn btn-info"><h2>THRIVING INVESTMENT LANDSCAPE</h2></div>
			  <div class="card-body text-left">
			  <p class="card-text">
				Upcoming projects, including the ITIR, Devanahalli Business Park, Aero
				Space Park, Global Financial District and Medical Tourism Hub are set to
				transform North Bengaluru, with a projected cumulative investment of
				`1,15,000 Crore, signaling a promising future for the region.
			  </p>
			  </div>
			</div>
		</div>		
	</div>	
</div>
</section>

<section class="sectiongap" id="gallery" style="background-color:#F5F5F5;"><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<h2 class=" wow slideInDown headertext">PROJECT GALLERY</h2>
		<div class="linebreak img-fluid text-center" style="display:relative;"></div>
		</div>
	</div><br>		
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/01.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/01.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/02.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/02.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/03.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/03.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br>
	
	<!--div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/01.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/01.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/02.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/02.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/03.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/03.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br>	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/04.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/04.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/05.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/05.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/06.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/06.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/07.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/07.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/08.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/08.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/09.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/09.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br>	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/10.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/10.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/11.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/11.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/12.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/12.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/13.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/13.jpg" loading="lazy" width="100%"></a>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/14.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/14.jpg" loading="lazy" width="100%"></a>
		</div>	
		<div class="col-lg-4 col-md-4 col-sm-12">
			<a href="images/gallery/15.jpg" data-lightbox="gallery"><img class="img-fluid" src="images/gallery/15.jpg" loading="lazy" width="100%"></a>
		</div>		
	</div><br-->	
</div>	
</section> 


<section class="sectiongap" id="amenities" style="background-color:#ffffff;"><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
		<h2 class=" wow slideInDown headertext">AMENITIES</h2>
		<div class="linebreak img-fluid text-center" style="display:relative;"></div>
		</div>
		</div>	
	</div>

	<!--marquee behavior="alternate" direction="left" scrollamount="5">
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities1.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">GYM</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities2.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">BADMINTON</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities3.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">CHILDREN PARK</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities4.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">SWIMMING POOL</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities5.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">BASKETBALL COURT</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities6.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">WORKSPACE</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities7.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">GARDEN</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities8.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">POOL TABLE</div></div>
	</div>
	<div style="position: relative; display:inline-block;">
		<img src="images/amenities/amenities9.jpg" style="height:300px;">
		<div style="  position: absolute; bottom: 8px; left: 16px; background-color:#1fae58; color:#fff; padding:0px 10px 0px 10px;"><div class="text-white">PARK</div></div>
	</div>
	</marquee-->
	
<Br><br><br>
	<div class="row">
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/clubhouse.png" width="70px">
			<p class="text-info">Clubhouse</p>
		</div>	
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/muscle.png" width="70px">
			<p class="text-info">Gymnasium</p>
		</div>			
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/motel.png" width="70px">
			<p class="text-info">Multipurpose Hall</p>
		</div>		
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/tennis-court.png" width="70px">
			<p class="text-info">Tennis Court</p>
		</div>		

	</div><br>	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/indoor.png" width="70px">
			<p class="text-info">Indoor Games</p>
		</div>		
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/pool.png" width="70px">
			<p class="text-info">Billiards</p>
		</div>		
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/table-tennis.png" width="70px">
			<p class="text-info">Table Tennis</p>
		</div>	
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/workpod.png" width="70px">
			<p class="text-info">Work Pods</p>
		</div>	

	</div><br>	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/badminton.png" width="70px">
			<p class="text-info">Badminton</p>
		</div>			
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/basketball.png" width="70px">
			<p class="text-info">Basketball Court</p>
		</div>	
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/cricket.png" width="70px">
			<p class="text-info">Cricket Practice Net</p>
		</div>	
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/jogging.png" width="70px">
			<p class="text-info">Jogging Track</p>
		</div>		
			
	</div><br>	
	<div class="row">	
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/children-park.png" width="70px">
			<p class="text-info">Children Play Area</p>
		</div>		
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/park.png" width="70px">
			<p class="text-info">Landscaped Gardens</p>
		</div>			
		<div class="col-lg-3 col-md-3 col-6 text-center">
			<img class="iconcss themebackground1" src="images/amenities/old.png" width="70px">
			<p class="text-info">Walkways</p>
		</div>	
		<div class="col-lg-3 col-md-3 col-6  text-center">
			<img class="iconcss themebackground1" src="images/amenities/cctv-camera.png" width="70px">
			<p class="text-info">24 Hours Security</p>
		</div>	
	</div><br>	
	<div class="row">	
		<div class="col-lg-12 col-md-12 col-12  text-center">
			<p class="text-info">and many more...</p>
		</div>		
	</div><br>	
</div>
</section>



<!--section class="sectiongap" id="walkthrough"><br>
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
		<h2 class=" wow slideInDown headertext">PROJECT VIDEO</h2>
		<div class="linebreak img-fluid text-center" style="display:relative;"></div>
		</div>	
	</div>
	<div class="row justify-content-center" style="text-align: center;">
		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 text-center headertext centered-thing">
			<iframe class="headertext text-center" width="100%" height="600" src="https://www.youtube.com/embed/c3JpE5EF04Y"></iframe>
		</div>	
	</div>	
</div>
</section-->

<!--section id="plan" class="" style="padding:40px 0 40px 0; background-color:#f6f6f6;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 text-center">
				<h2 class=" wow slideInDown headertext">KEY PLAN</h2>
				<div class="linebreak img-fluid text-center" style="display:relative;"></div>
			</div>			
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 card">
				<div class="card card-info">
				<a href="images/plans/master-plan.jpg" data-lightbox="plans"><img class="img-fluid" src="images/plans/master-plan.jpg" loading="lazy" width="100%"></a>
				</div>
			</div>		
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 card">
				<div class="card card-info">
				<a href="images/plans/B3-3-BHK-1815-1.jpg" data-lightbox="plans"><img class="img-fluid" src="images/plans/B3-3-BHK-1815-1.jpg" loading="lazy" width="100%"></a>
				</div>
			</div>		
		</div>
	</div><br>	
</section-->


<section id="location"> <br><Br>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 col-12 text-center">
				<h2 class=" wow slideInDown headertext">LOCATION MAP</h2>
				<div class="linebreak img-fluid text-center" style="display:relative;"></div>
				<p>				
				</p>
			</div>		
			<div class="col-lg-8 col-md-8 col-12 text-center">
				<b>MJR North Park</b>  graces the heart of Bagalur in North Bengaluru. Just a short distance away from the airport, this vibrant community is seamlessly connected to key urban hubs, making daily commutes effortless.<br><br>
			</div>	
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<img src="images/map.png" class="img-fluid" style="width:100%;">
			</div>			
		</div>		
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d248890.58308558355!2d77.3274032!3d12.9131613!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae148e041cd6ef%3A0xaad41fb63f1746ad!2sMJR%20Builders%20Private%20Limited!5e0!3m2!1sen!2sin!4v1707474787340!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>			
		</div>
	</div><br>
</section>


<section class="sectiongap" id="connectivity" style="background-color:#F5F5F5;"><Br><Br>
        <div class="">
            <div class="container text-center">
                <p class="wow slideInDown headertext">Connectivity</p>
				pls provide connectivity info
            <div class="section-subtitle relative" style="color: #fff;">
                    <div style="display:relative;">
						<div class="linebreak img-fluid text-center" style="display:relative;"></div>
					</div>
            </div>
				
                <div style="text-align: center;" class="col-md-12 tbl-holder">
                    <ul class="timeline" id="timeline">

                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-gate"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>Metro <br>  Station</h4>
							<h4>5 mins</h4>
                            </div>
                        </li>			
                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-mall"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>Manipal  <br>Hospital</h4>
							<h4>3 mins</h4>
                            </div>
                        </li>
						
                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-school"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>Nexus  <br>Whitefield Mall </h4>
							<h4>2 mins</h4>
                            </div>
                        </li>
                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-school"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>EPIP <Br>Zone</h4>
							<h4>8 mins</h4>
                            </div>
                        </li>		
                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-school"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>Gopalan <br> Int'l School </h4>
							<h4>5 mins</h4>
                            </div>
                        </li>		
                        <li class="li complete">
                            <div class="timestamp">
                                <div class="locationBox1">
                                    <div class="location-icon">
                                        <span class="flaticon-school"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="status">
							<h4>ITPL <br> </h4>
							<h4>5 mins</h4>
                            </div>
                        </li>						
                    </ul>


                </div>
            </div>
        </div><br><Br>
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-sm-12">
				</div>
			</div>
		</div>
</section>


<!--section id="" style="background-image:url('images/sectionback.jpg');"> <br><Br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 text-center text-white">
				<h2 class=" wow slideInDown headertext">North Bengaluru The Future Of Investments.</h2><Br><Br>
				<p class="d-none d-lg-block d-md-block d-sm-none d-xs-none text-white" align="center" style="font-size:1.4em;"> <img src="images/linenew.png"> &nbsp;  Be at the Forefront of Science, Technology & Innovation&nbsp;<img src="images/linenew.png"></p>
				<p class="d-lg-none d-md-none d-sm-block d-xs-block text-white" align="center" style="font-size:1.2em;">  Be at the Forefront of Science, Technology & Innovation</p>
			</div>			
		</div>
		<div class="row text-white" style="font-size:1.3rem;">
			<div class="col-lg-6 col-md-6 col-sm-12 ">
				PRR (Peripheral Ring Road):<br>
				&bull;&nbsp;&nbsp;&nbsp; The proposed 65km Peripheral Ring road provide a faster alternative route to reach Airport road corridor frm Electonic city,Sarjapur Road & KR Puram.<br><br>

				METRO:<br>
				&bull;&nbsp;&nbsp;&nbsp; Connects from Hebbal to BIAL.
			</div>			
			<div class="col-lg-6 col-md-6 col-sm-12">
				SEZ:<Br>
				&bull;&nbsp;&nbsp;&nbsp; 1st Phase of 215 Acres aerocity coming up in Devanahalli with High tech Infrastrucuture.<Br>
				&bull;&nbsp;&nbsp;&nbsp; 1.5Millin sq ft IT-cum- Shopping complex in Yelahanka.<Br>
				&bull;&nbsp;&nbsp;&nbsp; Various international 5-Star hotels are coming up in the area.<br>
				&bull;&nbsp;&nbsp;&nbsp; Premium 8-Lane National Highway coming up for greater connectivity.<Br>
				&bull;&nbsp;&nbsp;&nbsp; 100 Acres KIADB Industriall hub.
			</div>			

		</div><Br>
	</div><br>
</section-->

<!--section id="about" style="background-image:url('images/sectionback.jpg');"> <br><Br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-12 text-center text-white">
				<h2 class=" wow slideInDown headertext">About Developer</h2><Br><Br>
				<img src="images/group-logo.svg" style="width:100px;">
			</div>			
		</div><br>
		<div class="row text-white" style="font-size:1.3rem;">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center">
				<h2>Over the last 33 years, we have developed residential and commercial real estate across Bangalore, Mumbai, Pune and Goa.</h2><br>
				<p style="color:#fff;">
					In 1985, we embarked on a journey to offer global-standard residential solutions for the discerning home buyer as well as turnkey commercial solutions for Indian and multinational firms. From resplendent housing to upscale commercial, our equity is strengthened with a proven and credible track record having developed close to 8 million square feet of built up area in the verticals of Residential, Commercial, Retail and Hospitality. We are committed to constantly refining our skills with an ever present emphasis on transparency.
				</p>
			</div>					
		</div><Br>
	</div><br>
</section-->


    <footer id="footer" class="wow" style="color:#fff; background-color:#17a2b8;"><br>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8 col-12 text-white text-left">
					RERA NO. ACK/KA/RERA/1251/472/PR/130124/007758<br>
                </div>	
				<div class="col-md-4 col-lg-4 col-12 text-white text-right">
					Project by : MJR Builders<br>
				</div>				
            </div><br>
        </div>
    </footer><br>

<div class="container">
<div class="row fixed-bottom fixed-left position-fixed">	
	<!--div class="col-6 text-left">
			<a class="btn" href="https://api.whatsapp.com/send/?phone=919108447153&amp;text=Hi%21+I%27m+interested+in+Vaswani+Exquisite+Thanks%21&amp;app_absent=0" target="_blank" style="padding:5px;"><img src="images/whatsapp-img.png" width="50px"></a>
	</div-->
	<div class="col-12 text-right">
			<button type="button" class="btn border-animation" data-toggle="modal" data-target="#iaminterested" style="font-size:1.2rem;  background-color: #17a2b8; color: #fff; padding:10px;">I am Interested</button>
	</div>
</div>
</div>

<!--section class="fixed-bottom fixed-right position-fixed" >
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-left">
			one
			<a class="btn btn-info" href="https://api.whatsapp.com/send/?phone=919606772699&amp;text=Hi%21+I%27m+interested+in+Samanvaya+Lotus+Lea+Thanks%21&amp;app_absent=0" target="_blank"><img src="images/whatsapp-img.png" width="25px"></a>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 text-right">
			two
			<button type="button" class="btn border-animation" data-toggle="modal" data-target="#iaminterested" style="font-size:1.2rem;  background-color: #1fae58; color: #fff; padding:10px;">I am Interested</button>
		</div>		
	</div>
	</div>|
</section-->

<!-- form start schedule site visit-->
<form name="contact-form" action="thankyou.php" method="POST">
<div class="modal fade" id="sitevisit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header themebackground">
        <h5 class="modal-title text-white" id="staticBackdropLabel">Schedule a site visit</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<p>Please enter details below:</p>	
				<span class="form-inline">
					<i class="fa fa-user form-ico input-group-text" aria-hidden="true"></i><input type="text" id="username-sitevisit" name="username" class="form-control" placeholder="Your Name" required>	
				</span>
				<span class="form-inline">
					<i class="fa fa-phone form-ico input-group-text" aria-hidden="true"></i><input type="text" id="userphone-sitevisit" name="userphone" class="form-control" placeholder="Your Phone" required>
				</span>
				<span class="form-inline">
					<i class="fa fa-envelope form-ico input-group-text" aria-hidden="true"></i><input type="email" id="useremail-sitevisit" name="useremail" class="form-control" placeholder="Your Email" required>
				</span>
				<span class="form-inline">
					<i class="fa fa-calendar form-ico input-group-text" aria-hidden="true"></i><input type="date" id="userdate-sitevisit" name="userdate" class="form-control" placeholder="dd-mm-yyyy" value="2021-01-01">
				</span>				
				<input type="hidden" id="userfrom" name="userfrom" class="form-control1" value="sitevisit">	
				<input type="hidden" id="querystring" name="querystring" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
      </div>
      <div class="modal-footer" style="justify-content: flex-start">
		<button type="submit" class="btn themebackground text-white" id="button-sitevisit">SEND</button>
        <!--button type="button" class="btn btn-danger" data-dismiss="modal">Close</button-->
		&nbsp;<i class="fas fa-spinner fa-spin fa-2x text-info" style="display:none;"></i>&nbsp;<span id="result-sitevisit" style="color:#fff;"></span>
      </div>
    </div>
  </div>
</div>
</form>
<!-- form end schedule site visit-->
	
<!-- forms start interested-->
<form name="contact-form" action="thankyou.php" method="POST">
<div class="modal fade" id="iaminterested" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header themebackground">
        <h5 class="modal-title  text-white" id="staticBackdropLabel">I'm Interested</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<span class="form-inline">
					<i class="fa fa-user form-ico input-group-text" aria-hidden="true"></i><input type="text" id="username-sitevisit" name="username" class="form-control" placeholder="Your Name" required>	
				</span>
				<span class="form-inline">
					<i class="fa fa-phone form-ico input-group-text" aria-hidden="true"></i><input type="text" id="userphone-sitevisit" name="userphone" class="form-control" placeholder="Your Phone" required>
				</span>
				<span class="form-inline">
					<i class="fa fa-envelope form-ico input-group-text" aria-hidden="true"></i><input type="email" id="useremail-sitevisit" name="useremail" class="form-control" placeholder="Your Email" required>
				</span>
				<input type="hidden" id="userfrom" name="userfrom" class="form-control1" value="interested">
				<input type="hidden" id="querystring" name="querystring" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
      </div>
      <div class="modal-footer text-left" style="justify-content: flex-start">
		<button type="submit" class="btn themebackground text-white" id="button-interested">SEND</button>
        <!--button type="button" class="btn btn-danger" data-dismiss="modal">Close</button-->
		&nbsp;<i class="fas fa-spinner fa-spin fa-2x text-info" style="display:none;"></i>&nbsp;<span id="result-int" style="color:#fff;"></span>
      </div>
    </div>
  </div>
</div>
</form>
<!-- forms end interested-->

<!-- forms start price-->
<form id="contact-price" name="contact-price" action="thankyou.php" method="POST">
<div class="modal fade" id="price" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1"  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header themebackground">
        <h5 class="modal-title text-white" id="staticBackdropLabel">ASK Price</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
			
				<span class="form-inline">
					<i class="fa fa-user form-ico input-group-text" aria-hidden="true"></i><input type="text" id="username-price" name="username" class="form-control" placeholder="Your Name" required>	
				</span>
				<span class="form-inline">
					<i class="fa fa-mobile form-ico input-group-text" aria-hidden="true"></i><input type="text" id="userphone-price" name="userphone" class="form-control" placeholder="Your Phone" required>
				</span>
				<span class="form-inline">
					<i class="fa fa-envelope form-ico input-group-text" aria-hidden="true"></i><input type="email" id="useremail-price" name="useremail" class="form-control" placeholder="Your Email" required>
				</span>
				<input type="hidden" id="userfrom" name="userfrom" class="form-control1" value="price">
				<input type="hidden" id="querystring" name="querystring" value="<?php echo $_SERVER['QUERY_STRING']; ?>">
			
      </div>
      <div class="modal-footer text-left" style="justify-content: flex-start">
		<button type="submit" class="btn themebackground text-white" id="button-price">SEND</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		&nbsp;<i class="fas fa-spinner fa-spin fa-2x text-info" style="display:none;"></i>&nbsp;<span id="result-price" style="color:#fff;"></span>
      </div>
    </div>
  </div>
</div>
</form>
<!-- forms end price-->

<?php
$_SESSION["newsession"]="yes";
$_SESSION["query_string"]=$_SERVER['QUERY_STRING'];
?>


		
	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
	
<script>

$(document).ready(function() {
	//$('#myImage').modal('show');
$('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});	
	
	$('.carousel').carousel({
	  interval: 4000
	});
	
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true
    });

	setTimeout(function() {
		$('#iaminterested').modal('show');
	},10000);	
	
$(document).ready( function() {
    //$('#userdate-sitevisit').val(new Date().toDateInputValue());
	document.getElementById('userdate-sitevisit').value = new Date().toISOString().slice(0, 10);
});
	
});

//$("#button-price").click(function() {
  //$('.fa-spinner').show();
//});
</script>
<script>
// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [3,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 2000
  });
  
</script>	
<script>
function blink_text() {
    $('.blink').fadeOut(500);
    $('.blink').fadeIn(500);
}
setInterval(blink_text, 2000);
</script>

<?php
//echo $_SERVER["QUERY_STRING"];
$_SESSION["remarks"]=$_SERVER['QUERY_STRING'];
$_SESSION["newsession"]="yes";
//echo $_SESSION["userdevice"] .'<br>';
$_SESSION["utm_source"]=$_GET['utm_source'] .'<br>';
//echo $_SESSION["utm_source"];
?>

</body>
</html>