<?php
include('config.php');
session_start();

if (isset($_POST['form_hash'])) {
	
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_POST["phone"];

$rndno=rand(100000, 999999);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://108.170.57.10/sendsms/bulksms.php?username=$username&password=$password&type=$type&sender=$sender&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process.",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: b04b5d1c-1164-cc2c-1675-6833c1604270"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  $errMSGs = "Error :" . $err;
} else {
  
$_SESSION['name']=$_POST['name'];
$_SESSION['designation']=$_POST['designation'];
$_SESSION['company_name']=$_POST['company_name'];
$_SESSION['businesssector']=implode(',',$_POST['businesssector']);
$_SESSION['product_details']=$_POST['product_details'];
$_SESSION['email']=$_POST['email'];
$_SESSION['phone']=$_POST['phone'];
$_SESSION['membership_for']=$_POST['membership_for'];
$_SESSION['city']=$_POST['city'];
$_SESSION['state']=$_POST['state'];
$_SESSION['otp']=$rndno;
header( "Location: otp-verify.php" );
}

} else {}
	?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Membership | SME Chamber of India</title>
        <meta name="keywords" content="MEbership of SME Chamber of India, Membership Category, Who Can Apply for Membership ?, Annual Membership (12 Months), Life Membership">
        <meta name="description" content="Small Industries(Turn Over less than Rs 25 crore),Medium Industries (Turn Over Above Rs 25 crore to Rs. 300 crore), Corporate & MNCs (Turn Over above Rs.300 crore), All kinds of Manufacturing firms, Service Industries, Infrastructure, Energy, IT, ICT, Exports, Agro-Based Industries, Logistics, Imports, Distributors, Marketing, Consumer Durables, Auto & Auto Ancillary, Electronics, Electricals, Realty & Construction, Textiles, Metal & Mining, Oil & Gas, Packaging, Paper, Plastic, Printing, Advertisement, Media, Professionals, Law Firms, Tourism, Healthcare, Pharmaceutical, Sports, Retail, Hospitality, Start–Ups, Young & Women entrepreneurs and other registered companies.,Same as above,As per above Industrial & business Sectors, Private Limited, Public Limited, Multinational Companies, Banks & FIs, Co-operative Sector, SEZ, 100% EOUs, Overseas Companies & Organisations Functioning in India & other registered companies.">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css">
        <link rel="stylesheet" href="css/color-shortcodes.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="js/highlighter/shCoreDefault.css"/>
        <link type="text/css" rel="stylesheet" href="js/highlighter/shCore.css"/>
        <script src="js/my_js.js"></script>
        <script src="js/html5.js" type="text/javascript"></script>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-112053032-1');
        </script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script src="js/jquery.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <?php include 'header.php'; ?>
<div id="main">
 <div id="banner" style="height: 75px;">
 <div id="inner-banner">
 <div class="container">
<div class="row-fluid">
<h1 style="text-transform: none;"> Membership</h1>
</div>
</div>
</div>
</div>
<ul class="breadcrumb">
<li><a href="index.php">Home</a></li>
<li>Membership</li>
</ul>
<section class="cp-columns">
<div class="row">
<div class="span10">
<div class="cp-accordion">
<div class="accordion" id="accordion2">
<div class="accordion-group">
<div class="accordion-heading">
 <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
<strong>Membership For Indian Companies</strong>
<span class="open"><i class="fa fa-plus"></i></span></a>
</div>
<div id="collapseTwo" class="accordion-body collapse">
<div class="accordion-inner" >
    <table cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td align="center">
