<?php 
//error_reporting(E_ALL ^ E_NOTICE); 
session_start();
?>
<!DOCTYPE html>
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
	<meta name="facebook-domain-verification" content="hu818ivztdrfhxx2py9t0xof3g6oir" />
	
	<!--meta name="description" content="ASP Consultants">
	<meta name="author" content="Saru"--> 
	<title>MJR-North Park</title>
	
	<link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
	<!-- CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
	
	
	<!-- jQuery and JS bundle w/ Popper.js -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
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
    background-color: #a78132;
    border-color: #eea236;
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

<?php

$get_string = $_POST["querystring"];
echo $get_string;
parse_str($get_string, $get_array);
print_r($get_array);


    if ($get_array['utm_source']=="Facebook" or $get_array['utm_source']=="facebook"){    
        $remarks="facebook"; 
		$channel="_FB";
		$src="Facebook ads";
		$USOURCE = "FSource";
		$UMEDIUM="FMedium";
		$utm_campaign="Facebook";
		$utm_medium=$get_array['utm_medium'];
		$utm_campaign=$get_array['utm_campaign'];
		$utm_term="";
		//$utm_content=$get_array['utm_content'];
		//$tracker_code=$get_array['tracker_code'];
		
	} 
	
	if ($get_array['utm_source']=="Google" or $get_array['utm_source']=="google"){  
        $remarks=  "google"; 
		$channel="_Google";
		$src="Google ads";
		$USOURCE = "GSource";
		$UMEDIUM="GMedium";
		$utm_campaign="Google";
		$utm_medium=$get_array['utm_medium'];
		$utm_campaign=$get_array['utm_campaign'];
		$utm_term="";
		//$utm_content=$get_array['utm_content'];		
		//$tracker_code=$get_array['tracker_code'];
    } 
	if ($get_array['utm_source']=="" or $get_array['utm_source']==" "){ 
        $remarks=  "Sparkior Media Landing Page";
		$channel="_LP";
		$src="Website Ads";
		$USOURCE = "LPSource";
		$UMEDIUM="WebMedium";
		$utm_campaign="LP";		
		$utm_medium='';
		$utm_campaign='Website';
		$utm_term="";
		//$utm_content='';		
		//$tracker_code='';
    } 

?>

<?php

$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile")); 
 
if($isMob){ 
    $userdevice="mobile";
}else{ 
    $userdevice="desktop";
}
?>	

<?php	

	echo "<br>";
	echo $_POST['username'] . "<br>";
	echo $_POST['userphone'] . "<br>";
	echo $_POST['useremail'] . "<br>";
	echo $_POST['userfrom'] . "<br>";
	echo $_POST['userdevice'] . "<br>";
?>

