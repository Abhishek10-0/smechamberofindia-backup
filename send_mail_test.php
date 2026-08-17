
<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
 
<body>
  <div class="container">
    <?php
if(isset($_POST["SubmitBtn"])){

$to = "rashmi.smechamber@gmail.com";
$subject = "Contact mail";
$from=$_POST["email"];
$msg=$_POST["msg"];
$headers = "From: $from";

mail($to,$subject,$msg,$headers);
echo "Email successfully sent.";
}
?>

<form id="emailForm" name="emailForm" method="post" action="" >
<table width="100%" border="0" align="center" cellpadding="4" cellspacing="1">
<tr>
  <td colspan="2"><strong>Online Contact Form</strong></td>
</tr>
<tr>
  <td>E-mail :</td>
  <td><input name="email" type="text" id="email"></td>
</tr>
<tr>
  <td>Message :</td>
  <td>
  <textarea name="msg" cols="45" rows="5" id="msg"></textarea>
  </td>
</tr>
<tr>
  <td>&nbsp;</td>
  <td><input name="SubmitBtn" type="submit" id="SubmitBtn" value="Submit"></td>
</tr>
</table>
</form>
  </div>
</body>
 
</html>