<table width="100%" cellpadding="5" cellspacing="5" border="1" style="border-collapse: collapse;">
<tbody>
<tr style="font-weight:bold;">
<td><b>Sr No.</b></td>
<td style="width:35%;"><P style="text-align: center; color: black;"><b> Membership Categories </b></P></td>
<td style="width:60%;"><P style="text-align: center; color: black;"><b> Who Can Become Member? </b></P> </td>
<!--<td style="width:20%;"><P style="text-align: center;"><b> Annual<br> Membership Fee </b></P> </td>
<td style="width: 20%;"><P style="text-align: center;"><b> Life Membership<br>Fee(10 Year)</b> </P> </td>-->
</tr>
<tr>
    <td><P style="text-align: center;">I</P></td>
    <td><P style="text-align: justify; text-align: center;"><b><u>Silver Category</u></b> <br> Micro Sector
 <br> (Turnover up to Rs. 5 cr)
</P></td>
<td rowspan="4">
<P style="text-align: justify; margin: 5px;">
    <b>Companies</b> from Manufacturing, Automotive, Engineering, Energy, Agro-Based Industries, Electronics, Electricals, Realty, Construction, Textiles & Garments, Metal & Mining, Oil & Gas, Packaging, Paper, Plastic, Printing, Glass, Infrastructure, Capital Goods, Chemicals, Pharmaceutical, Technology and allied manufacturing industries and Service Sector.    
</P>
<p style="text-align: justify; margin: 8px;"> <b>Companies</b> from Exports, Imports, Education,  IT, ICT, Fintech, Tourism, Sports, Retail, Distribution, Franchise, E-commerce, Logistics, Professional Services, Marketing, FMCG, Finance, Advertisement, Exhibitions, Property, Media, Financial, Private Equity, Venture Capital Funds, Research & Credit Rating Agencies, Hospitality, Furniture & Fixtures, Healthcare, Trading, Knowledge  Based Industries and other Allied Service Industries & Business Sectors.  
</p>
<p  style="text-align: justify; margin: 8px;"> <b>Start-Ups,</b> Young & Women Entrepreneurs.</p>
<p style="text-align: justify; margin: 8px;">  <b>Senior Executives</b> of SMEs, Corporates, MNCs, Banking, Insurance and Allied Service Industries & Business Sectors </p>
<!--<p style="text-align: justify; margin: 8px;"> <b>Other registered</b> companies involved in various
business, service & Industrial activities.</p>-->
</td>
<!--<td><P style="text-align: center;">Rs. 10,000/- <br> +GST@18%<br>(Payable Rs. 11,800/-)</P></td>
<td><p style="text-align: center;"><b>By Invitation</b> </p></td>-->
</tr>
<tr>
<td><P style="text-align: center;">II</P></td>
<td><P style="text-align: center;"><b><u>Gold Category</u></b> <br>Small Sector<br>(Turnover from Rs. 5 cr to Rs. 75 cr)
</P></td>
<!-- <td><P>Same as above</P> </td>-->
<!--<td><P style="text-align: center;">Rs. 20,000/- <br> +GST@18%<br>(Payable Rs.23,600/-)</P></td>
<td><p style="text-align: center;">Rs. 1,75,000/- <br> +GST@18%<br>(Payable Rs.2,06,500/-)</p></td>-->
</tr>
<tr>
<td><P style="text-align: center;">III</P></td>
<td><P style="text-align: center;"><b><u>Platinum Category</u></b> <br>Mid-Sized Sector  <br> (Turnover from Rs. 75 cr to 250 cr)
 
    </P></td>
<!-- <td><P> </P></td>-->
<!--<td><P style="text-align: center;">Rs. 40,000/- <br> +GST@18% <br>(Payable Rs. 47,200/-)</P></td>
<td><p style="text-align: center;">Rs. 3,20,000 <br> +GST @18% <br> (Payable Rs. 3,77,600/-)</p></td>-->
</tr> 
<tr>
<td><P style="text-align: center;">IV</P></td>
<td><P style="text-align: center;"><b><u>Diamond Category</u></b> <br> Corporate Sector
 <br> (Turnover over Rs. 250 cr and above)
