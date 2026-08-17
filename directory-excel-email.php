<?php 
require 'config.php';

session_start();

//if( !empty($_POST)){
   
// create a variable
if(isset($_POST['sub'])){

    $captcha = "";
if(isset($_POST['g-recaptcha-response']))
$captcha=$_POST['g-recaptcha-response'];
    
 $companyname=$_POST['companyname'];
 $title=$_POST['title'];
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $designation=$_POST['designation'];
 $phonenumber=$_POST['phonenumber'];
 $mobilenumber=$_POST['mobilenumber'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $companyregistered=$_POST['companyregistered'];
 $udyognumber=$_POST['udyognumber'];
// $businesssector=$_POST['businesssector'];
 
// $businesssub=$conn->real_escape_string($_POST['businesssub']);
  $businesssub=$_POST['businesssub'];
 $manufactured=$_POST['manufactured'];
 $detservices=$_POST['detservices'];
 $management=$_POST['management'];
 $skilled=$_POST['skilled'];
 $unskilled=$_POST['unskilled'];
 $expobusiness=$_POST['expobusiness'];
 $impproducts=$_POST['impproducts'];
// $interestedfor=$_POST['interestedfor'];
 $meetforeign=$_POST['meetforeign'];
// $supportench=$_POST['supportench'];
// $lookingfor=$_POST['lookingfor'];
// $eventchamber=$_POST['issuesproblems'];


 $businesssector=implode(',',$_POST['businesssector']);
 $interestedfor = implode(',',$_POST['interestedfor']);
 $supportench= implode(',',$_POST['supportench']);
 $lookingfor= implode(',',$_POST['lookingfor']);
 $eventchamber= implode(',',$_POST['eventchamber']);
 $issuesproblems =$_POST['issuesproblems'];
 
if(!$captcha){
   echo "<script type='text/javascript'>alert('Please Check the Captcha form.');</script>";
//      echo 'alert("Thank you for Submitting Information.");';
// echo 'alert("Please Check the Captcha form.");';
exit;
        }
        $response=json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdkNlIUAAAAANQahCW_Uq8GtcCzb0fBzaZtHl7O&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
        if($response['success'] == false)
        {
          echo '<h2>You are spammer ! Get the @$%K out</h2>';
        }
        else
        {
//          echo '<h2>Thanks for posting comment.</h2>';
        }
 
 
//Execute the query
$sql = "INSERT INTO directory(CompanyName, Title, FirstName, LastName, Person_Designation, Contact_Tel, Contact_Mobile, Contact_Email, Registered_Office_Address, Company_Registered_As, Udyog_ARN, Industrial_Business_Sector, Industrial_Business_Subsector, Details_of_Products_Manufactured, Details_of_Services, Number_of_Employee_Management, Number_of_Employee_Skilled, Number_of_Employee_Unskilled, Interested_for_Export_Business, Interested_for_Import_Products, We_are_Interested_for, Interested_to_Meet_Visiting_Foreign_Delegation, Are_You_Looking_for_Support_for_Enhancement_Business_With, Are_You_Looking_for, Are_You_Interested_to_Participate_in_Various_Events_of_Chamber, Issues_and_Problems_Related_to_Industries_and_Businesses)
         VALUES ('$companyname','$title','$fname','$lname','$designation','$phonenumber','$mobilenumber','$email','$address','$companyregistered','$udyognumber','$businesssector','$businesssub','$manufactured','$detservices','$management','$skilled','$unskilled','$expobusiness','$impproducts','$interestedfor','$meetforeign','$supportench','$lookingfor','$eventchamber','$issuesproblems')";
$insert = $conn->query($sql); 

 if( $insert ){
    
     echo '<script language="javascript">';
echo 'alert("Company Added in Directory of SME Chamber");';
 echo 'window.location.href="index.php";';
echo '</script>';
// echo "<p>Company Added in Directory of SME Chamber</p>";
// echo "<a href='index.php'>Go Back</a>";
} else {
// echo "Company Not Added in Directory<br />";
      echo "<script type='text/javascript'>alert('$error'); window.location.href='directory-excel-form.php';</script>";
 echo mysqli_error ($conn);
}
}
?>