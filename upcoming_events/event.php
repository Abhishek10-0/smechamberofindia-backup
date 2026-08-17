<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];

if (isset($_POST['form_hash'])) {
		
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_POST["phone"];

$rndno=rand(100000, 999999);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://198.15.88.194/sendsms/bulksms.php?username=$username&password=$password&type=$type&sender=$sender&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20SMECHM",
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
  
                $_SESSION['title']=$_POST['title'];
				$_SESSION['f_name']=$_POST['f_name'];
				$_SESSION['l_name']=$_POST['l_name'];
				$_SESSION['company_name']=$_POST['company_name'];
				$_SESSION['designation']=$_POST['designation'];
				$_SESSION['business_activity']=$_POST['business_activity'];
				
				$_SESSION['email']=$_POST['email'];
				$_SESSION['phone']=$_POST['phone'];
				$_SESSION['city']=$_POST['city'];
				$_SESSION['state']=$_POST['state'];
				$_SESSION['country']=$_POST['country'];
				$_SESSION['pincode']=$_POST['pincode'];
				$_SESSION['member_india']=$_POST['member_india'];
				$_SESSION['Membership_no']=$_POST['Membership_no'];
				$_SESSION['fee_types']=$_POST['fee_types'];
				$_SESSION['fee']=$_POST['fee'];
				$_SESSION['optn']=$_POST['optn'];
				$_SESSION['detail']=$_POST['detail'];
				$_SESSION['terms']=$_POST['terms'];
				
				$_SESSION['otp']=$rndno;
				header( "Location: event_verify.php" );
}

} 
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration Form | SME Chamber of India</title>
        <meta name="keywords" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event">
        <meta name="description" content="Event Alert for SME Chamber of India, Event Alert, SME Chamber of India Event, Get detail about SME Chamber of India Event, Event Alert, Notification about upcoming event in  sme chamber of india">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/custom.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="../css/color.css" rel="stylesheet" type="text/css">
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../images/favicon.jpg" type="image/x-icon">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="../css/jquery.bxslider.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="../css/form.css" media="screen"/>
       <link rel="stylesheet" type="text/css" href="../css/form-bootstrap.min.css" />
	
        <link rel="stylesheet" type="text/css" href="../css/base.css" />
        <link rel="stylesheet" type="text/css" href="../css/screen.css" />
        <link rel="stylesheet" type="text/css" href="../css/screen.form.css" />
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen">
        <script src="../js/html5.js" type="text/javascript"></script>
           
     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <style>
		.form_heading {
    background: #004264;
    text-align: center;
    padding: 30px 0;
    margin-bottom: 20px;
	color: #fff;
}
.form_heading h2 {
    /* font-size: 46px; */
    color: #fff;
    margin: 0;
    line-height: 1;
    border-bottom: 4px double #fff;
    display: inline-block;
    padding-bottom: 5px;
    margin-bottom: 5px;
}
.form-control {
    height: 44px
}
input[type="text"]{
	height: 32px;
}
.head{
	
    font-size: 26px;
    color: #004264;
   
}
table.table.table-bordered thead tr th {
    background: #fff;
    border: 6px solid #f6f6f6;
    color: #000;
    padding: 15px 20px;
    text-align: left;
    text-transform: capitalize;
}
table.table.table-bordered tbody tr td {
    background: #fff;
    border: 6px solid #f6f6f6;
    color: #000;
    text-transform: capitalize;
    text-align: left;
    padding: 10px 20px;
}
table.table.table-bordered .radio {
    position: relative;
    display: block;
    margin-top: 5px;
    margin-bottom: 5px;
}
table{
	border: 1px solid #ddd !important;
    padding: 5px;
	padding-top: 10px !important;
}
}
		</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!--<script type="text/javascript">
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-112053032-1');
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->

<script async src="https://www.googletagmanager.com/gtag/js?id=G-3MN4BF7FFJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-3MN4BF7FFJ');
</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '784564702179617');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=784564702179617&ev=PageView&noscript=1"
/></noscript>