</P></td>
<!--  <td><P> </P></td>-->
<!--<td><P style="text-align: center;">Rs. 65,000/- <br> +GST@18% <br>(Payable Rs. 76,700/-)</P></td>
<td><p style="text-align: center;"> Rs. 5,75,000 <br> +GST @18% <br>(Payable Rs. 6,78,500/-)</p></td>-->
</tr> 
<tr>
<td><P style="text-align: center;">V</P></td>
<td style="text-align: center;"><P><b><u>Patron Membership</u> </b> <br>By Invitation
</P></td>
<td>
    <p style="text-align: justify; margin: 5px;"> <b>Business Tycoons,</b> Thought Leaders, Senior Executives - MNCs, Corporate, SMEs, Experts, Education Institutes & Other Sectors & Individuals.</p>
<!--    <P> <b style="text-decoration: underline;">Applicable to all above categories & companies </b> <br>
        &#9673; Turnover from Rs. 10 cr to Rs. 50 cr <br>
        &#9673; Turnover from Rs. 50 cr to Rs. 100 cr <br>
        &#9673;	Turnover from Rs. 100 cr to Rs. 200 cr <br>
        &#9673; Turnover from Rs. 200 cr to Rs. 350 cr <br>
    </P>-->
</td>
<!--<td>
    <p style="text-align: justify;">(Membership Fee will be depend on turnover of company, category of Industry & expertise of the person. Membership will be offered for 1 or 5 or 10 years) </p>
</td>-->
<!--<td><P style="text-align: center;">Rs. 1,00,000/- <br> +GST@18% <br>(Payable Rs. 1,18,000/-)</P></td>
<td><p style="text-align: center;"> <b> NA</b></p></td>-->
 </tr> 
<!--  <tr>
<td><P style="text-align: center;">VI</P></td>
<td><P style="text-align: center;"><b>Elite Membership</b> <br>for<br> 
International Market
</P></td>
<td><P> <b style="text-decoration: underline;">Applicable to all above categories & companies  </b> <br>
        &#9673; Turnover from Rs. 25 cr to Rs. 75 cr <br>
        &#9673; Turnover from Rs. 75 cr to Rs. 200 cr <br>
        &#9673;	Turnover from Rs. 200 cr to Rs. 350 cr <br>
        &#9673; Turnover above Rs. Rs. 350 cr <br>
    </P></td>
<td><P style="text-align: center;">Rs. 3,00,000/- <br>+GST@18% <br>(Payable Rs. 3,54,000/-)</P></td>
<td><p style="text-align: center;"><b> NA </b></p></td>
</tr> -->
</tbody>
</table>
</td>
</tr>
<tr>
<td style="height:15px;">&nbsp;</td>
</tr>
</table>
<div id="popup_india">
<!-- Popup Div Starts Here -->
<div id="popupContact">
<!-- Contact Us Form -->
<form action="DownloadMembershipformemail.php" id="form" method="post" name="form">
    <img id="close" src="images/close-icon.png" onclick ="div_hide_india()"> 
    <h2 style="text-transform: none; margin: auto; padding: initial; border-bottom: none;">Download Membership Form</h2>
<hr>
<input id="name" name="name" placeholder="Name" type="text">
<input type="text" id="companyname" name="companyname" placeholder="Company Name">
<input id="designation" name="designation" placeholder="Designation" type="text" >
<input type="text" id="mobilenumber" name="mobilenumber" placeholder="Mobile Number" >
<input id="email" name="email" placeholder="Email" type="text">
<div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
<!--<input type="hidden" name="redirect_page_id" id="redirect_page_id" value ="null"/> -->
<!--<textarea id="msg" name="message" placeholder="Message"></textarea>-->
<a href="javascript:%20check_empty()" id="submit">Send</a>
</form>
</div>
<!-- Popup Div Ends Here -->
</div>
<div>
<!--    <p align="center" style="color: DimGrey;"><b><u>Download Membership Form </u></b></p><br>-->


