<?php
include('config.php');
session_start();
//$membership_cat = $_GET['value'];

if (isset($_POST['form_hash'])) {
	
	 
        $email = $_POST["email"];
      
		
        $sql = "INSERT INTO email_popup (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
	
          http_response_code(200);
            $successMSG = "Thank You! Your message has been sent.";
			header( "Location: membership-success.php" );
		//Multiple BCC, same as CC above;
		//$headers .= 'Bcc: example@gmail.com' . "\r\n";


        # Send the email.
    

} else {
    $errMSGs = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
 else {}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form</title>
</head>
<body>

<!-- pop up -->
<div class='popup1'>
<div class='cnt223' style="background-color: white;">
<div class="button" style="text-align:right;">
<button type="button" class="close1" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
		</div>
		<div class="abc1" style="padding: 230px 0px;">
		<h3>Registration Form</h3>
          <form method="post" action=""  class="form" enctype = "multipart/form-data">
		
		 <div class="column">
          <div class="input-box">
          <label>Email Address <span class="emp">*</span></label>
          <input name="email" type="email" class="text" placeholder="Enter Email Id" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required >
        </div>
		 
		<button type="submit" value="Submit" name="form_hash">Submit</button>
        </div>
		</form> 
</div>
<br/>
	  
</div>
</div>

</body>
</html>