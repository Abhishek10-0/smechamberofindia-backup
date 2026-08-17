<?php
include("connection.php");
$idy = $_POST['idy'];
$fetch_query = mysqli_query($connection, "SELECT * FROM `pastevent_gallery` where year_name='$year' and idy='$idy'");
$row = mysqli_num_rows($fetch_query);
if($row>0)
{
	$res = mysqli_fetch_array($fetch_query);
	echo json_encode($res);
}
?>