<!--<p style="text-align: center;"><b style="font-size: 1.3em;">For Indian Companies:</b> 
    <button> 
        <a href="files/Membership-Form-SME-Chamber-of-India.doc" download="Membership-Form-SME-Chamber-of-India" style="color: white;"> Download Form 
    <img src="images/Word.png" style="padding-left: 16%" />
    </a> 
    </button>-->
    <!--<button id="popup" onclick="div_show_india()">
    <a href="DownloadMembershipform.php" style="color: white;">  Apply for Membership
    <img src="images/Word.png" style="padding-left: 16%" />
    </a>
    </button>-->

    <p style="text-align: center;">
		
<!--    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="popup" onclick="div_show()">Download pdf</button>-->
    
<!--<a href="DownloadMembershipform.php">
    <img src="images/pdf-icon.png" style="padding-left: 2%" /> </a>-->
</p>
<hr>
<!--
<div class='pm-button' style="text-align: center;">
    <a href='https://www.payumoney.com/paybypayumoney/#/BFC84211FED6DFAF17518E93B94F107A'>
        <img src='https://www.smechamberofindia.com/images/Join_Now_Button.png'/>
    </a>
</div>
-->
</div>
</div>
</div>
</div>
<div class="accordion-group">
<div class="accordion-heading"> 
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
<strong>Membership For Overseas Companies</strong>
<span class="open"><i class="fa fa-plus"></i></span>
</a> 
</div>
<div id="collapseThree" class="accordion-body collapse">
<div class="accordion-inner">
    <table cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td align="center">
<table width="100%" cellpadding="5" cellspacing="5" border="1" style="border-collapse:collapse;">
<tbody>
<tr style="font-weight:bold;">
<td><b>Sr No.</b></td>
<td style="width:30%;"><b>Membership Category</b> </td>
<td style="width:65%;"><b>Who Can Apply for Membership ?</b> </td>
<!--<td style="width:50%;"><P>Annual Membership Fee</P> </td>-->
</tr>
<tr>
<td><P>1.</P></td>
<td><P>SMEs</P></td>
<td><P>Small & Medium Manufacturers, Exporters, Importers, Buying or Selling Agents, Distributors, Suppliers, Service Providers, Consulting Companies, Professionals, Start-Ups, Individuals Entrepreneurs, Marketing & Exhibitions Organisers </P></td>
<!--<td><P>USD 1000</P></td>-->
</tr>
<tr>
<td><P>2</P></td>
<td><P>Corporate</P></td>
<td><P>Public Limited & Multinational Companies, Overseas Banks & Financial Institutions and International Business Organisations </P> </td>
<!--<td><P>USD 2000</P></td>-->
</tr>
<tr>
<td><P>3.</P></td>
<td><P>Patron Membership<br>(By invitation)</P></td>
<td><P>Individual or senior executive of corporate / FIIs / MNCs / Trade Promotion organisations / Retired government official / Venture Capital or Private Equity Fund / Technocrats / Educationist</P></td>
<!--<td><P>USD 5000</P></td>-->
</tr> 
<tr>
<td><P>4.</P></td>
<td><P>Associate Organisation
</P></td>
<td><P>Chamber of Commerce, Associations, Government Agencies, NGOs and Other International Organisations</P></td>
<!--<td><P>USD 1000</P></td>-->
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="height:15px;">&nbsp;</td>
</tr>
</table>
<!--<div>
<p align="center" style="color: DimGrey;"><u>Download Membership Form</u></p><br>
<p style="padding-left: 20%"><b style="font-size: 1.3em;">For Overseas:</b>
<a href="./files/Membership_Form_of_Chamber_Overseas.doc" download >
    <img src="images/Word.png" style="padding-left: 16%" /></a>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="./files/Membership_Form_of_Chamber_Overseas.pdf" download>
    <img src="images/pdf-icon.png" style="padding-left: 2%" /></a>
