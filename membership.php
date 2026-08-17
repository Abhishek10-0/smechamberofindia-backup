<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];

if (isset($_POST['form_hash_indian'])) {
		
$username = "smechm";
$password = "sme123";
$type = "TEXT";
$sender = "SMECHM";
$mobileNumber = $_POST["phone"];

$rndno=rand(100000, 999999);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://103.211.202.40/sendsms/bulksms_v2.php?apikey=c21lY2htOmlXejVvYkJD&type=TEXT&sender=SMECHM&entityId=1201158099447823312&mobile=$mobileNumber&message=$rndno%20is%20the%20OTP%20for%20the%20registration%20process%20-%20SMECHM",
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
  
  $_SESSION['company_name']=$_POST['company_name'];
				$_SESSION['f_name']=$_POST['f_name'];
				$_SESSION['l_name']=$_POST['l_name'];
				$_SESSION['designation']=$_POST['designation'];
				$_SESSION['business_activity']=$_POST['business_activity'];
				$_SESSION['category']=implode(',',$_POST['category']);
				$_SESSION['email']=$_POST['email'];
				$_SESSION['phone']=$_POST['phone'];
				$_SESSION['turnover']=$_POST['turnover'];
				$_SESSION['city']=$_POST['city'];
				$_SESSION['state']=$_POST['state'];
				$_SESSION['country']=$_POST['country'];
				$_SESSION['membership_type']=$_POST['membership_type'];
				$_SESSION['otp']=$rndno;
				header( "Location: membership_verify.php" );
}

} 

