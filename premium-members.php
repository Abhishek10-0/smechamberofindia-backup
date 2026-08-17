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
                                <h2 class="premium-title">Premium Members</h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="row">
                        <div class="col-md-12">
                            <ul class="partners">
                                <li>
						  
                <a href="https://www.lmlrealty.com/" target="_blank" >
                  <img src="images/members/LML.jpg" alt="LML Realty" >
                </a>
              </li>

              <li>
                <a href="https://www.coface.co.in/" target="_blank" >
                  <img src="images/members/coface.jpg" alt="Coface India credit Management Services Private Limited" >
                </a>
              </li>

              <li>
                <a href="https://www.winspiresolutions.in/" target="_blank" >
                  <img src="images/members/winspire.jpg" alt="Winspire Solutions" >
                </a>
              </li>

              <li>
                <a href="#" target="_blank" >
                  <img src="images/members/punarvasu.jpg" alt="punarvasu" >
                </a>
              </li>
              <li>
                <a href="https://www.1100acres.in/" target="_blank" >
                  <img src="images/members/Jain.jpg" alt="S K Jain Group" >
                </a>
              </li>
              <li>
                <a href="#" target="_blank" >
                  <img src="images/members/agrotech.jpg" alt="agrotech" >
                </a>
              </li>
            	<li>
	              <a href="https://www.b2kanalytics.com/" target="_blank" >
	                <img src="images/members/B2K-Analytics.jpg" alt="B2K-Analytics" >
	              </a>
            	</li> 
              <li>
                <a href="https://fcghitech.com/" target="_blank" >
                  <img src="images/members/FCG.jpg" alt="FCG Hi-TECH PVT. LTD " >
                </a>
              </li>  
              <li>
                <a href="https://www.solaron.co.in/" target="_blank" >
                  <img src="images/members/Solaron.jpg" alt="Solaron Homes Pvt Ltd" >
                </a>
              </li>  
              <li>
                <a href="https://www.neha-exports.com/" target="_blank" >
                  <img src="images/members/neha.jpg" alt="neha export" >
                </a>
              </li>
              <li>
                <a href="https://metbhujbalknowledgecity.ac.in/" target="_blank" >
                  <img src="images/members/MET_bhujbal.jpg" alt="MET_bhujbal" >
                </a>
              </li>  
              <li>
                <a href="https://www.mah-international.com/" target="_blank" >
                  <img src="images/members/mah_international.jpg" alt="mah_international" >
                </a>
              </li>
              <li>
                <a href="http://www.raajroadline.com/" target="_blank" >
                  <img src="images/members/raaj.jpg" alt="Raaj Roadline" >
                </a>
              </li>
              <li>
                <a href="https://omvirasmarineservices.com/" target="_blank" >
                  <img src="images/members/Omviras.jpg" alt="Omviras" >
                </a>
              </li>
              <li>
                <a href="https://questcoworks.in/" target="_blank" >
                  <img src="images/members/quest.jpg" alt="quest" >
                </a>
              </li>
              <li>
                <a href="https://www.ladderupwealth.com/" target="_blank" >
                  <img src="images/members/ladderup.jpg" alt="ladderup" >
                </a>
              </li>
              <li>
                <a href="https://www.magnewin.com/" target="_blank" >
                  <img src="images/members/magnewin.jpg" alt="magnewin" >
                </a>
              </li>
              <li>
                <a href="https://www.technogreenindia.in/" target="_blank" >
                  <img src="images/members/Technogreen.jpg" alt="Technogreen" >
                </a>
              </li>
              <li>
                <a href="https://www.glasnostindia.com/" target="_blank" >
                  <img src="images/members/Glasnost_India.jpg" alt="Glasnost India" >
                </a>
              </li>
              <li>
                <a href="https://htkr.in/" target="_blank" >
                  <img src="images/members/HTKR.jpg" alt="HTKR" >
                </a>
              </li>
                  <li>
                    <a href="https://asianconsulting.co.in/" target="_blank" >
                      <img src="images/members/asianconsulting.jpg" alt="asianconsulting" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.globalengineers.co.in/" target="_blank" >
                      <img src="images/members/global_engineers.jpg" alt="globalengineers" >
                    </a>
                  </li>  
                  <li>
                    <a href="https://wardwizard.in/" target="_blank" >
                      <img src="images/members/wizard.jpg" alt="wizard" >
                    </a>
                  </li>  
                  <li>
                    <a href="https://essjayinfo.com/" target="_blank" >
                      <img src="images/members/infosystem.jpg" alt="infosystem" >
                    </a>
                  </li>  
                  <li>
                    <a href="https://www.encongroup.co.in/" target="_blank" >
                      <img src="images/members/Encon.jpg" alt="Encon" >
                    </a>
                  </li>  
                  <li>
                    <a href="https://www.unifabengg.com/" target="_blank" >
                      <img src="images/members/unifabengg.jpg" alt="unifabengg" >
                    </a>
                  </li>
                  <li>
                    <a href="http://www.enact-engineering.in/" target="_blank" >
                      <img src="images/members/enact.jpg" alt="enact" >
                    </a>
                  </li>
                  <li>
                    <a href="https://indcoil.com/" target="_blank" >
                      <img src="images/members/indcoil.jpg" alt="indcoil" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.poonaswitchgears.com/" target="_blank" >
                      <img src="images/members/poona.jpg" alt="poona switchgears" >
                    </a>
                  </li>
                  <li>
                    <a href="https://thegujratnagrikcreditsahakarimandaliltd.in/" target="_blank" >
                      <img src="images/members/gujarat.jpg" alt="The Gujarat Nagrik Credit Sahakari Mandali Ltd." >
                    </a>
                  </li>
                  <li>
                    <a href="https://sabarichemicals.lookchem.com/" target="_blank" >
                      <img src="images/members/sabari.jpg" alt="sabari" >
                    </a>
                  </li>
                  <li>
                    <a href="www.sourabh-ads.com" target="_blank" >
                      <img src="images/members/saurabh.jpg" alt="saurabh" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ivxlubes.com/" target="_blank" >
                      <img src="images/members/IVX_Logo.jpg" alt="IVX_Logo" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.celcius.in/" target="_blank" >
                      <img src="images/members/celcius.jpg" alt="celcius" >
                    </a>
                  </li>
                  <li>
                    <a href="https://clean-hedge.com/" target="_blank" >
                      <img src="images/members/clean_hedge.jpg" alt="clean_hedge" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.google.com/maps/dir//wiresys+auto/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3bddedf31ce9fadb:0x2bb936d7f4ebe92f?sa=X&ved=1t:3061&ictx=111" target="_blank" >
                      <img src="images/members/wiresys.jpg" alt="wiresys" >
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank" >
                      <img src="images/members/indicon.jpg" alt="indicon" >
                    </a>
                  </li>
                  <li>
                    <a href="https://polestarconsulting.co.in/" target="_blank" >
                      <img src="images/members/polestar.jpg" alt="polestar" >
                    </a>
                  </li>
                  <li>
                    <a href="https://oxxyy.com/" target="_blank" >
                      <img src="images/members/oxxyy.jpg" alt="Oxxyy Tech" >
                    </a>
                  </li>
                  <li>
                    <a href="https://himak.in/" target="_blank" >
                      <img src="images/members/Himak.jpg" alt="Himak" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.balkrishnatextiles.com/" target="_blank" >
                      <img src="images/members/Balkrishna.jpg" alt="Balkrishna" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.maksteelindia.com/" target="_blank" >
                      <img src="images/members/Masksteel.jpg" alt="Masksteel" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.bpspices.in/" target="_blank" >
                      <img src="images/members/bpspices.jpg" alt="bpspices" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.finfinity.co.in/" target="_blank" >
                      <img src="images/members/finfinity1.jpg" alt="finfinity" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.keka.com/" target="_blank" >
                      <img src="images/members/keka.jpg" alt="Keka" >
                    </a>
                  </li>
                  <li>
                    <a href="https://play.google.com/store/apps/details?id=com.gscadavantage.gsc&hl=en_US&pli=1" target="_blank" >
                      <img src="images/members/suphub.jpg" alt="suphub" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.cleancoats.com/" target="_blank" >
                      <img src="images/members/Clean_Coat.jpg" alt="Clean Coat" > 
                    </a>
                  </li>
                  <li>
                    <a href="https://techera.co.in/" target="_blank" >
                      <img src="images/members/tech_era.jpg" alt="Tech Era" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.jayelastomers.com/" target="_blank" >
                      <img src="images/members/jayelastomers.jpg" alt="jay elastomers" >
                    </a>
                  </li>
                  <li>
                    <a href="https://empirecentrum.com/" target="_blank" >
                      <img src="images/members/empire.jpg" alt="Empire Centrum" >
                    </a>
                  </li>
                  <li>
                    <a href="https://kkassociates.co.in/" target="_blank" >
                      <img src="images/members/Associate.jpg" alt="K K Associates" >
                    </a>
                  </li>
                  <li>
                    <a href="https://saspack.in/" target="_blank" >
                      <img src="images/members/saspack.jpg" alt="saspack" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.buypetrova.com/" target="_blank" >
                      <img src="images/members/hertz.jpg" alt="Hertz Chemicals Private Limited" >
                    </a>
                  </li>
                  <li>
                    <a href="https://swissgarnier.com/" target="_blank" >
                      <img src="images/members/swiss_garnier.jpg" alt="swiss garnier" >
                    </a>
                  </li>
                  <li>
                    <a href="http://airflow.in/" target="_blank" >
                      <img src="images/members/air_flow.jpg" alt="AIRFLOW" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.ecfos.in/" target="_blank" >
                      <img src="images/members/ecfo.jpg" alt="ECFOs" >
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank" >
                      <img src="images/members/shitter.jpg" alt="shitter" >
                    </a>
                  </li>
                  <li>
                    <a href="https://capwisefin.com/" target="_blank" >
                      <img src="images/members/capwise.jpg" alt="Capwise" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.aeroflexindia.com/" target="_blank" >
                      <img src="images/members/aeroflex.jpg" alt="AEROFLEX" >
                    </a>
                  </li>
                  <li>
                    <a href="https://vatsalexports.com/" target="_blank" >
                      <img src="images/members/vatsal.jpg" alt="Vatsal Exports LLP" >
                    </a>
                  </li>
                  <li>
                    <a href="#" target="_blank" >
                      <img src="images/members/nitin.jpg" alt="nitin" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.shantichem.com/" target="_blank" >
                      <img src="images/members/shanti.jpg" alt="Shanti Chemical Works" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.meteoricbiopharma.com/" target="_blank" >
                      <img src="images/members/meteoric.jpg" alt="Meteoric Biopharmaceuticals Limited" >
                    </a>
                  </li>
                  <li>
                    <a href="https://rawiacare.com/" target="_blank" >
                      <img src="images/members/rawia.jpg" alt="Rawia International Healthcare Pvt Ltd" >
                    </a>
                  </li>
                  <li>
                    <a href="https://mascot-systems.com/" target="_blank" >
                      <img src="images/members/mascot.jpg" alt="Mascot Systems Private Limited" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.tli-tradelink.com/" target="_blank" >
                      <img src="images/members/tradelink.jpg" alt="Tradelink International Private Limited" >
                    </a>
                  </li>
                  <li>
                    <a href="https://bhagwatiorganics.com/" target="_blank" >
                      <img src="images/members/bhagwati.jpg" alt="Bhagwati Organics Private Limited" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.jeevanchemicals.com/" target="_blank" >
                      <img src="images/members/jeevan.jpg" alt="Jeevan Chemicals" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.k-techindia.com/" target="_blank" >
                      <img src="images/members/K-TECH.jpg" alt="K-TECH (INDIA) LIMITED" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.zerodindustries.com/" target="_blank" >
                      <img src="images/members/zero.jpg" alt="zero" >
                    </a>
                  </li>
                  <!--<li>
                    <a href="https://chalkwalkconsulting.com/" target="_blank" >
                      <img src="images/members/ChalkWalk.jpg" alt="ChalkWalk" >
                    </a>
                  </li> -->              
                  <li>
                    <a href="https://www.otterindia.com/" target="_blank" >
                      <img src="images/members/otter.jpg" alt="otter" >
                    </a>
                  </li>
                  <li>
                    <a href="https://renergieglobal.com/" target="_blank" >
                      <img src="images/members/reglo.jpg" alt="RéGLO Industries Pvt Ltd" >
                    </a>
                  </li>
                  <!--<li>
                    <a href="https://www.esarwa.com/" target="_blank" >
                      <img src="images/members/esarwa.jpg" alt="ESARWA" >
                    </a>
                  </li>
                  <li>
                    <a href="https://leomi.in/" target="_blank" >
                      <img src="images/members/leomi.jpg" alt="leomi" >
                    </a>
                  </li>-->
                  <li>
                    <a href="http://www.gmarch.in/" target="_blank" >
                      <img src="images/members/architech.jpg" alt="G M Architech" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.balajiinks.com/" target="_blank" >
                      <img src="images/members/Balaji.jpg" alt="Balaji Inks & Chemicals Pvt Ltd" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.metachempaints.com/" target="_blank" >
                      <img src="images/members/meta.jpg" alt="META-CHEM" >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.aurobees.com/" target="_blank" >
                      <img src="images/members/Aurobees-logo.jpg" alt="Aurobees" >
                    </a>
                  </li>
                  <li>
                    <a href="https://marknstamp.com/" target="_blank" >
                      <img src="images/members/marknstamp.jpg" alt="Stamp IT Robotai & Solutions Pvt. Ltd." >
                    </a>
                  </li>
                  <li>
                    <a href="https://www.lasertechnologies.co.in/" target="_blank" >
                      <img src="images/members/LTPL.jpg" alt="Laser Technologies Pvt Ltd" >
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