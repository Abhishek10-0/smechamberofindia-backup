<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];


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
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = filter_var(trim($_POST["phone"]), FILTER_SANITIZE_EMAIL);
        $city = trim($_POST["city"]);
        $state = trim($_POST["state"]);
        $country = trim($_POST["country"]);
		
        $sql = "INSERT INTO forms (membership_type, f_name, l_name, email, phone, designation, company_name, business_activity, category, city, state, country)
		VALUES ('$membership_type', '$f_name', '$l_name', '$email','$phone', '$designation', '$company_name', '$business_activity', '$category', '$city', '$state', '$country')";

if ($conn->query($sql) === TRUE) {
	

# FIX: Replace this email with recipient email
		# Sender Data
        $subject = "SME Chamber Membership Registration For Overseas Companies";
        $f_name = trim($_POST["f_name"]);
        $l_name = trim($_POST["l_name"]);
        $designation = trim($_POST["designation"]);
        $company_name = trim($_POST["company_name"]);
        $business_activity = trim($_POST["business_activity"]);
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
        $content .= "City: $city\n";
        $content .= "State: $state\n";
        $content .= "Country: $country\n";
		
        # email headers.
        $headers = "From: SME Chamber of India <no-reply@smechamberofindia.com>" . "\r\n";
        $headers .= "To: $f_name $l_name <$email>" . "\r\n";
	    $headers .= "Cc: rashmi.smechamber@gmail.com" . "\r\n";
		$headers .= "Cc: director@smechamber.com" . "\r\n";
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
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapsefive">
													<strong>Membership For Overseas Companies</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsefive" class="accordion-body in collapse">
												<div class="accordion-inner">
													
																						
								<div class="cp-accordion">
								<div class="accordion" id="accordion3">
								       <div class="accordion-group">
											<div class="accordion-heading active"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapseseven">
													<strong>Apply For Membership</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapseseven" class="accordion-body in collapse">
												<div class="accordion-inner">
												    <div class="offset2 col-md-2" style="margin-left: 0px;">
														
													</div>
													<div class="offset2 col-md-6" style="margin-left: 0px;">
														<?php include("membership-form-overseas-companies1.php");?> 
													</div>
													
												</div>
											</div>
										</div> 
								
								
										<div class="accordion-group">
											<div class="accordion-heading"> 
												<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#collapsethree">
													<strong>Membership Advantages</strong><span class="open"><i class="fa fa-plus"></i></span>
												</a> 
											</div>
											<div id="collapsethree" class="accordion-body collapse">
												<div class="accordion-inner">
													<div class="col-md-12">
															<ul>
															<li>Membership Registration for Inclusion in members Database in the specific sector for Business matchmaking & alliance</li>
															<li>Business leads or business inquiries from other members or clients  </li>
															<li>Connectivity with other members and potential clients to explore emerging business opportunities in India</li>
															<li>Membership Certificate</li>
															<li>Enrolment to receive newsletter, events, business alerts, SMEConnect magazine, business meetings and information about government schemes</li>
															<li>Opportunities to participate in various activities & business networking activities & events (virtual & ground events) for Business Connectivity with New Business Partners, Buyers, Suppliers, Exporters & clients</li>
															<li>Interactive session or Round table with Ministers, Heads of regulatory bodies, Heads of Corporate, thought leaders, Economists, Inventors</li>
															<li>Speaking Opportunity in webinars or ground events as per expertise.</li>
															<li>Opportunity to be the Member of Expert or Sub Committees or Study Groups</li>
															<li>Opportunity to share Suggestions & Recommendations to various Government Departments, Regulatory Authorities, FIs, Diplomatic Missions, Issues related policy and its implementation strategies</li>
															<li>Recommendation letters for Business Visa, Government Agencies, FIs, Corporates and other agencies</li>
															<li>Opportunity to Participate as the speaker or delegate at SMETalks shows, SME Business Forum, Webinar, Executive Training Programs & SME Coaching</li>
															<li>15% discount for Branding & Promotion at various activities & events</li>
															<li>25% discount for Advertisement in SME Connect – Magazine</li>
															<li>Opportunity to be the Mentor & guide Entrepreneurs and Start-ups on specific sector   </li>
															<li>Eligibility to apply for "India SME Excellence Awards" and other Business Awards as the overseas member</li>
															<li>To join Debate & discussion at various TV channels or Interaction with Press & Media on specific issues, policy or Government ordinance affecting or benefiting business sector</li> 
														
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
													<div class="col-md-12">
															<ul>
																<li>Business growth and expansion in India</li>
																<li>Channelising Finance, Investment, Venture Capital and Private Equity for projects to be setup in India</li>
																<li>Export Promotion, Identify New Business Partners, Buyers, Suppliers, Importers and Strategic business partners in India</li>
																<li>Identify Importers & Manufacturers, Sourcing of quality and competitive products & services, Trade finance for imports</li>
																<li>Identification of Indian SMEs for Joint Ventures, Technology Transfer, Collaborations & Contract Manufacturing Tie-ups</li>
																<li>Identification of Indian SMEs for Advanced & Patented Technology, Technical Alliances, Turn-key Projects & Capital Goods</li>
																<li>Government Services and Liaison in India for Setting up manufacturing unites and Industries</li>
																<li>Marketing, Branding & Promotion, Franchise, Distributorship & Channel Partnership in India</li>
																<li>Mergers and Acquisitions in India</li>
																<li>Supply to Large Corporate, MNCs, Mid-Corporate and Vendor Development in India</li>
																<li>Identify raw material supplier or buyer from India and other countries </li>
																<li>Business advisory services for better business growth in Indian Market</li>
																<li>Study Report, Market Survey and Feasibility Reports on specific sector</li>
																<li>Buyer-Seller meets with Indian SMEs in various cities of India</li>
																<li>Virtual Office Facility</li>
																<li>Business partnership opportunities in Make-In-India initiative with Indian SMEs</li>
																<li>Availing of incentives, benefits, or financial support from specific government agencies in India</li>
																<li>To Buyout manufacturing unit or readymade Industrial premises or Industrial land in India</li>
																<li>Resolving issues related to Manufacturing Industry, International Trade, Banking, Recovery of delayed receivables and other business related problems</li>
																<li>Revival of Sick Units, Financially stressed SMEs nurturing and restructuring of SME companies </li>
															
															
															</ul>
															<p>Kindly send your Business requirements or inquires or specific issues on <a href="mailto:director@smechamber.com">director@smechamber.com</a></p>
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
												<div class="accordion-inner">
													<div class="col-md-12">
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