</p>
</div>-->
<div id="popup_overseas" >
<!-- Popup Div Starts Here -->
<div id="popupContact1">
<!-- Contact Us Form -->
<form action="DownloadOverseasmembershipemail.php" id="form1" method="post" name="form1">
    <img id="close" src="images/close-icon.png" onclick ="div_hide_overseas()">
    <h2 style="text-transform: none; margin: auto; padding: initial; border-bottom: none;">Download Membership Form</h2>
<hr>
<input id="name1" name="name" placeholder="Name" type="text">
<input type="text" id="companyname1" name="companyname" placeholder="Company Name">
<input id="designation1" name="designation" placeholder="Designation" type="text" >
<input type="text" id="mobilenumber1" name="mobilenumber" placeholder="Mobile Number" >
<input id="email1" name="email" placeholder="Emai" type="text">
<div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
<!--<input type="hidden" name="redirect_page_id" id="redirect_page_id" value ="null"/>-->
<!--<textarea id="msg" name="message" placeholder="Message"></textarea>-->
<input type="submit" value="Send" id="submit1">
<!--<a href="javascript:%20check_empty1()" id="submit1">Send</a> -->
</form>
</div>
<!-- Popup Div Ends Here -->
</div>

    <div>
    <!--<p align="center" style="color: DimGrey;"><b><u>Download Membership Form </u></b></p><br>

<p style="text-align: center;"><b style="font-size: 1.3em;">For Overseas Companies:</b>
    <button> 
        <a href="files/Membership-Form-of-Chamber-Overseas.doc" download="Membership-Form-of-Chamber-Overseas" style="color: white;"> Download Form 
    <img src="images/Word.png" style="padding-left: 16%" />
    </a> 
    </button>-->
    <!--<button id="popup" onclick="div_show_overseas()">
    <a href="DownloadMembershipform.php" style="color: white;"> Apply for Membership Form
    <img src="images/Word.png" style="padding-left: 16%" />
    </a>
    </button>-->
<!--    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="popup" onclick="div_show()">Download pdf</button>-->
    
<!--<a href="DownloadMembershipform.php">
    <img src="images/pdf-icon.png" style="padding-left: 2%" /> </a>-->
</p>
</div>
   
    
</div>
</div>
</div>
    
    
<div class="accordion-group">
<div class="accordion-heading"> 
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefour">
<strong>Membership For Financial & Allied Institutions</strong>
<span class="open"><i class="fa fa-plus"></i></span>
</a> 
</div>
<div id="collapsefour" class="accordion-body collapse">
<div class="accordion-inner">
    
<table cellpadding="0" cellspacing="0" width="100%">
<tbody>
<tr>
<td align="center">
<table width="100%" cellpadding="5" cellspacing="5" border="1" style="border-collapse:collapse;">
<tbody>
<tr style="font-weight:bold;">
<!--<td><b>Sr No.</b></td>-->
<td style="width:1%;"><b>Membership Category</b> </td>
<td style="width:60%;"><b>Who Can Apply for Membership ?</b> </td>
<!--<td style="width:50%;"><P>Annual Membership Fee</P> </td>-->

</tr>
<tr>
<td><P>A</P></td>
<td><P> NBFCs, Investment Bankers, Financial Consultants, PE /VC Funds,
Co-operative Banks, Assets Restructuring Companies, Rating
Agencies, Credit Information Bureaus, Fintech Companies</P></td>
<!--<td><P>USD 1000</P></td>-->
</tr>
<tr>
<td><P>B</P></td>

