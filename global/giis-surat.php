<!DOCTYPE html>
<html>
    <head>
        <title>Global Investment Immigration Summit | Surat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            * {
                box-sizing: border-box;
            }
            /*            body {
                            background-color : #484848;
                            margin: 0;
                            padding: 0;
                        }*/

            input[type=text], [type=email], select, textarea {
                width: 100%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
            }
            fieldset {
                width: 100%;
            }
            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
                color:#626265;
                font-weight: bold;
            }

            input[type=submit] {
                background-color: #29688a;
                color: white;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                float: right;
            }

            input[type=submit]:hover {
                background-color: #45a049;
            }

            .container {
                margin: 0 auto;
                width: 70%;
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

            .col-25 {
                float: left;
                width: 25%;
                margin-top: 6px;
            }

            .col-75 {
                float: left;
                width: 75%;
                margin-top: 6px;
            }


            .res {
                width: 100%;
                max-width: 833px;
                height: auto;
            }

            /* Clear floats after the columns */
            .row:after {
                content: "";
                display: table;
                clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
                .col-25, .col-75, input[type=submit] {
                    width: 100%;
                    margin-top: 0;
                }
            }

        </style>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body>
        <div class="container">
            <p style="text-align: center; margin-top: 1px; font-weight: bold;"><u>Complimentary Invitation Form</u></p>
            <img src="http://smechamberofindia.com/global/giis-surat.jpg" alt="Global Immigration & Investment Summit - Surat" class="res">
            <h4 style="text-align: center; margin-top: 5px; margin-bottom: 3px;"><u>QUESTIONNAIRE</u></h4>
            <p style="margin-bottom: 3px;">PLEASE COMPLETE THIS QUESTIONNAIRE. THIS QUESTIONNAIRE IS CONFIDENTIAL.</p>
            <form action="giis-surat-em.php" method="POST">
                <fieldset>
                    <legend style="font-size: 18px; font-weight: bold; color: #29688a;">PERSONAL INFORMATION:</legend>
                    <div class="row">
                        <div class="col-25">
                            <label>Name of the Concern person:</label>
                        </div>
                        <div class="col-25">
                            <input type="text" name="lname" placeholder="Last Name" required="">
                        </div>
                        <div class="col-25">
                            <input type="text" name="fname" placeholder="First Name" required="">
                        </div>
                        <div class="col-25">
                            <input type="text" name="mname" placeholder="Middle Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Email Address:</label>
                        </div>
                        <div class="col-75">
                            <input type="email" name="email" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Mobile Phone:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="mobile" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>WhatsApp Number:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="whatsapp" value="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Gender:</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="gender" value="Male"><label style="color: black;">Male</label>
                            <input type="checkbox" name="gender" value="Female"><label style="color: black;">Female</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>City:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="city" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Place of Birth (city/Province/ country):</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="birth" value="" required="">
                        </div>
                    </div>

                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-25">
                            <label>Profession:</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="profession" value="CEO"><label style="color: black;">CEO</label>
                            <input type="checkbox" name="profession" value="Broker"><label style="color: black;">Broker</label>
                            <input type="checkbox" name="profession" value="Director"><label style="color: black;">Director</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-25">
                            <label>Company Name:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="companyname" value="" required="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Company Address:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="companyaddress" value="" required="">
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-25">
                            <label>Country of Citizenship:</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="country" value="Indian"><label style="color: black;">Indian</label>
                            <input type="checkbox" name="country" value="American"><label style="color: black;">American</label>    
                            <input type="checkbox" name="country" value="British"><label style="color: black;">British</label>
                            <input type="checkbox" name="country" value="European"><label style="color: black;">European</label>
                            <input type="checkbox" name="country" value="Other"><label style="color: black;">Other </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-25">
                            <label>Country of Interest for Citizenship / Migration: (Tick all that apply):</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="check_list[]" value="US"><label style="color: black;">US</label>
                            <input type="checkbox" name="check_list[]" value="Canada"><label style="color: black;"> Canada</label>    
                            <input type="checkbox" name="check_list[]" value="UK"><label style="color: black;">UK</label>
                            <input type="checkbox" name="check_list[]" value="Grenada"><label style="color: black;">Grenada</label>    
                            <input type="checkbox" name="check_list[]" value="Other"><label style="color: black;">Other </label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <b>Are you interested in a free consultation with a representative from one of the above countries :</b>
                        <input type="checkbox" name="interested" value="Yes"><label style="color: black;">Yes</label>
                        <input type="checkbox" name="interested" value="No"><label style="color: black;">No</label>

                    </div>
                </fieldset>
                <fieldset>
                    <div class="row">
                        <div class="col-25">
                            <label>Net Worth (in Crore):</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="networth" value="0.5"><label style="color: black;">0.5</label>
                            <input type="checkbox" name="networth" value="0.5 - 1CR"><label style="color: black;">0.5 - 1CR</label>    
                            <input type="checkbox" name="networth" value="1 - 2 CR"><label style="color: black;">1 - 2 CR</label>
                            <input type="checkbox" name="networth" value="2 - 5 CR"><label style="color: black;">2 - 5 CR </label>
                            <input type="checkbox" name="networth" value="5 - 6 CR"><label style="color: black;">5 - 6 CR</label>
                            <input type="checkbox" name="networth" value="6 - 10 CR"><label style="color: black;">6 - 10 CR</label>    
                            <input type="checkbox" name="networth" value="10 + CR"><label style="color: black;">10 + CR</label>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend style="font-size: 18px; font-weight: bold; color: #29688a;"><b>INVESTMENT ACKNOWLEDGEMENT:</b></legend>
                    <div class="row">
                        <div class="col-25">
                            <label>Proposed Minimum Investment Amount (check one):</label>
                        </div>
                        <div class="col-75">
                            <input type="checkbox" name="amount" value="US$200,000"><label style="color: black;">US$200,000</label>
                            <input type="checkbox" name="amount" value="US $500,000"><label style="color: black;">US $500,000 </label>    
                            <input type="checkbox" name="amount" value="US$1,000,000+"><label style="color: black;">US$1,000,000+</label>
                        </div>
                    </div>
                </fieldset>
                <div class="g-recaptcha" data-sitekey="6LdkNlIUAAAAAD-OjGCpE7McbGc6c9z22XIw-vmQ"></div>
                <div class="row">
                    <input type="submit" name="submit" value="Submit"/>
                </div>

            </form>
        </div>




        <?php
        if (isset($_POST['submit'])) {//to run PHP script on submit
            if (!empty($_POST['check_list'])) {
// Loop to store and display values of individual checked checkbox.
                foreach ($_POST['check_list'] as $selected) {
                    echo $selected . "</br>";
                }
            }
        }
        ?>
    </body>
</html>