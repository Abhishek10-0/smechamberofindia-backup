<?php include 'config.php'; ?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>SME Chamber of India</title>
        
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/color.css" rel="stylesheet" type="text/css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
        
        <script type="text/javascript" src="js/jquery-1.8.2.js"></script>
		
		<style>
            .premium-title-wrapper {
                text-align: center;
                margin-top: 30px;
                margin-bottom: 40px;
            }

            .premium-title {
                display: inline-block;
                background: linear-gradient(135deg, #0b5f7d 0%, #1e88e5 100%);
                color: #ffffff;
                padding: 5px 20px;
                font-size: 15px;
                font-weight: bold;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                border-radius: 25px;
                box-shadow: 0 4px 15px rgba(11, 95, 125, 0.3);
                margin: 0;
            }

            .partners {
                display: grid;
                grid-template-columns: repeat(4, 1fr); 
                gap: 20px; 
                list-style: none;
                padding: 0;
                margin: 0 auto 50px auto;
                max-width: 1000px;
            }

            .partners li {
                background: #ffffff;
                border: 1px solid #e2e8f0; 
                border-radius: 8px; 
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
                padding: 8px;
                height: 110px; 
                display: flex;
                justify-content: center;
                align-items: center;
                transition: box-shadow 0.3s ease, transform 0.3s ease; 
            }

            .partners li:hover {
                transform: translateY(-5px);
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            }

            
            .partners li a {
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
            }

            .partners li img {
                max-width: 100%;
                max-height: 90px;
                object-fit: contain;
            }

            
            @media (max-width: 992px) {
                .partners { grid-template-columns: repeat(3, 1fr); }
            }
            @media (max-width: 768px) {
                .partners { grid-template-columns: repeat(2, 1fr); }
                .premium-title { font-size: 18px; padding: 10px 30px; }
            }
            @media (max-width: 480px) {
                .partners { grid-template-columns: repeat(1, 1fr); }
            }
        </style>
		
    </head>
    <body>
        <div id="wrapper">
            
            <?php include("header.php"); ?>

            <section class="contact-page">
                <div class="container">

                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="premium-title-wrapper">
                                <h2 class="premium-title">Annual Members</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="partners">
							
							 <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/IHTC.jpeg" alt="dcorpo" >
                      </a>
                    </li>
					
<li>
                      <a href="https://euroglass.co.in/" target="_blank" >
                        <img src="images/members/EuroGlass.jpeg" alt="dcorpo" >
                      </a>
                    </li>
				  
				  <li>
                      <a href="https://www.talentworks.in/" target="_blank" >
                        <img src="images/members/TalentWorks.jpeg" alt="dcorpo" >
                      </a>
                    </li>
					
					<li>
                      <a href="https://www.satsangsolutions.com/" target="_blank" >
                        <img src="images/members/Satsang.jpeg" alt="dcorpo" >
                      </a>
                    </li>

                    <li>
                      <a href="https://subsidyandfunding.com/" target="_blank" >
                        <img src="images/members/dcorpo.jpg" alt="dcorpo" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.avishrmconsulting.com/" target="_blank" >
                        <img src="images/members/avishrm.jpg" alt="avishrm" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.betterways.co.in/" target="_blank" >
                        <img src="images/members/betterways.jpg" alt="betterways" >
                      </a>
                    </li>

                    <li>
                      <a href="https://kappal.co/" target="_blank" >
                        <img src="images/members/Kappal.jpg" alt="Kappal" >
                      </a>
                    </li>

                    <li>
                      <a href="https://mitosisinfo.com/" target="_blank" >
                        <img src="images/members/mitosis.jpg" alt="mitosis" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.arhamsecure.com/" target="_blank" >
                        <img src="images/members/Arham.jpg" alt="Arham" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.ascgroup.in/" target="_blank" >
                        <img src="images/members/ASC.jpg" alt="ASC" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.mantrasouvenir.com/" target="_blank" >
                        <img src="images/members/mantra.jpg" alt="mantra" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.mgm-hotels.com/" target="_blank" >
                        <img src="images/members/MGM.jpg" alt="MGM Hotels" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.thepromptservices.com/" target="_blank" >
                        <img src="images/members/prompt.jpg" alt="Prompt Services" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.smiligners.com/" target="_blank" >
                        <img src="images/members/smiligners.jpg" alt="smiligners" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.dattatrayglobaltrade.com/" target="_blank" >
                        <img src="images/members/dattatray.jpg" alt="dattatray" >
                      </a>
                    </li>

                    <li>
                      <a href="https://mvd-consultancy.org/" target="_blank" >
                        <img src="images/members/ca_mvd.jpg" alt="ca mvd" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.bgr-global.com/" target="_blank" >
                        <img src="images/members/BGR.jpg" alt="BGR Global" >
                      </a>
                    </li>

                    <li>
                      <a href="https://erudorecapital.com/" target="_blank" >
                        <img src="images/members/erudore.jpg" alt="Erudore Capital Private Limited" >
                      </a>
                    </li>

                    <li>
                      <a href="https://aspmconsulting.com/" target="_blank" >
                        <img src="images/members/ASPM.jpg" alt="ASPM consulting" >
                      </a>
                    </li>

                    <li>
                      <a href="https://meshayuconsultants.com/" target="_blank" >
                        <img src="images/members/MCPL.jpg" alt="Meshayu Consultants Private Limited" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.saarthinfosec.com/" target="_blank" >
                        <img src="images/members/SAARTH.jpg" alt="SAARTH INFOSEC PRIVATE LIMITED" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/mehul.jpg" alt="Mehul Ashar & Co." >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.teknicind.com/" target="_blank" >
                        <img src="images/members/TTPL.jpg" alt="Teknic Toolings Pvt Ltd" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/ifocal.jpg" alt="ifocal" >
                      </a>
                    </li>

                    <li>
                      <a href="https://finaccotaxes.com/" target="_blank" >
                        <img src="images/members/finaccotaxes.jpg" alt="finaccotaxes" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/MASNXGlobal.jpg" alt="MASNXGlobal" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.aapkabima.com/" target="_blank" >
                        <img src="images/members/aapkabima.jpg" alt="aapkabima" >
                      </a>
                    </li>

                    <li>
                      <a href="https://travexpert.com/" target="_blank" >
                        <img src="images/members/TravExpert.jpg" alt="TravExpert" >
                      </a>
                    </li>

                    <li>
                      <a href="https://areete.ai/" target="_blank" >
                        <img src="images/members/areete.jpg" alt="areete" >
                      </a>
                    </li>
                      
                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/azbay.jpg" alt="azbay" >
                      </a>
                    </li>  
                      
                    <li>
                      <a href="https://www.weandyouevents.com/" target="_blank" >
                        <img src="images/members/We_&_You.jpg" alt="We_&_You" >
                      </a>
                    </li>  
                      
                    <li>
                      <a href="http://www.yogikripa.com/" target="_blank" >
                        <img src="images/members/sorget.jpg" alt="sorgen" >
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://www.maddesigns.in/" target="_blank" >
                        <img src="images/members/mad.jpg" alt="MAD" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.aspiraa.com/" target="_blank" >
                        <img src="images/members/Aspiraa.jpg" alt="Aspiraa" >
                      </a>
                    </li>

                    <li>
                      <a href="https://tri-nano.co/" target="_blank" >
                        <img src="images/members/tri-nan-tech.jpg" alt="TriNANO Technologies Pvt. Ltd. " >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.manojberiwala.com/" target="_blank" >
                        <img src="images/members/Manoj_Beriwala.jpg" alt="Manoj Beriwala" >
                      </a>
                    </li>

                    <li>
                      <a href="https://slightedges.net/" target="_blank" >
                        <img src="images/members/slightedges.jpg" alt="slightedges" >
                      </a>
                    </li>

                    <li>
                      <a href="https://msmefundexaa.in/" target="_blank" >
                        <img src="images/members/MSME_Fundexaa.jpg" alt="MSME Fundexaa" >
                      </a>
                    </li>

                    <li>
                      <a href="http://solfir.in/" target="_blank" >
                        <img src="images/members/solfir.jpg" alt="solfir" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.epicpursuit.in/" target="_blank" >
                        <img src="images/members/EPIC_Pursuit.jpg" alt="EPIC Pursuit" >
                      </a>
                    </li>

                    <li>
                      <a href="https://manbhalogistics.com/" target="_blank" >
                        <img src="images/members/MANBHA.jpg" alt="MANBHA" >
                      </a>
                    </li>

                    <li>
                      <a href="https://sginsurance.in/" target="_blank" >
                        <img src="images/members/SG_insurance.jpg" alt="SG Insurance" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.amsolutionskw.net/" target="_blank" >
                        <img src="images/members/AM_Solution.jpg" alt="AM Solution" >
                      </a>
                    </li>

                    <li>
                      <a href="http://www.teamcco.in/" target="_blank" >
                        <img src="images/members/TEAM_CCO.jpg" alt="TEAM CCO" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/VP.jpg" alt="vp" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/pivot.jpg" alt="pivot" >
                      </a>
                    </li>

                    <li>
                      <a href="https://vedakpro.tech/" target="_blank" >
                        <img src="images/members/vedak.jpg" alt="vedak" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.acetechindustries.com/" target="_blank" >
                        <img src="images/members/ACETECH.jpg" alt="ACETECH" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/NexaGen.jpg" alt="NexaGen Venture" >
                      </a>
                    </li>

                    <li>
                      <a href="https://bizzenablers.com/" target="_blank" >
                        <img src="images/members/business_enabler.jpg" alt="Business Enablers" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/Heena.jpg" alt="Heena Enterprises & Heenex International" >
                      </a>
                    </li>

                    <li>
                      <a href="https://truevaluemarketing.in/" target="_blank" >
                        <img src="images/members/Granules.jpg" alt="Truevalue Marketing Services Pvt. Ltd. ( Granules n Beans)" >
                      </a>
                    </li>

                    <li>
                      <a href="http://www.indigateway.com/" target="_blank" >
                        <img src="images/members/ShopGlobal.jpg" alt="Shop Global" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/BeyondMatrix.jpg" alt="Beyond Matrix" >
                      </a>
                    </li>

                    <li>
                      <a href="https://candbindia.com/" target="_blank" >
                        <img src="images/members/consulting_beyond-1.jpg" alt="consulting beyond" >
                      </a>
                    </li>

                    <li>
                      <a href="https://biscraftfoods.com/" target="_blank" >
                        <img src="images/members/neshiel_ventures.jpg" alt="Neshiel Ventures" >
                      </a>
                    </li>

                    <li>
                      <a href="https://pepagora.com/en" target="_blank" >
                        <img src="images/members/pepagora.jpg" alt="pepagora" >
                      </a>
                    </li>
                    <li>
                      <a href="https://aparajitha.com/" target="_blank" >
                        <img src="images/members/Aparajitha.jpg" alt="Aparajitha" >
                      </a>
                    </li>

                    <li>
                      <a href="https://bricscorp.in/" target="_blank" >
                        <img src="images/members/BRICS.jpg" alt="BRICS" >
                      </a>
                    </li>

                    <li>
                      <a href="https://abrakadabra.in/" target="_blank" >
                        <img src="images/members/abrakadabra.jpg" alt="abrakadabra" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.indiamart.com/mhjaveriansons/aboutus.html" target="_blank" >
                        <img src="images/members/javerians_saffron.jpg" alt="javerians_saffron" >
                      </a>
                    </li>

                    <li>
                      <a href="https://uhipl.com/" target="_blank" >
                        <img src="images/members/uhipl.jpg" alt="uhipl" >
                      </a>
                    </li>

                    <li>
                      <a href="https://shrivatsalegal.com/home.php" target="_blank" >
                        <img src="images/members/Shrivatsa.jpg" alt="Shrivatsa" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.teknomee.com/" target="_blank" >
                        <img src="images/members/teknomee.jpg" alt="teknomee" >
                      </a>
                    </li>

                    <li>
                      <a href="https://bizedgeprofits.com/" target="_blank" >
                        <img src="images/members/BizEdge.jpg" alt="BizEdge" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.midsongroup.com/" target="_blank" >
                        <img src="images/members/midson.jpg" alt="midson advisors" >
                      </a>
                    </li>

                    <li>
                      <a href="PDF/Aakash_Electricals.pdf" target="_blank" >
                        <img src="images/members/Aakash.jpg" alt="Aakash Electricals" >
                      </a>
                    </li>

                    <li>
                      <a href="https://vip.in/" target="_blank" >
                        <img src="images/members/VIP.jpg" alt="VIP Clothing Ltd." >
                      </a>
                    </li>

                    <li>
                      <a href="https://fitfinwealthimf.in/" target="_blank" >
                        <img src="images/members/FitFin.jpg" alt="FitFin" >
                      </a>
                    </li>

                    <li>
                      <a href="https://aaltophealthcare.com/" target="_blank" >
                        <img src="images/members/aaltop.jpg" alt="aaltop" >
                      </a>
                    </li>

                    <li>
                      <a href="https://pustiramarketing.com/" target="_blank" >
                        <img src="images/members/Pustira.jpg" alt="Pustira Marketing LLP" >
                      </a>
                    </li>

                    <li>
                      <a href="https://18northsystems.com/" target="_blank" >
                        <img src="images/members/18North.jpg" alt="18North" >
                      </a>
                    </li>

                    <li>
                      <a href="https://drytecindustries.com/" target="_blank" >
                        <img src="images/members/absorbent.jpg" alt="absorbent" >
                      </a>
                    </li>

                    <li>
                      <a href="https://sparsha.com/" target="_blank" >
                        <img src="images/members/sparsha.jpg" alt="sparsha" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.linkedin.com/company/assets-aims-consultant-private-limited/?originalSubdomain=in" target="_blank" >
                        <img src="images/members/assets_aim.jpg" alt="NP-AV" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.npav.net/" target="_blank" >
                        <img src="images/members/NP-AV-Logo.jpg" alt="NP-AV" >
                      </a>
                    </li>

                    <li>
                      <a href="https://sksscbs.somaiya.edu/en" target="_blank" >
                        <img src="images/members/somaiya.jpg" alt="somaiya" >
                      </a>
                    </li>

                    <li>
                      <a href="https://profoundconsulting.in/" target="_blank" >
                        <img src="images/members/profound.jpg" alt="profound" >
                      </a>
                    </li>

                    <li>
                      <a href="https://microsafeaqua.com/" target="_blank" >
                        <img src="images/members/Microsafe-Aqua.jpg" alt="Microsafe-Aqua" >
                      </a>
                    </li>

                    <li>
                      <a href="https://balancedchemistry.com/" target="_blank" >
                        <img src="images/members/balanced.jpg" alt="balanced" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.globestar.co.in/" target="_blank" >
                        <img src="images/members/globestar.jpg" alt="Globe Star" >
                      </a>
                    </li>

                    <li>
                      <a href="https://passionpreneur.in/author/passion/" target="_blank" >
                        <img src="images/members/Raymond.jpg" alt="Raymond" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.mezzanineequity.co.in/" target="_blank" >
                        <img src="images/members/mezzanine.jpg" alt="mezzanine" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.bizinsightiq.com" target="_blank" >
                        <img src="images/members/BizView.jpg" alt="BizView" >
                      </a>
                    </li>

                    <li>
                      <a href="https://tmservices.co.in/" target="_blank" >
                        <img src="images/members/Team.jpg" alt="Team" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/Raghav.jpg" alt="Raghav" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.gkginvestments.in/" target="_blank" >
                        <img src="images/members/GKG.jpg" alt="gkginvestments" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.sikkas.com/" target="_blank" >
                        <img src="images/members/sikkas.jpg" alt="sikkas" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/sanjeevani.jpg" alt="sanjeevani" >
                      </a>
                    </li>

                    <li>
                      <a href="https://elconengineers.com/" target="_blank" >
                        <img src="images/members/elcon.jpg" alt="elconengineers" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.fimas.co.in/" target="_blank" >
                        <img src="images/members/Fimas.jpg" alt="Fimas" >
                      </a>
                    </li>


                    <li>
                      <a href="https://www.aliff.in/" target="_blank" >
                        <img src="images/members/aliff.jpg" alt="aliff" >
                      </a>
                    </li>

                    <li>
                      <a href="https://thankamfinance.in/" target="_blank" >
                        <img src="images/members/THANKAM.jpg" alt="THANKAM" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.linkedin.com/in/adityakothavale/" target="_blank" >
                        <img src="images/members/sona.jpg" alt="sona" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/akansha.jpg" alt="Akanksha" >
                      </a>
                    </li>

                    
                    <li>
                      <a href="https://roadmapit.com/" target="_blank" >
                        <img src="images/members/roadmap.jpg" alt="roadmapit" >
                      </a>
                    </li>

                    <li>
                      <a href="https://creative-network.in/" target="_blank" >
                        <img src="images/members/creative.jpg" alt="Creative Network" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.avbglobal.com/" target="_blank" >
                        <img src="images/members/AVB_global.jpg" alt="AVB_global" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.vikarsh.com/" target="_blank" >
                        <img src="images/members/Vikarsh.jpg" alt="Vikarsh" >
                      </a>
                    </li>

                     <li>
                      <a href="https://aikyamcap.com/" target="_blank" >
                        <img src="images/members/aikyam.jpg" alt="aikyam" >
                      </a>
                    </li>

                    <li>
                      <a href="https://aikyamcap.com/" target="_blank" >
                        <img src="images/members/MENKO.jpg" alt="MENKO" >
                      </a>
                    </li>


                    <li>
                      <a href="https://wisdomxtra.com/" target="_blank" >
                        <img src="images/members/wisdomxtra.jpg" alt="wisdomxtra" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.kartikayassociates.com/" target="_blank" >
                        <img src="images/members/kartikay.jpg" alt="kartikayassociates" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.talkk.tech/" target="_blank" >
                        <img src="images/members/talk.jpg" alt="talkk.tech" >
                      </a>
                    </li>

                    <li>
                      <a href="https://zencon.co.in/" target="_blank" >
                        <img src="images/members/zencon.jpg" alt="zencon" >
                      </a>
                    </li>

                    <li>
                      <a href="https://howframeworks.com/" target="_blank" >
                        <img src="images/members/Framework.jpg" alt="Framework" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.kratuenergy.in/" target="_blank" >
                        <img src="images/members/kratuenergy.jpg" alt="kratuenergy" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.jtm.global/" target="_blank" >
                        <img src="images/members/JTM.jpg" alt="JTM" >
                      </a>
                    </li>

                    <li>
                      <a href="https://vayanatradexchange.com/" target="_blank" >
                        <img src="images/members/vayana.jpg" alt="vayana" >
                      </a>
                    </li>

                    <li>
                      <a href="https://vritti.co.in/" target="_blank" >
                        <img src="images/members/vritti.jpg" alt="vritti" >
                      </a>
                    </li>

                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/rare_and_real.jpg" alt="rare_and_real" >
                      </a>
                    </li>

                    

                    <li>
                      <a href="https://www.vidhigyaassociates.com/" target="_blank" >
                        <img src="images/members/vidhigya.jpg" alt="vidhigya" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.rhomboidfinguru.com/" target="_blank" >
                        <img src="images/members/rhomboid.jpg" alt="rhomboid" >
                      </a>
                    </li>

                     <li>
                      <a href="https://www.morphtech.in/" target="_blank" >
                        <img src="images/members/morphtech.jpg" alt="morphtech" > 
                      </a>
                    </li>

                    <li>
                      <a href="https://nsassociates.co.in/" target="_blank" >
                        <img src="images/members/vivaan.jpg" alt="vivaan" >
                      </a>
                    </li>

                    <li>
                      <a href="https://chaitanyagroup.info/" target="_blank" >
                        <img src="images/members/chaitanya_corp.jpg" alt="chaitanya_corp" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.mcbbuildcon.com/" target="_blank" >
                        <img src="images/members/buildcon.jpg" alt="buildcon" >
                      </a>
                    </li>

                    <li>
                      <a href="https://lexbridge.in/" target="_blank" >
                        <img src="images/members/lex_bridge.jpg" alt="lex_bridge" >
                      </a>
                    </li>

                    <li>
                      <a href="https://thewindystreet.com/" target="_blank" >
                        <img src="images/members/windy.jpg" alt="windy" >
                      </a>
                    </li>

                    <li>
                      <a href="https://rlawchambers.com/" target="_blank" >
                        <img src="images/members/law_chamber.jpg" alt="law chamber" >
                      </a>
                    </li>

                   <li>
                      <a href="https://homecoat.in/" target="_blank" >
                        <img src="images/members/Homecoat.jpg" alt="Homecoat" >
                      </a>
                    </li>
                    
                    <li>
                      <a href="https://www.sukrutelectric.com/" target="_blank" >
                        <img src="images/members/sukrut.jpg" alt="sukrutelectric" >
                      </a>
                    </li>

                    <li>
                      <a href="https://aroopatech.com/" target="_blank" >
                        <img src="images/members/aroopatech-1.jpg" alt="aroopatech" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.linkedin.com/in/bharat-mehta-09680861/" target="_blank" >
                        <img src="images/members/aakar.jpg" alt="aakar" >
                      </a>
                    </li>

                    <li>
                      <a href="https://offers.raveenchugani.com/44926/coachraveen" target="_blank" >
                        <img src="images/members/waveshift.jpg" alt="waveshift" >
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/plus.jpg" alt="plus" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.canaryagro.com/" target="_blank" >
                        <img src="images/members/canary.jpg" alt="canaryagro" >
                      </a>
                    </li>
                    <li>
                      <a href="https://freshengo.com/" target="_blank" >
                        <img src="images/members/freshengo.jpg" alt="freshengo" >
                      </a>
                    </li>
                    <li>
                      <a href="https://nsrm.in/" target="_blank" >
                        <img src="images/members/NSRM.jpg" alt="NSRM" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.indiamart.com/mangalcamtronics/" target="_blank" >
                        <img src="images/members/parmar.jpg" alt="parmar" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.htshah.com/" target="_blank" >
                        <img src="images/members/H_T_SHAH.jpg" alt="H T SHAH" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.geetaengineering.net/" target="_blank" >
                        <img src="images/members/geeta_precision.jpg" alt="geeta precision" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.geetaengineering.net/" target="_blank" >
                        <img src="images/members/geeta_engg.jpg" alt="geeta engg" >
                      </a>
                    </li>
                    <li>
                      <a href="https://avaelma.com/" target="_blank" >
                        <img src="images/members/AVA_ELMA.jpg" alt="Ava Elma College" >
                      </a>
                    </li>
                    <li>
                      <a href="https://bbgebranding.com/" target="_blank" >
                        <img src="images/members/eBranding_india.jpg" alt="eBranding India" >
                      </a>
                    </li>
                    <li>
                      <a href="https://shrisadgurudattaraj.in/" target="_blank" >
                        <img src="images/members/SADGURU.jpg" alt="SADGURU" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.hpconsulting.co.in/" target="_blank" >
                        <img src="images/members/consulting.jpg" alt="hpconsulting" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.universalsompo.com/" target="_blank" >
                        <img src="images/members/Universal_Sompo.jpg" alt="Universal_Sompo" >
                      </a>
                    </li> 
                    <li>
                      <a href="https://capitalcrafter.com/" target="_blank" >
                        <img src="images/members/capital.jpg" alt="capitalcrafter" >
                      </a>
                    </li>
                    <li>
                      <a href="https://vertexedgetech.com/" target="_blank" >
                        <img src="images/members/vertex.jpg" alt="vertex" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.conmove.io/" target="_blank" >
                        <img src="images/members/conmove.jpg" alt="conmove" >
                      </a>
                    </li>
                    <li>
                      <a href="https://everaspire.in/" target="_blank" >
                        <img src="images/members/everaspire.jpg" alt="everaspire" >
                      </a>
                    </li> 
                    <li>
                      <a href="https://www.ngen-group.com/" target="_blank" >
                        <img src="images/members/nv-gen-automation.jpg" alt="nv-gen-automation" >
                      </a>
                    </li>
                    <li>
                      <a href="https://orbittal.com/" target="_blank" >
                        <img src="images/members/orbittal.jpg" alt="orbittal" >
                      </a>
                    </li>
                    <li>
                      <a href="https://xenofive.com/" target="_blank" >
                        <img src="images/members/xeno.jpg" alt="xeno five" >
                      </a>
                    </li> 
                    <li>
                      <a href="https://capwingeprm.com/" target="_blank" >
                        <img src="images/members/CWF.jpg" alt="CWF" >
                      </a>
                    </li>                             

                    <!--<li>
                      <a href="https://www.kson.in/" target="_blank" >
                        <img src="images/members/k_sons.jpg" alt="k_sons" >
                      </a>
                    </li>-->   

                    <li>
                      <a href="https://thoughtpool.in/" target="_blank" >
                        <img src="images/members/thoughtpool.jpg" alt="thoughtpool" >
                      </a>
                    </li> 

                    <li>
                      <a href="https://www.sbanjan.com/" target="_blank" >
                        <img src="images/members/banjan.jpg" alt="banjan" >
                      </a>
                    </li>  

                    <!--<li>
                      <a href="https://leocapitaladvisor.in/" target="_blank" >
                        <img src="images/members/leo_capital.jpg" alt="leo_capital" >
                      </a>
                    </li> -->  

                    <li>
                      <a href="https://glasbaservices.com/" target="_blank" >
                        <img src="images/members/GLASBA.jpg" alt="GLASBA" >
                      </a>
                    </li>   

                    <li>
                      <a href="https://mohitks.com/" target="_blank" >
                        <img src="images/members/MKS.jpg" alt="MKS" >
                      </a>
                    </li>  
                    <li>
                      <a href="https://www.parrami.com/" target="_blank" >
                        <img src="images/members/parami.jpg" alt="parami" >
                      </a>
                    </li> 
                    <li>
                      <a href="https://www.newagesecure.com/" target="_blank" >
                        <img src="images/members/secure.jpg" alt="newagesecure" >
                      </a>
                    </li> 
                    <li>
                      <a href="https://vaspro-global.com/" target="_blank" >
                        <img src="images/members/vaspro.jpg" alt="vaspro" >
                      </a>
                    </li> 

                    <li>
                      <a href="https://chevron-shipping.com/" target="_blank" >
                        <img src="images/members/chevron.jpg" alt="chevron" >
                      </a>
                    </li> 

                    <li>
                      <a href="https://jointworksolutions.com/" target="_blank" >
                        <img src="images/members/jointworkssolutions.jpg" alt="joint works solutions" >
                      </a>
                    </li>

                    <li>
                      <a href="https://iridiumcoaching.com/" target="_blank" >
                        <img src="images/members/iridium.jpg" alt="Iridium Coaching" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.accsolms.com/" target="_blank" >
                        <img src="images/members/ACCSOL.jpg" alt="ACCSOL" >
                      </a>
                    </li>
                    <li>
                      <a href="https://factoryspace.ai/" target="_blank" >
                        <img src="images/members/factory.jpg" alt="factory space" >
                      </a>
                    </li>

                    <li>
                      <a href="https://truformengineers.com/" target="_blank" >
                        <img src="images/members/tru_form.jpg" alt="tru_form" >
                      </a>
                    </li>

                    <li>
                      <a href="https://www.athena-logistics.com/" target="_blank" >
                        <img src="images/members/athena.jpg" alt="athena" >
                      </a>
                    </li>                                
                    <li>
                      <a href="https://www.revaprocess.in/" target="_blank" >
                        <img src="images/members/REVA.jpg" alt="REVA" > 
                      </a>
                    </li>
                              
                    <!--<li>
                      <a href="https://sjlogistics.co.in/" target="_blank" >
                        <img src="images/members/S_J_logistics.jpg" alt="S_J_logistics" > 
                      </a>
                    </li>-->

                    <li>
                      <a href="https://v-vabvision.in/" target="_blank" >
                        <img src="images/members/v_veb.jpg" alt="v-vabvision" > 
                      </a>
                    </li>
                            
                    <li>
                      <a href="https://www.wavar.co.in/" target="_blank" >
                        <img src="images/members/wavar.jpg" alt="wavar" > 
                      </a>
                    </li>
                            
                    <li>
                      <a href="https://3stechs.in/" target="_blank" >
                        <img src="images/members/3StechS.jpg" alt="3StechS" > 
                      </a>
                    </li>                            
                            
                    <li>
                      <a href="https://www.businessrevivalindia.com/" target="_blank" >
                        <img src="images/members/business_reviva.jpg" alt="business_reviva" > 
                      </a>
                    </li>
                              
                   
                    <li>
                      <a href="https://www.indigateway.com/" target="_blank" >
                        <img src="images/members/sunark.jpg" alt="sunark" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://www.alaziz.com/home/" target="_blank" >
                        <img src="images/members/al_aziz.jpg" alt="al_aziz" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://www.daa-india.com/" target="_blank" >
                        <img src="images/members/DAA.jpg" alt="DAA" > 
                      </a>
                    </li>

                    <li>
                      <a href="https://www.bareco.in/" target="_blank" >
                        <img src="images/members/Bareco.jpg" alt="Bareco" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://www.mangalorganics.com/" target="_blank" >
                        <img src="images/members/mangal1.jpg" alt="mangal organics" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://vit.edu.in/" target="_blank" >
                        <img src="images/members/VIT.jpg" alt="Vidyalankar Institute of Technology" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://warpp.co.in/" target="_blank" >
                        <img src="images/members/arpp.jpg" alt="apt" > 
                      </a>
                    </li>
                      <a href="https://www.apt-resources.com/" target="_blank" >
                        <img src="images/members/apt.jpg" alt="apt" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://plastocity.com/" target="_blank" >
                        <img src="images/members/Plastocity.jpg" alt="Plastocity" > 
                      </a>
                    </li>
                               
                    <li>
                      <a href="https://www.conceptengineersindia.in/" target="_blank" >
                        <img src="images/members/concept.jpg" alt="concept" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://coincap.com/" target="_blank" >
                        <img src="images/members/coincap.jpg" alt="COINCAP" > 
                      </a>
                    </li>
                    <li>
                      <a href="https://swadish.co/" target="_blank" >
                        <img src="images/members/swadish.jpg" alt="swadish" > 
                        </a>
                    </li>
                    <li>
                      <a href="http://www.hmaca.in/" target="_blank" >
                        <img src="images/members/CA_India.jpg" alt="C A India" >
                      </a>
                    </li>
                    <li>
                      <a href="https://phenomcoaching.com/" target="_blank" >
                        <img src="images/members/phenom.jpg" alt="Phenom Coaching Systems LLP" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.propertyangel.in/" target="_blank" >
                        <img src="images/members/angel.jpg" alt="Property Angel" >
                      </a>
                    </li>
                    <li>
                      <a href="http://www.standardequipment.co.in/" target="_blank" >
                        <img src="images/members/standard.jpg" alt="standard" >
                      </a>
                    </li>
                    <li>
                      <a href="https://mikurainternational.com/" target="_blank" >
                        <img src="images/members/mikura.jpg" alt="mikura" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.precihole.com/" target="_blank" >
                        <img src="images/members/precihole.jpg" alt="Precihole Machine Tools" >
                      </a>
                    </li>
                    <li>
                      <a href="https://blueoceanshr.com/" target="_blank" >
                        <img src="images/members/blue_oceans.jpg" alt="Blue Oceans" >
                      </a>
                    </li>
                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/excel_quest.jpg" alt="excel quest" >
                      </a>
                    </li>
                    <li>
                      <a href="https://gehiplastic.co.in/" target="_blank" >
                        <img src="images/members/sai_plastic.jpg" alt="SAi Plastic" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.helik.in/" target="_blank" >
                        <img src="images/members/helik.jpg" alt="helik" >
                      </a>
                    </li>
                    <li>
                      <a href="http://www.mswpl.com/" target="_blank" >
                        <img src="images/members/MSWPL.jpg" alt="MSWPL" >
                      </a>
                    </li>
                    <!--<li>
                      <a href="https://www.leremitt.com/" target="_blank" >
                        <img src="images/members/LeRemitt.jpg" alt="Sambhav" >
                      </a>
                    </li>-->
                    <li>
                      <a href="http://www.kjshipping.in/" target="_blank" >
                        <img src="images/members/kjs.jpg" alt="kjs" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.advaitbusiness.com/" target="_blank" >
                        <img src="images/members/advait.jpg" alt="advait" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://in.linkedin.com/in/shreeshjamdar" target="_blank" >
                        <img src="images/members/sambhav.jpg" alt="Sambhav" >
                      </a>
                    </li>              
              
                    <li>
                      <a href="https://vibraindustries.com/" target="_blank" >
                        <img src="images/members/VIBRA.jpg" alt="VIBRA INDUSTRIES" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://www.infosoftjoin.in/" target="_blank" >
                        <img src="images/members/infosoft.jpg" alt="Infosoft Join" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://www.adititoolings.in/" target="_blank" >
                        <img src="images/members/Aditi-Toolings.jpg" alt="Aditi Toolings" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.multirecruit.com/" target="_blank" >
                        <img src="images/members/multi_recruit.jpg" alt="multi recruit" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.cardolite.com/" target="_blank" >
                        <img src="images/members/cardolite.jpg" alt="cardolite" >
                      </a>
                    </li>
                    <li>
                      <a href="https://www.nichi.com/" target="_blank" >
                        <img src="images/members/nichi.jpg" alt="Nichi-In" >
                      </a>
                    </li>
                 
                    <li>
                      <a href="https://ucs.vacbuildcare.com/" target="_blank" >
                        <img src="images/members/UCS.jpg" alt="Unified Construction Services" >
                      </a>
                    </li>
                    <li>
                      <a href="https://srinilink.com/" target="_blank" >
                        <img src="images/members/SRINILINK.jpg" alt="SRINI LINK" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://atkonnectt.com/" target="_blank" >
                        <img src="images/members/AtKonnect.jpg" alt="AtKonnectt Redefiningg Businesses" >
                      </a>
                    </li>
                    <li>
                      <a href="https://nirmitiprecision.com/" target="_blank" >
                        <img src="images/members/NPPL.jpg" alt="Nirmiti Precision" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://technowaters.com/" target="_blank" >
                        <img src="images/members/techno.jpg" alt="Techno Water" >
                      </a>
                    </li>            
                    <li>
                      <a href="https://aplusatech.com/" target="_blank" >
                        <img src="images/members/aplusa.jpg" alt=" AplusA Technologies Pvt. Ltd." >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://www.terahertzengg.com/" target="_blank" >
                        <img src="images/members/terahertz.jpg" alt="Terahertz Engineering Services Pvt. Ltd." >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://finnup.in/" target="_blank" >
                        <img src="images/members/finnup.jpg" alt="FinnUp Solutions Pvt Ltd" >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://www.pranjal.co.in/" target="_blank" >
                        <img src="images/members/pranjal.jpg" alt="Pranjal Group" >
                      </a>
                    </li>
              
                    <li>
                      <a href="https://www.saawariyaenterprise.com/" target="_blank" >
                        <img src="images/members/saavariya.jpg" alt="Saawariya Enterprise" >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://www.pazago.com/" target="_blank" >
                        <img src="images/members/pazago.jpg" alt="Pazago" >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://www.linkedin.com/in/mahendra-arya-42059a17" target="_blank" >
                        <img src="images/members/buransh.jpg" alt="buransh capital management services" >
                      </a>
                    </li>
                    <li>
                      <a href="https://uginfotek.com/" target="_blank" >
                        <img src="images/members/infotek.jpg" alt="UGInfotek " >
                      </a>
                    </li>
                    <li>
                      <a href="http://www.mjomegasolution.in/" target="_blank" >
                        <img src="images/members/mjomega1.jpg" alt="MJOMEGA SOLUTIONS PRIVATE LIMITED" >
                      </a>
                    </li>
                            
                    <li>
                      <a href="https://www.unitedengineersindia.in/" target="_blank" >
                        <img src="images/members/united.jpg" alt="United Engineers And Consultants" >
                      </a>
                    </li>
                               
                    <li>
                      <a href="https://www.preminfra.com/" target="_blank" >
                        <img src="images/members/Prem.jpg" alt="Prem Engineering and Infra Projects " >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://www.facebook.com/p/Dhruv-Agro-Industries-100067758330567/" target="_blank" >
                        <img src="images/members/Dhruv.jpg" alt="Dhruv Agro Industries " >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://www.arthaarthwealth.com/" target="_blank" >
                        <img src="images/members/arthaarth.jpg" alt="Aarttarth Wealth Management Private Limited" >
                        </a>
                    </li>
                  
                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/marvelous.jpg" alt="Marvelous Engineers Private Limited" >
                      </a>
                    </li>
                
                    <li>
                      <a href="https://vesim.ves.ac.in/" target="_blank" >
                        <img src="images/members/vivekanand.jpg" alt="Vivekanand Education Society" >
                      </a>
                    </li>                
                
                    <li>
                      <a href="#" target="_blank" >
                        <img src="images/members/haute.jpg" alt="Haute Couture/ Beyond Z consulting LLP" >
                      </a>
                    </li>             
              
                    <li>
                      <a href="https://www.aiaims.edu.in/" target="_blank" >
                        <img src="images/members/allana.jpg" alt="ALLANA INSTITUTE OF MANAGEMENT STUDIES" >
                      </a>
                    </li>
                
                    <li>
                        <a href="https://www.schmersal.in/home" target="_blank" >
                            <img src="images/members/schmersal.jpg" alt="Schmersal Group" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.mslogistic.in/" target="_blank" >
                            <img src="images/members/MS_Logo.jpg" alt="M S Logistics" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://in.linkedin.com/in/durgeshbhatthr" target="_blank" >
                            <img src="images/members/beaconz.jpg" alt="Beaconz HR" >
                        </a>
                    </li>
              
                    <li>
                        <a href="#" target="_blank" >
                            <img src="images/members/elegant.jpg" alt="Elegant Success Impressions" >
                        </a>
                    </li>
              
                    <li>
                        <a href="https://wayar.in/" target="_blank" >
                            <img src="images/members/wayar.jpg" alt="Wayar" >
                        </a>
                    </li>
                 
                    <li>
                        <a href="https://www.sgphyto.com/" target="_blank" >
                            <img src="images/members/phyto.jpg" alt="S. G. PHYTO PHARMA PVT. LTD" >
                        </a>
                    </li>
                    
                    <li>
                        <a href="https://aarushfires.com/" target="_blank">
                            <img src="images/members/aarush.jpg" alt="Aarush Fire Systems Pvt. Ltd." >
                        </a>
                    </li>
                    <li>
                        <a href="https://www.krugerfan.com/" target="_blank" >
                            <img src="images/members/kruger.jpg" alt="Kruger Ventilation Industries (India) Private Limited" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.neshiel.com/" target="_blank" >
                            <img src="images/members/neshiel.jpg" alt="Neshiel Agrochem Private Limited" >
                        </a>
                    </li>
                    <li>
                        <a href="https://www.profectuscapital.com/" target="_blank" >
                            <img src="images/members/profectus.jpg" alt="Profectus Capital" >
                        </a>
                    </li>
                    <!--<li>
                        <a href="https://egogroupindia.com/" target="_blank" >
                            <img src="images/members/ego.jpg" alt="Ego Group India" >
                        </a>
                    </li>-->
              
                    <li>
                        <a href="https://www.bizzsetu.com/" target="_blank" >
                            <img src="images/members/bizzsetu.jpg" alt="BizzSetu" >
                        </a>
                    </li>
                    <li>
                        <a href="https://www.yujdesigns.com/" target="_blank" >
                            <img src="images/members/yuj.jpg" alt="yuj" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://cfocraft.com/" target="_blank" >
                            <img src="images/members/cfo_craft.jpg" alt="CFO CRAFT " >
                        </a>
                    </li>
                
                    <!--<li>
                        <a href="https://marcglocal.com/" target="_blank" >
                            <img src="images/members/mangal.jpg" alt="Mangal Analytics and Research Consulting (MARC)" >
                        </a>
                    </li>-->
                                                
                    <li>
                        <a href="https://bluwheelz.co.in/" target="_blank" >
                            <img src="images/members/bluwheelz.jpg" alt="BluWheelz" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.ericapparels.com/" target="_blank" >
                            <img src="images/members/eric.jpg" alt="ERIC APPAREL" >
                        </a>
                    </li>               
                 
                    <li>
                        <a href="http://www.ideasnu.com/" target="_blank" >
                            <img src="images/members/ideas_exports.jpg" alt="ideasnu" >
                        </a>
                    </li>
              
                    <li>
                        <a href="#" target="_blank" >
                            <img src="images/members/sixty.jpg" alt="Sixty" >
                        </a>
                    </li>
              
                    <!--<li>
                        <a href="https://sskotwal.in/" target="_blank" >
                            <img src="images/members/Shashank.jpg" alt="Shashank Kotwal & Associates" >
                        </a>
                    </li>-->
                
                    <li>
                        <a href="https://www.clubsurilimusic.com/" target="_blank" >
                            <img src="images/members/surili.jpg" alt="Club Surili Virasat" >
                        </a>
                    </li>
                    <li>
                        <a href="https://www.dtspl.in/" target="_blank" >
                            <img src="images/members/dynamic.jpg" alt="Dynamic Trans System Private Limited" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.paragonind.com/" target="_blank" >
                            <img src="images/members/paragon.jpg" alt="Paragon Fine And Speciality Chemical Limited" >
                        </a>
                    </li>
                    <li>
                        <a href="https://kpce.in/" target="_blank" >
                            <img src="images/members/kpce.jpg" alt="Khandelwal Pharma And Cosmetic Equipments" >
                        </a>
                    </li>
              
                    <li>
                        <a href="https://www.starflexifilms.com/" target="_blank" >
                            <img src="images/members/star.jpg" alt="STAR Flexi Film" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://hemochrom.com/" target="_blank" >
                            <img src="images/members/hemochrom.jpg" alt="Hemochrom" >
                        </a>
                    </li>
                  
                    <li>
                        <a href="https://bizicard.in/mvnarayan" target="_blank" >
                            <img src="images/members/N_K_Consultants.jpg" alt="N K Consultants" >
                        </a>
                    </li>
                    <li>
                        <a href="https://modilipiacc.com/" target="_blank" >
                            <img src="images/members/M0dilipi.jpg" alt="M0dilipi" >
                        </a>
                    </li>

                    <li>
                        <a href="https://fablas.com/" target="_blank" >
                            <img src="images/members/fablas.jpg" alt="fablas" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.gheewalajobs.com/" target="_blank" >
                            <img src="images/members/gheewala.jpg" alt="gheewala" >
                        </a>
                    </li>
                    <li>
                        <a href="https://inco.in/" target="_blank" >
                            <img src="images/members/inco.jpg" alt="inco" >
                        </a>
                    </li>
                                                
                    <li>
                        <a href="https://nikopas.com/" target="_blank" >
                            <img src="images/members/nkp.jpg" alt="nkp" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.techimbibe.com/" target="_blank" >
                            <img src="images/members/techimbibe.jpg" alt="techimbibe" >
                        </a>
                    </li>
                                
                    <li>
                        <a href="https://grabeco.in/" target="_blank">
                            <img src="images/members/grabec.jpg" alt="Schon Ultrawares Pvt. Ltd." >
                        </a>
                    </li>
                                
                    <li>
                        <a href="https://ogpteck.com/" target="_blank" >
                            <img src="images/members/ogp.jpg" alt="Om Gajanan Packaging" >
                        </a>
                    </li>
                
                    <li>
                        <a href="https://www.chembizintl.com/" target="_blank" >
                            <img src="images/members/chembiz.jpg" alt="Chembizintl Solutions Private Limited" >
                        </a>
                    </li>
                    <li>
                        <a href="https://vseconsultants.com/" target="_blank" >
                            <img src="images/members/vsec.jpg" alt="VijayaSankalpa Engineers & Consultants Pvt. Ltd" >
                        </a>
                    </li>
                    <li>
                        <a href="https://prempower.in/" target="_blank" >
                            <img src="images/members/prem_power.jpg" alt="PREM POWER PRODUCTS LLP." >
                        </a>
                    </li>                    
                            </ul>  
                        </div>
                    </div>
                </div>
            </section>

            <?php include("footer.php"); ?>
            
        </div>
    </body>
</html>