<td><P>Public Sector Banks / Nationalised Banks </P> </td>
<!--<td><P>USD 2000</P></td>-->
</tr>
<tr>
<td><P>C</P></td>
<td><P>Foreign Banks</P></td>
<!--<td><P>USD 5000</P></td>-->
</tr> 
<tr>
<td><P>D</P></td>
<td><P>Private Banks</P></td>
<!--<td><P>USD 1000</P></td>-->
</tr>
</tbody>
</table>
</td>
</tr>
<tr>
<td style="height:15px;">&nbsp;</td>
</tr>
</table>
<!--<div>
<p align="center" style="color: DimGrey;"><u>Download Membership Form</u></p><br>
<p style="padding-left: 15%"><b style="font-size: 1.3em;">For Financial & Allied Institutions:</b>
    <a href="./files/Membership Form - SME Chamber of India (FIs).doc" download >
        <img src="images/Word.png" style="padding-left: 8%" /></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="./files/Membership Form - SME Chamber of India (FIs).pdf" download>
        <img src="images/pdf-icon.png" style="padding-left: 2%" /></a>
</p>
</div>-->
    
<div id="popup_finance" >
<!-- Popup Div Starts Here -->
<div id="popupContact2">
<!-- Contact Us Form -->
<form action="download-email-fis.php" id="form2" method="post" name="form2">
    <img id="close" src="images/close-icon.png" onclick ="div_hide_finance()">
    <h2 style="text-transform: none; margin: auto; padding: initial; border-bottom: none;">Download Membership Form</h2>
<hr>
<input id="name2" name="name" placeholder="Name" type="text">
<input type="text" id="companyname2" name="companyname" placeholder="Company Name">
<input id="designation2" name="designation" placeholder="Designation" type="text" >
<input type="text" id="mobilenumber2" name="mobilenumber" placeholder="Mobile Number" >
<input id="email2" name="email" placeholder="Email" type="text">
<div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div> 
<!--<input type="hidden" name="redirect_page_id" id="redirect_page_id" value ="null"/>-->
<!--<textarea id="msg" name="message" placeholder="Message"></textarea>-->
<input type="submit" value="Send" id="submit2" />
<!--<a href="javascript:%20check_empty2()" id="submit2">Send</a>-->
</form>
</div>
<!-- Popup Div Ends Here -->
</div>

     <div>
  <!--<a href="DownloadMembershipform.php">  <p align="center" style="color: DimGrey;"><b><u>Download Membership Form </u></b></p></a><br>

<p style="text-align: center;"><b style="font-size: 1.3em;">For Financial & Allied Institutions:</b>
      <button> 
          <a href="files/Membership-Form-SME-Chamber-of-India-(FIs).doc" download="Membership-Form-SME-Chamber-of-India-(FIs)" style="color: white;"> Download Form 
    <img src="images/Word.png" style="padding-left: 16%" />
    </a> 
    </button>-->
    <!--<button id="popup" onclick="div_show_finance()"> 
    <a href="DownloadMembershipform.php" style="color: white;">  Apply for Membership
    <img src="images/Word.png" style="padding-left: 16%" />
    </a>
    </button>-->
<!--    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <button id="popup" onclick="div_show()">Download pdf</button>-->
    
<!--<a href="DownloadMembershipform.php">
    <img src="images/pdf-icon.png" style="padding-left: 2%" /> </a>-->
</p>
</div> 
    
</div>
</div>
</div>  





<div class="accordion-group">
<div class="accordion-heading"> 
<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive">
<strong>Membership Form</strong>
<span class="open"><i class="fa fa-plus"></i></span>
</a> 
</div>
<div id="collapsefive" class="accordion-body collapse">
<div class="accordion-inner">

<?php include("membership-form.php");?> 
 
</div>
</div>
</div>  




</div>
</div>
</div>
</div>
    </section>
</div>
        </div>

 <?php include 'footer.php';   ?>
        
        <!--  footer   -->

<script src="js/bootstrap.js" type="text/javascript"></script>
<script src="js/jquery.plugin.js"></script>
<script src="js/jquery.countdown.js"></script>
<script src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery-filterable.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript" src="js/highlighter/shCore.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushJScript.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushXml.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushPhp.js"></script>
<script type="text/javascript" src="js/prettyphotto.html"></script>
<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>

</html>