<!-- End Facebook Pixel Code -->
    </head>
    <body>
        <div id="wrapper"> 
            <?php include 'header.php'; ?>
            <div id="main">
                <div id="banner" style="height: 75px;">
                    <div id="inner-banner">
                        <div class="container">
                            <div class="row-fluid">
                                <h1 style="text-transform: capitalize;">Registration Form</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="breadcrumb" style="padding-left: 85px;">
                    <li><a href="index.php">Home</a></li>
                    <li>Registration Form</li>
                </ul>
                <section class="membership-form1" >
                    <div class="container" >
                        <div class="row">
						
							<?php
										  if (!empty($successMSG)) {
											echo '<div class="alert alert-success mb-4 alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
												'.$successMSG.'
											</div>';
											}

											if (!empty($errMSGs)) {
											echo '<div class="alert alert-danger mb-4 alert-dismissable">
												<button type="button" class="close" data-dismiss="alert" aria-hidden="true"><button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
												'.$errMSGs.'
											</div>';
											}
										  ?>
										
						<div class="col-md-12">
                            <div style="float:none;margin:auto;padding: 30px;background: #f4f4f4; box-shadow: 0px 1px 20px 1px #ccc;">
							  <div class="form_heading">							
								<h2 style="font-size: 26px;">Karnataka Business Excellence Awards</h2>						

							<p id="event_name_get" style="font-size:21px; margin: 0px;">
							<span>January 21 - 22, 2024
							   </span> | Hotel Taj Lands End, Mumbai (India) 
						    </p>
						   </div>
						<p class="head" style="font-size: 30px; text-align: center;"><u>Registration Form</u></p>
                        <p>Fields marked with a <span class="emp">*</span> are required.</p><br>
								  
							<form action="" method="post">
								<div class="row">
								 <div class="col-md-3">
								  <div class="form-group">
									<label>Title <span class="emp">*</span></label>
									<select class="form-control" name="title" id="title" required>
										<option value="">Select an option...</option>
										
										<option value="Mr"> Mr </option>
										<option value="Mrs"> Mrs </option>
										<option value="Ms"> Ms </option>								
										
									</select>
								  </div>
								 </div>
								 <div class="col-md-4">
								  <div class="form-group">
									<label>First Name <span class="emp">*</span></label>
									<input class="form-control" type="text" name="f_name" class="form-control" placeholder="First Name" required>
								  </div>
								  </div>
								  <div class="col-md-4">
								  <div class="form-group">
									<label>Last Name <span class="emp">*</span></label>
									<input class="form-control" type="text" name="l_name" class="form-control" placeholder="Last Name" required>
								  </div>
								  </div>
								  </div>
								 <div class="row">
								 <div class="col-md-3">
								  <div class="form-group">
									<label>Company Name <span class="emp">*</span></label>
									<input type="text" name="company_name" class="form-control" placeholder="Company Name" required>
								  </div>
								  </div>
								  
								   <div class="col-md-4">
								  <div class="form-group">
									<label>Designation <span class="emp">*</span></label>
									<input type="text" class="form-control" name="designation" placeholder="Designation" required>
								  </div>
								  </div>
								  
								   <div class="col-md-4">
								  <div class="form-group">
									<label>Business Activity <span class="emp">*</span></label>
									<input type="text" class="form-control" name="business_activity" placeholder="Business Activity" required>
								  </div>
								  </div>
								  </div>
								  
								  
								  <div class="row">
								  <div class="col-md-3">
								  <div class="form-group">
									<label>Email <span class="emp">*</span></label>
									<input type="email" style="height: 36px" class="form-control" name="email" placeholder="Email" required>
								  </div>
								  </div>
								  
								  <div class="col-md-4">
								  <div class="form-group">
									<label>Mobile Number <span class="emp">*</span></label>
									<input type="text" class="form-control" name="phone" placeholder="add 91 before 10 digit number" maxlength="12" minlength="12" pattern="\d{12}$" title="Please enter exactly 12 digits" onkeypress="return isNumber(event)" required>
								  </div>
								  </div>
								  
								  <div class="col-md-4">
								  <div class="form-group">
									<label>City <span class="emp">*</span></label>
									<input type="text" class="form-control" name="city" placeholder="City" required>
								  </div>
								  </div>
								  </div>
								  
								  <div class="row">
								  <div class="col-md-3">
								  <div class="form-group">
									<label>State <span class="emp">*</span></label>
									<input type="text" class="form-control" name="state" placeholder="State" required>
								  </div>
								  </div>
								  
								  <div class="col-md-4">
								  <div class="form-group">
									<label>Country <span class="emp">*</span></label>
									<select class="form-control" id="country" name="country">
    <option>select country</option>
    <option value="AF">Afghanistan</option>
    <option value="AX">Aland Islands</option>
    <option value="AL">Albania</option>
    <option value="DZ">Algeria</option>
    <option value="AS">American Samoa</option>
    <option value="AD">Andorra</option>
    <option value="AO">Angola</option>
    <option value="AI">Anguilla</option>
    <option value="AQ">Antarctica</option>
    <option value="AG">Antigua and Barbuda</option>
    <option value="AR">Argentina</option>
    <option value="AM">Armenia</option>
    <option value="AW">Aruba</option>
    <option value="AU">Australia</option>
    <option value="AT">Austria</option>
    <option value="AZ">Azerbaijan</option>
    <option value="BS">Bahamas</option>
    <option value="BH">Bahrain</option>
    <option value="BD">Bangladesh</option>
    <option value="BB">Barbados</option>
    <option value="BY">Belarus</option>
    <option value="BE">Belgium</option>
    <option value="BZ">Belize</option>
    <option value="BJ">Benin</option>
    <option value="BM">Bermuda</option>
    <option value="BT">Bhutan</option>
    <option value="BO">Bolivia</option>
    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
    <option value="BA">Bosnia and Herzegovina</option>
    <option value="BW">Botswana</option>
    <option value="BV">Bouvet Island</option>
    <option value="BR">Brazil</option>
    <option value="IO">British Indian Ocean Territory</option>
    <option value="BN">Brunei Darussalam</option>
    <option value="BG">Bulgaria</option>
    <option value="BF">Burkina Faso</option>
    <option value="BI">Burundi</option>
    <option value="KH">Cambodia</option>
    <option value="CM">Cameroon</option>
    <option value="CA">Canada</option>
    <option value="CV">Cape Verde</option>
    <option value="KY">Cayman Islands</option>
    <option value="CF">Central African Republic</option>
    <option value="TD">Chad</option>
    <option value="CL">Chile</option>
    <option value="CN">China</option>
    <option value="CX">Christmas Island</option>
    <option value="CC">Cocos (Keeling) Islands</option>
    <option value="CO">Colombia</option>
    <option value="KM">Comoros</option>
    <option value="CG">Congo</option>
    <option value="CD">Congo, Democratic Republic of the Congo</option>
    <option value="CK">Cook Islands</option>
    <option value="CR">Costa Rica</option>
    <option value="CI">Cote D'Ivoire</option>
    <option value="HR">Croatia</option>
    <option value="CU">Cuba</option>
    <option value="CW">Curacao</option>
    <option value="CY">Cyprus</option>
    <option value="CZ">Czech Republic</option>
    <option value="DK">Denmark</option>
    <option value="DJ">Djibouti</option>
    <option value="DM">Dominica</option>
    <option value="DO">Dominican Republic</option>
    <option value="EC">Ecuador</option>
    <option value="EG">Egypt</option>
    <option value="SV">El Salvador</option>
    <option value="GQ">Equatorial Guinea</option>
    <option value="ER">Eritrea</option>
    <option value="EE">Estonia</option>
    <option value="ET">Ethiopia</option>
    <option value="FK">Falkland Islands (Malvinas)</option>
    <option value="FO">Faroe Islands</option>
    <option value="FJ">Fiji</option>
    <option value="FI">Finland</option>
    <option value="FR">France</option>
    <option value="GF">French Guiana</option>
    <option value="PF">French Polynesia</option>
    <option value="TF">French Southern Territories</option>
    <option value="GA">Gabon</option>
    <option value="GM">Gambia</option>
    <option value="GE">Georgia</option>
    <option value="DE">Germany</option>
    <option value="GH">Ghana</option>
    <option value="GI">Gibraltar</option>
    <option value="GR">Greece</option>
    <option value="GL">Greenland</option>
    <option value="GD">Grenada</option>
    <option value="GP">Guadeloupe</option>
    <option value="GU">Guam</option>
    <option value="GT">Guatemala</option>
    <option value="GG">Guernsey</option>
    <option value="GN">Guinea</option>
    <option value="GW">Guinea-Bissau</option>
    <option value="GY">Guyana</option>
    <option value="HT">Haiti</option>
    <option value="HM">Heard Island and Mcdonald Islands</option>
    <option value="VA">Holy See (Vatican City State)</option>
    <option value="HN">Honduras</option>
    <option value="HK">Hong Kong</option>
    <option value="HU">Hungary</option>
    <option value="IS">Iceland</option>
    <option value="IN">India</option>
    <option value="ID">Indonesia</option>
    <option value="IR">Iran, Islamic Republic of</option>
    <option value="IQ">Iraq</option>
    <option value="IE">Ireland</option>
    <option value="IM">Isle of Man</option>
    <option value="IL">Israel</option>
    <option value="IT">Italy</option>
    <option value="JM">Jamaica</option>
    <option value="JP">Japan</option>
    <option value="JE">Jersey</option>
    <option value="JO">Jordan</option>
    <option value="KZ">Kazakhstan</option>
    <option value="KE">Kenya</option>
    <option value="KI">Kiribati</option>
    <option value="KP">Korea, Democratic People's Republic of</option>
    <option value="KR">Korea, Republic of</option>
    <option value="XK">Kosovo</option>
    <option value="KW">Kuwait</option>
    <option value="KG">Kyrgyzstan</option>
    <option value="LA">Lao People's Democratic Republic</option>
    <option value="LV">Latvia</option>
    <option value="LB">Lebanon</option>
    <option value="LS">Lesotho</option>
    <option value="LR">Liberia</option>
    <option value="LY">Libyan Arab Jamahiriya</option>
    <option value="LI">Liechtenstein</option>
    <option value="LT">Lithuania</option>
    <option value="LU">Luxembourg</option>
    <option value="MO">Macao</option>
    <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
    <option value="MG">Madagascar</option>
    <option value="MW">Malawi</option>
    <option value="MY">Malaysia</option>
    <option value="MV">Maldives</option>
    <option value="ML">Mali</option>
    <option value="MT">Malta</option>
    <option value="MH">Marshall Islands</option>
    <option value="MQ">Martinique</option>
    <option value="MR">Mauritania</option>
    <option value="MU">Mauritius</option>
    <option value="YT">Mayotte</option>
    <option value="MX">Mexico</option>
    <option value="FM">Micronesia, Federated States of</option>
    <option value="MD">Moldova, Republic of</option>
    <option value="MC">Monaco</option>
    <option value="MN">Mongolia</option>
    <option value="ME">Montenegro</option>
    <option value="MS">Montserrat</option>
    <option value="MA">Morocco</option>
    <option value="MZ">Mozambique</option>
    <option value="MM">Myanmar</option>
    <option value="NA">Namibia</option>
    <option value="NR">Nauru</option>
    <option value="NP">Nepal</option>
    <option value="NL">Netherlands</option>
    <option value="AN">Netherlands Antilles</option>
    <option value="NC">New Caledonia</option>
    <option value="NZ">New Zealand</option>
    <option value="NI">Nicaragua</option>
    <option value="NE">Niger</option>
    <option value="NG">Nigeria</option>
    <option value="NU">Niue</option>
    <option value="NF">Norfolk Island</option>
    <option value="MP">Northern Mariana Islands</option>
    <option value="NO">Norway</option>
    <option value="OM">Oman</option>
    <option value="PK">Pakistan</option>
    <option value="PW">Palau</option>
    <option value="PS">Palestinian Territory, Occupied</option>
    <option value="PA">Panama</option>
    <option value="PG">Papua New Guinea</option>
    <option value="PY">Paraguay</option>
    <option value="PE">Peru</option>
    <option value="PH">Philippines</option>
    <option value="PN">Pitcairn</option>
    <option value="PL">Poland</option>
    <option value="PT">Portugal</option>
    <option value="PR">Puerto Rico</option>
    <option value="QA">Qatar</option>
    <option value="RE">Reunion</option>
    <option value="RO">Romania</option>
    <option value="RU">Russian Federation</option>
    <option value="RW">Rwanda</option>
    <option value="BL">Saint Barthelemy</option>
    <option value="SH">Saint Helena</option>
    <option value="KN">Saint Kitts and Nevis</option>
    <option value="LC">Saint Lucia</option>
    <option value="MF">Saint Martin</option>
    <option value="PM">Saint Pierre and Miquelon</option>
    <option value="VC">Saint Vincent and the Grenadines</option>
    <option value="WS">Samoa</option>
    <option value="SM">San Marino</option>
    <option value="ST">Sao Tome and Principe</option>
    <option value="SA">Saudi Arabia</option>
    <option value="SN">Senegal</option>
    <option value="RS">Serbia</option>
    <option value="CS">Serbia and Montenegro</option>
    <option value="SC">Seychelles</option>
    <option value="SL">Sierra Leone</option>
    <option value="SG">Singapore</option>
    <option value="SX">Sint Maarten</option>
    <option value="SK">Slovakia</option>
    <option value="SI">Slovenia</option>
    <option value="SB">Solomon Islands</option>
    <option value="SO">Somalia</option>
    <option value="ZA">South Africa</option>
    <option value="GS">South Georgia and the South Sandwich Islands</option>
    <option value="SS">South Sudan</option>
    <option value="ES">Spain</option>
    <option value="LK">Sri Lanka</option>
    <option value="SD">Sudan</option>
    <option value="SR">Suriname</option>
    <option value="SJ">Svalbard and Jan Mayen</option>
    <option value="SZ">Swaziland</option>
    <option value="SE">Sweden</option>
    <option value="CH">Switzerland</option>
    <option value="SY">Syrian Arab Republic</option>
    <option value="TW">Taiwan, Province of China</option>
    <option value="TJ">Tajikistan</option>
    <option value="TZ">Tanzania, United Republic of</option>
    <option value="TH">Thailand</option>
    <option value="TL">Timor-Leste</option>
    <option value="TG">Togo</option>
    <option value="TK">Tokelau</option>
    <option value="TO">Tonga</option>
    <option value="TT">Trinidad and Tobago</option>
    <option value="TN">Tunisia</option>
    <option value="TR">Turkey</option>
    <option value="TM">Turkmenistan</option>
    <option value="TC">Turks and Caicos Islands</option>
    <option value="TV">Tuvalu</option>
    <option value="UG">Uganda</option>
    <option value="UA">Ukraine</option>
    <option value="AE">United Arab Emirates</option>
    <option value="GB">United Kingdom</option>
    <option value="US">United States</option>
    <option value="UM">United States Minor Outlying Islands</option>
    <option value="UY">Uruguay</option>
    <option value="UZ">Uzbekistan</option>
    <option value="VU">Vanuatu</option>
    <option value="VE">Venezuela</option>
    <option value="VN">Viet Nam</option>
    <option value="VG">Virgin Islands, British</option>
    <option value="VI">Virgin Islands, U.s.</option>
    <option value="WF">Wallis and Futuna</option>
    <option value="EH">Western Sahara</option>
    <option value="YE">Yemen</option>
    <option value="ZM">Zambia</option>
    <option value="ZW">Zimbabwe</option>
