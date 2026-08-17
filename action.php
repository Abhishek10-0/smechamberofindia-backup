<?php
if (isset($_POST['token'])){
include 'config.php';
$tokens = $_POST['token'];
$created_on = date('Y-m-d H:i:s'); 
//date_default_timezone_set('Asia/Kolkata');
//$created_on = date( 'd-m-Y h:i:s A', time () );

$stmt = $conn->prepare("INSERT INTO fcm_tokens(tokens, created_on) VALUES (?,?)");

$stmt->bind_param('ss',$tokens, $created_on);

$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
}
?>