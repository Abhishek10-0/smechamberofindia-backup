<?php include 'config.php'; ?>
<!doctype html>
<html>
    <head>
        <title>Channel Partner</title>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-112053032-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-112053032-1');
        </script>
    </head>
    <body>
        <section class="membership-form">
            <div class="container" >
                <div class="row-fluid">
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
                    <form method="post" action=""  id="mform" class="member-form" >
                        <div class="panel-main-standard panel-form">
                            <h2>Add Your Name In SME Consultant</h2>
                            <p>Fields marked with a <span class="emp">*</span> are required.</p>
                            <div class="form">
                                <div class="field">
                                    <div class="control-label"><strong>Your Details</strong></div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Your Name">Name<span class="emp">*</span></label>
                                    <div class="controls">
                                        <select name="title" id="title" class="select" style="width:86px;" required >
                                            <option value="">Title</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms">Ms</option>
                                            <option value="Dr">Dr</option>
                                            <option value="Prof">Prof</option>
                                        </select>
                                        <script type="text/javascript">
                                            document.getElementById('title').value = "<?php echo $_GET['title'];?>";
                                            </script>
                                        <input name="fname" type="text" id="fname" class="text" placeholder="first name" style="width:209px;" required value="<?php echo isset($_GET['fname']) ? $_GET['title'] : "" ?>">
                                        <input name="lname" type="text" id="lname" class="text" placeholder="last name" style="width:209px;" required value="<?php echo isset($_GET['lname']) ? $_GET['title'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Designation">Designation <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="designation" type="text" id="designation" class="text" required value="<?php echo isset($_GET['designation']) ? $_GET['designation'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Company Name">Company Name <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="companyname" type="text" id="companyname" class="text" required value="<?php echo isset($_GET['companyname']) ? $_GET['companyname'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Business Activity">Business Activity <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="businessactivity" type="text" id="businessactivity" class="text" required value="<?php echo isset($_GET['businessactivity']) ? $_GET['businessactivity'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Business Sector">Business Sector <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="businesssector" type="text" id="businesssector" class="text" required value="<?php echo isset($_GET['businesssector']) ? $_GET['businesssector'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Business Interest">Business Interest <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="businessinterest" type="text" id="businessinterest" class="text" required value="<?php echo isset($_GET['businessinterest']) ? $_GET['businessinterest'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Details of Consultancy Services to promote amongst SMEs">Details of Consultancy Services to promote amongst SMEs <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="service" type="text" id="service" class="text" required value="<?php echo isset($_GET['service']) ? $_GET['service'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Business Sectors of SMEs">Business Sectors of SMEs <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="sector" type="text" id="sector" class="text" required value="<?php echo isset($_GET['sector']) ? $_GET['sector'] : "" ?>">
                                    </div>
                                </div>
                                <div class="field">
                                    <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="10" minlength="10" onkeypress="return isNumber(event)" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                                        <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                                    </div>
                                </div>

                                <div class="field">
                                    <label class="control-label" for="Your Email">Email <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="email" type="email" id="email" class="text" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                                    </div>
                                </div>
                                
                                <div class="field">
                                    <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                                    <div class="controls">
                                        <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                                    </div>
                                </div>
                                <br>
                                         <?php
//                             require_once('recaptchalib.php');
//                            $publickey = "6Lfd30YUAAAAAOf90yHYwPp33602d1_7MufX-yzD"; // you got this from the signup page
//                             echo recaptcha_get_html($publickey);
                            ?>
                            <?php 
//                            if (isset($_REQUEST['captchaError'])){
                                ?>
                            <!--<b style="color: red">Incorrect Captcha Entered!</b>-->
                                    <?php
//                            };
                          
                            ?>
                                
                           <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>
                            </div>
                            <input type="submit"  value="Submit" name="form_hash" class="btn-continue" >
                        </div>
                    </form>
                </div>      
            </div>
        </section>
    </body>
</html>