</select>
								  </div>
								  </div>
								  
								  <div class="col-md-4">
								  <div class="form-group">
									<label>Pincode <span class="emp">*</span></label>
									<input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
								  </div>
								  </div>
								  </div>
								  
							      <div class="row">
								      <div class="col-xs-12 col-sm-12">
								         <p class="head" style="font-size: 30px; text-align: center; padding-bottom: 40px"><u>SME Chamber of India Membership Details</u></p>
							          </div>
								  </div>
								  <div class="row">
								     <div class="col-md-3">
									 <div class="form-group">
									<label for="">Are you a member of IOD, India</label>
									<br>
									<label class="radio-inline">
										<input type="radio" name="member_india" class="member_india" value="yes" id="chkyes"> Yes
									</label>
									<label class="radio-inline">
										<input type="radio" name="member_india" class="member_india" value="no" checked="" id="chkno"> No
									</label>
								</div>
									 </div>
									 <div class="col-md-6">
									    <div class="form-group">
									<label>If Yes, Enter Membership No. <span class="emp">*</span></label>
									<input type="text" class="form-control" name="Membership_no" placeholder="Enter Membership No." required>
								  </div>
									 </div>
								  </div>
								  
								   <div class="row">
								     <div class="col-md-11">
									    <p class="head" style="font-size: 30px; text-align: center; padding-bottom: 40px">
										<u>Registration Fee Per Participant (Non-Res & of all taxes)</u><br/> 
										<span style="font-size:14px;">Overseas Participants can convert USD into INR click to convert</span></p>
										 <table class="table table-bordered" style="font-size: 16px;">
    <thead>
      <tr>
        <th>Categories</th>
        <th>Indian</th>
        <th>Overseas</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><div class="radio">
														<label for="fee_types">
															<input type="radio" name="fee_types" id="fee_types" value="15000" checked="">
															Non Member
														</label> 
													</div></td>
        <td>Rs 15,000</td>
        <td>$200</td>
      </tr>
      
      <tr>
        <td><div class="radio">
														<label for="fee_types1">
															<input type="radio" name="fee_types" id="fee_types1" value="SME_Members">
															SME Members (Active)
														</label> 
													</div></td>
        <td colspan="2">	Complimentary For SME Members</td>
      
      </tr>
    </tbody>
  </table>
									 </div>
								   </div>
									
							     <div class="row">
								  
								  <div class="col-md-4">
								  <div class="form-group">
									<label>Method of Payment</label>
									<br>
									<label class="radio-inline">
										<input type="radio" value="Bank Transfer" name="optn" id="optn1"> Bank Transfer
									</label>
									<label class="radio-inline">
										<input type="radio" value="Cheque" name="optn" id="optn2" checked=""> Cheque
									</label>
								</div>
								  </div>
								  <div class="col-md-7">
								  <div class="form-group">
									<label>If Cheque / Bank Transfer (Fill Complete Details in the box) : <span class="emp">*</span></label>
									<input type="text" class="form-control" name="detail" required>
								  </div>
								  </div>
								</div>
								<div class="row">
								  <div class="col-md-12">
								      <div class="form-group">
									<label for="message"><a target="_blank" style="color:#004475;" href="#"> 
									Terms &amp; Conditions <i class="fa fa-caret-right" aria-hidden="true"></i></a></label>
									<div class="checkbox">
										<label>
											<input type="checkbox" value="yes" checked="" name="terms">
											I have read &amp; accepted the Terms &amp; Conditions as on the website.
										</label>
									</div>
								</div>
								  </div>
								</div>
								  
								  
									<!--<div class="g-recaptcha form-group" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>-->
                                  <input type="submit" name="form_hash" value="Submit" class="btn btn-primary" />
								</form>
								</div>
								</div>
						</div>      
                    </div>
                </section>


                <!--   footer section will come here  -->
                <?php include '../footer.php'; ?>
            </div>
        </div>  
        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/jquery.plugin.js"></script>
        <script src="../js/jquery.bxslider.min.js"></script>
        <script src="../js/jquery.easing.1.3.js"></script>
        <script src="../js/jquery.quicksand.js"></script>
        <script src="../js/script.js"></script>
        <script type="text/javascript" src="../js/jquery.flexisel.js"></script>
        <script type="text/javascript" src="../js/styleswitch.js"></script>
        <script type="text/javascript" src="../js/jquery.tabSlideOut.v1.3.js"></script>
        <script src="../js/custom.js" type="text/javascript"></script>
<!--        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
       <script>
		function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
				return false;
			}
			return true;
		}
		</script>
    </body>

</html>