<?php 
	$username = $_POST['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$userphone = $_POST['userphone'] = isset($_POST['userphone']) ? $_POST['userphone'] : '';	
	$useremail = $_POST['useremail'] = isset($_POST['useremail']) ? $_POST['useremail'] : '';	
	$userfrom = $_POST['userfrom'] = isset($_POST['userfrom']) ? $_POST['userfrom'] : '';	
	$usermessage = $_POST['usermessage'] = isset($_POST['usermessage']) ? $_POST['usermessage'] : '';	
	$userdevice = $userdevice;	
?>


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

<section class="sectiongap" style="background: url('images/conf-bg.jpg') center; background-size: cover; background-attachment: fixed; height:550px; padding-top:100px;">
<div class="container"><Br><Br>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12"><br>
				
				<h2 class="font-weight-bold text-center fonttangerine-big" style="color:#fff;">Thank you!!</h2>
				<div class="section-subtitle relative" style="color: #fff;">
						<div style="display:relative;">
							<div class="linebreak img-fluid text-center" style="display:relative;"></div>
						</div>
				</div>		
				<div class="text-info text-center">
					<h4 style="color:#fff;">Your request is received.</h4><br>
					<p style="color:#fff;">We will get in touch with you to assist you better.</p>
					<div id="result"></div>
				</div>	
				<div class="text-info text-left">

				</div><br>				
				
        </div>	
     </div>
</div> 
</section>			

		
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



<?php
$api_url = 'https://lead.anarock.com/api/v0/LandingPage/sync-lead'; // STAGING OR PRODUCTION URL
$key = '97548e3de8f0d07c';
$current_time = time();
$message = (string)$current_time;

// to lowercase hexits
$hash = hash_hmac('sha256', $message, $key);

// you can use libraries like https://github.com/brick/phonenumber to format numbers before sending
//$number = PhoneNumber::parse('+447123456789'); // phone number of the lead with +
$country_code = 'IN'; // GB
//$phone = $number->getNationalNumber(); // 7123456789

$campaign_id = "mjr_lp"; // String to Attribute the lead to specific project. contact ANAROCK team for this.

$postFields  = "";
$postFields  = "&channel_name=LandingPage";
$postFields .= "&name=".$username; // refer to query parameters section on left section
$postFields .= "&email=".$useremail;
$postFields .= "&source=".$remarks;
$postFields .= "&purpose=buy";
$postFields .= "&sub_source=sparkior_media";
$postFields .= "&placement=".$utm_term;
$postFields .= "&current_time=".$current_time;
$postFields .= "&phone=".$userphone; // Phone number without country code
$postFields .= "&country_code=".$country_code; // Standard ISO3166-1 alpha-2 code for a country.
$postFields .= "&campaign_id=".$campaign_id;
$postFields .= "&hash=".$hash; // its mandatory to create hash using same timestamp as sent in current_time parameter

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$api_url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$server_output = curl_exec ($ch);
print_r($server_output);	
return $server_output;

?>

<?php 

	
	$to = "info@mjr-northpark.com";
	$subject = "MJR North - Enquiry";
	$txt = "Enquiry Source : " .$userfrom . "\r\n";
	$txt = $txt . "Name  : " .$username . "\r\n";
	$txt = $txt . "Phone  : " .$userphone . "\r\n";
	$txt = $txt . "Email : " .$useremail . "\r\n";
	$txt = $txt . "Campaign  : " .$remarks . "\r\n";
	$txt = $txt . "User Device  : " .$userdevice . "\r\n";
	$headers = "From: info@mjr-northpark.com" . "\r\n";

	mail($to,$subject,$txt,$headers);

	//mail end

?>

<?php 	
	//crm start
		
	$servername = "213.171.200.63";
	$username = "realtyasp";
	$password = "Karthisha@123!";
	$dbname = "realtyasp";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	//----------------------//
	// datetime
	$datetime = date_create()->format('Y-m-d H:i:s');


	// IP address
		function getIPAddress() {  
		//whether ip is from the share internet  
		 if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
					$ip = $_SERVER['HTTP_CLIENT_IP'];  
			}  
		//whether ip is from the proxy  
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
					$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
		 }  
	//whether ip is from the remote address  
		else{  
				 $ip = $_SERVER['REMOTE_ADDR'];  
		 }  
		 return $ip;  
	}  

	$ip = getIPAddress();  

	//query string
		if(isset($_SESSION["remarks"]) === true && $_SESSION["remarks"] === '') {
		
			$_SESSION["remarks"]="";
		
		}
		else {
		
			$_SESSION["remarks"]=$_SESSION["remarks"];
		 
		}
	
	$username = $_POST['username'] = isset($_POST['username']) ? $_POST['username'] : '';
	$userphone = $_POST['userphone'] = isset($_POST['userphone']) ? $_POST['userphone'] : '';	
	$useremail = $_POST['useremail'] = isset($_POST['useremail']) ? $_POST['useremail'] : '';	
	$userfrom = $_POST['userfrom'] = isset($_POST['userfrom']) ? $_POST['userfrom'] : '';	
	$usermessage = $_POST['usermessage'] = isset($_POST['usermessage']) ? $_POST['usermessage'] : '';
	
	
	$sql = "INSERT INTO geolocation (fmdate, ip_address, username, userphone, useremail, userfrom, usermessage, remarks, website, userdevice)
	VALUES ('".$datetime."', '".$ip."', '".$username."', '".$userphone."', '".$useremail."', '".$userfrom."', '".$usermessage."', '".$_SESSION["remarks"]."','".$_SERVER['SERVER_NAME']."', '". $userdevice."')";
	if ($conn->query($sql) === TRUE) {
	  echo "Thank you!";
	} else {
	  echo "Error:" . $conn->error;
	}

	$conn->close();
	//crm end
	$_SESSION["newsession"]="no";
?>		

<div id="result"></div>

</body>
</html>