if (isset($_POST['form_hash_overseas'])) {
	
	if(isset($_POST['g-recaptcha-response']))
	$captcha_overseas=$_POST['g-recaptcha-response'];
	if(!$captcha_overseas){
		$errMSGs = 'Please Check the Captcha form';
    }
	
	$response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LebFWskAAAAANNI_F_B5qRPb2dtdBkYYXic1Km4&response=".$captcha_overseas."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          $errMSGs = 'Are you a spammer? If not kindly select captcha.';
        }
        else
        {
	
        $f_name = trim($_POST["f_name"]);
        $l_name = trim($_POST["l_name"]);
        $designation = trim($_POST["designation"]);
        $company_name = trim($_POST["company_name"]);
        $business_activity = trim($_POST["business_activity"]);
        $membership_type = trim($_POST["membership_type"]);
        $category = trim($_POST["category"]);
        $turnover = trim($_POST["turnover"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
        $city = trim($_POST["city"]);
        $state = trim($_POST["state"]);
        $country = trim($_POST["country"]);
		
        $sql = "INSERT INTO forms (membership_type, f_name, l_name, email, phone, designation, company_name, business_activity, category, city, state, country, turnover)
		VALUES ('$membership_type', '$f_name', '$l_name', '$email','$phone', '$designation', '$company_name', '$business_activity', '$category', '$city', '$state', '$country', '$turnover')";

if ($conn->query($sql) === TRUE) {
	

# FIX: Replace this email with recipient email
		# Sender Data
        $subject = "SME Chamber Membership Registration For Overseas Companies";
        $f_name = trim($_POST["f_name"]);
        $l_name = trim($_POST["l_name"]);
        $designation = trim($_POST["designation"]);
        $company_name = trim($_POST["company_name"]);
        $business_activity = trim($_POST["business_activity"]);
        $turnover = trim($_POST["turnover"]);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
        $city = trim($_POST["city"]);
        $state = trim($_POST["state"]);
        $country = trim($_POST["country"]);
		
		$mail_to = $email;
        //$mail_to = "example@example.com , example@example.com";
		
        # Mail Content
        $content = "Name: $f_name $l_name\n";
        $content .= "Email: $email\n";
        $content .= "Phone: $phone\n";
        $content .= "Designation: $designation\n";
        $content .= "Company Name: $company_name\n";
        $content .= "Business activity: $business_activity\n";
        $content .= "Turnover in Crore: $turnover\n";
        $content .= "City: $city\n";
        $content .= "State: $state\n";
        $content .= "Country: $country\n";
		
        # email headers.
        $headers = "From: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
        $headers .= "To: $f_name $l_name <$email>" . "\r\n";
		$headers .= "Cc: secretariat@smechamber.com" . "\r\n";
		$headers .= "Bcc: gandhi@smechamber.in" . "\r\n";
		$headers .= "Reply-To: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
		$headers .= "Return-Path: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
		$headers .= "Organization: SME Chamber of India" . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type: text/plain; charset=iso-8859-1" . "\r\n";
		$headers .= "X-Priority: 3" . "\r\n";

		// More headers
		//Multiple BCC, same as CC above;
		//$headers .= 'Bcc: example@gmail.com' . "\r\n";


        # Send the email.
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            $successMSG = "Thank You! Your message has been sent.";
			header( "Location: membership-success.php" );
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            $errMSGs = "Oops! Something went wrong, we couldn't send your message.";
        }
		

} else {
    $errMSGs = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
} else {}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Membership | SME Chamber of India</title>
        <meta name="keywords" content="MEbership of SME Chamber of India, Membership Category, Who Can Apply for Membership ?, Annual Membership (12 Months), Life Membership">
        <meta name="description" content="Micro Enterprises (Turnover upto Rs. 10 cr), Small Enterprises
		(Turnover Rs.11 crs to 100 crs.), Mid- sized Enterprises (A) (Turnover from Rs. 101 crs. to Rs.250 crs.), Mid- sized Enterprises (B) (Turnover from Rs. 251 crs. to Rs.500 crs.), Mid - Corporate Enterprises (Turnover from Rs. 501 cr to Rs 1000 cr), Corporate & MNCs Category (Turnover from Rs. 1001 cr to Rs.3000 crs), Elite Business Group (CMD, CEO, Director, MD, CFO & Presidents of enterprises), All kinds of Manufacturing firms, Service Industries, Infrastructure, Energy, IT, ICT, Exports, Agro-Based Industries, Logistics, Imports, Distributors, Marketing, Consumer Durables, Auto & Auto Ancillary, Electronics, Electricals, Realty & Construction, Textiles, Metal & Mining, Oil & Gas, Packaging, Paper, Plastic, Printing, Advertisement, Media, Professionals, Law Firms, Tourism, Healthcare, Pharmaceutical, Sports, Retail, Hospitality, Start–Ups, Young & Women entrepreneurs and other registered companies.,Same as above,As per above Industrial & business Sectors, Private Limited, Public Limited, Multinational Companies, Banks & FIs, Co-operative Sector, SEZ, 100% EOUs, Overseas Companies & Organisations Functioning in India & other registered companies.">
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
        <link rel="stylesheet" href="css/shortcodes.css" type="text/css">
        <link rel="stylesheet" href="css/color-shortcodes.css" type="text/css">
        <link type="text/css" rel="stylesheet" href="js/highlighter/shCoreDefault.css"/>
        <link type="text/css" rel="stylesheet" href="js/highlighter/shCore.css"/>
        <script src="js/my_js.js"></script>
        <script src="js/html5.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="css/form-bootstrap.min.css" />
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
		<style>
			.cp-columns {margin: 40px auto 40px !important;}
			offset2 {
    margin-left: 0px;
}
.cp-columns p {
    font: 400 14px / 22px 'Open Sans', sans-serif;
    color: #482323;
    margin: 0;
}
		</style>
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
						<div class="">
							<div class="">
								<div class="cp-accordion">
									<div class="accordion" id="accordion2">
										<div class="accordion-group">
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
											<div class="accordion-heading active">
												<a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
												<strong>Membership For Indian Companies</strong>
												<span class="open"><i class="fa fa-plus"></i></span></a>
											</div>
											<div id="collapseTwo" class="accordion-body in collapse">
												<div class="accordion-inner" >
																						
								<div class="cp-accordion">
								<div class="accordion" id="accordion3">
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseeight">
													<strong>Membership Advantages</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapseeight" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="col-md-12 membership">
														<h3><u>Advantages of the Annual Membership (One year):</u></h3>
														<ul>
															<li>Membership Certificate of the Chamber</li>
															<li>Alerts & information about the events, business leads, meetings, updates of Government schemes & policies  </li>
															<li>Complimentary Invitation for the selected business events to attend in person or virtual events, conferences, webinars and interactive sessions with the Ministers, Heads of regulatory bodies, heads of corporates, Thought Leaders, FIs, Economists, Inventors, Technocrats, Diplomatic & trade Missions</li>
															<li>Eligibility to avail various business advisory services and the charges will depend on case-to-case basis</li>
															<li>Opportunity to avail advantages, products & services of the channel partners at concessional rates </li>
															<li>Guidance for domestic business growth, export promotion, trade leads, marketing & promotion & resolving issues</li>
															<li>Complimentary Copy of the SMEConnect Magazine and other publications</li>
															<li>Participation at the various executive & training programs on business & financial managements, policies, incentives, quality assurance, technology, international trade, banking & investment, marketing, industrial automation, taxation, HRD and skilling & scaling of entrepreneurial leadership qualities at concessional fee or charges</li>
															<li>Avail various business advisory services for growth, expansion and export promotion</li>
															
														</ul>
														<h3><u>Advantages of the Premium Membership (Three years):</u></h3>
														<ol>
															<li>Membership Certificate of the Chamber </li>
															<li>Key account executive of the Chamber to coordinate with you or designated person of your company</li>
															<li>Alerts & information about the events, business leads, meetings, updates of Government schemes & policies  </li>
															<li>Complimentary: introduction amongst other members on database through mailers (every quarter) </li>
															<li>Complimentary Invitation to attend various business events, conferences, webinars and Government meetings and interactive sessions / round table meetings with the Ministers, Heads of regulatory bodies, heads of corporates, Thought Leaders, Fis, Economists, Inventors, Technocrats, Diplomatic & trade missions, at various activities of International Business, investment and SME Forums of GCC, USA, Japan, Canada, Europe, Africa, UK, China and other countries</li>
															<li>Business advisory services can be availed on additional commercial terms:
															<ul>
																<li>Domestic business growth, export promotion & import facilitation</li>
																<li>Channelize Bank finance, Investment, Private Equity, Venture Capital, External Commercial Borrowings and IPO</li>
																<li>Marketing, promotion & branding of products and services at the national and international markets </li>
																<li>Supply, procurement, Vendor development registration with the corporates, PSUs and MNCs</li>
																<li>Availing the benefits and advantages of Government policies, schemes, incentives and services</li>
																<li>Identification of industrial premises / parks, ready-made industrial units, industrial land to set up manufacturing units</li>
																<li>Identification of Indian and foreign partners for Joint Ventures, Technology Transfer, Mergers & Acquisitions, Collaborations, Advanced & Patented Technology, Turn-key Projects, Capital Goods, smart business solutions, Contract Manufacturing Tie-ups, Franchise, Distributorship, marketing and strategic partnerships in India and abroad</li>
																<li>Revival of manufacturing Sick Units, restructuring of NPA accounts & financially stressed companies </li>
																<li>Resolving issues and grievances of businesses and take up with the appropriate Government authorities</li>
																<li>Documentation, formalities, compliances, procedural work related to various Governments and regulatory authorities</li>
																<li>Recovery of delayed payments / receivables and arbitration services & legal advisory services at concessional rates</li>
																<li>Complimentary Copy of the SME Connect Magazine, other Publications, news-letters & circulars / notifications of state and central government departments.</li>
																<li>Opportunity to avail various products, services and facilities of the channel partners of the chamber at competitive or concessional charges or rates related to business growth, transformation & restructuring, marketing, financial services, branding, revival of manufacturing Sick Units, NPA & financially stressed accounts, taking up grievances with the appropriate Government authorities for redressal, preparation of  documents for tenders and projects, completion of formalities and compliances of various regulatory authorities</li>
																
															</ul>

															</li>
															<li>Participation at the various executive & training programs related to business or financial management, government policies & incentives, quality, technology, international trade, banking, marketing, industrial automation, taxation, HRD, entrepreneurial leadership qualities, interactive sessions or round table meetings with the Ministers, Heads of regulatory bodies, heads of corporates, Thought Leaders, Fis, Inventors, Technocrats, Diplomatic Missions, Business Coaching & mentoring</li>
															<li>Permission to use the logo of SME Chamber of India on your business card or on your website or company profile as a premium member of the Chamber during the tenure of premium membership</li>
															<li>20% special discount for advertisements in SMEConnect Magazine and Complimentary Copy of the SMEConnect Magazine and other publications</li>
															<li>Opportunity to share views, comments, suggestions & recommendations related to current affairs, Government schemes & policies, issues, incentives or adverse impact of any specific policies or regulations related to SMEs, exports and manufacturing sector pertaining to SMEs. </li>
															<li>Opportunity to participate as a speaker or panelist or expert at the Business Conferences, “SME TV”, round table meetings, seminars, workshops, business newspapers, magazines & TV channels, SME Business Forum, SMEtalks, SME News 24/7 and mentoring and coaching other SMEs or start-ups </li>
															<li>Opportunity to be a member of Business Groups or expert committee or study group related to business sector and industries</li>
															<li>Opportunity to be a member of delegations visiting foreign exhibitions, conferences and business meetings </li>
															<li>Recommendation letters to avail business visa, services from banks, financial institutions & Government agencies</li>
															<li>Eligibility to apply for “India SME Excellence Awards”, “Emerging & Rising SMEs of India Awards” & “Innovative SME of the Year Awards” and “Best Corporate or Institution of the Year Awards” for supporting, strengthening & empowering SMEs</li>
														</ol>
													</div>
													
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsenine">
													<strong>Support Services</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsenine" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="col-md-12 membership">
															<ul>
																<li>Business growth, expansion and diversification</li>
																<li>Channelising Bank Finance, Investment, Venture Capital, Private Equity and External Commercial Borrowings</li>
																<li>Export Promotion, Identify New Business Partners, Buyers, Suppliers, Importers and Strategic business partners</li>
																<li>Import facilitation, Identify genuine manufacturers, sourcing of quality & competitive products & services, trade finance for imports</li>
																<li>Identification of Foreign Business partners for Joint Ventures, Technology Transfer, Collaborations & Contract Manufacturing Tie-ups</li>
																<li>Identification of Advanced & Patented Technologies, Technical Alliances, Turn-key Projects & Capital Goods</li>
																<li>Government services and Liaison in India and other countries </li>
																<li>Marketing, Branding & Promotion, Franchise, Distributorship & Channel Partnership in India and overseas markets</li>
																<li>Mergers and Acquisitions in India and abroad</li>
																<li>Supply to Large Corporates, MNCs, Mid-corporates and Vendor Development</li>
																<li>Identify raw material supplier from India and other countries </li>
																<li>Business advisory services for transforming SMEs as the emerging enterprise and better business growth</li>
																<li>Availing of incentives, benefits, or financial support from specific Government agencies</li>
																<li>Setting up manufacturing units</li>
																<li>Study Report, Market Survey and Feasibility Reports on specific sector</li>
																<li>Support to Buy & Sell manufacturing unit or readymade Industrial premises or Industrial land</li>
																<li>Resolving issues related to the Manufacturing Industry, International Trade, Banking, Recovery of delayed receivables and other problems</li>
																<li>Revival of Sick Units, Financially stressed SMEs nurturing and restructuring of SME companies </li>
															</ul>
															<p>Kindly send your business requirements or inquires or specific issues on <a href="mailto:director@smechamber.com">director@smechamber.com</a></p>
													</div>
													
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseten">
													<strong>Membership Categories</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapseten" class="accordion-body collapse">
												<div class="accordion-inner member_category1">
													<div class="col-md-12 member_category">
														<table width="100%" cellpadding="5" cellspacing="5" border="1" style="border-collapse: collapse;">
															<tbody>
																<tr style="font-weight:bold;">
																	<td><b>Sr No.</b></td>
																	<td style="width:35%;"><P style="text-align: center; color: black;"><b> Membership Categories </b></P></td>
																	<td style="width:60%;"><P style="text-align: center; color: black;"><b> Who Can Apply for Membership? </b></P> </td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">1</P></td>
																	<td>
																		<P style="text-align: justify; text-align: center;">
																			<b><u>Tiny & Micro Enterprises</u></b> 
																		</P>
																	</td>
																	<td >
																		<P style="text-align: justify; text-align: center;">
																			Turnover upto Rs.10 crores
																		</P>
																		<!--<P style="text-align: justify; margin: 5px;">All Kinds of Tiny & Micro Enterprises, Start-Ups, Young and Women Entrepreneurs.</P>-->
																		<!--<ul> 
																		   <li>Small & medium Enterprises involved in manufacturing, service sector, Healthcare, IT, ICT, Exports, Marketing, Logistics, FMCG, garments, Textiles, Imports, Franchise, Distribution, HRD, Media, Hospitality, Infrastructure, Construction, Utility services, Consumer Goods, research, E-commerce, agro-based industries, sports, Retail, travels, warehousing, professional & legal services, members of family-owned businesses, Young & Women Entrepreneurs, Start-Ups & allied businesses & Manufacturing sectors.</li><br/>
																		   <li>Mid-corporates, Corporates & Multinational companies involved in manufacturing, allied industrial sectors, financial services, banking, Insurance, infrastructure, realty, research, education, exports, construction, reality, E-commerce, telecommunication, ratings, logistics, warehousing, Government PSUs, investment agencies, industrial park developers & other business sectors as well as foreign enterprises / Subsidiaries operating in India and Diplomatic missions and other enterprises. </li>
																		   <li>Enterprises involved in various industrial sectors, can enroll in the Elite Business Group to explore better business cooperation & avail support services.</li>
																		   
																		</ul>-->
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">2</P></td>
																	<td>
																		<P style="text-align: center;">
																			<b><u>Small Enterprises - A</u></b> <br>
																		</P>
																	</td>
																	<td >
																		<P style="text-align: justify; text-align: center;">
																			Turnover from Rs.11 crs. to Rs.50 crs.
																		</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">3</P></td>
																	<td>
																		<P style="text-align: center; ">
																			<b><u>Small Enterprises - B </u></b>
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;"> Turnover from Rs.51 crs. to Rs.100 crs.</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">3</P></td>
																	<td>
																		<P style="text-align: center; ">
																			<b><u>Start-Ups</u></b>
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;"> Turnover above Rs.5 crores</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">4</P></td>
																	<td>
																		<P style="text-align: center; text-align: center;">
																			<b><u>Mid-Size Enterprises </u></b> 
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Turnover from Rs.101 crs. to Rs.500 crs.</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">5</P></td>
																	<td>
																		<P style="text-align: center; text-align: center;">
																			<b><u>Mid-Corporates</u></b> 
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Turnover from Rs.501 crs. to Rs.1000 crs.</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">6</P></td>
																	<td>
																		<P style="text-align: center; text-align: center;">
																			<b><u>Corporates</u></b>
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Turnover above Rs.1000 crs.</P>
																	</td>
																	
																</tr>

																<tr>
																	<td><P style="text-align: center;">7</P></td>
																	<td>
																		<P style="text-align: justify; text-align: center;">
																			<b><u>Multinational Enterprises</u>
																				
																			</b>

																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Turnover above Rs.500 crs.</P>
																	</td>
																	
																</tr>

																

																<tr>
																	<td><P style="text-align: center;">9</P></td>
																	<td>
																		<P style="text-align: justify; text-align: center;">
																			<b><u>Institutions</u>

																				<ul>
																					<li>Finance</li>
																					<li>Insurance</li>
																					<li>Education</li>
																				</ul>

																			</b>

																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Education, finance, medical, research, sports, laboratories, entertainment & testing</P>
																	</td>
																	
																</tr>

																<tr>
																	<td><P style="text-align: center;">10</P></td>
																	<td>
																		<P style="text-align: justify; text-align: center;">
																			<b><u>Consultants and Professionals</u></b>
																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Chartered Accountants, Lawyers, Advocates, Company Secretary, Cost & Management Accountant, Business & Life Coaches, Faculties, Engineers and other professionals</P>
																	</td>
																	
																</tr>

																<tr>
																	<td><P style="text-align: center;">11</P></td>
																	<td>
																		<P style="text-align: justify; text-align: center;">
																			<b><u>Patron Membership(by invitation)</u></b>

																		</P>
																	</td>
																	<td>
																		<P style="text-align: center; margin: 5px;">Entrepreneurs, Enterprises, Institutions and Corporates can register as patron members</P>
</P>
																	</td>
																	
																</tr>
																
															</tbody>
														</table>
														
													</div>
													
												</div>
											</div>
										</div>  
										<div class="accordion-group">
											<div class="accordion-heading active"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseeleven">
													<strong>Apply For Membership</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapseeleven" class="accordion-body in collapse">
												<div class="accordion-inner form">
												    <div class="offset2 col-md-2" style="margin-left: 0px;">
														
													</div>
													<div class="offset2 col-md-6 form" style="margin-left: 0px;">
														<?php include("membership-form-indian-companies.php");?> 
													</div>
													
												</div>
											</div>
										</div> 
									</div>
									</div>

												</div>
											</div>
										</div>
										
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive">
													<strong>Membership For Overseas Companies</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsefive" class="accordion-body collapse">
												<div class="accordion-inner">
													
																						
								<div class="cp-accordion">
								<div class="accordion" id="accordion3">
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsethree">
													<strong>Membership Advantages</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsethree" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="col-md-12 membership">
															<ul>
															<li>Membership Registration for Inclusion in members Database in the specific sector for Business matchmaking & alliance</li>
															<li>Business leads or business inquiries from other members or clients  </li>
															<li>Connectivity with other members and potential clients to explore emerging business opportunities in India</li>
															<li>Membership Certificate</li>
															<li>Enrolment to receive newsletter, events, business alerts, SMEConnect magazine, business meetings and information about the Government schemes</li>
															<li>Opportunities to participate in the various activities & business networking activities & events (virtual & ground events) for Business Connectivity with New Business Partners, Buyers, Suppliers, Exporters & clients</li>
															<li>Interactive session or round table with the Ministers, Heads of regulatory bodies, Heads of Corporates, thought leaders, Economists & Inventors</li>
															<li>Speaking Opportunity in webinars or ground events as per expertise.</li>
															<li>Opportunity to be the Member of Expert or Sub Committees or Study Groups</li>
															<li>Opportunity to share Suggestions & Recommendations to various Government Departments, Regulatory Authorities, FIs, Diplomatic Missions, Issues related to policy and its implementation strategies</li>
															<li>Recommendation letters for Business Visa, Government Agencies, FIs, Corporates and other agencies</li>
															<li>Opportunity to Participate as a speaker or delegate at SMETalks shows, SME Business Forum, Webinar, Executive Training Programs & SME Coaching</li>
															<li>15% discount for Branding & Promotion at the various activities & events</li>
															<li>25% discount for Advertisement in SME Connect – Magazine</li>
															<li>Opportunity to be the Mentor & guide to Entrepreneurs and Start-ups on specific sector   </li>
															<li>Eligibility to apply for "India SME Excellence Awards" and other Business Awards as a overseas member</li>
															<li>To join Debate & discussion at the various TV channels or Interaction with Press & Media on specific issues, policy or Government ordinances affecting or benefiting business sector</li> 
														
														</ul>
													</div>
													
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsefour">
													<strong>Support Services</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsefour" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="col-md-12 membership">
															<ul>
																<li>Business growth and expansion in India</li>
																<li>Channelising Finance, Investment, Venture Capital and Private Equity for projects to be setup in India</li>
																<li>Export Promotion, Identify New Business Partners, Buyers, Suppliers, Importers and Strategic business partners in India</li>
																<li>Identify Importers & Manufacturers, Sourcing of quality and competitive products & services, Trade finance for imports</li>
																<li>Identification of Indian SMEs for Joint Ventures, Technology Transfers, Collaborations & Contract Manufacturing Tie-ups</li>
																<li>Identification of Indian SMEs for Advanced & Patented Technologies, Technical Alliances, Turn-key Projects & Capital Goods</li>
																<li>Government Services and Liaison in India for Setting up manufacturing units and Industries</li>
																<li>Marketing, Branding & Promotion, Franchise, Distributorship & Channel Partnership in India</li>
																<li>Mergers and Acquisitions in India</li>
																<li>Supply to Large Corporates, MNCs, Mid-Corporates and Vendor Development in India</li>
																<li>Identify raw material supplier or buyer from India and other countries </li>
																<li>Business advisory services for better business growth in Indian Markets</li>
																<li>Study Report, Market Survey and Feasibility Reports on specific sector</li>
																<li>Buyer-Seller meets with Indian SMEs in various cities of India</li>
																<li>Virtual Office Facility</li>
																<li>Business partnership opportunities in Make-In-India initiative with Indian SMEs</li>
																<li>Availing of incentives, benefits, or financial support from specific Government agencies in India</li>
																<li>To Buyout manufacturing unit or readymade Industrial premises or Industrial land in India</li>
																<li>Resolving issues related to the Manufacturing Industry, International Trade, Banking, Recovery of delayed receivables and other business related problems</li>
																<li>Revival of Sick Units, Financially stressed SMEs nurturing and restructuring of SME companies </li>
															
															
															</ul>
															<p>Kindly send your business requirements or inquires or specific issues on <a href="mailto:director@smechamber.com">director@smechamber.com</a></p>
													</div>
													
												</div>
											</div>
										</div>
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsesix">
													<strong>Membership Categories</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsesix" class="accordion-body collapse">
												<div class="accordion-inner member_category1">
													<div class="col-md-12 member_category">
														<table width="100%" cellpadding="5" cellspacing="5" border="1" style="border-collapse: collapse;">
															<tbody>
																<tr style="font-weight:bold;">
																	<td><b>Sr No.</b></td>
																	<td style="width:35%;"><P style="text-align: center; color: black;"><b> Membership Categories </b></P></td>
																	<td style="width:60%;"><P style="text-align: center; color: black;"><b> Who Can Apply for Membership? </b></P> </td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">1</P></td>
																	<td><P style="text-align: justify; text-align: center;">SMEs</P></td>
																	<td>
																		<P style="text-align: justify; margin: 5px;">Small & Medium Manufacturers, Exporters, Importers, Buying or Selling Agents, Distributors, Suppliers, Service Providers, Consulting Companies, Professionals, Start-Ups, Individuals Entrepreneurs, Marketing & Exhibitions Organisers</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">2</P></td>
																	<td><P style="text-align: justify; text-align: center;">Corporate</P></td>
																	<td>
																		<P style="text-align: justify; margin: 5px;">Public Limited & Multinational Companies, Overseas Banks & Financial Institutions and International Business Organisations</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">3</P></td>
																	<td><P style="text-align: justify; text-align: center;">Patron Membership <br>(By invitation)</P>
																	</td>
																	<td>
																		<P style="text-align: justify; margin: 5px;">Individual or Senior executive of Corporate / Foreign Institutional Investors / MNCs / Trade Promotion organisations / Retired government official / Venture Capital or Private Equity Fund / Technocrats / Educationist</P>
																	</td>
																</tr>
																<tr>
																	<td><P style="text-align: center;">4</P></td>
																	<td><P style="text-align: justify; text-align: center;">Associate Organisation</P></td>
																	<td>
																		<P style="text-align: justify; margin: 5px;">Chamber of Commerce, Associations, Government Agencies, NGOs and Other International Organisations</P>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
													
												</div>
											</div>
										</div>  
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseseven">
													<strong>Apply For Membership</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapseseven" class="accordion-body collapse">
												<div class="accordion-inner form">
													<div class="offset2 col-md-6" style="margin-left: 0px;">
														<?php include("membership-form-overseas-companies1.php");?> 
													</div>
													
												</div>
											</div>
										</div> 
									</div>
									</div>


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
<script src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery-filterable.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script type="text/javascript" src="js/highlighter/shCore.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushJScript.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushXml.js"></script>
<script type="text/javascript" src="js/highlighter/shBrushPhp.js"></script>
<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.tabSlideOut.v1.3.js"></script>
<script src="js/custom.js" type="text/javascript"></script>
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
