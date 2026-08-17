<!doctype html>
<html>
   <head>
    <title>Strategic Partner | SME Chamber of India</title>
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
            <form method="post" action=""  id="mform" class="member-form" >
              <div class="panel-main-standard panel-form">
                <h2>Add Your Name to Become Strategic Partner</h2>
                <p>Fields marked with a <span class="emp">*</span> are required.</p>
                <div class="form">
                  <div class="field">
                    <div class="control-label"><strong>Your Details</strong></div>
                  </div>
                  <div class="field">
                    <label class="control-label" for="Your Name">Name <span class="emp">*</span></label>
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
                      <input name="fname" type="text" id="fname" class="text" placeholder="first name" style="width:209px;" required value="<?php echo isset($_GET['fname']) ? $_GET['fname'] : "" ?>">
                      <input name="lname" type="text" id="lname" class="text" placeholder="last name" style="width:209px;" required value="<?php echo isset($_GET['lname']) ? $_GET['lname'] : "" ?>">
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
                      <input name="interest" type="text" id="interest" class="text" required value="<?php echo isset($_GET['interest']) ? $_GET['interest'] : "" ?>"> 
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="control-label" for="Detail Of Products & Services to promote amongst SMEs">Details of Products & Services to promote amongst SMEs <span class="emp">*</span></label>
                    <div class="controls">
                      <input name="service" type="text" id="service" class="text" required value="<?php echo isset($_GET['service']) ? $_GET['service'] : "" ?>">
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="control-label" for="Business Sectors of SMEs">Business Sectors of SMEs <span class="emp">*</span></label>
                    <div class="controls">
                      <input name="sectorsme" type="text" id="sectorsme" class="text" required value="<?php echo isset($_GET['sectorsme']) ? $_GET['sectorsme'] : "" ?>">
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="control-label" for="Contact Detail">Contact Detail: <span class="emp">*</span></label>
                    <div class="controls">
                      <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile No." style="width:253px;" maxlength="12" pattern="^\d{12}$" title="Please enter exactly 12 digits" required value="<?php echo isset($_GET['mobilenumber']) ? $_GET['mobilenumber'] : "" ?>">
                      <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone No." style="width:253px;" maxlength="11" pattern="^\d{11}$" title="Please enter exactly 11 digits" required value="<?php echo isset($_GET['phonenumber']) ? $_GET['phonenumber'] : "" ?>">
                    </div>
                  </div>
                  
                  <div class="field">
                    <label class="control-label" for="Email">Email <span class="emp">*</span></label>
                      <div class="controls">
                        <input name="email" type="text" id="email" class="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required title="Enter a valid Email Address" value="<?php echo isset($_GET['email']) ? $_GET['email'] : "" ?>">
                      </div>
                  </div>
                  
                  <div class="field">
                    <label class="control-label" for="Address">Address <span class="emp">*</span></label>
                    <div class="controls">
                      <input name="address" type="text" id="address" class="text" required value="<?php echo isset($_GET['address']) ? $_GET['address'] : "" ?>">
                    </div>
                  </div>
                  <input name="form_name" type="hidden" value="Channel Partner">
                  <br>
                  <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>       
                </div>
                <input type="submit" value="Submit" name="form_hash" class="btn-continue" />
              </div>
            </form>                
				  </div>      
        </div>
      </section>
    </body>
</html>
